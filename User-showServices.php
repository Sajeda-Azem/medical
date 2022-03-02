<?php require_once 'config.php';?>

<?php require_once BL.'functions/validate.php';?>
<?php require_once BL.'header.php';?>

<link rel="stylesheet" href="<?php echo ASSETS.'css/bootstrap.min.css';?>">
<link rel="stylesheet" href="<?php echo ASSETS.'style.css';?>">



   <div class="container">

<div class="row">

<div class="col-lg-4 col-sm-6">
    <div class="showServices">
<img src="images/a1.png" width="150" hight="150">
<?php $data = getRows('services');?>
<?php foreach($data as $row){   ?>
    <?php 
if($row['Serv_Name']=="Cardiology"){

    $row['Serv_ID'];
?>  
<a href="<?php echo'addOrder.php?id='.$row['Serv_ID']; ?>"><h4>Cardiology</h4></a>

<?php

}


}
?>



    </div>
                </div>
    <div class="col-lg-4 col-sm-6">
    <div class="showServices">
<img src="images/pcr-test.png" width="150" hight="150">
<?php $data = getRows('services');?>
<?php foreach($data as $row){   ?>
    <?php 
if($row['Serv_Name']=="Covid19"){

    $row['Serv_ID'];
?>  
<a href="<?php echo'addOrder.php?id='.$row['Serv_ID'];?>"><h4>Covid19</h4></a>

<?php
}


}

?>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6">
    <div class="showServices">
<img src="images/nurse.png" width="150" hight="150">
<?php $data = getRows('services');?>
<?php foreach($data as $row){   ?>
    <?php 
if($row['Serv_Name']=="nursing"){

    $row['Serv_ID'];
?>  
<a href="<?php echo'addOrder.php?id='.$row['Serv_ID'];?>"><h4>Nursing</h4></a>

<?php
}


}

?>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6">
    <div class="showServices">
<img src="images/pills2.png" width="150" hight="150">
<?php $data = getRows('services');?>
<?php foreach($data as $row){   ?>
    <?php 
if($row['Serv_Name']=="Pharmaceutical care"){

    $row['Serv_ID'];
?>  
<a href="<?php echo'addOrder.php?id='.$row['Serv_ID'];?>"><h4>Pharmaceutical care</h4></a>

<?php
}


}

?>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6">
    <div class="showServices">
<img src="images/blood-test.png" width="150" hight="150">
<?php $data = getRows('services');?>
<?php foreach($data as $row){   ?>
    <?php 
if($row['Serv_Name']=="laboratory"){

    $row['Serv_ID'];
?>  
<a href="<?php echo'addOrder.php?id='.$row['Serv_ID'];?>"><h4>laboratory</h4></a>

<?php
}


}

?>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6">
    <div class="showServices">
<img src="images/X-ray2.png" width="160" hight="160">
<?php $data = getRows('services');?>
<?php foreach($data as $row){   ?>
    <?php 
if($row['Serv_Name']=="X-ray"){

    $row['Serv_ID'];
?>  
<a href="<?php echo'addOrder.php?id='.$row['Serv_ID'];?>"><h4>X-ray</h4></a>

<?php
}


}

?>
    </div>
  </div>

</div>

   </div>




   <?php require_once BL.'user-footer.php';?>