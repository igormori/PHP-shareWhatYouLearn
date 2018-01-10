<?php
define("ds",DIRECTORY_SEPARATOR);
define("setup_path",dirname(__FILE__));
define("allphp_path",dirname(setup_path));
define("project_path",dirname(allphp_path));
define("html_path",project_path.ds."all html");
define("public_path",project_path.ds."public");
//Database setup
$dbserver="localhost";
$dbUser="root";
$pass="";
$dbname="php_group_project";

$db_conctn=mysqli_connect($dbserver,$dbUser,$pass,$dbname);
