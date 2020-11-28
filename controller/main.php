<?php
class main extends app {

	public function home() {
		include('view/head.php');
		include('view/navigation.php');
		include('view/home.php');
	}//END

	public function example() {
		if(empty($_POST['name'])) {
			$name = 'Musterman';
		} else {
			$name = $_POST['name'];
		}
		if(empty($_POST['firstname'])) {
			$firstname = 'Max';
		} else {
			$firstname = $_POST['firstname'];
		}
		if(empty($_POST['country'])) {
			$country = 'North Pole';
		} else {
			$country = $_POST['country'];
		}
		include('view/head.php');
		include('view/navigation.php');
		include('view/example.php');
	}//END

	public function buttton_ajax() {
		$data = array();
		$data['Max'] = 'Mustermann';
		echo json_encode($data);
	}//END
	
}//END