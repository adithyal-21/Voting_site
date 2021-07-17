<html>
<head>
<title>Vote Here</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
  .card{
    margin-top:30px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;
    border:solid 1px #7986CB;
   width: auto;
   
   
}
.card:hover{
    box-shadow: 0 0 5px 5px #757575;transition:ease .5s;
}
.card-header{
    background-color:#5C6BC0;
      text-align:center;
      font-weight:500;
      color:white;font-size:19px;font-family:sans-serif;letter-spacing: 0.3px;
      
  }
  #button{
    width:90px;background-color:#7986CB;color:white;font-weight:500;border:solid 1px #7986CB;
  }
  #button1{
    width:90px;background-color:#E57373;color:white;font-weight:500;border:solid 1px #E57373;
  }
  #head{
    font-size:20px;font-weight:bold;font-family: sans-serif;
  }
  
  </style>
</head>
<body style="background-color:#F5F5F5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-7">


        <div class="card">
                   <div class="card-header">CANDIDATE  DETAILS</div>
                    <div class="card-body">
                    <?php
            if(isset($_GET['error']))
            {
                if($_GET['error']=="emptyfeilds")
                {
                    echo '<div class="alert alert-danger" role="alert">
                    <a href="#" class="alert-link">Empty Fields!</a>
                      </div>';
                }
                else if($_GET['error']=="passwordfilled")
                {
                    echo '<div class="alert alert-danger" role="alert">
                    <a href="#" class="alert-link">Already Registered!</a>
                      </div>';
                }
                else if($_GET['error']=="usernotfound")
                {
                    echo '<div class="alert alert-danger" role="alert">
                    <a href="#" class="alert-link">User Name Not Found!</a>
                      </div>';
                }
            }
            ?>
                    <form action="includes/candidlog.inc.php" class="form-horizontal" method="POST">
                  

                        
                        <div style="margin-bottom: 25px" class="form-group">
                    <label>User Name</label>
                        <input type="text" class="form-control" placeholder=" Registered User Name" name="name"> 
                            
                        </div>
                                
                        
                        <div style="margin-bottom: 25px" class="form-group">
                          <label>Password</label>
                            <input type="password" class="form-control" placeholder=" Password Generated" name="passw"> 
                        </div>
                       
                        <div class="d-flex align-items-center">	
                            <input type="submit" value="Submit" class="btn btn-dark" name="sub" id="button">
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<br>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-header">PASSWORD GENERATE</div>
                    <div class="card-body">
                   
                    <form action="candidpass.php" class="form-horizontal" method="POST">
                  
<br>
                        <div class="text-center">	
                            <input type="submit" value="Generate" class="btn btn-dark" name="subs" id="button">
                        </div>
                        <br>
                        <?php
                if(isset($_POST['subs']))
                {
                    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                    $password = substr( str_shuffle( $chars ), 0, 8 );
                    echo'<p style="color:black;text-align:center;font-size:20px;hieght:40px;">'.$password.'</p>';
                  
                }
                ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


        </div>
    </div>
</div>
</body>
</html>