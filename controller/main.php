<?php
class Main extends App {

	public function home(): void {
		$hello = 'Hello World!';
		require_once 'view/head/head.php';
		require_once 'view/home.php';
	}
	
}
?>