# php-template-master
Simple and easy to use PHP template.

## INSTALLATION
* copy the php-template-master folder into your workspace
* run your webserver
* access the page from your browser: server_name/php-template-master

## CONFIG
**core/config.php**<br />
All the global variables are stored in this file and can be acessed from everywhere.<br />

## DATABASE
**core/database.php**<br />
With function `database::get()`, you can iterate over all rows.

    $test = database::get('table_name');
    foreach($test as $row) {
        echo $row->col_name;
    }
    
With function `database::where()`, you can get a single row.

    $test2 = database::where('id',1); 
    echo $test2->col_name;

## URL
**core/url.php**<br />
The URL router is accessing the class and function and optionally gives a variable to a function.<br />
URL: /php-template-master/class_name/function_name/variable_name<br />
If a not allowed URL is typed in, it redirects to your `config::$url_main`<br />

## SECURITY
**.htaccess**<br />
* page forced to https
* access to folders denied
* access to directories denied