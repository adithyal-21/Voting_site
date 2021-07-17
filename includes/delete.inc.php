
<?php
$id=$_GET['id'];
require "data.inc.php";
$sql="delete from candidate where id='$id'";
$run=mysqli_query($conn,$sql);
header("location: ../admincandi.php?error=deleted");


?>