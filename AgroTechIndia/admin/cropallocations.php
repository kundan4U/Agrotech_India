<?php
include("includes/connect.php");

if(isset($_POST['submit']))
{
	$whouseid = $_POST['whouseid'];
	$whousename =$_POST['whousename'];
	$whousecapacity = $_POST['whousecapacity'];
	$csid = $_POST['csid'];
	$csname =$_POST['csname'];
	$csqauntity =$_POST['csqauntity'];
	$state =$_POST['state'];
	$dist =$_POST['dist'];
	$area =$_POST['area'];
	
	$sql = "INSERT INTO `cropallocation`(`wh_id`, `wh_name`, `wh_capacity`, `cs_id`, `cs_name`, `cs_qauntity`, `wh_state`, `wh_dist`, `wh_area`) 
	VALUES ('$whouseid','$whousename','$whousecapacity','$csid','$csname','$csqauntity','$state','$dist','$area')";
	
	$run = mysqli_query($conn,$sql);
	
	if($run)
	{
		echo "<script type='text/javascript'>
      
      alert('Data saved Successfully');
    </script>";
	}
	else
	{
	   echo "<script type='text/javascript'>
      
      alert('Data not saved');
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
                        
                         
                         <!---------- Form start here--->
                        <form action="#" method="post">
						<label style="color:whitesmoke;">WareHouse Id</label>
							 <input type="text" name="whouseid" placeholder="WareHouse Id" required="required" class="form-control"/><br>
					         <label style="color:whitesmoke;">WareHouse Name</label>
							 <input type="text" name="whousename" placeholder="WareHouse Name" class="form-control"/><br>
							  <label  style="color:whitesmoke;">WareHouse Capacity</label>
							  <input type="number" name="whousecapacity" placeholder="WareHouse Capacity" class="form-control"/><br>
							  <label  style="color:whitesmoke;">Crop/Seeds Id</label>
							  <input type="text" name="csid" placeholder="Crop/Seeds Id" class="form-control"/><br>
							 <label  style="color:whitesmoke;">Crop/Seeds Name</label>
							  <input type="text" name="csname" placeholder="Crop/Seeds Name" class="form-control"/><br>
							 <label  style="color:whitesmoke;">Crop/Seeds Quantity</label>
							  <input type="number" name="csqauntity" placeholder="Crop/Seeds Quantity" class="form-control"/><br>
							  <label  style="color:whitesmoke;">WareHouse State</label><br>
							  <select class="form-control" name="state">
							  	<option>SELECT STATE</option>
							  	<option value="UTTAR PRADESH">UTTAR PRADESH</option>
							  	<option value="UTTARAKHAND">UTTARAKHAND</option>
							  	<option value="BIHAR">BIHAR</option>
							  	<option value="MADHYA PRADESH">MADHYA PRADESH</option>
							  	<option value="RAJSTHAN">RAJSTHAN</option>
							  	<option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
							  	<option value="HIMANCHAL PRADESH">HIMANCHAL PRADESH</option>
							  	<option value="DELHI">DELHI</option>
							  </select><br>
							 <label  style="color:whitesmoke;">WareHouse Dist.</label>
							 <select class="form-control" name="dist">
							 	<option>SELECT DIST</option>
							  <option value="AGRA">AGRA</option>
							  	<option value="ALLAHABAD">ALLAHABAD</option>
							  	<option value="ALIGARH">ALIGARH</option>
							  	<option value="KANPUR">KANPUR</option>
							  	<option value="FATEHPUR">FATEHPUR</option>
							  	<option value="VARANASI">VARANASI</option>
							  	<option value="MAU">MAU</option>
							  	<option value="AZAMGARH">AZAMGARH</option>
							  </select><br>
							 <label  style="color:whitesmoke;">WareHouse Area</label>
							 <select class="form-control" name="area">
							 	<option>SELECT AREA</option>
							  <option value="ALINAGAR">ALINAGAR</option>
							  	<option value="KOLAURA">KOLAURA</option>
							  	<option value="PALHI">PALHI</option>
							  	<option value="CHIRAIYAKOT">CHIRAIYAKOT</option>
							  </select><br>
							 
                            <input type="submit" name="submit" value="Add Now" class="btn btn-success"/>
                        </form>

                        <!---------- Form end here--->
                    </div>
                    <div class="col-sm-3"></div>
                </div>
			</div>
		  </div>
	   </body>
</html>
