  <html>
	<head>
		<style type="text/css">
		body{
			background-image:repeating-linear-gradient(#7b4397 , #dc2430);
		}
		#mainarea{
			width:900px;
			height:1000px;
			background-image:repeating-linear-gradient(to right , #000428 , #004e92);
			margin:0px auto;
			border:solid 2px grey;
			border-radius:10px;
		}
		
		#mainarea h1{
			color:grey;
			text-shadow:-5px -2px 3px black,-7px -2px 3px grey;
			text-align:center;
		}
		
		#mainarea u{
			color:grey;
			text-shadow:-5px -2px 3px black,-7px -2px 3px grey;
			text-align:center;
		}
		
		#middlearea{
			width:900px;
			height:800px;
			margin:100px opx 100px 0px;
			overflow:auto;
			padding-left:20px;
			//background:#F8D7DA;
			color:white;
		}
		</style>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	</head>
	<body>
		
			<div id="mainarea">
			<h1><u>CUSTOMER BAKERY DETAILS FORM</u></h1><br><br>
			<div id="middlearea"><br><br>
		
		<?php
					
					 include "module9setting.php";
					//echo print_r($_POST);
				
          
			
		
			
			
			$c_name=$_POST['c_name'];
			
			$c_email=$_POST['c_email'];	
			$c_mobile=$_POST['c_mobile'];
			$qbox=$_POST['qbox'];
			
		
			$error="";

			echo "<p>$c_name</p>";
			echo "<p>$c_email</p>";
			echo "<p>$c_mobile</p>";
			
			echo "<p>$qbox</p>";
			
			
			
			
			
			 if($c_name=="")
           {
               $error.="<li>enter name</li>";
           }
           elseif(strlen($c_name)<3)
           {
               $error.="<li>invalid name</li>";
           }
           else if (!preg_match("/^[a-zA-Z . ' ]*$/",$c_name))
            {
            $error.= "<li>Only letters and white space allowed</li>";
          }
          
          elseif(is_numeric($c_name))
          {
              $error.="<li>invalid name</li>";
          }
		
			
			if($c_email=="")
			{
				$error.="<li>Enter mail</li>";
			}
			elseif(!filter_var($c_email,FILTER_VALIDATE_EMAIL))
			{
				$error.="<li>Invalid email</li>";
			}
			
			if($c_mobile=="")
			{
				$error.="<li>Enter mobile no.";
			}
			elseif(strlen($c_mobile)!=10)
			{
				$error.="<li>Invalid mobile no.</li>";
			}
			

			date_default_timezone_set('Asia/Kolkata'); 
			$date=date("Y-m-d H:i:s");
			
			
			
			
			if($error!="")
           {
               echo "
                    <div class='alert alert-danger'>
                        <ul>
                             $error
                         </ul>
                    <div>
                         ";
           }
           else{
           $sql="INSERT INTO contacts
           ( c_name, c_email,date, c_mobile,qbox)
           VALUES
           ('".$c_name."','".$c_email."','".$date."','".$c_mobile."','".$qbox."')";
			
			//echo "$sql";
           if($con->query($sql)===TRUE)
           {
               echo "Customer order successfully registered";
           }
        }
    
			
		?>
		
		</div>
		</div>
	</body>
</html>
