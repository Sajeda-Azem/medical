<?php require_once 'config.php';?>

<?php require_once BL.'functions/validate.php';?>
<?php require_once BL.'header.php';?>

<link rel="stylesheet" href="<?php echo ASSETS.'css/bootstrap.min.css';?>">
<link rel="stylesheet" href="<?php echo ASSETS.'style.css';?>">

<meta name='viewport' content='width=device-width, initial-scale=1'>


<div class="registration">
<div class="row">
<a href="<?php echo'signup-user.php'; ?>" class="btn btn-info btn-lg" >Sign UP</a>
<a href="<?php echo'login-user.php'; ?>" class="btn btn-info btn-lg">Login</a>
</div>

</div>

<div class="d-flex justify-content-center">
<h5>And when I am ill, it is He who cures me</h5>
</div>
<div class="header-image">

<img class="img-responsive" src="images/medical.jpg"   width="90%" height="700"> 
</div>

<div class="container-flex detailes">
    <div class="row">
        <div class="col-sm-3">
        <img class="img-responsive" src="images/calendar.png"  width="150" hight="150">
</div>
</div>
</div>

<?php require_once BL.'user-footer.php';?>