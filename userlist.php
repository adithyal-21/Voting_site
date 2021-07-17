<html>
<head>
<title>User List</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
  table{
  font-family:'Roboto' sans-serif;border-collapse: collapse;width: 100%;
}
table tr:nth-child(even){
  background-color: #EEEEEE;
  }
table th {
  padding-top: 14px;padding-bottom: 14px;text-align:left;background-color:#1976D2;color: whitesmoke;letter-spacing:0.5px;
  user-select: none;border-right: 0.5px solid #BBDEFB;
 }
table td
{
border-right: 0.5px solid #BBDEFB;height:70px;
}
table td, table th {
 border-bottom: 0.5px solid #BBDEFB;
}
table tr:hover {
  background-color: #E3F2FD;cursor: pointer;
}
  </style>
</head>
<body style="background-color:#F5F5F5">

<?php
    if(isset($_GET['error']))
        {
          if($_GET['error']=="success")
            {
                echo '<script>swal("Done", "Updated Successfully", "success");</script>
                  ';
             }
             else if($_GET['error']=="deleted")
             {
                 echo '<script>swal("Done", "Deleted Successfully", "error");</script>
                   ';
              }
            }
            ?>
<div class="table-responsive">
  <table class="table ">
  <thead>
    <tr>
      <th scope="col"> No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">User Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
     
     
      
    </tr>
  </thead>
  <tbody>
<?php
require "includes/data.inc.php";
$sql="select * from detail";
$run=mysqli_query($conn,$sql);
$i=1;
while($row=mysqli_fetch_assoc($run))

{
    echo'
           
    <tr>
    <td>'.$i++.'</td>
      <td>'.$row['name'].'</td>
      <td>'.$row['email'].'</td>
      <td>'.$row['user_name'].'</td>
      <td style="text-align:center"><a href="updateuser.php?id='.$row['id'].'"><button class="btn btn-success"><i class="fas fa-edit"></i></button></a></td>
      <td style="text-align:center"><a href="includes/deleteuser.inc.php?id='.$row['id'].'"><button class="btn btn-danger" type="submit" name="del"><i class="fas fa-trash"></i></button></a></td>
      </tr>';
    
}

?>
</tbody>
</table>
</div>


</div>
</body>
</html>