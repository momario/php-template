# php-template
simple and easy to use php template.

## Installation
* copy the template folder into your workspace
* run your webserver
* access the page from your browser: server_name/template
* that's it! :rofl:

## Config
**core/config.php**<br />
All the global variables are stored in this file and can be acessed from everywhere.<br />
For example: add this code to your home view `<?php echo config::$url_base_url ?>`


## Database
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
Not finished, but working.<br />
The URL router is accessing the class and function and optionally gives a variable to a function.<br />
URL: /template/class_name/function_name/variable_name<br />
If a not allowed URL is typed in, it redirects to your `config::$url_base_url`<br />

## TODO
* config custom URL below URL
* config folder name as variable in other URL (only one point for change)
* URL explode 6 == error
* more examples, like table with php server data and form handling
* all examples in an examples controller
* js console log and an Ajax example, by button onclick
