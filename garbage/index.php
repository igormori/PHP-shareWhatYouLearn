<?php include '../all php/setup/pathname.php' //here i define all path?>
<?php include '../all php/process.php' //here i process all form data?>
<?php $page_title="Virtual Mobi help";?>
<?php include html_path.ds.'header.php' ?>
<section class="container">

    <div class="row">
        <div class="col">

            afdsasdfasd sdfad sdfsadfsad sdcsdfsad sdfasdfa sdfsadfdsa adfsdfsad sadfsdfsad dfasdf
            sdfdsfasd adfasdfasd asdfasdf dfsdfsad asdfasdfa asdfsadf asdfsd adfcsd sadfda adsdf a
        </div>
        <div class="col">
<!--            --><?php
//            if(isset($_SESSION['success']))
//            {
//                echo $_SESSION['success'];
//                unset($_SESSION['success']);
//            }
//            ?>
<!--             --><?php //if (isset($_SESSION['username'])):?>
<!--            <p>-->
<!--                Welcome <strong> --><?php //$_SESSION['username'];?><!--</strong>-->
<!--            </p>-->
<!--                 <p>-->
<!--                     <a href="index.php?logout='1'">logout </a>-->
<!--                 </p>-->
<!--            --><?php //endif ?>
<!--             if(isset($_SESSION['username']))-->
<!--             {-->
<!--                 echo "welcome".$_SESSION['username'];-->
<!--                 echo "<a href='index.php?logout=1'>logout </a>";-->
<!--             }-->
            <?php
            session_start();
            if(isset($_SESSION['User_name']))
            {
                //logout
            }
            else{
                if(isset($_GET['status']))
                {
                    if($_GET['status']=='success')
                    {
                        echo "<h1>success</h1>";
                    }
                    else if(($_GET['status']=='failed'))
                    {
                        echo "<h1>Login failed</h1>";
                    }
                }
            }
            ?>

        </div>
        <div class="col">
            afdsasdfasd sdfad sdfsadfsad sdcsdfsad sdfasdfa sdfsadfdsa adfsdfsad sadfsdfsad dfasdf
            sdfdsfasd adfasdfasd asdfasdf dfsdfsad asdfasdfa asdfsadf asdfsd adfcsd sadfda adsdf akjkjkkjjkkk
        </div>
    </div>
</section>
<?php include html_path.ds.'footer.php' ?>