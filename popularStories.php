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
            <th>Activity</th>
            <th>Time</th>
        </tr>
        </thead>
        <tr scope="row">
            <td>igor Mori  made a solution for C# class</td>
            <td>3hr ago</td>
        </tr>
        <tr scope="row">
            <td>igor Mori commented on Farhad`s Solution</td>
            <td>3hr ago</td>
        </tr>
        <tr scope="row">
            <td>Moiz commented on Farhad`s Solution</td>
            <td>21hr ago</td>
        </tr>
        <tr scope="row">
            <td>Sherwayne commented on Farhad`s Solution</td>
            <td>3hr ago</td>
        </tr>
        <tr scope="row">
            <td>igor Mori commented on Farhad`s Solution</td>
            <td>3hr ago</td>
        </tr>
        <tr scope="row">
            <td>igor Mori commented on Farhad`s Solution</td>
            <td>3hr ago</td>
        <tr scope="row">
        <tr>
            <td>igor Mori commented on Farhad`s Solution</td>
            <td>3hr ago</td>
        </tr>
    </table>

</div>


</body>

<?php
include 'app/view/footer.html';
?>

