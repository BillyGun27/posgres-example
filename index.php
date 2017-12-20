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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <link rel="stylesheet" href="css/font-awesome.min.css">    

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
 
    

    <div class="row" style="margin:70px;">
        <div class="col-4 offset-md-4 form-custom" >
        <h1><i class="fa fa-user-circle-o" style="font-size:150px;" aria-hidden="true"></i></h1>
          <h1>Welcome!</h1>
            <form method="POST" action="routes/loginvalidation.php">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="text" class="form-control " name="username" id="username" placeholder="Enter Username" required>
                  <div class="invalid-feedback">
                      Username does not exist
                    </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
                  <div class="invalid-feedback">
                      Wrong password;
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-danger sm-btn">Submit</button>
              </form>
        </div>
       
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <?php 
    session_start();
    if(isset($_GET["auth"])){
      if($_GET["auth"] == "!email"){
        echo "
        <script>
        $('#username').addClass('is-invalid');
        </script>
        ";
      }else if($_GET["auth"] == "!password"){
        echo "
        <script>
        $('#password').addClass('is-invalid');
        </script>
        ";
      }

    }
    ?>
    
  </body>
</html>