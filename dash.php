<?php
session_start();
?>
<html>
<head>
<title>User dashboard</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>



<style>
        body{
          font-family: 'Roboto' sans-serif;
        }
        *{
          margin: 0;padding: 0;text-decoration: none;list-style: none;
        }
        #text1{
          color: #fff;margin: 0;text-transform: uppercase;font-size: 20.5px;
          font-weight: 750;
        }
        #text1 span{
          color: #42A5F5;
        }
        #sidebarCollapse{
          color:white;width:45px;background-color: #000000;
        }
        #sidebarCollapse:hover{
         background-color: #1976D2;height:40px;
        }
        .sidenav {
          height: 100%;width: 0;position: fixed;z-index: 1;top: 0;
          left: 0;background-color:#2f323a;overflow-x: hidden;
          transition: all .5s ease;box-shadow: 7px 2px 5px 0px rgba(0,0,0,0.75);
        }
        header{
          font-size: 25px;color:white;
          text-align:center;line-height:61px;background: #212121;user-select: none;
          font-weight: 700;
      }
        .sidenav .closebtn {
          position: absolute;top:14px;right:10px;
         transition: all .5s ;background-color:#212121;
          cursor: pointer;
        }
        #close{
        color:white;font-size: 15px;transition: all .5s ;background-color:#212121;height:35px;
        }
        #close:hover{
          background-color: red;transition: all .5s ;height:35px;
        }
        .sidenav ul a {
          color:white;display: block;width:100%;line-height:63px;font-size: 20px;padding-left: 40px; 
          box-sizing: border-box;font-family:Verdana, Geneva, Tahoma, sans-serif;font-weight:500;
           transition: .4s;
        }
        ul li:hover a{
          padding-left: 50px;
          text-decoration: none;
         
        }
        ul li .a,#navbarDropdown{
            color:white;font-size:16px;font-family:Verdana, Geneva, Tahoma, sans-serif;
            }
        .sidenav ul a:hover{
             background-color: #1976D2;
             box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
          transition: all .5s ;
        }
        .sidenav ul a i{
          margin-right: 7px;
           }
        .sidenav ul a span{
        margin-right: 7px;
        }
        
        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        #ab{
            color:black;border-bottom: none;width:240px;height:70px;
         }
         #navbarDropdown{
           color:white;font-size:16px;font-family:Verdana, Geneva, Tahoma, sans-serif;height: 75px;
           }
         #ab:hover{
             color:black; background-color: white;
             }
             #buttons{
    background-color: #1976D2
;
}

#img{
  
  height:200px
}
#img1
{
  height:200px

}
.card{
    
    border:solid 1px white;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;
   height:395px
    }
    .card:hover{
    box-shadow: 0 0 5px 5px #757575;
    transition:ease .5s;
  }
  .card-header{
      background-color:#1565C0;
      text-align:center;
      font-weight:500;
      color:white;font-size:19px;
      font-family:Bahnschrift SemiBold
  }
  @media (min-width:360px) and (max-width:634px) {
    .card{
      width:20.5rem;}}
      @media (min-width:425px) and (max-width:634px) {
    .card{
      width:24.5rem;}}

      @media (min-width:768px) and (max-width:634px) {
    .card{
      width:10.5rem;}}
      .connect{
 color:white;margin-top: 40px;
}
.connect #inst:hover{
  background-color: #125688;
}
.connect #twit:hover{
  background-color: #55ACEE;
}
.connect #face:hover{
  background-color: #3B5998;
}
.connect #git:hover{
  background-color: #007bb5;
}
</style>

<body>
<div id="mySidenav" class="sidenav">
        <header>USER</header>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><button class="btn btn-infos" id="close"><i class="fa fa-times"></i></button></a></a>
      
        <ul class="list-unstyled components mb-5"><br>
        <div class="d-flex justify-content-center">
<img src="photos/user.jpg" style="height:100px;width:100px;border-radius:50%">

            </div><br>
          <li class="active">
           <a href="dash.php" class="a"><span class="fa fa-qrcode" aria-hidden="true"></span>&nbsp;Dashboard</a>
          </li>
          <li class="active">
            <a href="profile.php" class="a"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;My Profile</a>
          </li>
          <?php
if(isset($_SESSION['user']))
{
  require 'includes/data.inc.php';
    $user=$_SESSION['user'];
    $sql="SELECT * FROM detail WHERE user_name='$user'";
    $fet=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($fet);
    $row1=$row['status'];
    if($row1==0)
    { echo'
          <li class="active">
            <a href="voting.php" class="a"><i class="fa fa-vote-yea"></i>&nbsp;Vote</a>
        </li>';
      }
      else{
        echo'  <li class="active">
        <a href="#" class="nav-link disabled" id="a"><i class="fa fa-vote-yea"></i>&nbsp;Vote</a>
    </li>';
  }
}
  ?>


         <li>
              <a href="includes/logout.inc.php" class="a"><span class="fa fa-sign-out-alt"></span>Logout</a>
          </li>
         <!--<li>
         <div  class="connect">
          <div class="d-flex justify-content-around">
          <button class="btn btn-dark" id="inst"><i class="fab fa-instagram" ></i></button>
          <button class="btn btn-dark" id="twit"><i class="fab fa-twitter"></i></button>
          <button class="btn btn-dark" id="face"><i class="fab fa-facebook"></i></button>
          <button class="btn btn-dark" id="git"><i class="fab fa-linkedin"></i></button>
         </div><br>-->
         <!--<p style="text-align:center;font-weight:500;letter-spacing:0.6px">Connect-Us</p>-->
       
</div>
         </li>
          </ul>
      </div>
      
      
      <nav class="navbar navbar-expand-lg navbar-dark" id="navbar" style="background-color:#000000;height:60px;">
        <a class="navbar-brand" href="#"><h3 id="text1">User <span>Dashboard</span></h3></a>
      
        <button type="button" id="sidebarCollapse" class="btn btn-darks" onclick="openNav()">
          <i class="fa fa-bars" aria-hidden="true"></i>
      
          </button>
      </nav>
<br><br>

      <div class="container">
    <div class="row">

      <div class="col-sm-4">
      <div class="card animate__animated animate__fadeInBottomLeft" >
        <div class="card-header" >Candidate Count</div>
          <img src="photos/candidate.jpg" class="card-img-top" alt="..." id="img1"><hr>
          <div class="card-body">
          <?php
               require "includes/data.inc.php";
               $sql1="SELECT count(*) as 'total' FROM candidate";
               $run=mysqli_query($conn,$sql1);
               $row1=mysqli_fetch_assoc($run);
               echo'<h1 style="text-align:center">'.$row1['total'].'</h1>';
              ?>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
      <div class="card animate__animated animate__fadeInUp" style="margin-top:5px;">
        <div class="card-header" >About Us</div>
          <img src="photos/about.jpg" class="card-img-top" alt="..." id="img"><hr>
          <div class="card-body">
             <p style="font-weight:lighter;margin-left:5px">This Site Is Used To vote For a Candidate Through Online Mode.</p>
            
     
          </div>
        </div>
      </div>

      <div class="col-sm-4">
      <div class="card animate__animated animate__fadeInBottomRight" style="margin-top: 5px">
        <div class="card-header" >Mission</div>
          <img src="photos/mission.png" class="card-img-top" alt="..." id="img1">
          <hr>
          <div class="card-body">
          <p style="font-weight:lighter;margin-left:5px">To Make Voting Online Mode Instead Of Offline.</p>
          </div>
        </div>
      </div>


    
    </div>
  </div>
  
  
  
  
  
  
  <br><br>



      <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "255px";
          document.getElementById("main").style.marginLeft = "260px";
          document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
          document.body.style.backgroundColor = "white";
        }
        </script>
</body>
</html>