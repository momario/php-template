<?php
class Main extends App {

	public function home(): void {
		$data = ['hello' => 'Hello World!'];
		View::render('head/head');
		View::render('navigation/navigation');
		View::render('home', $data);
	}
	
	public function settings(): void {
		View::render('head/head');
		View::render('navigation/navigation');
		View::render('settings');
	}

}
?>