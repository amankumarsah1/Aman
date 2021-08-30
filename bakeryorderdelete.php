<?php
                                    $cid=$_GET['cid'];
                                   // echo $cid;
                                   include ("module3setting.php");
                                   $sql="DELETE FROM orderinfo WHERE cid=".$cid."";

                                   if($conn->query($sql))
                                    {
                                      header("Location:bakeryorder.php");
                                     // echo"Hi";
                                    }
                                    else
                                    {
                                      echo"something wrong";
                                    }
  
		                	?>