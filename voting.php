<html>
<head>
<title>Vote Here</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
  .card{
    margin-top:40px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;
    border:solid 1px #17A589;
    border:none;
   
}
.card:hover{
    box-shadow: 0 0 5px 5px #757575;transition:ease .5s;
}
.card-header{
      background-color:#3949AB;
      text-align:center;
      font-weight:500;
      color:white;
      font-size:19px;
      font-family:Bahnschrift SemiBold;
      letter-spacing: 0.4px;
      
  }
  #button{
    width:90px;background-color:#90CAF9;color:black;font-weight:bold
  }
  #button1{
    width:90px;background-color:#E57373;color:black;font-weight:bold
  }
  #head{
    font-size:20px;font-weight:bold;font-family: sans-serif;
  }
  
  </style>
</head>
<body >

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active mr-auto ml-auto" aria-current="page" id="head">Vote Here</li>
  </ol>
</nav>


<div class="container">
  <div class="row">

    <div class="col-sm-6">
        <div class="card">
              <div class="card-header" >Candidate 1</div>
                <div class="card-body">
                <form action="includes/voting.inc.php" method="POST">
                <div class="table-responsive">
                <table class="table">
          <thead>
            <tr>
            <th scope="col">Party Logo</th>
              <th scope="col">Party Name</th>
               <th scope="col">Name</th>
                <th scope="col">Vote</th>
            </tr>
          </thead>
    <tr>
  
    <?php
        require "includes/data.inc.php";
        $sql="SELECT * FROM candidate WHERE id='1'";
        $run=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($run);
        $images=$row['logo'];
      echo'
          <td><img src="./image/'.$images.'" style="height:50px;width:50px;border-radius:5%;filter:drop-shadow(1px 5px 5px grey)"></td>
          <td>'.$row['party_name'].'</td>
          <td>'.$row['user_name'].'</td>
          <td> <button type="submit" class="btn btn-success" name="vote1"><i class="fas fa-vote-yea"></i></button></td>';
?>
</form>
    </tr>
  </tbody>
</table>
</div></div></div>
    


    </div>

      <div class="col-sm-6">
      <div class="card">
              <div class="card-header" >Candidate 2</div>
                <div class="card-body">
                <form action="includes/voting.inc.php" method="POST">
                <div class="table-responsive">
                <table class="table">
          <thead>
            <tr>
            <th scope="col">Party Logo</th>
              <th scope="col">Party Name</th>
               <th scope="col">Name</th>
                <th scope="col">Vote</th>
            </tr>
          </thead>
    <tr>
  
    <?php
        require "includes/data.inc.php";
        $sql="SELECT * FROM candidate WHERE id='2'";
        $run=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($run);
        $images=$row['logo'];
      echo'
          <td><img src="./image/'.$images.'" style="height:50px;width:50px;border-radius:5%; filter:drop-shadow(1px 5px 5px grey); "></td>
          <td>'.$row['party_name'].'</td>
          <td>'.$row['user_name'].'</td>
          <td> <button type="submit" class="btn btn-success" name="vote2"><i class="fas fa-vote-yea"></i></button></td>';
?>
</form>
    </tr>
  </tbody>
</table>
</div></div>
            </div>
        </div>
     
    </div>

  


  <div class="row">

    <div class="col-sm-6">
        <div class="card" >
              <div class="card-header" >Candidate 3</div>
                <div class="card-body">
                <form action="includes/voting.inc.php" method="POST">
                <div class="table-responsive">
                <table class="table">
          <thead>
            <tr>
            <th scope="col">Party Logo</th>
              <th scope="col">Party Name</th>
               <th scope="col">Name</th>
                <th scope="col">Vote</th>
            </tr>
          </thead>
    <tr>
  
    <?php
        require "includes/data.inc.php";
        $sql="SELECT * FROM candidate WHERE id='3'";
        $run=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($run);
        $images=$row['logo'];
      echo'
          <td><img src="./image/'.$images.'" style="height:50px;width:50px;border-radius:5%;filter:drop-shadow(1px 5px 5px grey)"></td>
          <td>'.$row['party_name'].'</td>
          <td>'.$row['user_name'].'</td>
          <td> <button type="submit" class="btn btn-success" name="vote3"><i class="fas fa-vote-yea"></i></button></td>';
?>
</form>
    </tr>
  </tbody>
</table>
</div></div></div>
    


    </div>

      <div class="col-sm-6">
      <div class="card">
              <div class="card-header" >Candidate 4</div>
                <div class="card-body">
                <form action="includes/voting.inc.php" method="POST">
                <div class="table-responsive">
                <table class="table">
          <thead>
            <tr>
            <th scope="col">Party Logo</th>
              <th scope="col">Party Name</th>
               <th scope="col">Name</th>
                <th scope="col">Vote</th>
            </tr>
          </thead>
    <tr>
  
    <?php
        require "includes/data.inc.php";
        $sql="SELECT * FROM candidate WHERE id='4'";
        $run=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($run);
        $images=$row['logo'];
      echo'
          <td><img src="./image/'.$images.'" style="height:50px;width:50px;border-radius:5%; filter:drop-shadow(1px 5px 5px grey); "></td>
          <td>'.$row['party_name'].'</td>
          <td>'.$row['user_name'].'</td>
          <td> <button type="submit" class="btn btn-success" name="vote4"><i class="fas fa-vote-yea"></i></button></td>';
?>
</form>
    </tr>
  </tbody>
</table>
</div></div>
            </div>
        </div>
     
    </div>

  </div>
<br>



</div>
</body>
</html>