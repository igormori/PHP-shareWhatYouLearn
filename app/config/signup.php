<?php

$img = @$_FILES['picture']['name'];           // NAME OF MY FILE
$temporary = @$_FILES['picture']['tmp_name']; // THE NAME OF MY TEMPORARY FILE
$loc= "C:\htdocs\bootstrap\PHPProject\profilePictures\\";           // WHERE I WOULD LIKE TO SEND MY FILE
move_uploaded_file($temporary,$loc.$img);



//<------- if submit is clicked ---------------->
// the action in my form send me to this page
if(isset($_POST['submit'])){

    include_once 'dbconect.php'; // connection in database


    // put the information in my signup form in a variable and the real scape is to prevente the user to put something else


    $first =mysqli_real_escape_string($db_con, $_POST['First']);
    $last =mysqli_real_escape_string($db_con, $_POST['Last']);
    $email =mysqli_real_escape_string($db_con, $_POST['Email']);
    $password =mysqli_real_escape_string($db_con, $_POST['Password']);
    $id =mysqli_real_escape_string($db_con, $_POST['id']);
    $picture =mysqli_real_escape_string($db_con, $img);


    //error handlers
    //check for empty fields
    if(empty($first) || empty($last) || empty($email) ||  empty($password)  ||  empty($id)  ){

        header("location: ../../first.php?signup=empty"); // here if i have any problem it is gonna come back to signup page and sende a get parameter
        exit();

    }else{

        //Check if input character are valid
        if(!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/",$last) ){

            header("location: ../../first.php?signup=invalid");
            exit();

        }else{

        //Check if email is valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

                header("location: ../../first.php?signup=invalidemail");
                exit();
            }else{
                $sql = "SELECT * FROM users WHERE StudentID = '$id'"; // if the studentID already exist
                $result = mysqli_query($db_con,$sql);                 //doing the query
                $resultCheck = mysqli_num_rows($result);               //this send me the result

                if($resultCheck > 0){ // if there is any user the send me back to the page with this parameter
                    header("location: ../../first.php?signup=existuser");
                    exit();
                }else{

                    //make password hashed
                    $hashedPwd =  password_hash($password,PASSWORD_DEFAULT);
                    // insert the user inside of database                                  //instead of my password variable i put hashed variable
                    $sql = "INSERT INTO users (FirstName,LastName,StudentID,Email,Password,Picture) VALUES('$first','$last','$id','$email','$hashedPwd','$picture');";

                    $result = mysqli_query($db_con,$sql);
                    header("location: ../../first.php?signup=sucess");
                    exit();

                }
            }

        }


    }


}
else{
    header("location: ../../first.php");
    exit();
}