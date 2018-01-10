

<?php


include 'app/view/header.php';
include 'app/view/NavBar.php';

$pic = $_SESSION['Picture'];
$picture = "profilePictures".$pic;



?>

<body id="profile">


<!-- profile information -->

<div id="profilePage">
    <div id="imageProfile">
        <a href="#"><img id="imgp" src="<?php echo "profilePictures/".$picture; ?>" alt="Igor" class="rounded-circle"></a>
        <h5><?php echo $_SESSION['First'] . " ".$_SESSION['Last']   ?></h5>
        <h5>George Brown College</h5>
        <a id="elementID" href="#"><i class="fa fa-pencil-square"> edit contact</i></a>
    </div>

    <div id="status">
        <table class="table">
            <thead style="font-size: 15px; color: black" class="thead-dark">
            <tr>
                <th scope="col">position</th>
                <th scope="col">Stars</th>
                <th scope="col">solutions</th>
            </tr>
            </thead>
            <tbody>
            <tr style="font-size: 20px; color: black">
                <th scope="row">#1</th>
                <td><a id="star"><i class="fa fa-star"></i></a>23</td>
                <td>30</td>
            </tr>
            </tbody>
        </table>
    </div>

</div>

<!-- activity section -->

<div id="activitySection">

    <nav class="navbar navbar-light  justify-content-between" style="background-color: #2e3133 ">
        <a class="navbar-brand">Latest Activity</a>
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
            <td><?php echo $_SESSION['First'] . " ".$_SESSION['last']   ?>  made a solution for C# class</td>
            <td>3hr ago</td>
        </tr>
        <tr scope="row">
            <td><?php echo $_SESSION['first'] . " ".$_SESSION['last']   ?> commented on Farhad`s Solution</td>
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
            <td><?php echo $_SESSION['first'] . " ".$_SESSION['last']   ?> commented on Farhad`s Solution</td>
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

</html>
