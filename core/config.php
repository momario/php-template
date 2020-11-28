<?php
class config {

    //GLOBAL
    public static $project_title = 'Template';

    //URL
    #static $url_main = '/'.$url_folder_name.'/main/home';
    #NOT POSSIBLE, BECAUSE STATIC VARIABLES NEED CONSTANT VALUES
    #A _construct FUNCTION WOULD BE NEEDED INSTEAD
    public static $url_folder_name = 'php-template-master';
    public static $url_main = '/php-template-master/main/home';
    public static $url_base = '/php-template-master/';

    //DATABASE
    public static $database_server = 'localhost';
    public static $database_user = 'root';
    public static $database_secret = '';
    public static $database_database = 'database_name';
    public static $database_order_by = 'id';

    //PATH
    public static $path_file = 'file/';
    public static $path_controller = 'controller/';

}//END
?>