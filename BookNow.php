

<?php require_once 'config.php';?>

<?php require_once BL.'functions/validate.php';?>
<?php require_once BL.'header.php';?>

<link rel="stylesheet" href="<?php echo ASSETS.'css/bootstrap.min.css';?>">
<link rel="stylesheet" href="<?php echo ASSETS.'style.css';?>">


<?php

if(isset($_POST['submit'])){
    $city_name=$_POST['city'];
   $service_name=$_POST['service'];
   $name=$_POST['name'];
   $phone=$_POST['phone'];
   $email=$_POST['email'];
   $note=$_POST['notes'];
   $resultA=getID('cities','City_Name',$city_name);
   $resultB=getIDx('services','Serv_Name',$service_name);
   if(checkEmpty($name) && checkEmpty($email)){
    if(validEmail($email)){
  
   $sql="INSERT INTO orders (`Order_Name`,`Order_Mobile`,`Order_Email`,`Order_Notes`,`Order_Serv_ID`,`Order_City_ID`)
   VALUES('$name','$phone','$email','$note','$resultB','$resultA') ";
  
  $insert_Order=db_insert($sql);
  
}

else{
 $error_message='Please Type Correct Email';
}


}

else{
 $error_message='Please Fill All fields';
}
require_once BL.'functions/messages.php';

}
?>





<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3  text-white">Booking</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <div class="form-group">
                <label >Choose Servise </label>
                <select name="service" class="form-control">
                    
            
              <?php $sql="SELECT Serv_Name FROM services ";
              
              $result=db_getfield($sql);
              while($row=mysqli_fetch_array($result)){
               
                  echo "<option value='" .$row['Serv_Name']."'>".$row['Serv_Name']."</option>";
              }
              
              
              ?> 
              </select>
 
            </div>
            <div class="form-group">
            <label >Choose City </label>
            <select name="city" class="form-control">
            
            <?php $sql="SELECT City_Name FROM cities ";
            
            $result=db_getfield($sql);
            while($row=mysqli_fetch_array($result)){
                echo "<option value='" .$row['City_Name']."'>".$row['City_Name']."</option>";
            }
            
            
            ?> 
            </select>
            </div>


            <div class="form-group">
                <label >Type your name </label>
                <input type="text" name="name" class="form-control" >
            </div>

            <div class="form-group">
                <label >Email </label>
                <input type="email" name="email" class="form-control" >
            </div>

            <div class="form-group">
                <label >Phone Number </label>
                <input type="tel" name="phone" class="form-control" >
            </div>

            <div class="form-group">
                <label >type your notes </label>
                <textarea name="notes" class="form-control" ></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>





<?php require_once BL.'user-footer.php';?>