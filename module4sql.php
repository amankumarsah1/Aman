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
			//background:#F8D7DA;
			
		}
		
		table td{
				 
				color:white;
			
				
		}
			
		table th{
				 
				color:white;
				
		}
		</style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	</head>
		
		<body>
			
			<div id="mainarea">
			<h1><u>CUSTOMER BAKERY DATA FORM</u></h1><br><br>
			<div id="middlearea">
            <?php
				include "module3setting.php";
				
				$sql="SELECT * FROM orderinfo";
				
				if($data=mysqli_query($conn,$sql))
				{
					if(mysqli_num_rows($data)>0)
					{
						
						echo"<table border='2px' cellpadding='5px'>
							<tr>
								<th>ORDER TYPE</th>
								<th>DOD</th>
								<th>HOUR</th>
								<th>MIN</th>
								<th>AP</th>
								<th>C-NAME</th>
								<th>EMAIL</th>
								<th>Mobile</th>
								<th>D-ADDRESS</th>
								<th>PIN</th>
								<th>BAKERY</th>
								<th>PAYMENT METHOD</th>
								<th>MSG</th>
								<th>MMSG</th>
								<th>EDIT</th>
								<th>DELETE</th>
								<th>VIEW</th>
								
							</tr>";
							//echo"Hello";
							while($bakery=mysqli_fetch_array($data))
							{
							echo"<tr>";
		
									echo"<td>".$bakery['ordertype']."</td>";
									echo"<td>".$bakery['DOD']."</td>";
									echo"<td>".$bakery['hour']."</td>";
									echo"<td>".$bakery['min']."</td>";
									echo"<td>".$bakery['ap']."</td>";
									echo"<td>".$bakery['cname']."</td>";
									echo"<td>".$bakery['email']."</td>";
									echo"<td>".$bakery['mobile']."</td>";
									echo"<td>".$bakery['daddress']."</td>";
									echo"<td>".$bakery['pin']."</td>";
									echo"<td>".$bakery['bakery']."</td>";
									echo"<td>".$bakery['paymentmethod']."</td>";
									echo"<td>".$bakery['msg']."</td>";
									echo"<td>".$bakery['mmsg']."</td>";
									echo"<td><a href=\"module6edit.php?cid=".$bakery['cid']."\" onclick='return confirm(\"Are you sure to update\")'>edit</a></td>";
									echo"<td><a href=\"module5delete.php?cid=".$bakery['cid']."\" onclick='return confirm(\"Are you sure to delete\")'>delete</a></td>";
									echo"<td><a href=\"module7view.php?cid=".$bakery['cid']."\" onclick='return confirm(\"Are you sure to view\")'>view</a></td>";
								
							echo"</tr>";
							}
							echo"</table>";
						
						
						{
							
							echo $bakery['cname'];
						}
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
		</div>
		</body>
</html>