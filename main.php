<?php
class main extends app {

	public function home() {
		include('views/navigation.php');
		echo 'Hello World!';
		echo '<br>';
		echo 'The navigation redirects to the examples.';
	}//END

	//FOR A NEW VIEW, SIMPLAY CREATE A NEW PUBLIC FUNCTION
	
}//END