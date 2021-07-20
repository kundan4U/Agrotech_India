
<?php

include("includes/connect.php");

if(isset($_POST['submit']))
{
	$f_id = $_POST['fid'];
	$f_name = $_POST['fname'];
	$f_price = $_POST['fprice'];
	$f_type = $_POST['fquantity'];
	$f_ctegary = $_POST['ccropused'];
	$fdescription = $_POST['desc'];

	$sql = "INSERT INTO `fertilizers`(`fertilizer_id`, `fertilizer_name`, `fertilizer_price`, `ferilizer_quantity`, `crop_used`, `fertilizer_discription`) VALUES ('$f_id','$f_name','$f_price','$f_type','$f_ctegary','$fdescription')";

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
                        <h1 class="text-center"style="color:#99ff99;">Add Fertilizers</h1><hr/>
                        <form action="#" method="post">
						<label style="color:whitesmoke;">Fertilizer Id</label>
							 <input type="text" name="fid" placeholder=" Fertilizer Id" required="required" class="form-control"/>
					         <label style="color:whitesmoke;">Fertilizer Name</label>
							 <input type="text" name="fname" placeholder="Fertilizer Name" class="form-control"/>
							  <label  style="color:whitesmoke;">Price</label>
							  <input type="number" name="fprice" placeholder=" Fertilizer Price" class="form-control"/>
							  <label  style="color:whitesmoke;">Fertilizer Quantity</label>
							  <input type="number" name="fquantity" placeholder="Fertilizer Quantity" class="form-control"/>
							
							  <label  style="color:whitesmoke;">Used For Crops</label>
							  <select placeholder="Price" class="form-control" name="ccropused">
							  	<option value="Crops 1">Crops 1</option>
							  	<option value="Crops 2">Crops 2</option>
							  	<option value="Crops 3">Crops 3</option>
							  	<option value="Crops 4">Crops 4</option>
							  	<option value="Crops 5">Crops 5</option>
							  	<option value="Crops 6">Crops 6</option>
							  </select>
							  <label  style="color:whitesmoke;">Description</label>
							  <textarea class="form-control" name="desc" placeholder="Type Your Description Here..."></textarea></br>
                            <input type="submit" value="Add Now" class="btn btn-success" name = "submit"/>
                        </form>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
			</div>
		  </div>
	   </body>
</html>
