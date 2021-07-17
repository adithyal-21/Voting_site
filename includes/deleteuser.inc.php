
<?php
$id=$_GET['id'];
require "data.inc.php";
$sql="delete from detail where id='$id'";
$run=mysqli_query($conn,$sql);
header("location: ../userlist.php?error=deleted");


?>