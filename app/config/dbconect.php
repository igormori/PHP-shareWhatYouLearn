<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "gblearn";

$db_con = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName );































//$query = 'SELECT * FROM users ';
//
//$result = $db_con->query($query);
//
//while($row = $result->fetch_assoc() )
//{
//    $_SESSION['first']= $row['FirstName'];
//    $_SESSION['last'] = $row['LastName'];
//    $_SESSION['password'] = $row['Password'];
//    $_SESSION['picture'] = $row['Picture'];
//    $_SESSION['studentId'] = $row['StudentID'];
//    $_SESSION['email'] = $row['Email'];
//}





//
//session_start();
//// <---------- connect data base ------------->
//$db_con = new mysqli('localhost','root','','gblearn');
//
//// <---------- validation ------------->
//
//if($db_con->connect_errno)
//{
//    die("cannot connect to database".$db_con->connect_error);
//}
//
//$img = @$_FILES['picture']['name'];           // NAME OF MY FILE
//$temporary = @$_FILES['picture']['tmp_name']; // THE NAME OF MY TEMPORARY FILE
//$loc= 'C:\xampp\htdocs\bootstrap\PHPProject\profilePictures';           // WHERE I WOULD LIKE TO SEND MY FILE
//move_uploaded_file($temporary,$loc.$img);
