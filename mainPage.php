<?php
include 'app/view/header.php';
include 'app/view/NavBar.php';

?>
<body>



<!-- activity section -->

<div id="activitySection">

    <nav class="navbar navbar-light  " style="background-color: #2e3133 ">
        <a style="color: white" href="mainPage.php" class="navbar-brand">Discussion Board</a>
        <a style="color: white"  href="recentStories.php" class="navbar-brand">Recent Stories</a>
        <a style="color: white"  href="popularStories.php" class="navbar-brand">Popular Stories</a>
    </nav>

</div>



<!-- activity table -->

<div id="activity">

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Topics</th>
            <th>Description</th>
        </tr>
        </thead>
        <?php include  'app/config/showTopics.php';?>


    </table>
    <div id="createTopic">

        <button><a href="topic.php">Create a Topic </a></button>

    </div>

</div>


</body>

<?php
include 'app/view/footer.html';
?>

