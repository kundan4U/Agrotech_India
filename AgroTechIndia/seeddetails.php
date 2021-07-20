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

   $sql = "SELECT * FROM `seeds`";

    $run = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($run))
    {

      ?>

     <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Seed Id</th>
      <th scope="col">Seed Name</th>
      <th scope="col">Seed Price</th>
      <th scope="col">Seed Type</th>
      <th scope="col">Seed Categary</th>
      <th scope="col">Seed Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row"><?php echo $row['seed_id'];?></td>
      <td><?php echo $row['seed_name'];?></td>
      <td><?php echo "₹" ;echo $row['seed_price'];?></td>
      <td>@<?php echo $row['seed_type'];?></td>
      <td>@<?php echo $row['seed_categary'];?></td>
      <td>@<?php echo $row['seed_discription'];?></td>
    </tr>
  </tbody>
</table>

    <?php
      
    }

   ?>