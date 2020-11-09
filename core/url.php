<?php
class url {
	
	public function redirect($location) {
		header("Location: $location");
	}//END
	
    public function run() {
        $parsed_url = parse_url($_SERVER['REQUEST_URI']);//PARSE URL
        if(isset($parsed_url['path'])) { //CHECK IF PATH ISSET
            if( isset($parsed_url['scheme']) //CHECK FOR NOT ALLOWED URL DATA
            OR isset($parsed_url['host'])
            OR isset($parsed_url['port'])
            OR isset($parsed_url['user'])
            OR isset($parsed_url['query'])
            OR isset($parsed_url['fragment']) ) {
                url::redirect(config::$url_base_url); die('Function Error');
            } else {
                $url_path = $parsed_url['path'];
                $url_explode = explode('/',$url_path);
				#print_r($url_explode); //TROUBLESHOOTING
				#echo '<br>'.$url_path.'<br>'; //TROUBLESHOOTING
				$url_path_element_count = count($url_explode);
                if($url_path_element_count >= 1 AND $url_explode[1] == config::$url_folder_name) {
                    #echo 'check - project exists<br>'; //TROUBLESHOOTING
					if($url_path_element_count >= 2) { //CHECK ARRAY COUNT
						$file = $url_explode[2] . '.php'; //ADD .php EXTENSION
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
											$this_class->{$function_name}($url_explode[4]);
										} else {
											$this_class->{$function_name}();
										}
									} else { url::redirect(config::$url_base_url); die('Function Error'); }
								} else {url::redirect(config::$url_base_url); die('Function Error'); }
							} else { url::redirect(config::$url_base_url); die('Function Error'); }
						} else { url::redirect(config::$url_base_url); die('Function Error'); }
					} else { url::redirect(config::$url_base_url); die('Function Error'); }
                } else { url::redirect(config::$url_base_url); die('Function Error'); }
            } //ELSE ABOVE
        } else { url::redirect(config::$url_base_url); die('Function Error'); }
	}//END
    
}//END
?>