
<?php

 include("includes/connect.php");

 if(isset($_POST['submit']))
 {
  $name = $_POST['name'];
  $email =$_POST['email'];

  $mobile_no = $_POST['mob'];
  $message = $_POST['message'];

  $sql = "INSERT INTO enquiry(name,email,mobile,description) VALUES('$name','$email','$mobile_no','$message')";
  $run = mysqli_query($conn,$sql);
  if($run)
  {
    echo "<script >
        alert('date send');
    </script>";
  }
  else
  {
     echo "<script >
        alert('date not send');
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
  <style>
  .enquiry
  {
     min-height:300px;
  }
  </style>
 </head>
 <body>
 <div class="row" style="padding-top:100px;">
 <div class="col-sm-4"></div>
<div class="col-sm-4" style="background:transparent; box-shadow: -1px 1px 50px 10px black;background-attachment: fixed; border-radius: 20px;background-color:rgba(0,0,0,0.5);padding: 15px;min-height: 180px;border: 5px solid #06c971;">
		 <h1 class="text-center" style="color:white">Enquiry Box</h1><hr>
		
		    <form  method="post">
                <p style="background:#06c971; color: white;font-size: 25px;text-align: center;font-family: fantasy;margin-top: 8px;"class="p">May I help you?</p>
                <input type="text" class="form-control" name="name" placeholder="Name" style="margin-bottom: 5px;margin-top: 8px;"/>
                <input type="email" class=" form-control" name="email" placeholder="Enter your Email"style="margin-bottom: 5px;margin-top: 8px;"/>
                <input type="text" class="form-control" name="mob" placeholder="Mobile number"style="margin-bottom: 5px;margin-top: 8px;"/>
                <textarea style="margin-bottom: 8px; resize:none;margin-top: 8px;" class="form-control" rows="3" name="message" placeholder="Type your Message  here.">
                </textarea>
                <input type="submit" name="submit" class=" btn form-control" style="background: #06c971; text-decoration: none;color: white;"/>
            
        </form> 
		 </div> 
		<div class="col-sm-4"></div>
		</div>
		</body>
</html>

