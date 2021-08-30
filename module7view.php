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
		
		#workarea{
			width:600px;
			height:600px;
			margin:100px 150px 25px 150px;
		}
		
		table td{
				font:bold 2px; 
				color:white;
				vertical-align:bottom;
				padding:2px;
			}
		
		#buttonarea{
			width:600px;
			height:100px;
			margin:25px 150px 50px 150px; 
			
		}
		
		#uparea{
			width:200px;
			height:100px;
			margin:0px 75px 0px 50px; 
			float:left;
			
		}
		
		#delarea{
			width:200px;
			height:100px;
			margin:0px 0px 0px 75px; 
			float:left;
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
	
		
		<div id="mainarea">
			<h1><u>CUSTOMER BAKERY DATA VIEW FORM</u></h1>
			
				<div id="workarea">
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
								
								echo"
									<table>
										<tr>
											<td>Name :</td>
											<td>".$bakery['cname']."</td>
										</tr>
										<tr>
											<td>Order Type :</td>
											<td>".$bakery['ordertype']."</td>
										</tr>
										<tr>
											<td>Delivery :Date</td>
											<td>".$bakery['DOD']."</td>
										</tr>
										<tr>
											<td>Pickup Time :</td>
											<td>".$bakery['hour']."</td>
											<td>".$bakery['min']."</td>
											<td>".$bakery['ap']."</td>
										</tr>
										<tr>
											<td>Email Id :</td>
											<td>".$bakery['email']."</td>
										</tr>
										<tr>
											<td>Mobile No. :</td>
											<td>".$bakery['mobile']."</td>
										</tr>
										<tr>
											<td>Address :</td>
											<td>".$bakery['daddress']."</td>
										</tr>
										<tr>
											<td>Pin No. :</td>
											<td>".$bakery['pin']."</td>
										</tr>
										<tr>
											<td>Product Type :</td>
											<td>".$bakery['bakery']."</td>
										</tr>
										<tr>
											<td>Payment Method :</td>
											<td>".$bakery['paymentmethod']."</td>
										</tr>
										<tr>
											<td>Review 1 :</td>
											<td>".$bakery['msg']."</td>
										</tr>
										<tr>
											<td>Review 2 :</td>
											<td>".$bakery['mmsg']."</td>
										</tr>
										
										
										
										
										<tr>
											<td>UPDATE</td>
											<td><a href=\"module5delete.php?cid=".$bakery['cid']."\" onclick='return confirm(\"Are you sure to delete\")'>DELETE</a></td>
										</tr>
									</table>
								";
							}
							else{
								echo"Data not available";
							}
						}
						else{
							echo"Something wrong";
						}
				
					
					?>
					</div>
			
				<div id="buttonarea">
					<div id="uparea">
						<input type="submit" value="UPDATE"/>
					</div>
					<div id="delarea">
						<input type="submit"  value="DELETE"/>
						
					</div>
				</div>
		</div>
	</body>
</html>