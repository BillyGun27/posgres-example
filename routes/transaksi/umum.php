<?php
include "../connectpgsql.php";

    
    $total = $_POST["total"];
    $kd_penjualan = $_POST["kd_penjualan"];
    $tgl_trans = $_POST["tgl_trans"];

    $barang = json_decode( $_POST["barang"] ) ;
    $kd_pengguna = $_POST["kd_pengguna"];
 // $kd_pnj_det = $kd_penjualan;
  //$det = 1;
  
  //  echo sizeof($barang);
  //echo $barang[0]->nama;
 //echo $kd_pnj_det."$det";
  
    $result = pg_query($con,"INSERT INTO public.\"Trans_penjualan_umum\"(kd_penjualan_umum, tgl_trans_umum,total_umum) VALUES('$kd_penjualan','$tgl_trans','$total');");
        
        if(!$result) {
           echo pg_last_error($con);
        } else {
           echo "Data Send successfully";
        }
   
    for ($i=0; $i < sizeof($barang) ; $i++) {

        $kode_barang = $barang[$i]->kode;
        $kd_rinci = $kd_penjualan."$i";
        $hrg = $barang[$i]->harga;
        $jumlah_brg = $barang[$i]->jumlah;
        $sub_total = $hrg*$jumlah_brg;
        # code...
        $result = pg_query($con,"INSERT INTO PUBLIC.\"penjualan_rinci_umum\"(\"kd_penjualan_umum_Trans_penjualan_umum\", kd_barang_barang ,kd_rinci_umum , kd_pengguna_pengguna , hrg_umum ,jumlah_brg_umum,sub_total_umum ) 
        VALUES('$kd_penjualan','$kode_barang','$kd_rinci','$kd_pengguna','$hrg','$jumlah_brg','$sub_total');");
            
            if(!$result) {
               echo pg_last_error($con);
            } else {
            //   echo "Data created successfully";
            }
    }
        


     
    pg_close($con);



?>