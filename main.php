<?php
class main extends app {

	//FOR A NEW VIEW, SIMPLAY CREATE A NEW PUBLIC FUNCTION
	
	public function home() {
		$test = 'I am a test variable!!!';
		include('views/navigation.php');
		include('views/home.php');
	}//END

	public function second() {
		include('views/navigation.php');
		include('views/second.php');
	}//END

	//REDIRECT TO HOME
	public function fourth() {
		url::redirect(config::$url_base_url);
	}//END

	public function fifth() {
		$name = 'test.txt';
		$test = file_get_contents(config::$file_path.$name);
		include('views/navigation.php');
		include('views/fifth.php');
	}//END
	
}//END