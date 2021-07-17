<html>
<head>
<title>candidate registration</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
  .card{
    margin-top:30px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;
    border:solid 1px #7986CB;
   
    border-top-left-radius: 25px;
    border-bottom-right-radius: 25px;
}
.card:hover{
    box-shadow: 0 0 5px 5px #757575;transition:ease .5s;
}
label{
  font-family:Bahnschrift SemiBold;
}
.card-header{
  background-color:#1A237E;
      text-align:center;
      font-weight:500;
      color:white;font-size:20px;font-family:Bahnschrift SemiBold;letter-spacing: 0.3px;
  }
  #button{
    width:100px;background-color:#1A237E;color:white;font-weight:500;border:solid 1px #1A237E;
    font-family:Bahnschrift SemiBold;
  }
  #button1{
    width:100px;background-color:#B71C1C;color:white;font-weight:500;border:solid 1px #B71C1C;
    font-family:Bahnschrift SemiBold;
  }
  </style>
</head>
<body style="background-color:#F5F5F5">

<main class="sign-form">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12">
          <div class="card">
            <div class="card-header" style="border-top-left-radius: 25px;">CANDIDATE FORM</div>
              <div class="card-body"><br>
              <?php
    if(isset($_GET['error']))
        {
          if($_GET['error']=="emptyfeilds")
            {
                echo '<div class="alert alert-danger" role="alert">
                <a href="#" class="alert-link">Empty Fields!</a>
                  </div>';
             }
            else if($_GET['error']=="invalidemail")
             {
               echo '<div class="alert alert-danger" role="alert">
               <a href="#" class="alert-link">Invalid Email !</a>
                 </div>';
             }
            else if($_GET['error']=="success")
            {
              echo'<script>
      swal({
        title: "Are you sure?",
        text: "Once Submitted Data Cannot Be changed!",
        icon: "warning",
        button: true,
        dangerMode: false,
      })
        .then((willDelete) => {
        if (willDelete) {
          swal("Data Entered Successfully", {
            icon: "success",
          }).then(function (result) {
            if (true) {
              window.location = "admin.php";
            }
          });
        }});
    </script>';
}
}
?>

<form action="includes/candidate.inc.php"  method="POST" enctype="multipart/form-data">


<div class="row">
                    <div class="col-sm-6">
                  <div  class="form-group">
                      <label>Name:</label>
                      <input type="text" class="form-control"   name="names">                                   
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <div  class="form-group">
                    <label>User Name:</label>
                    <input type="text" class="form-control"   name="user">
                    </div>
                    </div>
                     </div>
              

                    <div class="row">
                    <div class="col-sm-6">
                  <div  class="form-group">
                      <label>E-mail:</label>
                      <input type="email" class="form-control"  name="emails">                                   
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <div  class="form-group">

                    <label>Aadhar No.:</label>
                        <input type="tel" class="form-control"   name="adhar" maxlength="12" minlength="12"> 


                  
                    </div>
                    </div>
                     </div>
                  
                    <div class="row">
                
                    <div class="col-sm-6">
                        <div  class="form-group">
                            <label>D.O.B:</label>
                            <input type="date" class="form-control"  name="dates">                                  
                           </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="form-group">
                            <label>Phone:</label>
                            <input type="tel" class="form-control"   name="phones" maxlength="10" minlength="10"> 
                             </div>
                        </div>
                        
                    
                  </div>
                <div class="row">
                <div class="col-sm-6">
                      <div  class="form-group">
                        <label>Address:</label>
                        <input type="text" class="form-control"   name="address"> 
                           </div>
                        </div>
                    
                        <div class="col-sm-6">
                        <div  class="form-group">
                            <label>Nationality:</label>
                            <input type="text" class="form-control"  name="nation"> 
                        </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-sm-6">
                        <div  class="form-group">
                          <label>Gender:</label>
                            <select class="form-control" name="genders" value="">                   
                            <option>Male</option>
                            <option>Female</option>   
                            </select>                   
                        </div>
                    </div>
                     
                  <div class="col-sm-6">
                      <div  class="form-group">
                      <label>Party Name:</label>
                            <input type="text" class="form-control"   name="party"> 
                        </div>
                      </div>
                    </div>

                    <div class="row">
                <div class="col-sm-6">
                      <div  class="form-group">
                        <label>Occupation:</label>
                        <input type="text" class="form-control"   name="occu"> 
                           </div>
                        </div>
                    
                        <div class="col-sm-6">
                        <div class="form-group">

                        <label>Party Logo:</label>
                    <input type="file" class="form-control" name="files">


                            
                        </div>
                    </div>
                    </div>
<br>
  <div class="d-flex justify-content-left">
                      <input type="submit" value="Register" class="btn btn-secondary" name="submits" id="button">&nbsp;&nbsp;&nbsp;
                    <input type="reset" value="Reset" class="btn btn-danger" name="reset" id="button1">
  </div><br>
    
 </form>
</div>
</div>
</div>
</div><br><br>
</div>
</main>


</body>
</html>