<?php
class Url {

	public function redirect($location): void {
		header("Location: $location");
		exit();
	}
	
    public function loadRouter(): void {

        $parsedUrl = parse_url($_SERVER['REQUEST_URI']);

		// Validate the parsed URL
		if (!isset($parsedUrl['path'])) {
			$this->redirect(Config::getConfig('URL_MAIN'));
			exit();
		}

		// Disallowed URL components
		$disallowedComponents = ['scheme', 'host', 'port', 'user', 'query', 'fragment'];
		foreach ($disallowedComponents as $component) {
			if (isset($parsedUrl[$component])) {
				$this->redirect(Config::getConfig('URL_MAIN'));
				exit();
			}
		}

		$url_path = $parsedUrl['path'];
		$url_explode = explode('/',$url_path);
		#print_r($url_explode); //TROUBLESHOOTING
		//server/php-template-master/examples/first/test/error
		//Array ( [0] => [1] => php-template-master [2] => examples [3] => first [4] => test [5] => error ) 
		#echo '<br>'.$url_path.'<br>'; //TROUBLESHOOTING
		$url_path_element_count = count($url_explode);
		if($url_path_element_count >= 1 AND $url_explode[1] == config::$url_folder_name) {
			#echo 'check - project exists<br>'; //TROUBLESHOOTING
			if($url_path_element_count >= 2) { //CHECK ARRAY COUNT
				//$file = controller/filename.php
				$file = config::$path_controller.$url_explode[2] . '.php'; //ADD .php EXTENSION
				if(file_exists($file)) {
					if(include($file)) {
						#echo 'check - controller file exists<br>'; //TROUBLESHOOTING
						if(class_exists($url_explode[2])) {
							#echo 'check - class exists'; //TROUBLESHOOTING
							if($url_path_element_count >= 3 AND method_exists($url_explode[2],$url_explode[3])) {
								#echo 'check - function exists<br>'; //TROUBLESHOOTING
								$class_name = $url_explode[2];
								$function_name = $url_explode[3];
								$this_class = new $class_name();
								if($url_path_element_count == 5 AND isset($url_explode[4])) { //5 ELEMENTS, BECAUSE OF [0] =>  IN ARRAY
									//LOAD FUNCTION WITH AN INPUT VARIABLE
									$this_class->{$function_name}($url_explode[4]);
								} else {
									if($url_path_element_count == 6 AND isset($url_explode[5])) {
										#echo 'error - '.$url_path_element_count.' '.$url_explode[5]; //TROUBLESHOOTING
										$this->redirect(config::$url_main); die('Function Error');
									} else {
										//LOAD FUNCTION WITHOUT INPUT VARIABLE
										$this_class->{$function_name}();
									}
								}
							} else { $this->redirect(config::$url_main); die('Function Error'); }
						} else {$this->redirect(config::$url_main); die('Function Error'); }
					} else { $this->redirect(config::$url_main); die('Function Error'); }
				} else { $this->redirect(config::$url_main); die('Function Error'); }
			} else { $this->redirect(config::$url_main); die('Function Error'); }
		} else { $this->redirect(config::$url_main); die('Function Error'); }
	}
}
?>