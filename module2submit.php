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
					
					 include "module3setting.php";
					//echo print_r($_POST);
				
          
			
		
			
			$ordertype=$_POST['ordertype'];
			$DOD=$_POST['DOD'];
			$hour=$_POST['hour'];
			$min=$_POST['min'];
			$ap=$_POST['ap'];
			$cname=$_POST['cname'];
			echo ucwords($cname);
			$email=$_POST['email'];
			
			$mobile=$_POST['mobile'];
			$daddress=$_POST['daddress'];
			$pin=$_POST['pin'];
			$bakery=$_POST['bakery'];
			$paymentmethod=$_POST['paymentmethod'];
			$msg=$_POST['msg'];
			$mmsg=$_POST['mmsg'];
			
		
			$error="";
			$order="";
			$timeh="";
			$timem="";
			$times="";
			$product="";
			$payment="";

			echo "<p>$ordertype</p>";
			echo "<p>$DOD</p>";
			echo "<p>$hour</p>";
			echo "<p>$min</p>";
			echo "<p>$ap</p>";
			echo "<p>$cname</p>";
			echo "<p>$email</p>";
			
			echo "<p>$mobile</p>";
			echo "<p>$daddress</p>";
			echo "<p>$pin</p>";
			echo "<p>$bakery</p>";
			echo "<p>$paymentmethod</p>";
			echo "<p>$msg</p>";
			echo "<p>$mmsg</p>";
			
			
			
			switch($ordertype)
			{
				case "delivery":
					$order="Delivery";
					break;
					
				case "pickup":
					$order="Pickup";
					break;
					

					
					default:
					$error.="<li>Empty order tytpe..</li>";
			}
			
			
		
			
			switch($hour)
			{
				case "1":
					$timeh="1";
					break;
					
				case "2":
					$timeh="2";
					break;
					
				case "3":
					$timeh="3";
					break;
					
				case "4":
					$timeh="4";
					break;
					
				case "5":
					$timeh="5";
					break;
					
				case "6":
					$timeh="6";
					break;
					
				case "7":
					$timeh="7";
					break;
					
				case "8":
					$timeh="8";
					break;
					
				case "9":
					$timeh="9";
					break;
					
				case "10":
					$timeh="10";
					break;
					
				case "11":
					$timeh="11";
					break;
					
				case "12":
					$timeh="12";
					break;
					
					default:
					$error.="<li>Empty hour..</li>";
			}
			
			switch($min)
			{
				case "00":
					$timem="00";
					break;
					
				case "10":
					$timem="10";
					break;
					
				case "20":
					$timem="20";
					break;
					
				case "30":
					$timem="30";
					break;
					
				case "40":
					$timem="40";
					break;
					
				case "50":
					$timem="50";
					break;
					
				
					
					default:
					$error.="<li>Empty min..</li>";
			}
			
			switch($ap)
			{
				case "am":
					$times="AM";
					break;
					
				case "pm":
					$times="PM";
					break;
					

					
					default:
					$error.="<li>Empty am/pm..</li>";
			}
			
			 if($cname=="")
           {
               $error.="<li>enter name</li>";
           }
           elseif(strlen($cname)<3)
           {
               $error.="<li>invalid name</li>";
           }
           else if (!preg_match("/^[a-zA-Z . ' ]*$/",$cname))
            {
            $error.= "<li>Only letters and white space allowed</li>";
          }
          
          elseif(is_numeric($cname))
          {
              $error.="<li>invalid name</li>";
          }
		
			
			if($email=="")
			{
				$error.="<li>Enter mail</li>";
			}
			elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				$error.="<li>Invalid email</li>";
			}
			
			if($mobile=="")
			{
				$error.="<li>Enter mobile no.";
			}
			elseif(strlen($mobile)!=10)
			{
				$error.="<li>Invalid mobile no.</li>";
			}
			
			if($daddress=="")
			{
				$error.="<li>Enter your address</li>";
			}
			
			if($pin=="")
			{
				$error.="<li>Enter your pin";
			}
			elseif(strlen($pin)!=6)
			{
				$error.="<li>Invalid pin no.</li>";
			}
			
				switch($bakery)
			{
				case "cupcake":
					$product="Cupcake";
					break;
					
				case "cookies":
					$product="Cookies";
					break;
					
				case "doughnuts":
					$product="Doughnuts";
					break;
					
				case "roll":
					$product="Roll";
					break;
					
				case "butterscotchcake":
					$product="Butterscotch cake";
					break;
					
				case "Blackforestcake":
					$product="Blackforest cake";
					break;
					
				case "Whiteforestcake":
					$product="Whiteforest cake";
					break;
					
					default:
					$error.="<li>Empty product type..</li>";
			}
			
			
			switch($paymentmethod)
			{
				case "credit":
					$payment="Credit card";
					break;
					
				case "cod":
					$payment="Cash On Delivery";
					break;
					
				case "gpay":
					$payment="Google Pay";
					break;
					
				case "ppay":
					$payment="Phone Pay";
					break;
					
				case "paytm":
					$payment="Paytm";
					break;
					
				
				
					
					default:
					$error.="<li>Empty mode of pay..</li>";
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
           $sql="INSERT INTO orderinfo
           (ordertype, DOD, hour, min, ap,date, cname, email, mobile, daddress, pin, bakery, paymentmethod, msg, mmsg)
           VALUES
           ('".$ordertype."','".$DOD."','".$hour."','".$min."','".$ap."','".$date."','".$cname."','".$email."','".$mobile."','".$daddress."','".$pin."','".$bakery."','".$paymentmethod."','".$msg."','".$mmsg."')";

			echo"$sql";
           if($conn->query($sql)===TRUE)
           {
               echo "Customer order successfully registered";
           }
        }
    
			
		?>
		<a href="module1form.php">HOME</a>
		</div>
		</div>
	</body>
</html>
