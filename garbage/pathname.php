<?php
define("ds",DIRECTORY_SEPARATOR);
define("setup_path",dirname(__FILE__));
define("allphp_path",dirname(setup_path));
define("project_path",dirname(allphp_path));
define("func_path",allphp_path.ds."functions");
define("html_path",project_path.ds."all html");
define("public_path",project_path.ds."public");
//Database setup
//$db_connection=mysqli_connect("localhost","root","","php_group_project");
try {
    $db_connection = new PDO("mysql:host=localhost;dbname=php_group_project", "root", "");
}
catch(Exception $e)
{
    print $e->getMessage();
}


include func_path.ds.'allfunctions.php';