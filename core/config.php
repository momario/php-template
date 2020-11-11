<?php
class config {

    //GLOBAL
    static $project_title = 'Template';

    //URL
    #static $url_main = '/'.$url_folder_name.'/main/home';
    #NOT POSSIBLE, BECAUSE STATIC VARIABLES NEED CONSTANT VALUES
    #A _construct FUNCTION WOULD BE NEEDED INSTEAD
    static $url_folder_name = 'php-template-master';
    static $url_main = '/php-template-master/main/home';
    static $url_base = '/php-template-master/';

    //DATABASE
    static $database_server = 'localhost';
    static $database_user = 'root';
    static $database_secret = '';
    static $database_database = 'database_name';
    static $database_order_by = 'id';

    //PATH
    static $path_file = 'file/';
    static $path_controller = 'controller/';

}//END
?>