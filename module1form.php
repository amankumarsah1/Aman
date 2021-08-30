<?php
				 $error="";	
					include "module3setting.php";
				   //echo print_r($_POST);
			   
		 
		   
	   			if(!empty($_POST))
				{
					 
					$ordertype=$_POST['ordertype'];
					$DOD=$_POST['DOD'];
					$hour=$_POST['hour'];
					$min=$_POST['min'];
					$ap=$_POST['ap'];
					$cname=$_POST['cname'];
					//echo ucwords($cname);
					$email=$_POST['email'];
					
					$mobile=$_POST['mobile'];
					$daddress=$_POST['daddress'];
					$pin=$_POST['pin'];
					$bakery=$_POST['bakery'];
					$paymentmethod=$_POST['paymentmethod'];
					$msg=$_POST['msg'];
					$mmsg=$_POST['mmsg'];
					
				
				   
					$order="";
					$timeh="";
					$timem="";
					$times="";
					$product="";
					$payment="";
		 
				   /* echo "<p>$ordertype</p>";
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
					echo "<p>$mmsg</p>";*/
					
					
					
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
				   
				}
		   
		   
   
		   
	   ?>
<html>
	<head>
		<title></title>
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
		
		.aarea{
			width:200px;
			height:40px;
			float:left;
			margin:0px 12px 0px 38px;
			color:white;
		}
		
		.barea{
			width:600px;
			height:40px;
			float:left;
			margin:0px 38px 20px 12px;
			color:white;
		}
		
		.carea{
			width:200px;
			height:30px;
			float:left;
				
		}
			
		.darea{
			width:630px;
			height:40px;
			float:left;
			margin-left:38px;
			color:white;
				
		}
		
		.earea{
			width:628px;
			height:70px;
			float:left;
			margin-left:38px;
				
		}
		textarea{
				width:628px;
				height:70px;
				resize:none;
				margin-bottom:20px;
				float:left;
			}
			
		#farea{
			width:200px;
			height:30px;
			margin:0px auto;
			
		}
		input[type=submit]{
				width:200px;
				height:50px;
				
				background-image:repeating-linear-gradient(to right , #2b5876 , #4e4376);
				color:black;
				border:double 2px grey;
				border-radius:10px;
				opacity:0.8;
			}
			
		input[type=submit]:hover{
				opacity:1;
				transform:scale(1.1,1.1);
				font:bold;

			}
			.alert{
				color:red;
			}
		</style>
	</head>
	<body>
		<div id="mainarea">
			<h1><u>CUSTOMER BAKERY ORDER FORM</u></h1>
			<?php

				if($error!="" && !empty($_POST))
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
					if(!empty($_POST))
					{
						$sql="INSERT INTO orderinfo
						(ordertype, DOD, hour, min, ap,date, cname, email, mobile, daddress, pin, bakery, paymentmethod, msg, mmsg)
						VALUES
						('".$ordertype."','".$DOD."','".$hour."','".$min."','".$ap."','".$date."','".$cname."','".$email."','".$mobile."','".$daddress."','".$pin."','".$bakery."','".$paymentmethod."','".$msg."','".$mmsg."')";
		
						//echo"$sql";
								if($conn->query($sql)===TRUE)
								{
									echo "Customer order successfully registered";
								}
					}
				
				}

			echo"<form  method='POST' action='".$_SERVER['PHP_SELF']."'>
				<br><br><div class='aarea'><b>Type of Order</b></div>
				<div class='barea'>
					<input type='radio' name='ordertype' value='delivery' checked/>
					<label>Delivery</label><br>
				
					<input type='radio' name='ordertype' value='pickup'/>	
					<label>Pickup</label>
				</div>
				
				<div class='aarea'><b>Pickup/Delivery Date</b></div>
				<div class='barea'>
					<input type='date' name='DOD' placeholder='DD-MM-YYYY' class='carea'/>
				</div>
				
				<div class='aarea'><b>Pickup/Delivery Time</b></div>
				<div class='barea'>
					<select name='hour' >
			
						<option value=''>HOUR</option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
						<option value='5'>5</option>
						<option value='6'>6</option>
						<option value='7'>7</option>
						<option value='8'>8</option>
						<option value='9'>9</option>
						<option value='10'>10</option>
						<option value='11'>11</option>
						<option value='12'>12</option>
				
					</select>
					<select name='min' >
						
						<option value=''>MIN.</option>
						<option value='00'>00</option>
						<option value='10'>10</option>
						<option value='20'>20</option>
						<option value='30'>30</option>
						<option value='40'>40</option>
						<option value='50'>50</option>
								
					</select>
					<select name='ap' >
			
						<option value=''></option>
						<option value='am'>AM</option>
						<option value='pm'>PM</option>
						
					</select>
					
				</div>
				
				<div class='aarea' ><b>Customer's Name</b></div>
				<div class='barea'>
					<input type='text'  name='cname' placeholder='Enter your name' class='carea'/>
				</div>
				
				<div class='aarea' ><b>Customer's Email</b></div>
				<div class='barea'>
					<input type='email'  name='email' placeholder='Enter your email id' class='carea'/>
				</div>

				
				
				<div class='aarea' ><b>Customer's Mobile No.</b></div>
				<div class='barea'>
					<input type='number'  name='mobile' placeholder='Enter your mobile no.' class='carea'/>
				</div>
				
				<div class='aarea' ><b>Delivery Address</b></div>
				<div class='barea'>
					<input type='text'  name='daddress' placeholder='Enter destination address' class='carea'/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type='number'  name='pin' placeholder='Enter your pin no.' class='carea'/>
				</div>
				
				<div class='aarea'><b>Bakery Products</b></div>
				<div class='barea'>
					<select name='bakery' class='carea'>
			
						<option value=''>PRODUCTS</option>
						<option value='cupcake'>Cupcake</option>
						<option value='cookies'>Cookies</option>
						<option value='doughnuts'>Doughnuts</option>
						<option value='roll'>Roll</option>
						<option value='butterscotchcake'>Butterscotch Cake</option>
						<option value='Blackforestcake'>Blackforest Cake</option>
						<option value='Whiteforestcake'>Whiteforest Cake</option>
						
				
					</select>
				</div>
				
				<div class='aarea'><b>Method of Payment</b></div>
				<div class='barea'>
					<select name='paymentmethod' class='carea'>
			
						<option value=''>Mode of Pay</option>
						<option value='credit'>Credit Card</option>
						<option value='cod'>Cash on Delivery</option>
						<option value='gpay'>Google Pay</option>
						<option value='ppay'>Phone Pay</option>
						<option value='paytm'>Paytm</option>
						
					</select>
				</div>
				
				<div class='darea'><b>Would you like to write a message? If, yes enter the message below.</b></div>
				<div>
					<textarea name='msg' class='earea'>
					</textarea>
				</div>
				
				<div class='darea'><b>Do you have any additional information or instructions?</b></div>
				<div>
					<textarea name='mmsg' class='earea'>
					</textarea>
				</div>
				<div id='farea'>
					<input type='submit' value='Order Now'/>
				</div>
			</form>";
			?>
		</div>


		
	</body>
</html>