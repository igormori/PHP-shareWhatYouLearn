<?php
session_start();
include 'setup/pathname.php'; //here i define all path
//$errors=[];

//function for registration
function register()
{
    global $db_conctn;
    if(isset($_POST['create']))
    {
        //image part
        @$img=$_FILES['image']['name'];//i am storing my image into my server location
        @$tem_nam=$_FILES['image']['tmp_name'];//storing my image into temporary location
        $imagelocation='../userimage/';
        move_uploaded_file($tem_nam,$imagelocation.$img);//moving the image from temp location  to my server
        //getting all data through post method
        $college_id=mysqli_real_escape_string($db_conctn,$_POST['stuid']);
        $username=mysqli_real_escape_string($db_conctn,$_POST['username']);
        $password=mysqli_real_escape_string($db_conctn,$_POST['password']);
        $email=mysqli_real_escape_string($db_conctn,$_POST['email']);
        $phone=mysqli_real_escape_string($db_conctn,$_POST['phone']);
        $address=mysqli_real_escape_string($db_conctn,$_POST['address']);
        $image=$img;
        if($_POST['program']=='T127')
        {
            $program=mysqli_real_escape_string($db_conctn,$_POST['program']);

        }
        if($_POST['program']=='T141')
        {
            $program=mysqli_real_escape_string($db_conctn,$_POST['program']);
        }
        if($_POST['program']=='T147')
        {
            $program=mysqli_real_escape_string($db_conctn,$_POST['program']);
        }
        if($_POST['program']=='T163')
        {
            $program=mysqli_real_escape_string($db_conctn,$_POST['program']);
        }
        //checking errors
        if(empty($college_id)||empty($username)||empty($password)||empty($email)||empty($program)||empty($phone)||empty($address))
        {

            header("location: ../public/create.php?register=field_empty");
            exit();

            // array_push($errors,"username is required");
        }else{
            if(!preg_match("/^[a-zA-Z]*$/",$username))
            {
                header("location: ../public/create.php?register=username_error");
                exit();
            }else{
                //validate email
                if(!filter_var($email,FILTER_VALIDATE_EMAIL))
                {
                    header("location: ../public/create.php?register=email_error");
                    exit();
                }else{//prohibiting duplicating userid
                    $sql="SELECT * FROM student_profile WHERE User_name='$username'";
                    $result=mysqli_query($db_conctn,$sql);
                    $checkforstuid=mysqli_num_rows($result);//checking for any row mathced with the stu id
                    if($checkforstuid>0)
                    {
                        header("location: ../public/create.php?register=id_exist");
                        exit();
                    }else{
                        //encrypt password
                        $enc_password=password_hash($password,PASSWORD_DEFAULT);
                        //finally after all validation insert data into database
                        $sql_insert="INSERT INTO student_profile
(College_id,User_name,Password,Email,Program_name,Profile_pic,Phone_no,Address) 
VALUES('$college_id','$username','$enc_password','$email','$program','$image','$phone','$address')";
                        mysqli_query($db_conctn,$sql_insert);
                        //for setting the session variables
                        $sql3="SELECT * FROM student_profile";
                        $result3=mysqli_query($db_conctn,$sql3);
                        $rows=mysqli_fetch_assoc($result3);
                        $_SESSION['username']=$rows['User_name'];

                        header("location: ../public/index.php?register=success");

                        exit();
                    }
                }
            }
        }

    }//end of if for register
//this else is not working here for some reason
//else{
//    header("location: ../public/create.php");
//    exit();
//}//end of else for register
}

//function to login
function login()
{
    global $db_conctn;
    if(isset($_POST['login'])) {
        $stu_id = mysqli_real_escape_string($db_conctn, $_POST['username']);
        $pwd = mysqli_real_escape_string($db_conctn, $_POST['password']);
        //error handlers
        if (empty($stu_id) || empty($pwd))
        {
            header("location: ../public/login.php?login=error");
            exit();
        }else{
            $sql2="SELECT * FROM student_profile WHERE User_name='$stu_id' OR Email='$stu_id'";
            $result=mysqli_query($db_conctn,$sql2);
            $resultcheck=mysqli_num_rows($result);
            if($resultcheck<1)
            {
                header("location: ../public/login.php?login=error");
                exit();
            }
            else{
                if($row=mysqli_fetch_assoc($result))
                {
                    //deencrypt password and then varifying with user input
                    $encpasscheck=password_verify($pwd,$row['Password']);
                    if($encpasscheck==false)
                    {
                        header("location: ../public/login.php?login=error");
                        exit();
                    }elseif($encpasscheck==true)
                    {

                        $_SESSION['username']=$row['User_name'];
                        $_SESSION['stuid']=$row['College_id'];
                        $_SESSION['password']=$row['Password'];
                        $_SESSION['email']=$row['Email'];
                        $_SESSION['address']=$row['Address'];
                        header("location: ../public/index.php?login=success");
                        exit();
                    }
                }
            }
        }

    }
}

//function to create a topic and insert data to database
function create_topic()
{
    global $db_conctn;
    if(isset($_POST['create_topic']))
    {
        $title=mysqli_real_escape_string($db_conctn,$_POST['topic_title']);
        $desc=mysqli_real_escape_string($db_conctn,$_POST['topic_des']);
        $cont=mysqli_real_escape_string($db_conctn,$_POST['topic_cont']);

        //process special data
        $user=$_SESSION['username'];
        $date = date('Y/m/d H:i:s');
        //insert user data
        $sql_insert3="INSERT INTO topics
(Topic_title,Topic_description,topic_cont,Student_name,Date_posted) 
VALUES('$title','$desc','$cont','$user','$date')";
        mysqli_query($db_conctn,$sql_insert3);

        header("location: ../public/index.php?");

    }
}

//function for topic view
function view_all_topic()
{
    global $db_conctn,$results_tqry, $tqry;
    //query for topic
    $sql_topic_query="SELECT * FROM topics";
    $results_tqry=mysqli_query($db_conctn,$sql_topic_query);
    echo '<thead>
        <tr style="background-color: #efeff9;  ">
            <th>Topic Name</th>
            <th>Description</th>
            <th>Time</th>
        </tr>
        </thead>';
foreach ($results_tqry as $tqry){
    $t=$tqry['Topic_title'];
   $d=$tqry['Topic_description'];
    $t_id=$tqry['Topic_id'];
    $t_time=$tqry['Date_posted'];

    echo '<tr class="tbl_discn">';


    echo "<td><a href='showtopic.php?tid=".$t_id."'>$t</a></td>
    <td>$d</td>
    <td>$t_time</td>";
    echo '</tr>';

    echo'';


}
}

//function for show an individual topic with its reply
function show_topic()
{
global $db_conctn;
    $t_id=$_GET['tid'];
$show_qry="SELECT * FROM topics WHERE Topic_id=$t_id";
$res=mysqli_query($db_conctn,$show_qry);
$topic_row=mysqli_fetch_assoc($res);
   $s= $topic_row['Student_name'];
   $t= $topic_row['Topic_title'];
    $des=$topic_row['Topic_description'];
    $cont=$topic_row['Topic_cont'];

    echo "<div> Created by <b> $s</b></div>";
    echo "<h3><a href='showtopic.php?tid=".$t_id."&title=".$t."'>$t</a></h3>";
echo "<h4>$des</h4>";
    echo "<div style='width:60%;'><p>$cont</p>
 <h4><a href='reply.php?tid=".$t_id."&title=".$t."'>Reply</a></h4>
</div>";
    //show the replies
    echo "<div style='padding-left: 80px'>";
    echo "<h4 style='color:green;'>All Replies</h4>";
    show_reply($t_id);
    echo "</div>";

}

//function to reply on a specific topic
function reply_topic()
{
    global $db_conctn;


    if(isset($_POST['reply']))
    {
        $cmnt=mysqli_real_escape_string($db_conctn,$_POST['txt_reply']);
        $t_id=$_GET['tid'];
        //$ttil=$_GET['title'];
        $rplr_name=$_SESSION['username'];
        $date_rply=date('Y/m/d H:i:s');
        $reply_qry="INSERT INTO replies (Topic_id,replier_name,Comment,Date_replied) 
VALUES('$t_id','$rplr_name','$cmnt','$date_rply')";
        mysqli_query($db_conctn,$reply_qry);
        header("location: ../public/index.php?");

    }

}

//function to show all reply with its parent topic, it has called from show_topic function

function show_reply($t_i)
{
    global $db_conctn;
    $show_qry="SELECT * FROM replies WHERE Topic_id=$t_i";
    $results=mysqli_query($db_conctn,$show_qry);
    foreach ($results as $topic_row)
    {
        $n= $topic_row['replier_name'];
        $c= $topic_row['Comment'];
        $dat=$topic_row['Date_replied'];

        echo "<table>";
        echo "<tr>
               <td>Replied by $n</td>
               <td>Replied on $dat</td>               
              </tr>";

        echo "<table/>";
        echo "<div style='width:60%;'><p>$c</p></div>";


    }



}
//authentication if user logged in or not to create a topic
function topic_authentication()
{


        if(isset($_SESSION['username']))
        {

            return true;

        }
        else{
            echo "<pre style='color: red;'><b>Please login to create a topic</b></pre>";

        }


}
//function for searching data
function search_topic()
{


    if(isset($_POST['search']))
    {
        $user_srch=$_POST['search'];
        header("location: ../public/searchtopic.php?usersrch=$user_srch");
    }

}
//to show all data in search page
function show_search_results()
{
    global $db_conctn;

    $user_srch=$_GET['usersrch'];
    $srch_qry="SELECT * FROM topics WHERE Topic_title='$user_srch'";
    $res=mysqli_query($db_conctn,$srch_qry);
    $topic_row=mysqli_fetch_assoc($res);
    $t_id=$topic_row['Topic_id'];
    $s= $topic_row['Student_name'];
    $t= $topic_row['Topic_title'];
    $des=$topic_row['Topic_description'];
    $cont=$topic_row['Topic_cont'];

    echo "<div> Created by <b> $s</b></div>";
    echo "<h3><a href='showtopic.php?tid=".$t_id."&title=".$t."'>$t</a></h3>";
    echo "<h4>$des</h4>";
    echo "<div style='width:60%;'><p>$cont</p>
 <h4><a href='reply.php?tid=".$t_id."&title=".$t."'>Reply</a></h4>
</div>";
    //show the replies
    echo "<div style='padding-left: 80px'>";
    echo "<h4 style='color:green;'>All Replies</h4>";
    echo "</div>";


}

