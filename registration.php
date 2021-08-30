<?php
	$error="";	
	include 'module3setting.php';
	
	if(!empty($_POST))
	{
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$rand=rand(1000,9999);
		$filename=$_FILES['image']['name'];
		$fileinfo=@getimagesize($_FILES['image']['tmpname']);
		$width=$fileinfo[0];
		$height=$fileinfo[1];
		$filetype=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
		$onlyfilename=strtolower(pathinfo($filename,PATHINFO_FILENAME));
		$tmpname=$_FILES['image']['tmp_name'];
		$folder="uploads/".$filename;
		
		//echo $filetype;
		
		if($width>300 || $height>200)
		{
			$error.="Image Error";
		}
		if($filetype!="jpg" && $filetype!="jpeg" && $filetype!="png")
		{
			$error.="Invalid File Format";
		}
		if($_FILES["image"]["size"]>500)
		{
			echo"Maximum 2mb allowed";
		}
		if(move_uploaded_file($tmpname,$folder))
		{
			echo"Succesfully uploaded";
		}
		else{
			echo"File upload issue";
		}

		if($name=="")
		{
		   $error.="<li>enter name</li>";
		}
		elseif(strlen($name)<3)
		{
		  $error.="<li>invalid name</li>";
		}
		else if (!preg_match("/^[a-zA-Z . ' ]*$/",$name))
		{
			$error.= "<li>Only letters and white space allowed</li>";
		}  
		elseif(is_numeric($name))
		{
		  $error.="<li>invalid name</li>";
		}
		
		if($mobile=="")
		{
			$error.="<li>Enter mobile no.";
		}
		elseif(strlen($mobile)!=10)
		{
			$error.="<li>Invalid mobile no.</li>";
		}
		
		if($email=="")
		{
			$error.="<li>Enter mail</li>";
		}
		elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$error.="<li>Invalid email</li>";
		}
		
		date_default_timezone_set('Asia/Kolkata'); 
		$date=date("Y-m-d H:i:s");

	}
?>

<!doctype html>
<html lang='en'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css' integrity='sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l' crossorigin='anonymous'>
    <title>Registration Form</title>
	<style type='text/css'>
		body h3{
			text-align:center;
		}
	</style>
  </head>
  <body>
  <br>
    <h3><u>Register!</u></h3>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns' crossorigin='anonymous'></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js' integrity='sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF' crossorigin='anonymous'></script>
    -->
	<div class='alert alert-info' role='alert'>
		<br>
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
						$sql="INSERT INTO register
						(name,mobile,email,date,image,pdf)
						VALUES
						('".$name."','".$mobile."','".$email."','".$date."','".$filename."','test')";
		
						//echo"$sql";
								if($conn->query($sql)===TRUE)
								{
									echo "Registration successfully done.";
								}
					}
				
				}
				
					echo"<form  method='POST' enctype='multipart/form-data' action='".$_SERVER['PHP_SELF']."'>
					  
					  <div class='form-group'>
						<label for='inputName'>Name</label>
						<input type='text' class='form-control' name='name' id='inputName' placeholder='Enter your name'>
					  </div>
					  <div class='form-row'>
					  <div class='form-group col-md-6'>
						  <label for='inputPassword4'>Mobile</label>
						  <input type='number' class='form-control' name='mobile' id='inputPassword4' placeholder='Enter your mobile no.'>
						</div>
						<div class='form-group col-md-6'>
						  <label for='inputEmail4'>Email</label>
						  <input type='email' class='form-control' name='email' id='inputEmail4' placeholder='Enter your email-123@gmail.com'>
						</div>
					  </div>
					  <div class='form-row'>
						<div class='form-group col-md-6'>
						  <label for='inputEmail4'>Image</label>
						 <input type='file' class='form-control-file' name='image' id='exampleFormControlFile1' placeholder='Upload your img'>
						</div>
						<div class='form-group col-md-6'>
						  <label for='inputPassword4'>Document</label>
						 <input type='file' class='form-control-file' name='pdf' id='exampleFormControlFile1' placeholder='Upload your documents in pdf'>
						</div>
					  </div>
					  <button type='submit' class='btn btn-primary'>Submit</button>
					</form>";
			?>
	</div>
  </body>
</html>
	
