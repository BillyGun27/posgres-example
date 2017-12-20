<?php
                    include "../connectpgsql.php";
                    $result = pg_query($con,"SELECT * FROM pengguna ");
                
                        while($row=pg_fetch_assoc($result)){
                                echo "<tr onclick=\"ModForm( $(this).children('.data') )\">";
                                echo "<td id='kd_pengguna' class='data'>".$row['kd_pengguna']."</td>";
                                echo "<td id='nm_pengguna' class='data'>".$row['nm_pengguna']."</td>";
                                echo "<td id='nm_login' class='data'>".$row['nm_login']."</td>";
                                echo "<td id='pass_login' class='data'>".$row['pass_login']."</td>";
                                echo "<td id='level'  class='data'>".$row['level']."</td>";                                
                                echo "</tr>";
                            }
     pg_close($con);                  
                    ?>