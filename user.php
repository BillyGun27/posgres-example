<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="description" content="Put it here">
    <meta name="application-name" content="AppName">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Billy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User</title>

    <link rel="stylesheet" href="css/font-awesome.min.css">    
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  </head>
  <body>
      <div class="container">
          <div class="row">
                  <div class="col-4 " style="border-right:solid 5px #B41F0A; text-align:right;" >
                      <br>
                      <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                          <?php
                      session_start(); 
                      echo  $_SESSION["nama"] ;
                       ?></h2>
                  </div>
                  <div class="col-8">
                          <img src="img/ce.png" width=100 style="margin:30px;" alt="CE">
                          <h1>TMJ-JAYA</h1>
                          <h3>Where Creativity Meet Future Technology</h3>
  
                  </div>
          </div>
      </div>
    
<div class"container" >
   
    <div class="row" >
            <div class="col-10 offset-md-1 " >               
              <button type="button"  class="btn btn-outline-danger main-btn" onclick="changePassword();">
                        <i class="fa fa-link" style="font-size:30px" aria-hidden="true"></i>
                        <br>  
                        Ubah Password
              </button>
            </div>   
    </div>
    <div class="row">
            <div class="col-10 offset-md-1 " >
              <a href="datapengguna.php"  role="button" class="btn btn-outline-danger main-btn"  >
                            <i class="fa fa-user" style="font-size:30px" aria-hidden="true"></i>
                            <br>                            
                        Administrasi Pengguna
              </a>
            </div>   
    </div>
    <div class="row">
        <div class="col-3  offset-md-1 " >
          <a href="main.php" role="button" class="btn btn-outline-danger sm-btn">
                <i class="fa fa-arrow-left" style="font-size:30px" aria-hidden="true"></i>                              
                    Back
          </a>
        </div>   
  </div>
</div>


  
<div class="modal fade" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ubah Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="routes/changepassword.php" method="POST" >
      <div class="modal-body">

          <div class="form-group">
              <label for="PasswordLama">Password Lama</label>
              <input type="password" class="form-control " name="password_lama"  id="old" placeholder="Enter Old Password" required>
              <div class="invalid-feedback">
                  Wrong Password
                </div>
            </div>

            <div class="form-group">
                <label for="PasswordBaru">Password Baru</label>
                <input type="password" class="form-control " name="password_baru"  placeholder="Enter New Password" required>
              </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-outline-danger sm-btn">Ubah</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      </div>
    </form>
    </div>
  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
   <?php
        if(isset($_GET["change"])){
           if ($_GET["change"] == "fail") {
            echo "$('#old').addClass('is-invalid');$('#myModal').modal('toggle');";
          }
        }
        ?>
  
      function changePassword() {
        $('#myModal').modal('toggle');
      }
      
    </script>
  </body>
</html>