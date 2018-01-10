<?php
session_start();
@$username="";
@$password="";
@$email="";
$program="";
$errors=[];

if(isset($_POST['create']))
{
    @$img=$_FILES['image']['name'];//i am storing my image into my server location
    @$tem_nam=$_FILES['image']['tmp_name'];//storing my image into temporary location
    $imagelocation='../userimage/';
    move_uploaded_file($tem_nam,$imagelocation.$img);//moving the image from temp location  to my server

    @$colid=$_POST['stuid'];
    @$username=$_POST['username'];
    @$password=$_POST['password'];
    @$email=$_POST['email'];
    @$phone=$_POST['phone'];
    @$address=$_POST['address'];
    @$image=$img;
    if($_POST['program']=='T127')
    {
        $program="T127";
    }
    if($_POST['program']=='T141')
    {
        $program="T141";
    }
    if($_POST['program']=='T147')
    {
        $program="T147";
    }
    if($_POST['program']=='T163')
    {
        $program="T163";
    }
    //checking if empty
    if(empty($username))
    {
        array_push($errors,"username is required");
    }
    if(empty($email))
    {
        array_push($errors,"email is required");
    }
    if(empty($password))
    {
        array_push($errors,"password is required");
    }
    if(count($errors)==0)
    {
        try{

            $stm=$db_connection->prepare("INSERT INTO student_profile 
(College_id,User_name,Password,Email,Program_name,Profile_pic,Phone_no,Address) 
VALUES(:cid,:un,:pw,:em,:pro,:pic,:phn,:addr)");
            @$cid=$colid;
            @$un=$username;
            @ $pw=$password;
            @$em=$email;
            @ $pro=$program;
            @$pic=$image;
            @ $phn=$phone;
            @ $addr=$address;
            $stm->bindParam(":cid", $cid, PDO::PARAM_INT);
            $stm->bindParam(":un", $un, PDO::PARAM_STR);
            $stm->bindParam(":pw", $pw, PDO::PARAM_STR);
            $stm->bindParam(":em", $em, PDO::PARAM_STR);
            $stm->bindParam(":pro", $pro, PDO::PARAM_STR);
            $stm->bindParam(":pic", $pic, PDO::PARAM_STR);
            $stm->bindParam(":phn", $phn, PDO::PARAM_INT);
            $stm->bindParam(":addr", $addr, PDO::PARAM_STR);
            $stm->execute();
//            $_SESSION['username']=$username;
//            $_SESSION['success']="  Successfully log in";
            header('location:../public/index.php');

        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

}
//login from login page
if(isset($_POST['login']))
{
    @$username=$_POST['username'];
    @$password=$_POST['password'];
    if(empty($username))
    {
        array_push($errors,"username is required");
    }
    if(empty($password))
    {
        array_push($errors,"password is required");
    }
    if(count($errors)==0)
    {

        //$password=md5($password);//enctypt password
        $stm=$db_connection->prepare("SELECT * FROM student_profile WHERE User_name=:un AND Password=:pw ");
        @$un=$username;
        @$pw=$password;

        $stm->bindParam(":un", $un, PDO::PARAM_STR);
        $stm->bindParam(":pw", $pw, PDO::PARAM_STR);

        $stm->execute();
        $result = $stm->fetchAll();
        $num_rows = count($result);
        if($num_rows!=0)
        {
            $_SESSION['User_name']=$username;
            //$_SESSION['success']="  Successfully log in";
            header('location:../public/index.php?status=success');
        }
        else{
            array_push($errors, "wrong pass/username");
        }
    }


}
//to rdirect to login page
if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.php');
}
