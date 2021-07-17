<?php

if(isset($_POST['submits']))
{   
   require "data.inc.php";
    $id=$_POST['id'];
    $name=$_POST['names'];
    $user=$_POST['user'];
    $email=$_POST['emails'];
    $phone=$_POST['phones'];
    $date=$_POST['dates'];
    $adress=$_POST['address'];
    $nation=$_POST['nation'];
    $adhar=$_POST['adhar'];
    $gender=$_POST['genders'];
    $occup=$_POST['occu'];
    $party=$_POST['party'];


    if(empty($name) || empty($email) || empty($date) ||empty($phone) ||empty($nation) ||empty($gender) ||empty($adress) ||empty($adhar) ||empty($occup) || empty($party))
    {
        header("location: ../update.php?error=emptyfeilds");
        exit();
    }
   
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        header("location: ../update.php?error=invalidemail");
        exit();
    }
  else{

    $sql=mysqli_query($conn,"UPDATE candidate SET id='$id',name='$name',email='$email',phone='$phone',dob='$date',address='$adress',nation='$nation',adhar='$adhar',gender='$gender',occupation='$occup',party_name='$party' WHERE user_name='$user'");
    header("location: ../admincandi.php?error=success");


  }
}


