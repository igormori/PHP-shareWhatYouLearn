<?php
include "app/view/header.php";

?>


    <body id="MainPage">

    <!-- Navegation bar -->
    <nav class="navbar navbar-light  justify-content-between" style="background-color: #2e3133 ">
        <a class="navbar-brand">Share what you learn app</a>
        <form method="post" action="app/config/login.php" class="form-inline">
            <input name="UserName" class="form-control mr-sm-2" type="text" placeholder="User Name">
            <input name="PasswordLog" class="form-control mr-sm-2" type="text" placeholder="Password">
            <button name="SubmitLog" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="background-color: white; color: #c69500">Sign in</button>
        </form>
    </nav>

    <div id="wrapper">
        <!-- Header of the document -->

        <div id="header">
            <?php
            if(isset($_GET['signup'])){
                if($_GET['signup'] == "sucess")
                {
                    echo '<script language="javascript">alert("The account was created, Please login")</script>';
                }
            }
            if(isset($_GET['login'])){
                if($_GET['login'] == "success"){

                    header("location: profile.php");
                }
            }

            $img = @$_FILES['picture']['name'];           // NAME OF MY FILE
            $temporary = @$_FILES['picture']['tmp_name']; // THE NAME OF MY TEMPORARY FILE
            $loc= "C:\htdocs\bootstrap\PHPProject\profilePictures\\";           // WHERE I WOULD LIKE TO SEND MY FILE
            move_uploaded_file($temporary,$loc.$img);


            ?>
            <h1 id="main" class="display-2">Share what you learn!</h1></br>
            <h1  class="display-5">It is an app made for students to share their </br>knowledge each others and earn money by doing it  </h1>
            <h1 id="main" class="display-5    ">the best way to learn is s  </br> with other students and make money by doing it</br>   </h1>
        </div>


        <!-- Creation Form -->
        <div class="rounded" id="create1">

            <div id="create"class="rounded">
                <h1 class="display-5    ">Create your account</h1>

                <form method="post" action="app/config/signup.php"  enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="sr-only">Name</label>
                        <input name="id" type="text" size="25" class="form=control form-control-lg" placeholder="Student ID" required></br>
                        <input name="Email"  type="text" size="25" class="form=control form-control-lg" placeholder="E-mail" required></br>
                        <input name="Password" type="text" size="25" class="form=control form-control-lg" placeholder="password"required></br>
                        <input name="First" type="text" size="25" class="form=control form-control-lg" placeholder="Firs Name" required></br>
                        <input name="Last" type="text"size="25" class="form=control form-control-lg" placeholder="Last Name" required></br></br>
                        <input name="picture" type="file" class="form=control form-control-lg" placeholder="Last Name" required></br></br>
                        <label >Program Name</label></br>
                        <select class="crt" name="program">
                            <option value="T127">Computer Programmer Analyst (T127)</option>
                            <option value="T141">Computer Systems Technician (T141)</option>
                            <option value="T147">Computer Systems Technology (T147)</option>
                            <option value="T163">Game Programming (T163)</option>
                        </select></br></br>
                        <button name="submit" class="form-control-lg" type="submit">Create account</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>
    </body>



<?php
include "app/view/footer.html";
?>
