<?php 
              include "../connectpgsql.php";
              $barang = $_POST["brg"];
              $result = pg_query($con,"SELECT * FROM barang WHERE nm_barang  = '$barang' ");
                $detail = array();
                  while($row=pg_fetch_assoc($result)){  
                          $detail[0]= $row["kd_barang"];
                          $detail[1] = $row["hrg_jual"];
                          }      
              echo json_encode($detail);
              ?>