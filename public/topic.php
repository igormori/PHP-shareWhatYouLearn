<?php include '../all php/process.php' //here all functionality?>
<?php $page_title="Topic Page";?>
<?php include html_path.ds.'header.php' ?>
<?php create_topic();?>
    <section class="container">

        <div class="row">
            <div class="col">
                <form method="post">
                    <label>Topic Title</label><br/>
                    <input type="text" name="topic_title" placeholder="Title"><br/>
                    <label>Topic Description</label><br/>
                    <input type="text" name="topic_des" placeholder="Description"><br/>
                    <label>Content</label><br/>
                    <textarea name="topic_cont" id="txt1" rows="10" cols="50"></textarea><br/>
                    <input id="btntopic" type="submit" name="create_topic" value="Create">

                </form>

            </div>


        </div>
    </section>
<?php include html_path.ds.'footer.php' ?>