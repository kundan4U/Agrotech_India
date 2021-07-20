<?php
include("includes/connect.php");
if(isset($_POST['submit']))
{
	$username = $_POST['user_name'];
	$password = $_POST['user_password'];

  $query = "SELECT * FROM admin WHERE user_name='$username' AND user_password='$password'";
			$results = mysqli_query($conn, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
				}
			}


?>


<html>
    <head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	   <style>
	   body{
	            background-image: url('Photo\amy-hirschi-szrJ3wjzOMg-unsplash.jpg');
                background-attachment: fixed;
                background-size: cover;
                background-repeat: no-repeat;
		   }
	   </style>
    </head>
	<body style="background-image:url('Photo/amy-hirschi-szrJ3wjzOMg-unsplash.jpg')">
	<div class="container-fluid">
	 <div class="row" style="padding-top: 150px;">
         <div class="col-sm-4"></div>  
         <div class="col-sm-4" style="background:transparent; box-shadow: -1px 1px 50px 10px black;background-attachment: fixed; border-radius: 20px;background-color:rgba(0,0,0,0.5);padding: 15px;min-height: 180px;border: 5px solid #06c971;">
		 <h1 class="text-center" style="color:white">Admin Login</h1><hr>
		 <form method="post" action="index.php">
		     <label style="color:white"><i class="fa fa-user" style="font-size:20px"></i>&nbsp;&nbsp;User Id</label>
			 <input type="text" name="user_name" class="form-control" placeholder="Please Enter Your User Id" required="required"></br>
			 
		  <label style="color:white">  <i class="fa fa-lock" style="font-size:20px"></i>&nbsp;&nbsp;Password</label>
			 <input type="password" name="user_password" class="form-control" placeholder="Enter Your Password" required="required"></br>
			 <input type="submit" class="btn btn-success text-center"value="Sign In" name="submit">
		 </form>
		 </div> 
          <div class="col-sm-4"></div>          
      </div>
     </div>
	</body>
</html>