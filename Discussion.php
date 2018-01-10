
<?php
include 'app/view/header.php';
include 'app/view/NavBar.php';


$topic =  $_SESSION['Topic'];
$content = $_SESSION['Content'];
$description = $_SESSION['Description'];



?>

<div id="Discussion">
    <h1 style="text-align: center; margin: 20px">Topic Name</br> <?php  echo $topic ?></h1>
</div>

<div id="Reply">

<div id="Content"class="rounded"><?php  echo $content ?></div>


    <form method="post" >
        <div class="form-group">
            <button id="btnCreate" name="submit" class="form-control-lg" type="submit">Create Solution</button>
        </div>
    </form>


</div>






<?php
if(isset($_POST['submit'])){
    include "app/config/Solution.php";
}
include 'app/view/footer.html';
?>

