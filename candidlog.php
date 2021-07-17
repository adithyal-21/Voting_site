<html>
<head>
<title>Candidate Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#cards{
    margin-top:60px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;
    border:solid 1px #17A589;
    border:none;
    border-top-left-radius: 25px;
    border-bottom-right-radius: 25px;
}
#cards:hover{
    box-shadow: 0 0 5px 5px #757575;transition:ease .5s;
}
h3{
    text-align:center;
    font-family:sans-Serif;
    
}
.error{
    text-align:center;
    color:red;
    font-size:17px
}
.card-img{
    border-top-left-radius: 25px;
}
#button{
    width:180px; border-top-left-radius: 25px;
    border-bottom-right-radius: 25px;background-color:#1565C0;font-weight:bold;border:solid 1px #1565C0;

}
.card-header{
      background-color:#1565C0;
      text-align:center;
      font-weight:bold;
      color:white;font-size:17px;
  }
</style>
</head>
<body>
<div class="container">
<form action="includes/candidlogs.inc.php" class="form-horizontal" method="POST"><br><br>
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card" style="max-width: 940px;" id="cards">
                <div class="card-header" style=" border-top-left-radius: 25px;">Log in as Candidate</div>
                    <div class="card-body">
<br>
                    <div class="row justify-content-center">
                            <div class="col-sm-10">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" style="font-size: 15px;"></i></span>
                        </div>
                        <input type="text" class="form-control" id="contol" placeholder="Enter User Name" name="nam">
        
                    </div></div></div><br>

                    <div class="row justify-content-center">
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" style="font-size: 20px;"></i></span></div>
                                <input type="password" class="form-control" placeholder="Enter Password given" name="pass"> 
                            </div>              
                        </div>
                </div><br>
                </form>


</div>
   
    
                
                   
<?php
    if(isset($_GET['error']))
        {
            if($_GET['error']=="emptyfeilds")
                {
                    echo '<script>swal("Empty fields", "Fill the fields", "warning");</script>';
                }
            else if($_GET['error']=="usernameorpasswordiswrong")
                {
                    echo '<script>swal("Name or Password is Wrong", "Enter the correct data", "warning");</script>';
                }
                
        }
            ?>




    



      
            <div style="text-align:center">	
            <input type="submit" value="Login" class="btn btn-dark" id="button" name="yes1">
            </div>
    
<br>



</body>
</html>