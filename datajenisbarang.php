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
    <title>Data Jenis Barang</title>

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
                <div class="col-6">
                  <br><br>
                    <h1>Data Jenis Barang</h1>
                </div>
        </div>
    </div>

    
    
<div class="container" style="padding:10px;">
  <h1 id="form-mode">Tambah Data</h1>
  

    <br>

    <form  method="post" id="former">
      <div class="row" >
         <div class="col-5 offset-md-1">
  <div class="form-group row">
    <label for="example-text-input" class="col-4 col-form-label">Kode Jenis Barang</label>
    <div class="col-8">
      <input class="form-control inp" type="text" name="kd_jenis_barang" required>
    </div>
  </div>
  <div class="form-group row">
          <label for="example-text-input" class="col-4 col-form-label">Jenis Barang</label>
          <div class="col-8">
            <input class="form-control inp" type="text" name="jenis_barang" required>
          </div>
        </div>
  
         </div>
      
      </div>
      <div class="row">
          <button type="submit" class="btn btn-outline-danger sm-btn"  style="margin-right:50px;">Simpan</button> 
  
          <button type="button" class="btn btn-outline-danger sm-btn" onclick="change();">Ubah</button>
          <button type="button" class="btn btn-outline-danger sm-btn" onclick="erase();">Hapus</button>
          <button type="button" class="btn btn-outline-danger sm-btn" onclick="add();">Tambah</button>
          <a href="administrasi.php" class="btn btn-outline-danger sm-btn" style="position:absolute ;right:10%;">Tutup</a>
          <br>
      </div>
    </form>
    <br>
    Cari <input type="text">

    <br><br>
    <div class="scrollable">
            <table class="table table-inverse">
                    <thead>
                      <tr>
                        <th>Kode Jenis Barang</th>
                        <th>Jenis Barang</th>
                      </tr>
                    </thead>
                    <tbody class="data_pengguna">
                            
                    
                    </tbody>
                  </table>
    </div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        var submit;
        add();

        $(".data_pengguna").load("routes/table/jenisbarang.php");

        function ModForm(d) {
        /*$( "input[name*='kd_pengguna']" ).val( kd );
        $( "input[name*='nm_pengguna']" ).val( nmp );
        $( "input[name*='nm_login']" ).val( nml );
        $( "input[name*='pass_login']" ).val( psl );
        $( "input[name*='level']" ).val( lvl );*/
        for (var i = 0; i < $(".inp").length; i++) {
            $(".inp").eq( i ).val(d.eq(i).html());
            
          }
          change();
          
        }

        function change(){
          submit = "update";
          $("#form-mode").html("Ubah Data");
          $( "input[name*='submit']" ).val( "update" );
          $(".inp").eq( 0 ).removeClass("form-control");
          $(".inp").eq( 0 ).addClass("form-control-plaintext");
          $(".inp").eq( 0 ).prop('readonly', true);

          for (var i = 1; i < $(".inp").length; i++) {
            $(".inp").eq( i ).removeClass("form-control-plaintext");
            $(".inp").eq( i ).addClass("form-control");
            $(".inp").eq( i ).prop('readonly', false);
            
          }
          
        }
        function erase(){
          submit = "delete";
          $("#form-mode").html("Hapus Data");
          $( "input[name*='submit']" ).val( "delete" );
          for (var i = 0; i < $(".inp").length; i++) {
            $(".inp").eq( i ).removeClass("form-control");
            $(".inp").eq( i ).addClass("form-control-plaintext");
            $(".inp").eq( i ).prop('readonly', true);
            
          }

        }
        function add(){
          submit = "insert";
          $("#form-mode").html("Tambah Data");
          $( "input[name*='submit']" ).val( "insert" );
          for (var i = 0; i < $(".inp").length; i++) {
            $(".inp").eq( i ).removeClass("form-control-plaintext");
            $(".inp").eq( i ).addClass("form-control");
            $(".inp").eq( i ).prop('readonly', false);
            $(".inp").eq(i).val("");
            
          }

        }
        

        $("#former").submit(function(event) {

                /* stop form from submitting normally */
                event.preventDefault();

                $.post("routes/manage/jenisbarang.php",
            {
                submit: submit,
                kd_unit_kerja :$(".inp").eq( 0 ).val(),
                unit_kerja :$(".inp").eq( 1 ).val() 
            },
              function(data){
               alert(data);
               $(".data_pengguna").load("routes/table/jenisbarang.php");    
            });
             
            });
        
    </script>
    
  </body>
</html>