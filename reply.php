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
		<div id="mainarea">
			<h1><u>CUSTOMER BAKERY REPLY FORM</u></h1>
			<form  method="POST" action="modulereplysubmit.php">
				<br><br>
				
				
				<div class="darea"><b>Reply Box !</b></div>
				<div>
					<textarea name="reply" class="earea">
					</textarea>
				</div>
				<div id="farea">
					<input type="submit" value="SUBMIT"/>
				</div>
			</form>
		</div>
	</body>
</html>