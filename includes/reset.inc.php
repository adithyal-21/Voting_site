<?php

require "data.inc.php";
$sql=mysqli_query($conn,"update detail set status=0,status1=0,status2=0,status3=0,status4=0");
header("location: ../admin.php");
?>