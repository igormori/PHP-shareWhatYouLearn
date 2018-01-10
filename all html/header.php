<?php
@session_start();
//$page_title=isset($page_title)?$page_title:"Default";
$paget=$page_title??"Default";//tenary operator for php 7
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $paget;?></title>
    <link id="logo" rel="icon" href="../img/gbc_logo.PNG">

    <!-- Bootstrap core CSS -->

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">


</head>
<body>


<nav class="navbar navbar-inverse bg-light">
    <div class="container">
        <ul class="nav justify-content-between">
            <li><a class="nav-link text-dark" href="../public/index.php">Home</a></li>
            <li><a class="nav-link text-dark" href="../public/viewprofile.php">View Profiles</a></li>

        </ul>
        <form method="post" class="form-inline navbar-form">
            <input type="text" class="form-control" placeholder="Search" name="search">
        </form>
        <?php
        if(isset($_SESSION['stuid'])&&isset($_SESSION['username']))//just differntiate from register success
            //using both variable, because in login i setup both session var
        {
            echo
            ' <a href="../public/logout.php">Logout</a>';//for login success
        }
        elseif (isset($_SESSION['username']))//for registration success
        {
            echo
            ' <a href="../public/logout.php">Logout</a>';
        }
        else{//default header
            echo
            '<ul class="nav justify-content-between">
            <li ><a href="../public/login.php">Login</a></li>
            <li ><a href="../public/create.php">Register</a></li>

            </ul>';
        }
        ?>


    </div>
</nav>