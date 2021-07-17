<?php
session_start();
?>
<html>

<head>
  <title>Admin dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<style>
  body {
    font-family: 'Roboto'sans-serif;
  }

  * {
    margin: 0;
    padding: 0;
    text-decoration: none;
    list-style: none;
  }

  #text1 {
    color: #fff;
    margin: 0;
    text-transform: uppercase;
    font-size: 20.5px;
    font-weight: 750;
    
  }

  #text1 span {
    color: #42A5F5;
  }

  #sidebarCollapse {
    color: white;
    width: 45px;
    background-color: #000000;
  }

  #sidebarCollapse:hover {
    background-color: #1976D2;
    height: 40px;
  }

  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #2f323a;
    overflow-x: hidden;
    transition: all .5s ease;
    box-shadow: 7px 2px 5px 0px rgba(0, 0, 0, 0.75);
  }

  header {
    font-size: 25px;
    color: white;
    text-align: center;
    line-height: 61px;
    background: #212121;
    user-select: none;
    font-weight: 700;
  }

  .sidenav .closebtn {
    position: absolute;
    top: 14px;
    right: 10px;
    transition: all .5s;
    background-color: #212121;
    cursor: pointer;
  }

  #close {
    color: white;
    font-size: 15px;
    transition: all .5s;
    background-color: #212121;
    height: 35px;
  }

  #close:hover {
    background-color: red;
    transition: all .5s;
    height: 35px;
  }

  .sidenav ul a {
    color: white;
    display: block;
    width: 100%;
    line-height: 63px;
    font-size: 20px;
    padding-left: 40px;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: 500;
    transition: .4s;
  }

  ul li:hover a {
    padding-left: 50px;
    text-decoration: none;

  }

  ul li .a,
  #navbarDropdown {
    color: white;
    font-size: 16px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
  }

  .sidenav ul a:hover {
    background-color: #1976D2;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
    transition: all .5s;
  }

  .sidenav ul a i {
    margin-right: 7px;
  }

  .sidenav ul a span {
    margin-right: 7px;
  }

  @media screen and (max-height: 450px) {
    .sidenav {
      padding-top: 15px;
    }

    .sidenav a {
      font-size: 18px;
    }
  }

  #ab {
    color: black;
    border-bottom: none;
    width: 240px;
    height: 70px;
  }


  #navbarDropdown {
    color: white;
    font-size: 16px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    height: 75px;
  }

  #ab:hover {
    color: black;
    background-color: white;
  }

  #buttons {
    background-color: #1976D2;
  }

  #img {

    height: 200px
  }

  #img1 {
    height: 200px
  }

  .card {

    border: solid 1px white;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;
    
    height: 395px
  }

  .card:hover {
    box-shadow: 0 0 5px 5px #757575;
    transition: ease .5s;
  }

  .card-header {
    background-color: #1565C0;
    text-align: center;
    font-weight: 500;
    color: white;
    font-size: 19px;letter-spacing: 0.3px;
    font-family:Bahnschrift SemiBold
  }

  @media (min-width:360px) and (max-width:634px) {
    .card {
      width: 20.5rem;
      
    }
   
  }

  @media (min-width:425px) and (max-width:634px) {
    .card {
      width: 24.5rem;
    }
   
  }

  @media (min-width:768px) and (max-width:634px) {
    .card {
      width: 10.5rem;
    }
    
  }
</style>

<body>

  <div id="mySidenav" class="sidenav">
    <header>ADMIN</header>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><button class="btn btn-infos" id="close"><i class="fa fa-times"></i></button></a></a>

    <ul class="list-unstyled components mb-5"><br>
      <div class="d-flex justify-content-center">
        <img src="photos/admin.png" style="height:100px;width:100px">

      </div><br>
      <li class="active">
        <a href="admin.php" class="a"><span class="fa fa-qrcode" aria-hidden="true"></span>&nbsp;Dashboard</a>
      </li>
     


      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i>&nbsp;Candidate
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="votereg.php" id="ab"><i class="fa fa-address-card"></i>&nbsp;&nbsp;Form&nbsp;&nbsp;</a>
              <!--<a class="dropdown-item" href="candidpass.php" id="ab"><i class="fa fa-address-card"></i>&nbsp;&nbsp;Registraion&nbsp;&nbsp;</a>-->
              <a class="dropdown-item" href="admincandi.php" id="ab"><i class="fa fa-list"></i>&nbsp;&nbsp;List&nbsp;&nbsp;</a>
          </li>
          <li class="active">
        <a href="includes/reset.inc.php" class="a" name="submit"><i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;Reset</a>
      </li>
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i>&nbsp;User
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="sign.php" id="ab"><i class="fa fa-th"></i>&nbsp;&nbsp;Form&nbsp;&nbsp;</a>
              <a class="dropdown-item" href="userlist.php" id="ab"><i class="fa fa-list"></i>&nbsp;&nbsp;List&nbsp;&nbsp;</a>
             
          </li>

    


      <li class="active">
        <a href="datavote.php" class="a"><i class="fa fa-table" aria-hidden="true"></i>&nbsp;Result</a>
      </li>
      <li>
        <a href="includes/logout.inc.php" class="a"><span class="fa fa-sign-out"></span>Logout</a>
      </li>
    </ul>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark" id="navbar" style="background-color:#000000;height:60px;">
    <a class="navbar-brand" href="#">
      <h3 id="text1">Admin <span>Dashboard</span></h3>
    </a>

    <button type="button" id="sidebarCollapse" class="btn btn-darks" onclick="openNav()">
      <i class="fa fa-bars" aria-hidden="true"></i>

    </button>
  </nav>
  <br><br>

  <div class="container">
    <div class="row">

      <div class="col-sm-4">
        <div class="card animate__animated animate__fadeInBottomLeft">
          <div class="card-header">User Count</div>
          <img src="photos/users.png" class="card-img-top" alt="..." id="img">
          <hr>
          <div class="card-body">
            <?php
            require "includes/data.inc.php";
            $sql1 = "SELECT count(*) as 'total' FROM detail";
            $run = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_assoc($run);
            echo '<h1 style="text-align:center">' . $row1['total'] . '</h1>';
            ?>

            </table>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card animate__animated animate__fadeInUp" style="margin-top: 5px;">
          <div class="card-header">Candidate Count</div>
          <img src="photos/candidate.jpg" class="card-img-top" alt="..." id="img1">
          <hr>
          <div class="card-body">
            <?php
            require "includes/data.inc.php";
            $sql1 = "SELECT count(*) as 'total' FROM candidate";
            $run = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_assoc($run);
            echo '<h1 style="text-align:center">' . $row1['total'] . '</h1>';
            ?>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card animate__animated animate__fadeInBottomRight" style="margin-top: 5px;">
          <div class="card-header">Total Vote</div>
          <img src="photos/total.jpg" class="card-img-top" alt="..." id="img1">
          <hr>
          <div class="card-body">
            <?php
            require "includes/data.inc.php";
            $sql1 = "SELECT sum(status) as 'total' FROM detail";
            $run = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_assoc($run);
            echo '<h1 style="text-align:center">' . $row1['total'] . '</h1>';
            ?>
          </div>
        </div>
      </div>



    </div>
  </div><br><br>



  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "255px";
      document.getElementById("main").style.marginLeft = "260px";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
      document.body.style.backgroundColor = "white";
    }
  </script>
</body>

</html>