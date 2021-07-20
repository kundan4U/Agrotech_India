<?php

include("includes/header.html");
?>
  <!------ start menu------>
   <div class="row menu">
  <div class="col-sm-4 text-center" style="color:white;font-size:22px; padding-top:5px; font-family:Comic Sans MS;font-weight:bold;"><marquee scrollamount="3" behavior="alternate" onmouseover="stop()" onmouseout="start()" >Agriculture India</marquee></div>
  <div class="col-sm-8">
   <div class="navbar">
  <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="seeddetails.php"><i class="fa fa-picture-o"></i> Seeds</a> 
  <a href="cropdetails.php"><i class="fa fa-fw fa-envelope"></i>Crops</a> 
  <a href="fertilizerdetails.php"><i class="fa fa-info-circle"></i>Fertilizer</a>
</div>
  </div>
   </div>
   <!------ end menu------>
  <?php 
    
     include("includes/slider.html");


   include("includes/connect.php");

   $sql = "SELECT * FROM `fertilizers`";

    $run = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($run))
    {

      ?>

     <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Fertilizer Id</th>
      <th scope="col">Fertilizer Name</th>
      <th scope="col">Fertilizer Price</th>
      <th scope="col">Fertilizer Quantity</th>
      <th scope="col">Used For Crops</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row"><?php echo $row['fertilizer_id'];?></td>
      <td><?php echo $row['fertilizer_name'];?></td>
      <td><?php echo "₹" ;echo $row['fertilizer_price']; ?></td>
      <td>@<?php echo $row['ferilizer_quantity'];?></td>
      <td>@<?php echo $row['crop_used'];?></td>
      <td>@<?php echo $row['fertilizer_discription'];?></td>
    </tr>
  </tbody>
</table>

    <?php
      
    }

   ?>

