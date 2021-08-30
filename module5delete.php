<?php
	
	
	 include "module3setting.php";
	$cid=$_GET['cid'];
	//echo $sid;
	
	 $sql="DELETE FROM orderinfo WHERE cid=".$cid."";

           if($conn->query($sql)===TRUE)
           {
              // echo "student data successfully deleted";
			  
			  header("Location:module4sql.php");
           }
		   else
		   {
			   echo "something error";
		   }
	
?>