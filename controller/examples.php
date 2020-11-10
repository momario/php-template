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
		include_once('view/head.php');
		include_once('view/navigation.php');
		include_once('view/form.php');
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