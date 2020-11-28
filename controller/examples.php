<?php
class examples extends app {

	public function form() {
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
		include('view/form.php');
	}//END

	public function ajax_load() {
		$data = array();
		if(empty($_POST['name'])) {
			$data['name'] = 'Musterman';
		} else {
			$data['name'] = $_POST['name'];
		}
		if(empty($_POST['firstname'])) {
			$data['firstname'] = 'Max';
		} else {
			$data['firstname'] = $_POST['firstname'];
		}
		if(empty($_POST['country'])) {
			$data['country'] = 'North Pole';
		} else {
			$data['country'] = $_POST['country'];
		}
		echo json_encode($data);
	}//END

}//END
?>