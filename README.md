# php-template
simple and easy to use php template

## Installation
* copy the template folder into your workspace
* run your webserver
* access the page from your browser: server_name/template
* that's it! :rofl:

## Usage
For making your own changes, just access the core/config.php file
<br />
This is the file, where all the global variables are stored

## Database
With function `database::get()`, you can iterate over all rows

    $test = database::get('table_name');
    foreach($test as $row) {
        echo $row->col_name;
    }
    
With function `database::where()`, you can get a single row

    $test2 = database::where('id',1); 
    echo $test2->col_name;
