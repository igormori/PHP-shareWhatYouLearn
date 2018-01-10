
<!-- Navegation bar -->


<ul class="nav nav-tabs bg-dark">
    <li class="nav-item">
        <a class="nav-link active" href="mainPage.php">Main Page</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-muted" href="profile.php">Profile</a>
    </li>
    <li id="float1">
        <?php

        if(isset($_SESSION['StudentId'])) // if you are logged in you can press log out to destroy the session
        {
            echo ' <form method="post" class="form-inline" action="app/config/logout.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="background-color: white; color: #c69500">Search</button>
            <button name="Logout" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="background-color: white; color: #c69500">logout</button>
        </form>';


        }else{

            echo '<script language="javascript">alert("access denied, Please login!")</script>';

            header("Refresh:0; url=first.php"); // to reload the page after click submit
            exit();
        }

        ?>


    </li>
</ul>