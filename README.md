# php-template
simple and easy to use php template

## Installation
* copy the template folder into your workspace
* run your webserver
* access the page from your browser: server_name/template
* that's it! :rofl:

## Config
**core/config.php**
<br />
All the global variables are stored in this file and can be acessed from everywhere.
<br />
For example: add this code to your home view `<?php echo config::$url_base_url ?>`


## Database
**core/database.php**
<br />
With function `database::get()`, you can iterate over all rows

    $test = database::get('table_name');
    foreach($test as $row) {
        echo $row->col_name;
    }
    
With function `database::where()`, you can get a single row

    $test2 = database::where('id',1); 
    echo $test2->col_name;
