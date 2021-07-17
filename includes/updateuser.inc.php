<?php
if(isset($_POST['submituser']))
{
    require 'data.inc.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    $phone=$_POST['phone'];
    $nation=$_POST['nation'];
    $gender=$_POST['gender'];
    $user_name=$_POST['user'];
   
    $sql=mysqli_query($conn,"UPDATE detail SET name='$name',email='$email',DOB='$date',phone_number='$phone',nation='$nation',gender='$gender' WHERE user_name='$user_name'");
    header("location: ../userlist.php?error=success");


}
