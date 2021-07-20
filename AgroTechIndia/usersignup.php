
<?php
include("includes/connect.php");

if(isset($_POST['submit']))
{
	echo "kameshwar";
	$name=$_POST['name'];
	$email=$_POST['email'];
	$passwod=$_POST['password'];
	$cpassword=$_POST['cpassword'];

	$sql= "INSERT INTO `users`(`name`, `email`, `password`, `cpassword`) VALUES ('$name','$email','password','$cpassword')";

	$run = mysqli_query($conn,$sql);

	if($run)
	{
		echo "kameshwar";
		echo "<script type='text/javascript'>
			alert('Sign Up Success');
		</script>";
	}
	else
	{
		echo "<script type='text/javascript'>
			alert('Sign Up Failed');
		</script>";
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
		<link rel="stylesheet" href="adminstylesheet.css"/>
   </head>
    <body style="background-image:url('Images/blake-wisz-Xn5FbEM9564-unsplash.jpg')">
	<div class="container-fluid">
	 <div class="row" style="padding-top: 90px;">
         <div class="col-sm-4"></div>  
         <div class="col-sm-4" style="background:transparent; box-shadow: -1px 1px 50px 10px black;background-attachment: fixed; border-radius: 20px;background-color:rgba(0,0,0,0.5);padding: 15px;min-height: 180px;border: 5px solid #06c971;">
		 <h1 class="text-center" style="color:white">User Registration</h1><hr>
		 <form method="post" action="usersignin.php">
		     <label style="color:white"><i class="fa fa-user" style="font-size:20px"></i>&nbsp;&nbsp;User Name</label>
			 <input type="text" name="name" class="form-control" placeholder="Please Enter User Name" required="required"></br>
			 
		  <label style="color:white">  <i class="fa fa-envelope" style="font-size:20px"></i>&nbsp;&nbsp;Email Id</label>
			 <input type="email"  name="email" class="form-control" placeholder="Enter Your Email Id" required="required"></br>
			  <label style="color:white">  <i class="fa fa-lock" style="font-size:20px"></i>&nbsp;&nbsp;Password</label>
			 <input type="password" name ="password" class="form-control" placeholder="Enter Your Password" required="required"></br>
			  <label style="color:white">  <i class="fa fa-lock" style="font-size:20px"></i>&nbsp;&nbsp;Confirm Password</label>
			 <input type="password" name="cpassword" class="form-control" placeholder="Enter confirm  Password" required="required"></br>
			 <input type="submit" class="btn btn-success text-center form-control" value="Registration Now" 
			 name="submit">
		 </form>
		 </div> 
          <div class="col-sm-4"></div>          
      </div>
     </div>
	</body>
</html>