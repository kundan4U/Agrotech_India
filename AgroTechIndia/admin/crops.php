
<?php

include("includes/connect.php");

if(isset($_POST['submit']))
{
	$crop_id = $_POST['cid'];
	$crop_name = $_POST['cname'];
	$crop_price = $_POST['cprice'];
	$c_quality = $_POST['cquality'];
	$cdescription = $_POST['desc'];

	$sql = "INSERT INTO `crops`(`crop_id`, `crop_name`, `crop_price`, `crop_qaulity`, `crop_discription`) VALUES ('$crop_id','$crop_name','$crop_price','$c_quality','$cdescription')";

	$run = mysqli_query($conn,$sql);

	if($run)
	{

        
        echo "<script type='text/javascript'>
        	alert('Data Saved Successfully !');

        </script>";

      }
else
{
	 echo "<script type='text/javascript'>
        	alert('Data  Not Saved  !');

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
	 body
	 {
	  background:#06c971;
	 }
	</style>
   </head>
       <body>
	       <div class="container-fluid">
			    <div class="row" style="padding-top: 100px;">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6" style="background:transparent; box-shadow: -1px 1px 30px 5px black;background-attachment: fixed; border-radius: 20px;background-color:rgba(0,0,0,0.5);padding: 15px;min-height: 180px;border: 3px solid whitesmoke;">
                        <h1 class="text-center"style="color:#99ff99;">Add Crops</h1><hr/>
                        <form action="#" method="post">
						<label style="color:whitesmoke;">Crop Id</label>
							 <input type="text" name="cid" placeholder=" Enter Seeds Id" required="required" class="form-control"/>
					         <label style="color:whitesmoke;">Crop Name</label>
							 <input type="text" name="cname" required="required" placeholder=" Enter Seeds Name" class="form-control"/>
							  <label  style="color:whitesmoke;">Price</label>
							  <input type="number" name="cprice" required="required" placeholder="Price" class="form-control"/><br>
							 <label  style="color:whitesmoke;">Quality</label>
							  	
							  <select placeholder="Quantity" class="form-control" name="cquality">
							  	<option value="High Quality">High Quality</option>
							  	<option value="Medium Quality">Medium Quality</option>
							  	<option value="Poor Quality">Poor Quality</option>
							  </select>

							
							  <label  style="color:whitesmoke;">Description</label>
							  <textarea class="form-control" required="required" name="desc" placeholder="Type Your Description Here..."></textarea></br>
                            <input type="submit"  name="submit" value="Add Now" class="btn btn-success"/>
                        </form>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
			</div>
		  </div>
	   </body>
</html>
