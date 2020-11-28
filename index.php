<?php declare(strict_types=1);
require('core/config.php');
require('core/url.php');
require('core/database.php');

class app {

	public function run() {
		$url = new url();
		$url->run();
	}//END

}//END

//RUN THE APPLICATION
$app = new app();
$app->run();
?>