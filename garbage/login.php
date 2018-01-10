<?php include '../all php/setup/pathname.php' //here i define all path?>
<?php include '../all php/process.php' //here i define all path?>
<?php $page_title="Login Page";?>
<?php include html_path . ds . 'header.php' ?>


    <section>
        <div class="row">
            <div class="col">
                <form id="login" method="post">
                    <div class="form-group" >
                        <h2 class="log_create">Sign in to Continue</h2>
                        <?php include '../all php/errors.php' ?>

                        <label >User Name or Email Address</label></br>
                        <input class="log" type="text" name="username"/></br></br>
                        <label>Password</label></br>
                        <input class="log" type="text" name="password"></br></br>
                        <input id="btnlog" class="log" type="submit" name="login" value="Login"/>
                    </div>
                    <p>Don't have an Account?<a href="create.php">      Create new Account</a></p>
                    <a class="hm" href="index.php">Home</a>
                </form>
            </div>

        </div>
    </section>







<?php include html_path . ds . 'footer.php' ?>