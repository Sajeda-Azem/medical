

<!DOCTYPE html>
<html lang="en">
    <head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap css -->
<link rel="stylesheet" href="<?php echo ASSETS.'css/bootstrap.min.css';?>">
<link rel="stylesheet" href="<?php echo ASSETS.'style.css';?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<title> Dashbord |Home Page</title>
</head>
<body>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Medical</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo BURL;?>">Home <span class="sr-only">(current)</span></a>
      </li>


      <li class="nav-item ">
        <a class="nav-link" href="<?php echo BURL.'BookNow.php';?>">Book Now </a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="<?php  echo BURL.'User-showServices.php';?>">Our Services </a>
      </li>
     
 
      <li class="nav-item ">
        <a class="nav-link" href="#">Our Doctors </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">Contact US  </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo BURL.'logout-user.php';?>">Log Out  </a>
      </li>
    


    </ul>
  </div>
</nav>

 
