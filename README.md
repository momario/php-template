# php-template-master

## INSTALLATION
* copy the php-template folder into your workspace
* run your webserver
* access the page from your browser: server_name/php-template

## CONFIG
**/core/config.php**<br />
All the global variables are stored in this file and can be acessed from everywhere.<br />
When the project needs to be renamed, rename **php-template**.

> **_Note:_** Don't forget to rename the project folder itself!

## URL
**/core/url.php**<br />
The URL router is accessing the class and function and optionally gives a variable to a function.<br />
URL: /php-template/class_name/function_name/variable_name<br />

## HTACCESS
**/.htaccess**<br />
* access to folders denied
* access to directories denied