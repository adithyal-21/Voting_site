<html>
<head>
<title>User Login</title>
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
    margin-top:50px;
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
    border-bottom-right-radius: 25px;background-color:#1A237E;font-weight:500;border:solid 1px #1A237E;
    font-family:Bahnschrift SemiBold;

}
.card-header{
      background-color:#1A237E;
      text-align:center;
      font-weight:500;
      color:white;font-size:20px;letter-spacing: 0.3px;
      font-family:Bahnschrift SemiBold;
  }
  .forgot{
      color:black;text-decoration: none;text-align:right;margin-right:20px
  }
</style>
</head>
<body style="background-color:#F5F5F5">
<div class="container">
<?php
if(isset($_GET['error']))
            {
                if($_GET['error']=="emptyfields")
                {
                    echo '<script>swal("Empty fields", "Fill the fields", "warning");</script>';
                }
                else if($_GET['error']=="wrongpassword")
                {
                    echo '<script>swal("Wrong Password", "Enter correct Password", "warning");</script>';
                }
                else if($_GET['error']=="nousername")
                {
                    echo '<script>swal("No User Name", "No User Name Found", "warning");</script>';
                }
            }
            ?>


<form action="includes/log.inc.php" class="form-horizontal" method="POST"><br><br>
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card" style="max-width: 940px;" id="cards">
                <div class="card-header" style=" border-top-left-radius: 25px;">Log in as User</div>
                    <div class="card-body">
<br>
                    <div class="row justify-content-center">
                            <div class="col-sm-10">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" style="font-size: 15px;"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="User Name" name="names">
        
                    </div></div></div><br>

                    <div class="row justify-content-center">
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" style="font-size: 20px;"></i></span></div>
                                <input  type="password" class="form-control" name="passes" placeholder="Enter Password"> 
                            </div>              
                        </div>
                </div>

               
                </form>


</div>
   
    
                
                   





    


<div style="text-align:center">	
            <input type="submit" value="Login" class="btn btn-info" name="login" id="button">
            </div>
      
            
    
<br>
<a href="forget.php" class="forgot">Forgot Password?</a>
<br>


</body>
</html>