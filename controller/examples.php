<?php
class examples extends app {

	public function form_table() {
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

		include('views/navigation.php');
		include('views/form_table.php');
    }//END

}//END
?>