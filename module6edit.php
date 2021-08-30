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
		</style>
	</head>
	<body>
		<?php
		include "module3setting.php";
						$cid=$_GET['cid'];
						
						
						
						//echo $cid;
						
						$sql="SELECT * FROM orderinfo WHERE cid=".$cid."";
						//echo $sql;
						
						if($data=mysqli_query($conn,$sql))
						{
							if(mysqli_num_rows($data)>0)
							{
								
								$bakery=mysqli_fetch_array($data);
								//echo $bakery['cname'];
								
		
							}
							else{
								echo"Data not available";
							}
						}
						else{
							echo"Something wrong";
						}
						
						
						
						
						if(!empty($_POST['DOD_new']))
						{
							if($_POST['DOD_new']!=$bakery['DOD'])
							{
								$DOD_new= $_POST['DOD_new'];
								
								$sql="UPDATE orderinfo SET DOD='".$DOD_new."' WHERE cid=".$cid."";
								
								
								 if($conn->query($sql)===TRUE)
								{
									 echo "customer delivery date successfully updated";
			  
									
								}
								else
								{
									echo "something error";
								}

							}
							
						}
						
			
						if(!empty($_POST['cname_new']))
						{
							if($_POST['cname_new']!=$bakery['cname'])
							{
								$cname_new= $_POST['cname_new'];
								
								$sql="UPDATE orderinfo SET cname='".$cname_new."' WHERE cid=".$cid."";
								/*if($data=mysqli_query($conn,$sql))
								{
									if(mysqli_num_rows($data)>0)
									{
								
										$bakery=mysqli_fetch_array($data);
										//echo $bakery['cname'];
								
		
									}
									else{
										echo"Data not available";
									}
								}
								else{
									echo"Something wrong";
								}*/
								
								 if($conn->query($sql)===TRUE)
								{
									 echo "customer name successfully updated";
			  
									
								}
								else
								{
									echo "something error";
								}
								//echo "Name successfully updated..";
							}
							
						}
						
						
			echo "<div id='mainarea'>
			<h1><u>CUSTOMER BAKERY UPDATE FORM</u></h1>
			<form  method='POST' action='".$_SERVER['PHP_SELF']."?cid=$cid'>
				<br><br><div class='aarea'><b>Type of Order</b></div>
				<div class='barea'>
					<input type='radio' name='ordertype' value='delivery' checked/>
					<label>Delivery</label><br>
				
					<input type='radio' name='ordertype' value='pickup'/>						<label>Pickup</label>
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
					<input type='text'  name='cname_new' value='".$bakery['cname']."' placeholder='Enter your name' class='carea'/>
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
					<input type='submit' value='Update'/>
				</div>
				
			</form>
		</div>";	
		?>
	</body>
</html>