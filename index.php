<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class= "logo-image">
    <img src="https://studentsjmcss.sharepoint.com/sites/TBD261/Shared%20Documents/General/Wavy%20Surfboard%20Logo%201%20(1).png" width="150" height="50" alt="logo-image">
    </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <div class="dropdown show">
  <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Shop
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="surfboard.php">Surfboards</a>
    <a class="dropdown-item" href="gear.php">Equipment</a>
  </div>
</div>
      <a class="nav-item nav-link" href="destinations.php">Destinations</a>
      <a class="nav-item nav-link" href="review.php">Reviews</a>
      <a class="nav-item nav-link" href="order.php">Orders</a>
    </div>
  </div>
</nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Wavy</h1>
    <p class="lead">Surfshop</p>
  </div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
    <div class="card" style="width: 18rem;">
    <img src="https://doorcountypulse.com/wp-content/uploads/2018/08/Surfing-Ryan-Heise-LVP7.jpg" class="card-img-top" alt="Surfboard_image">
  <div class="card-body">
  <h5 class="card-title">Surfboards</h5>
    <p class="card-text">Here are some Surfboards for you to buy</p>
    <a href="surfboard.php" class="btn btn-dark">Surfboards</a>
  </div>
</div>
		</div>
		<div class="col-md-3">
    <div class="card" style="width: 18rem;">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRAzveedgXWU1uTfyMjBCzRQ-NMecL40lkDGw&usqp=CAU" class="card-img-top">
  <div class="card-body">
  <h5 class="card-title">Surf Equipment</h5>
    <p class="card-text">Here you will find all the equipment you will need to surf </p>
    <a href="gear.php" class="btn btn-dark">Surf Equipment</a>
  </div>
</div>
		</div>
		<div class="col-md-3">
    <div class="card" style="width: 18rem;">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRNymp1pAuMK5Z0whs4TEGqKNexrcNI11RxDA&usqp=CAU" class="card-img-top">
  <div class="card-body">
  <h5 class="card-title">Destinations</h5>
    <p class="card-text">Here are some Destinations for you to go to</p>
    <a href="destinations.php" class="btn btn-dark">Destinations</a>
  </div>
</div>
		</div>
		<div class="col-md-3">
    <div class="card" style="width: 18rem;">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScVCpVNqyNZzt3rglE_lLPf50k6Kn-zqjaeQ&usqp=CAU" class="card-img-top">
  <div class="card-body">
  <h5 class="card-title">Review</h5>
    <p class="card-text">Hey do you have any questions? Connect with us today!</p>
    <a href="review.php" class="btn btn-dark">Reviews</a>
  </div>
</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>