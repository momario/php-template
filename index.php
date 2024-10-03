<?php
require_once 'core/config.php';
require_once 'core/url.php';

class App {
    protected Url $url;

    public function __construct() {
		$url = new Url();
        $this->url = $url;
    }

    public function run(): void {
        try {
            $this->url->loadRouter();
        } catch (Exception $e) {
            http_response_code(500);
            echo "An error occurred: " . $e->getMessage();
            error_log($e->getMessage());
        }
    }
}

$app = new App();
$app->run();