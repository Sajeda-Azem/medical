<?php require_once 'config.php';?>

<?php require_once BL.'functions/validate.php';?>
<?php require_once BLA.'header.php';?>

<link rel="stylesheet" href="<?php echo ASSETS.'css/bootstrap.min.css';?>">
<link rel="stylesheet" href="<?php echo ASSETS.'style.css';?>">




<div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">View All Orders</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Email</th>
                    <th scope="col">Service Name</th>
                    <th scope="col">City Name</th>
                    <th scope="col">Notes</th>
       
                </tr>
            </thead>
            <tbody>
                <?php $data = getRows('orders'); $x=1;  ?>
                <?php foreach($data as $row){   ?>
                <tr class="text-center">
                    <td scope="row"><?php echo $x; ?></td>
                    <td class="text-center"> <?php echo $row['Order_Name']; ?>  </td>
                    <td class="text-center"> <?php echo $row['Order_Mobile']; ?>  </td>
                    <td class="text-center"> <?php echo $row['Order_Email']; ?>  </td>
                    <?php $serv_ID=$row['Order_Serv_ID'];
                    
                    $sql="SELECT * FROM services WHERE Serv_ID='$serv_ID'";
                    $result=getName($sql);
                    
                    ?>
                    <td class="text-center"> <?php echo $result; ?>  </td>
                   <?php
                   
                   $city_ID=$row['Order_City_ID'];
                   $sql=" SELECT * FROM cities WHERE City_ID='$city_ID'";
                   
                   $resultX=getNamex($sql);
                   ?>
                    <td class="text-center"> <?php echo $resultX; ?>  </td>
                    <td class="text"> <?php echo $row['Order_Notes']; ?>  </td>
                    
                    
                    <td class="text-center">
                       
                        <a href="<?php echo BURLA.'delete_Order.php?id='.$row['Order_ID'];?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php $x++; } ?>
               
            </tbody>
        </table>
    </div>


<?php require_once BL.'user-footer.php';?>