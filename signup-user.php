<?php require_once 'config.php';?>

<?php require_once BL.'functions/validate.php';?>
<?php require_once BL.'header.php';?>

<link rel="stylesheet" href="<?php echo ASSETS.'css/bootstrap.min.css';?>">
<link rel="stylesheet" href="<?php echo ASSETS.'style.css';?>">


<?php





if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];

if(checkEmpty($name) && checkEmpty($email) && ($password)){
    if(validEmail($email)){
        $newpassword=password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (`User_Name`,`User_Email`,`User_Password`)
        VALUES ('$name','$email','$password') ";
       
       if ($conn->query($sql) === TRUE) {
        $success_message= "successfully registered";
        header("Refresh:2; url=index.php");
      } else
       {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
        
        
     
   
      

     }


else{
    $error_message='Please Type Correct Email';
}


}

else{
    $error_message='Please Fill All filds';
}
 require_once '../medical/functions/messages.php';

}



?>
<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Sign up </h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label >Name </label>
                <input type="text" name="name" class="form-control" >
            </div>

            <div class="form-group">
                <label >Email </label>
                <input type="email" name="email" class="form-control" >
            </div>

            <div class="form-group">
                <label >Password </label>
                <input type="password" name="password" class="form-control" >
            </div>

            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>

    <?php require_once BL.'user-footer.php';?>