<?php

if(isset($_POST['Solution'])){

    include_once 'dbconect.php'; // connection in database


    $SenderName =mysqli_real_escape_string($db_con, $_SESSION['']);
    $last =mysqli_real_escape_string($db_con, $_POST['Last']);
    $email =mysqli_real_escape_string($db_con, $_POST['Email']);
    $password =mysqli_real_escape_string($db_con, $_POST['Password']);
    $id =mysqli_real_escape_string($db_con, $_POST['id']);
    $picture =mysqli_real_escape_string($db_con, $_POST['Picture']);


}





?>

<div id="create2" class="rounded">

    <form method="post" action="Discussion.php" >
        <div class="form-group">
            <label><h3><?php echo $_SESSION['First']. " ".$_SESSION['Last'] ." ". "Solution:"; ?></h3></label></br>
            <textarea id="subject" name="Content" placeholder="Write something.." style="height:450px"></textarea>
            <button name="Solution" id="btnCreate" class="form-control-lg" type="submit">Create new Solution</button>
        </div>
    </form>
</div>
