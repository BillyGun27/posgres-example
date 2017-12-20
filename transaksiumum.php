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
    <title>Transaksi Umum</title>

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
                    <h1>Transaksi Umum</h1>
                </div>
        </div>
    </div>

    
<form  method="post" id="former">
<div class="container" style="padding:10px;">
  <div class="row">
      <div class="col-12" style="background:white;text-align:right">
        <input class="form-control-plaintext" id="total" type="text" name="total_harga" value=0 readonly>
      </div>
  </div>
  <br>
  
  
      <div class="row" >
         <div class="col-6 ">
  
    <div class="form-barang" style="border:#B41F0A solid 3px;padding:10px;">
      <input type="hidden" name="no" id="noEdit">
  <div class="form-group row">
    <label for="example-text-input" class="col-4 col-form-label">Kode Barang</label>
    <div class="col-8">
      <input class="form-control-plaintext inp" readonly type="text" name="kd_barang" >
    </div>
  </div>
  <div class="form-group row">
          <label for="example-text-input" class="col-4 col-form-label">Nama Barang</label>
          <div class="col-8">
            <select class="form-control inp" name="kd_jenis_barang" onchange="PilihBarang( $(this).val() );">
              <?php 
              include "routes/connectpgsql.php";
              $result = pg_query($con,"SELECT * FROM barang ORDER BY kd_jenis_barang_jenis_barang ASC");
                      echo "<option></option>";
                  while($row=pg_fetch_assoc($result)){  
                          echo "<option value = '".$row['nm_barang']."' >".$row['nm_barang']." ( ".$row['kd_barang']." ) "."</option>";
                          }      
              
              ?>
          </select>
          </div>
      </div>
    <div class="form-group row">
        <label for="example-text-input" class="col-4 col-form-label">Harga </label>
        <div class="col-8">
        <input class="form-control-plaintext inp" readonly type="number" name="hrg" >
        </div>
    </div>
    <div class="form-group row">
        <label for="example-text-input" class="col-4 col-form-label">Jumlah Barang</label>
        <div class="col-8">
        <input class="form-control inp" type="number" name="jmlh_barang" value=1>
        </div>
    </div>

  </div>

    <button type="button" class="btn btn-outline-danger sm-btn" onclick="add();">Tambah</button> 
    <button type="button" class="btn btn-outline-danger sm-btn" onclick="change()">Ubah</button>
    <button type="button" class="btn btn-outline-danger sm-btn" onclick="cancel();">Batal</button>
    <button type="button" class="btn btn-outline-danger sm-btn" onclick="erase()" >Hapus</button>
            <br>
        
  
  
         </div>
  <div class="col-6">
    
              <div class="form-group row">
                <label for="example-text-input" class="col-4 col-form-label">Kode Penjualan</label>
                <div class="col-8">
                  <input class="form-control " id="kd_penj" type="text" name="kd_penj_angg" required>
                </div>
              </div>

        <div style="border:#B41F0A solid 3px;padding:10px;">
              <div class="form-group row">
                      <label for="example-text-input" class="col-4 col-form-label">Pelanggan</label>
                      <div class="col-8">
                        <input class="form-control-plaintext" readonly type="text" name="pelanggan" value="umum" required>
                      </div>
                    </div>
              <div class="form-group row">
                <label for="example-text-input" class="col-4 col-form-label">Tanggal Transaksi</label>
                <div class="col-8">
                  <input class="form-control " id="tgl" type="date" name="tgl_trsks" required>
                </div>
              </div>
              <div class="form-group row">
                  <label for="example-text-input" class="col-4 col-form-label">Pengguna</label>
                  <div class="col-8">
                    <input class="form-control-plaintext " id="pengguna" readonly type="text" name="Pengguna" value="<?php echo  $_SESSION["nama"] ;?>"  required>
                  </div>
                </div>
        </div>
                
         
  </div>
      
</div>
     

  <br>
    <div class="scrollable">
            <table class="table table-inverse">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode Barang </th>
                        <th>Nama Barang</th>
                        <th>Harga </th>
                        <th>Jumlah Barang</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody class="data_pengguna">
                    
                    </tbody>
                  </table>
    </div>

    <br>
    <h4>pembayaran</h4>

    <div class="row" style="border:#B41F0A solid 3px;padding:10px;">
      <div class="col-6">
          <div class="form-group row">
              <label for="example-text-input" class="col-4 col-form-label">Bayar</label>
              <div class="col-8">
                <input class="form-control "  id="bayar" onkeyup="transaksi();" type="number" name="Bayar" >
              </div>
            </div>
      </div>
      <div class="col-6">
          <div class="form-group row">
              <label for="example-text-input" class="col-4 col-form-label">Kembali</label>
              <div class="col-8">
                <input class="form-control " id="kembalian" type="number" name="Kembali" >
              </div>
            </div>
      </div>

    </div>
    <button type="submit" id="confirm" class="btn btn-outline-danger sm-btn" style="position:absolute ;right:18%;">Simpan</button> 
    <a href="main.php" class="btn btn-outline-danger sm-btn" style="position:absolute ;right:10%;">Tutup</a>
    
</div>
</form>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        var submit;
        var barang = [];
        //0 = kode , 1 = nama, 2 = harga

       // $(".data_pengguna").load("routes/table/barang.php");

    function PilihBarang(b){
      $.post("routes/select/detailbarang.php",
            {
                brg:b
            },
              function(data){
               var detail = JSON.parse(data);
               $(".inp").eq( 0 ).val( detail[0] );
               $(".inp").eq( 2 ).val(  detail[1] );

            $(".inp").eq( 0 ).removeClass("form-control");
            $(".inp").eq( 0 ).addClass("form-control-plaintext");
            $(".inp").eq( 0 ).prop('readonly', true);

            $(".inp").eq( 2 ).removeClass("form-control");
            $(".inp").eq( 2 ).addClass("form-control-plaintext");
            $(".inp").eq( 2 ).prop('readonly', true);
            });
    }

        function FormData(d){
          $( "input[name*='submit']" ).val( "update" );
          
          for(var i = 0 ; i < 3 ; i++){
            $(".inp").eq( i ).removeClass("form-control");
            $(".inp").eq( i ).addClass("form-control-plaintext");
            $(".inp").eq( i ).prop('readonly', true);
          }
        
          
          $("#noEdit").val($.parseHTML(d.html())[0].innerHTML);
          
          for (var i = 1; i < $(".inp").length; i++) {
            $(".inp").eq( i-1 ).val( $.parseHTML(d.html())[i].innerHTML );
            //console.log(d.eq(i).html())  
          }
          //console.log( $.parseHTML(da.html())[1].innerHTML );
        }

        var HargaAkhir;
        function showData(){
        var totalHarga = 0;
          $("tbody.data_pengguna").html("");
          for (var i = 0; i < barang.length; i++) {
            $("tbody.data_pengguna").append(
                  $("<tr class='ls' onclick=\"FormData( $(this) )\" >").html(
                  "<td>"+i+"</td>"
                  +"<td>"+barang[i].kode+"</td>"
                  +"<td>"+barang[i].nama+"</td>"
                  +"<td>"+barang[i].harga+"</td>"
                  +"<td>"+barang[i].jumlah+"</td>"
                  +"<td>"+barang[i].jumlah*barang[i].harga+"</td>"
                  )
              )
            
            totalHarga += (barang[i].jumlah*barang[i].harga);
          }
              $("#total").eq(0).val(totalHarga);
              HargaAkhir = totalHarga;
        }

       
        function transaksi(){
              var kembalian = parseInt( $("#bayar").val() ) - HargaAkhir ;
              $("#kembalian").val(kembalian);
              console.log(kembalian);
            }
        

         

        function add(){
          var brg = {
          kode :   $(".inp").eq( 0 ).val(),
          nama :   $(".inp").eq( 1 ).val(),
          harga :  $(".inp").eq( 2 ).val(),
          jumlah : $(".inp").eq( 3 ).val()

          }
          
          barang.push(brg);

          console.log(barang);
          showData();
          alert("Data Added Succesfully");
        }

        

        function change(){
         var no = $("#noEdit").val();
          //alert(no);
          barang[no].kode = $(".inp").eq( 0 ).val();
          barang[no].nama = $(".inp").eq( 1 ).val();
          barang[no].harga = $(".inp").eq( 2 ).val();
          barang[no].jumlah = $(".inp").eq( 3 ).val();

          showData(); 
          alert("Data updated Succesfully");
 
        }

        function erase(){
          var no = $("#noEdit").val();
          //alert(no);
          barang.splice(no,1);

          showData(); 
          alert("Data deleted Succesfully");

        }
        
        
        function cancel(){
          submit = "insert";
          $("#form-mode").html("Tambah Data");
          $( "input[name*='submit']" ).val( "insert" );
        for (var i = 0; i < $(".inp").length; i++) {
         //   $(".inp").eq( i ).removeClass("form-control-plaintext");
         //   $(".inp").eq( i ).addClass("form-control");
          //  $(".inp").eq( i ).prop('readonly', false);
            $(".inp").eq(i).val("");
            
          }

          $(".inp").eq(3).val(1);
        }

        $("#former").submit(function(event) {

                /* stop form from submitting normally */
                event.preventDefault();

                $.post("routes/transaksi/umum.php",
            {
                total :$("#total").val(),
                kd_penjualan:$("#kd_penj").val(),
                tgl_trans :$("#tgl").eq( 0 ).val() ,

                barang : JSON.stringify(barang),
                kd_pengguna: <?php echo '"'.$_SESSION["id"].'"' ?>
            },
              function(data){
               alert(data);  
               $('#myModal').modal('toggle');  
            });
             
            });

            
   
        
    </script>
    
  </body>
</html>