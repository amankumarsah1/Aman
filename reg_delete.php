<?php
                                    $reg_id=$_GET['reg_id'];
                                   // echo $cid;
                                   include ("module3setting.php");
                                   $sql="DELETE FROM register WHERE reg_id=".$reg_id."";

                                   if($conn->query($sql))
                                    {
                                      header("Location:registrationview.php");
                                     // echo"Hi";
                                    }
                                    else
                                    {
                                      echo"something wrong";
                                    }
  
		                	?>