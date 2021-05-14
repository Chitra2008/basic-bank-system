<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">


	<title>Basic Banking System</title>

	<style>
		.body
		{	
			background-image: url('images/pic1.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;  
 			background-size: cover;
		}

		.container1
		{
			position:relative; left:820px; top:6px;
			width:500px;
			height:400px;
			color:black;
			/* background-color:black; */
		}
</style>

</head>
<body class="body">
	<?php
	include "navbar.php";
	?>
				
				<div class="container1">
					<form action="newuser.php" method="post" >

						<h3><center><b>Sign Up</b></center></h3>

							<div class="c1">
								Name&emsp;<input type="text" name="name" id="name">
							</div>

							<br>
							<br>
							<div class="c1">
								Email&emsp;<input type="email" name="email" id="email">
							</div>
							<br>
							<br>
							<div class="c1">
								Amount&emsp;<input type="number" name="balance" id="balance">
							</div>
							<br>
							<br>
							<div class="c1">
								<input type="submit" value="submit">
							</div>
					</form>
				</div>

				
			
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

		
	<?php
				include "connection.php";

									
					if ($_SERVER['REQUEST_METHOD'] == 'POST')
					{
						
						$name =  $_POST['name'];
						$email =  $_POST['email'];
						$balance =  $_POST['balance'];
						$insert = false;
						

						$sql = "INSERT INTO `users` (`name`,`email`,`balance`) VALUES ('$name', '$email', '$balance')";
						
						$result = mysqli_query($conn,$sql);

						if($result)
						{
							$insert = true;

							
						}
						else
						{
							echo "Record is not  inserted successfuully successfully<br> bcoz of this error-->".mysqli_error($conn);
						}
					}

				if($insert)
					{
						echo  '<div class="alert alert-success d-flex align-items-center" role="alert">
							<svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#check-circle-fill"/></svg>
							<div>
							<p>You had successfully Sign Up.Thank you!!</p>
							</div>
						</div>';  
					}
				
				?>


</body>
</html>