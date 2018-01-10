<?php include '../all php/process.php' //here i define all path?>
<?php $page_title="Registration Page";?>
<?php include html_path.ds.'header.php' ?>
<?php
try{
    $sql2="SELECT * FROM student_profile";
    $results=mysqli_query($db_conctn,$sql2);
    echo "<table class='viewtable'>";

    foreach($results as $res)
    {
        $p=$res['Profile_pic'];
        $name=$res['User_name'];
        $pro=$res['Program_name'];
        echo "<tr>";

        echo "<td><img src='../userimage/$p'>
               </td>";
        echo "<td>$name</td>";
        echo "<td>$pro</td>";

        echo "<td><a href='#'>Edit</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    print "<br/><br/>";
}
catch (mysqli_sql_exception $e){
    echo $e->getMessage();
}
?>
<?php include html_path.ds.'footer.php' ?>