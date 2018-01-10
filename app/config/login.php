<?php
session_start();

if(isset($_POST['SubmitLog'])){

    include_once 'dbconect.php'; // connection in database

    $username =mysqli_real_escape_string($db_con, $_POST['UserName']);
    $password =mysqli_real_escape_string($db_con, $_POST['PasswordLog']);

    //check if it is empty
    if(empty($username) || empty($password))
    {
        header("location: ../../first.php?login=empty"); // here if i have any problem it is gonna come back to signup page and sende a get parameter
        exit();
    }else{

        $sql = "SELECT * FROM users WHERE StudentID = '$username'";
        $result = mysqli_query($db_con,$sql);           // here i storing that row
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck < 1){ // no results if dont find the username comeback to the page

            header("location: ../../first.php?login=incorrectusername"); // here if i have any problem it is gonna come back to signup page and sende a get parameter
            exit();

        }else{ // here if i find any row with my user name

            if($row = mysqli_fetch_assoc($result)) { // with this function i made an array with my info on DB

                //de-hash the password
                //check the password

                $hashedPwdCheck = password_verify($password, $row['Password']);

                if ($hashedPwdCheck == false) {


                    header("location: ../../first.php?login=incorrectpassword"); // here if i have any problem it is gonna come back to signup page and sende a get parameter
                    exit();

                } else  {

                    //log in the user here

                    $_SESSION['id'] = $row['id'];
                    $_SESSION['First'] = $row['FirstName'];
                    $_SESSION['Last'] = $row['LastName'];
                    $_SESSION['StudentId'] = $row['StudentID'];
                    $_SESSION['Email'] = $row['Email'];
                    $_SESSION['Password'] = $row['Password'];
                    $_SESSION['Picture'] = $row['Picture'];

                    header("location: ../../first.php?login=success"); // here if i have any problem it is gonna come back to signup page and sende a get parameter
                    exit();


                }
            }
        }
    }

}else{
    header("location: ../../first.php?login=error"); // here if i have any problem it is gonna come back to signup page and sende a get parameter
    exit();
}

?>