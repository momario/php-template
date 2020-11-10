<?php
require_once('core/config.php');
require_once('core/url.php');
require_once('core/database.php');

class app {

	public function run() {
		url::run();
	}//END

}//END

//RUN THE APPLICATION
app::run();
?>