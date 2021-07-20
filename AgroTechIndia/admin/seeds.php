
<?php

include("includes/connect.php");

if(isset($_POST['submit']))
{
	$seed_id = $_POST['sid'];
	$seed_name = $_POST['sname'];
	$seed_price = $_POST['sprice'];
	$s_type = $_POST['stype'];
	$s_ctegary = $_POST['scategary'];
	$sdescription = $_POST['desc'];

	$sql = "INSERT INTO `seeds`(`seed_id`, `seed_name`, `seed_price`, `seed_type`, `seed_categary`, `seed_discription`) VALUES ('$seed_id','$seed_name','$seed_price','$s_type','$s_ctegary','$sdescription')";

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
                        <h1 class="text-center"style="color:#99ff99;">Add Seeds</h1><hr/>
                        <form action="seeds.php" method="post">
						<label style="color:whitesmoke;">Seed Id</label>
							 <input type="text" name="sid" placeholder=" Enter Seeds Id" required="required" class="form-control"/>
					         <label style="color:whitesmoke;">Seed Name</label>
							 <input type="text" name="sname" placeholder=" Enter Seeds Name" required="required" class="form-control"/>
							  <label  style="color:whitesmoke;">Price</label>
							  <input type="number" name="sprice" placeholder="Price" required="required" class="form-control"/>
							  <label  style="color:whitesmoke;">Seed Type</label>
							  <select  class="form-control" name="stype">
							  	<option value="Type 1">Type 1</option>
							  	<option value="Type 2">Type 2</option>
							  	<option value="Type 3">Type 3</option>
							  </select>
							  <label  style="color:whitesmoke;">Seed Categary</label>
							  <select  class="form-control" name="scategary">
							  	<option value="Categary 1">Categary 1</option>
							  	<option value="Categary 2">Categary 2</option>
							  	<option value="Categary 3">Categary 3</option>
							  </select>
							  <label  style="color:whitesmoke;">Description</label>
							  <textarea class="form-control" name="desc" required="required" placeholder="Type Your Description Here..."></textarea></br>
                            <input type="submit"  name="submit" value="Add Now" class="btn btn-success"/>
                        </form>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
			</div>
		  </div>
	   </body>
</html>
