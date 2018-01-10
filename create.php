<?php
include 'public/html/head.php';
include 'public/html/NavBar.php';
include "functions/dbconect.php";

create(@$_POST['first'], @$_POST['last'],@$_POST['picture']);

?>
<body>


<div id="create2" class="rounded">
    <h1 class="display-5    ">Create your account</h1></br></br>

    <form method="post" >
        <div class="form-group">
            <input name="first" type="text" size="25" class="form=control form-control-lg" placeholder="Firs Name" required></br></br>
            <input name="last" type="text"size="25" class="form=control form-control-lg" placeholder="Last Name" required></br></br>
            <input name="picture" type="file" class="form=control form-control-lg" placeholder="Last Name" required></br></br>
            <label >Program Name</label></br>
            <select class="crt" name="program">
                <option value="T127">Computer Programmer Analyst (T127)</option>
                <option value="T141">Computer Systems Technician (T141)</option>
                <option value="T147">Computer Systems Technology (T147)</option>
                <option value="T163">Game Programming (T163)</option>
            </select></br></br>
            <button name="submit" id="btnCreate" class="form-control-lg" type="submit">Create account</button>
        </div>
    </form>
</div>
</div>


</body>

<?php
include 'public/html/footer.html';

if(isset($_POST['submit'])) {

    header("Refresh:0; url=mainPage.php");
}

?>

