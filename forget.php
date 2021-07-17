<html>
<head>
<title>Forgot Password</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
  .card{
    margin-top:70px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;
    border:solid 1px #17A589;
    border:none;
    border-top-left-radius: 25px;
    border-bottom-right-radius: 25px;
}
.card:hover{
    box-shadow: 0 0 5px 5px #757575;transition:ease .5s;
}
.card-header{
      background-color:#37474F;
      text-align:center;
      font-weight:bold;
      color:white;font-size:20px;font-family:Bahnschrift SemiBold;
      
  }
  #button{
    width:150px;background-color:#37474F;color:white;font-weight:bold;font-family:Bahnschrift SemiBold;
  }
 
  </style>
</head>
<body style="background-color:#F5F5F5">
</body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">

        <div class="card">
                    <div class="card-header" style="border-top-left-radius: 25px;">Forgot Password</div>
                    <div class="card-body">
                    <?php
            if(isset($_GET['error']))
            {
                if($_GET['error']=="emptyfields")
                {
                    echo '<div class="alert alert-danger" role="alert">
                    <a href="#" class="alert-link">Empty Fields!</a>
                      </div>';
                }
                else if($_GET['error']=="passnotmatch")
                {
                    echo '<div class="alert alert-danger" role="alert">
                    <a href="#" class="alert-link">Password Not Match!</a>
                      </div>';
                }
                else if($_GET['error']=="nouser")
                {
                    echo '<div class="alert alert-danger" role="alert">
                    <a href="#" class="alert-link">User Name Not Found!</a>
                      </div>';
                }
            }
            ?>
                    <form action="includes/forgot.inc.php" class="form-horizontal" method="POST">
                  
<br>
                        
                        <div style="margin-bottom: 25px" class="form-group">
                    
                        <input type="text" class="form-control" placeholder=" Registered User Name" name="nam">
                            
                        </div>
                                
                        
                        <div style="margin-bottom: 25px" class="form-group">
                            
                            <input type="password" class="form-control" placeholder="Enter New Password " name="pass"> 
                        </div>
                        <div style="margin-bottom: 25px" class="form-group">
                           
                            <input type="password" class="form-control" placeholder="Re Enter Password " name="repass"> 
                        </div>
                       
                        <div class="d-flex justify-content-center">	
                            <input type="submit" value="Submit" class="btn btn-secondary" name="yes" id="button">
                        </div>
                    
                    </form>
                </div>
            </div>
      


        </div>
    </div>
</div>
</html>