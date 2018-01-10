<?php


if(isset($_POST['Submit'])){

    include_once 'dbconect.php'; // connection in database

    $topicName =mysqli_real_escape_string($db_con, $_POST['Topic_Name']);
    $Description =mysqli_real_escape_string($db_con, $_POST['Description']);
    $Content =mysqli_real_escape_string($db_con, $_POST['Content']);


    if(empty($topicName) || empty($Description) || empty($Content))
    {
        header("location: ../../topic.php?login=empty"); // here if i have any problem it is gonna come back to signup page and send a get parameter
        exit();
    }else{

        $sql = "INSERT INTO topics (Topic_Name,Description,Content) VALUES('$topicName','$Description','$Content');";
        $result = mysqli_query($db_con,$sql);
        header("location: ../../topic.php?topic=success");
        exit();

    }


}else{

    header("location: ../../topic.php?topic=error"); // here if i have any problem it is gonna come back to signup page and sende a get parameter
    exit();
}

?>