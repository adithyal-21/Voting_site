<?php
session_start();
?>
<?php
if(isset($_POST['vote1']))
{
    require "data.inc.php";
    $user=$_SESSION['user'];
    $sql3="UPDATE detail SET status=1 WHERE user_name='$user'";
    mysqli_query($conn,$sql3);
    $sql4="UPDATE detail SET status1=1 WHERE user_name='$user'";
    mysqli_query($conn,$sql4);
    header("location: ../dash.php?error=succ");
    exit();
 
 
}
if(isset($_POST['vote2']))
{
    require "data.inc.php";
    $user=$_SESSION['user'];
   $sql3="UPDATE detail SET status=1 WHERE user_name='$user'";
   mysqli_query($conn,$sql3);
   $sql4="UPDATE detail SET status2=1 WHERE user_name='$user'";
   mysqli_query($conn,$sql4);
   header("location: ../dash.php?error=succ");
   exit();

    
}

if(isset($_POST['vote3']))
{
    require "data.inc.php";
    $user=$_SESSION['user'];
   $sql4="UPDATE detail SET status=1 WHERE user_name='$user'";
   mysqli_query($conn,$sql4);
   $sql5="UPDATE detail SET status3=1 WHERE user_name='$user'";
   mysqli_query($conn,$sql5);
   header("location: ../dash.php?error=succ");
   exit();

    
}

if(isset($_POST['vote4']))
{
    require "data.inc.php";
    $user=$_SESSION['user'];
   $sql6="UPDATE detail SET status=1 WHERE user_name='$user'";
   mysqli_query($conn,$sql6);
   $sql7="UPDATE detail SET status4=1 WHERE user_name='$user'";
   mysqli_query($conn,$sql7);
   header("location: ../dash.php?error=succ");
   exit();

    
}