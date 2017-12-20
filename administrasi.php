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
    <title>Administrasi</title>

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
    <center>
        <img src="img/ce.png" width=100 style="margin:30px;" alt="CE">
        <h1>TMJ-JAYA</h1>
        <h3>Where Creativity Meet Future Technology</h3>
    </center>
    
<div class"container" >
    <div class="row" >
        <div class="col-5 offset-md-1 " >
                <a href="dataanggota.php" role="button"  class="btn btn-outline-danger main-btn">
                        <i class="fa fa-user" style="font-size:30px" aria-hidden="true"></i>
                        <br> 
                    Anggota
                </a>
        </div>   
        <div class="col-5 " >
                
                <a href="dataunitkerja.php" role="button"   class="btn btn-outline-danger main-btn">
                        <i class="fa fa-globe" style="font-size:30px" aria-hidden="true"></i>
                        <br> 
                    Unit Kerja
                </a>
        </div>   
    </div>
    <div class="row" >
        <div class="col-5 offset-md-1 " >
                
                <a href="databarang.php" role="button"  class="btn btn-outline-danger main-btn">
                        <i class="fa fa-archive" style="font-size:30px" aria-hidden="true"></i>
                        <br> 
                    Barang
                </a>
        </div>   
        <div class="col-5 " >
                
                <a href="datajenisbarang.php" role="button"   class="btn btn-outline-danger main-btn">
                        <i class="fa fa-th" style="font-size:30px" aria-hidden="true"></i>
                        <br> 
                    Jenis Barang
                </a>
        </div>   
    </div>
    <div class="row">
        <div class="col-3  offset-md-1 " >
          <a href="main.php" role="button" class="btn btn-outline-danger sm-btn"  onclick="changePassword();">
                <i class="fa fa-arrow-left" style="font-size:30px" aria-hidden="true"></i>                              
                    Back
          </a>
        </div>   
  </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>