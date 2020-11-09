<?php
class examples extends app {

    public function home() {
		$test = 'I am a test variable!!!';
		include('views/navigation.php');
		include('views/home.php');
	}//END

	public function first($test = 'test') {
		include('views/navigation.php');
		include('views/first.php');
    }//END

	public function second() {
		include('views/navigation.php');
		include('views/second.php');
    }//END
    
    public function third() {
        include('views/navigation.php');
        include('views/third.php');
    }//END

	//REDIRECT TO HOME
	public function fourth() {
		url::redirect(config::$url_base.'examples/home');
	}//END

	public function fifth() {
		$name = 'test.txt';
		$test = file_get_contents(config::$file_path.$name);
		include('views/navigation.php');
		include('views/fifth.php');
	}//END

}//END
?>