<?php
class lab extends app {

    public function forms() {
        include('view/head.php');
		include('view/navigation.php');
		include('view/forms.php');
    }//END

    public function tables() {
        include('view/head.php');
		include('view/navigation.php');
		include('view/tables.php');
    }//END

    public function ajax() {
        include('view/head.php');
		include('view/navigation.php');
		include('view/ajax.php');
    }//END

    public function ajaxexec() {
		$data = array();
		$data['test'] = 'test';
		echo json_encode($data);
	}//END

}//END