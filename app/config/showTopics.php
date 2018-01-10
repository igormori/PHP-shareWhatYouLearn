<?php

include_once 'dbconect.php'; // connection in database

$sql = "SELECT * FROM topics";
$result = mysqli_query($db_con,$sql);
$i = 0;

while($row = mysqli_fetch_array($result))
{

    $topic =  $row['Topic_Name'];
    $description = $row['Description'];
    $content  = $row['Content'];

    print("<tr>");
    print("<td><form  method='post' ><input id='topicInput' name='$i' type='submit' value='$topic'> </form></td>");
    print("<td><form  method='post' ><input id='topicInput' name='$i' type='submit' value='$description'> </form></td>");
    print("</tr>");

    if (isset($_POST[$i])) { // this take only the id that i have clicked

        $_SESSION['Topic'] = $topic ;
        $_SESSION['Description'] = $description;
        $_SESSION['Content'] = $content ;
        header("location:Discussion.php"); // here if i have any problem it is gonna come back to signup page and sende a get parameter
        exit();

    }
    $i++;
}



?>