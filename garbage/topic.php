<?php include '../all php/setup/pathname.php' //here i define all path?>
<?php include '../all php/process.php' //here all functionality?>
<?php $page_title="Topic Page";?>
<?php include html_path.ds.'header.php' ?>
    <section class="container">

        <div class="row">
            <div class="col">
                <h3>Start a new Topic</h3>
                <form method="post">
                    <select class="crt" name="program">
                        <option value="T127">Computer Programmer Analyst (T127)</option>
                        <option value="T141">Computer Systems Technician (T141)</option>
                        <option value="T147">Computer Systems Technology (T147)</option>
                        <option value="T163">Game Programming (T163)</option>
                    </select>
                    <input type="submit" name="course_name" value="Next">
                </form>
                <?php
                if($_GET['pro']=='T127')
                {
                    echo ' <form method="post">
                    <select class="crt" name="subjects">
                        <option value="Comp1230">Introduction to Web Dev2</option>
                        <option value="Comp1223">Introduction to Web Dev</option>
                        <option value="Comp1231">Introduction to Web Dev 3</option>
                        
                    </select>
                    <input type="submit" name="subject_name" value="Next">
                </form>';
                }
                ?>
            </div>
            <div class="col">
                fgfgfdgfdgdf
            </div>
            <div class="col">
                afdsasdfasd sdfad sdfsadfsad sdcsdfsad sdfasdfa sdfsadfdsa adfsdfsad sadfsdfsad dfasdf
                sdfdsfasd adfasdfasd asdfasdf dfsdfsad asdfasdfa asdfsadf asdfsd adfcsd sadfda adsdf akjkjkkjjkkk
            </div>
        </div>
    </section>
<?php include html_path.ds.'footer.php' ?>