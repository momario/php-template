# php-template-master

## INSTALLATION
* copy the php-template-master folder into your workspace
* run your webserver
* access the page from your browser: server_name/php-template-master

## CONFIG
**/core/config.php**<br />
All the global variables are stored in this file and can be acessed from everywhere.<br />
When the project needs to be renamed, rename php-template-master in the following lines:

    public static $url_folder_name = 'php-template-master';
    public static $url_main = '/php-template-master/main/home';
    public static $url_base = '/php-template-master/';

to ...

    public static $url_folder_name = 'new_project';
    public static $url_main = '/new_project/main/home';
    public static $url_base = '/new_project/';

### Note:
Don't forget to rename the project folder!

## DATABASE
**/core/database.php**<br />
With function `get()`, you can iterate over all rows.

    $test = new database();
    $test->get('table_name');
    foreach($test as $row) {
        echo $row->col_name;
    }
    
With function `where()`, you can get a single row.

    $test = new database();
    $test->where('id',1); 
    echo $test->col_name;

## URL
**/core/url.php**<br />
The URL router is accessing the class and function and optionally gives a variable to a function.<br />
URL: /php-template-master/class_name/function_name/variable_name<br />
If a not allowed URL is typed in, it redirects to your `config::$url_main`<br />

## HTACCESS
**/.htaccess**<br />
* page forced to https
* access to folders denied
* access to directories denied