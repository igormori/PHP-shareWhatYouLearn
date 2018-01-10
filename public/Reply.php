<?php include '../all php/process.php' //here i define all path?>
<?php $page_title="Registration Page";?>
<?php include html_path.ds.'header.php' ?>

<?php
$titl=$_GET['title'];
if(topic_authentication())
{
    reply_topic();
}

?>
<div style="width: 100%;
    text-align: center;">
    <h3><?php echo $titl;?></h3>
<form method="post">
    <textarea name="txt_reply" cols="50" rows="10"></textarea><br/>
    <input type="submit" name="reply" value="submit">
</form>
</div>

<?php include html_path.ds.'footer.php' ?>
