<?php require 'config.php';?>

<?php require_once BL.'functions/validate.php';?>
<?php require_once BL.'header.php';?>









<?php
ob_start();
if (isset($_SESSION['user_name'])) {
  //  ^ redirect to login if the variable is NOT set
header("location:addOrder.php");
  exit;
}?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/style.css" >

    <title>Dashboard | Login</title>
    
  </head>
  <body>

<?php

$email="";
$password="";

if(isset($_POST['submit']))
{
  
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(checkEmpty($email)&& checkEmpty($password))
    {


if(validEmail($email))
{
   
  $check=[];
 
  
   
    $check=getRow('user','User_Email',$email,'User_Password',$password);
 
    if ($check) 
    {
        
        
            $_SESSION['User_name'] = $check['User_Name'];
            $_SESSION['User_email'] = $check['User_Email'];
    $_SESSION['User_id'] = $check['User_ID'];

    
           header('Location:addOrder.php');
    

      //$conn->close();
    }
    if(validpassword('User_Password',$password)==0){
      $error_message="Enter Correct Password";
    }


}
else {
   echo"please enter correct data "; 
}




     

    }
    
    else{
        $error_message="fill all feilds ";
    }
    require_once '../medical/functions/messages.php';
    
}


?>



        <div class="cont-login d-flex align-items-center justify-content-around">

     
             
         
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="border p-5" >
                <div class="row">
                    
                    <?php  require BL.'functions/error.php'; ?>
                    <div class="col-sm-12 ">
                        <h3 class="text-center p-3 text-white">Login</h3>
                    </div>
                    <div class="col-sm-6 offset-sm-3 ">
                        <div class="form-group">
                            <label >Email </label>
                            <input type="email" name="email" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label >Password </label>
                            <input type="password" name="password" class="form-control" >
                        </div>

                        <div class="form-group">
                           
                            <input type="submit" name="submit" class="form-control btn btn-info btn-lg">
                        </div>
                    </div>
                </div>
                
            </form>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo ASSETS; ?>/js/jquery-3.4.1.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/popper.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/bootstrap.min.js" ></script>
    <?php require_once BLA.'footer.php';?>



  </body>
</html>

<?php require_once BL.'user-footer.php';?>