<?php
include 'app/view/header.php';
include 'app/view/NavBar.php';

?>


<div id="create2" class="rounded">

    <form method="post" action="app/config/topicfunction.php" >
        <div class="form-group">
            <label><h3>Topic Name</h3></label>
            <input name="Topic_Name" type="text" size="30" class="form=control form-control-lg" placeholder="Topic Name" >
            <label><h3>Description</h3></label>
            <input name="Description" type="text" size="40" class="form=control form-control-lg" placeholder="Description" ></br></br>
            <label><h3>Content</h3></label></br>
            <textarea id="subject" name="Content" placeholder="Write something.." style="height:450px"></textarea>
            <button name="Submit" id="btnCreate" class="form-control-lg" type="submit">Create new Topic</button>
        </div>
    </form>
</div>


<?php
include 'app/view/footer.html';
?>
