
<html>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 0 4px;
}


.column {
  -ms-flex: 25%;
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}


@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}


@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>
<body style="background-image:url('Images/dd.jpg')">

<!-- Header -->
<div class="header">
  <h1> Image  Gallary</h1>
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="img/Beej.jpg" style="width:100%">
    <img src="img/bio.jpg" style="width:100%">
    <img src="img/kisan.jpg" style="width:100%">
    <img src="img/plant.jpg" style="width:100%">
    <img src="img/sin.jpg" style="width:100%">
    <img src="img/tool.jpg" style="width:100%">
    <img src="img/tool.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="img/beej.jpg" style="width:100%">
    <img src="img/bio.jpg" style="width:100%">
    <img src="img/plant.jpg" style="width:100%">
    
    <img src="img/tool.jpg" style="width:100%">
    <img src="img/beej.jpg" style="width:100%">
  </div>  
  <div class="column">
    <img src="img/plant.jpg" style="width:100%">
    <img src="img/tool.jpg" style="width:100%">
    <img src="img/h.jpg" style="width:100%">
    <img src="img/tool.jpg" style="width:100%">
    <img src="img/g.jpg" style="width:100%">
    <img src="img/f.jpg" style="width:100%">
    <img src="img/tool.jpg" style="width:100%">

    <img src="img/tool.jpg" style="width:100%">
  </div>
  <div class="column">
     <img src="img/tool.jpg" style="width:100%">
    <img src="img/beej.jpg" style="width:100%">
    <img src="img/bio.jpg" style="width:100%">
    <img src="img/plant.jpg" style="width:100%">
    
    <img src="img/tool.jpg" style="width:100%">
    <img src="img/beej.jpg" style="width:100%">
  </div>
</div>

</body>
</html>
