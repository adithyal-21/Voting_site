<html>
<head>
<title>Results</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
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
  <body>


  <div class="table-responsive">
  <table class="table ">
  <thead>
    <tr>
      <th scope="col">Candidates</th>
      <th scope="col">Party Name</th>
      <th scope="col">Name</th>
      <th scope="col">Votes</th>
      
    </tr>
  </thead>
  <tbody>
  

  <tr>
    <?php
        require "includes/data.inc.php";
        $sql="SELECT * FROM candidate WHERE id='1'";
        $run=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($run);
        $sql1="SELECT SUM(status1) as 'total' FROM detail";
        $run=mysqli_query($conn,$sql1);
        $row1=mysqli_fetch_assoc($run);
        echo'
        <td> 1</td>
          <td>'.$row['party_name'].'</td>
          <td>'.$row['user_name'].'</td>
          <td>'.$row1['total'].'</td>';
          ?>
    </tr>
    
    <tr>
    <?php
        require "includes/data.inc.php";
        $sql="SELECT * FROM candidate WHERE id='2'";
        $run=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($run);
        $sql1="SELECT SUM(status2) as 'total' FROM detail";
        $run=mysqli_query($conn,$sql1);
        $row1=mysqli_fetch_assoc($run);
        echo'
        <td> 2</td>
          <td>'.$row['party_name'].'</td>
          <td>'.$row['user_name'].'</td>
          <td>'.$row1['total'].'</td>';
          ?>
    </tr>

    <tr>
    <?php
        require "includes/data.inc.php";
        $sql="SELECT * FROM candidate WHERE id='3'";
        $run=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($run);
        $sql1="SELECT SUM(status3) as 'total' FROM detail";
        $run=mysqli_query($conn,$sql1);
        $row1=mysqli_fetch_assoc($run);
        echo'
        <td> 3</td>
          <td>'.$row['party_name'].'</td>
          <td>'.$row['user_name'].'</td>
          <td>'.$row1['total'].'</td>';
          ?>
    </tr>

    <tr>
    <?php
        require "includes/data.inc.php";
        $sql="SELECT * FROM candidate WHERE id='4'";
        $run=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($run);
        $sql1="SELECT SUM(status4) as 'total' FROM detail";
        $run=mysqli_query($conn,$sql1);
        $row1=mysqli_fetch_assoc($run);
        echo'
        <td> 4</td>
          <td>'.$row['party_name'].'</td>
          <td>'.$row['user_name'].'</td>
          <td>'.$row1['total'].'</td>';
          ?>
    </tr>

  </tbody>
</table>
</div>


</body>
</html>