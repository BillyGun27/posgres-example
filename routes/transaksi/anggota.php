<?php
include "../connectpgsql.php";

    
    $total = $_POST["total"];
    $kd_penjualan = $_POST["kd_penjualan"];
    $tgl_trans = $_POST["tgl_trans"];
    $nm_anggota = $_POST["nm_anggota"];

    $barang = json_decode( $_POST["barang"] ) ;
    $kd_pengguna = $_POST["kd_pengguna"];
  //$kd_pnj_det = $kd_penjualan;
  //$det = 1;
  
  //  echo sizeof($barang);
  //echo $barang[0]->nama;
 //echo $kd_pnj_det."$det";
  
      $result = pg_query($con,"INSERT INTO public.\"Trans_penjualan_anggota\"(kd_penjualan_anggota, kd_anggota_anggota ,tgl_trans_anggota,total_anggota) VALUES ('$kd_penjualan',( SELECT kd_anggota FROM public.\"Anggota\" WHERE nm_anggota = '$nm_anggota'  ) ,'$tgl_trans','$total' ) ;");

        
        if(!$result) {
           echo pg_last_error($con);
        } else {
           echo "Data Send successfully";
        }
   
        
    for ($i=0; $i < sizeof($barang) ; $i++) {

        $Disc = (100 - $barang[$i]->disc) /100;

        $kode_barang = $barang[$i]->kode;
        $kd_rinci = $kd_penjualan."$i";
        $hrg = $barang[$i]->harga;
        $jumlah_brg = $barang[$i]->jumlah;
        $sub_total = ($hrg*$jumlah_brg)*$Disc;
        # code...
        $result = pg_query($con,"INSERT INTO PUBLIC.\"penjualan_rinci_anggota\"(\"kd_penjualan_anggota_Trans_penjualan_anggota\", kd_barang_barang ,kd_rinci_anggota , kd_pengguna_pengguna , hrg_anggota ,jml_brg_anggota ,sub_total_anggota ) 
        VALUES('$kd_penjualan','$kode_barang','$kd_rinci','$kd_pengguna','$hrg','$jumlah_brg','$sub_total');");
            
            if(!$result) {
               echo pg_last_error($con);
            } else {
            //   echo "Data created successfully";
            }
    }
        


     
    pg_close($con);



?>