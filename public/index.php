<?php include '../all php/process.php' //here all functionality?>
<?php $page_title="Virtual Mobi help";?>
<?php include html_path.ds.'header.php' ?>
    <div class="container">

        <table class="table table-hover" id="tbl_discussion">

            <?php
            if(topic_authentication())
            {
                if(isset($_POST['topsub']))
                {
                    header("location: topic.php");
                }

            }
            echo '
<form method="post" >
<input class="rounded" style="background-color:#efeff9; margin: 10px" type="submit" name="topsub" value="Create a Topic">
</form>';



            view_all_topic();
            search_topic();
            ?>

        </table>
    </div>
<?php include html_path.ds.'footer.php' ?>