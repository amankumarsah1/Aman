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
			<h1><u>CUSTOMER BAKERY CONTACT DATA FORM</u></h1><br><br>
			<div id="middlearea">
            <?php
				include "module9setting.php";
				
				$sql="SELECT * FROM contacts";
				
				if($data1=mysqli_query($con,$sql))
				{
					if(mysqli_num_rows($data1)>0)
					{
						
						echo"<table border='2px' cellpadding='5px'>
							<tr>
								<th>C-NAME</th>
								<th>EMAIL</th>
								<th>Mobile</th>
								<th>DATE<</th>
								<th>Q-BOX</th>
								<th>VIEW</th>
								
							</tr>";
							//echo"Hello";
							while($bakery=mysqli_fetch_array($data1))
							{
							echo"<tr>";
		
									echo"<td>".$bakery['c_name']."</td>";
									echo"<td>".$bakery['c_email']."</td>";
									echo"<td>".$bakery['c_mobile']."</td>";
									echo"<td>".$bakery['c_date']."</td>";
									echo"<td>".$bakery['qbox']."</td>";
									echo"<td><a href=\"module11view.php?cc_id=".$bakery['cc_id']."\" onclick='return confirm(\"Are you sure to view\")'>view</a></td>";
								
							echo"</tr>";
							}
							echo"</table>";
						
						
						{
							
							echo $bakery['c_name'];
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