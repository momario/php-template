<?php
class Config {

    //GLOBAL
    public static $project_title = 'php-emplate';

    //URL
    public static $url_folder_name = 'php-template';
    public static $url_main = '/php-template/main/home';
    public static $url_base = '/php-template/';

    //PATH
    public static $path_file = 'file/';
    public static $path_controller = 'controller/';

    // Define string-typed constants for your configuration (PHP 8.1+)
    const PROJECT_TITLE = 'php-template';

    const URL_FOLDER_NAME = 'php-template';
    const URL_MAIN = '/php-template/main/home';
    const URL_BASE = '/php-template/';
    const URL_CSS = '/php-template/css/style.css';
    const URL_JS = '/php-template/javascript/main.js';
    const URL_JQUERY = 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js';

    const PATH_FILE = 'file/';
    const PATH_CONTROLLER = 'controller/';
    const PATH_VIEW = 'view/';


    // Get function to retrieve constants, return type ?string to allow null
    public static function getConfig(string $key): ?string {
        // Use ReflectionClass to get constants dynamically
        $reflector = new ReflectionClass(__CLASS__);
        $constants = $reflector->getConstants();

        // Return the value for the given key, or null if the key doesn't exist
        return $constants[$key] ?? null;
    }

}//END
?>