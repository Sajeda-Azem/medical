<?php


$server = "localhost";
$username = "root";
$password = "";
$db = "medical";
$conn = mysqli_connect($server,$username,$password,$db);
if(!$conn)
{
    echo "Error In Connection : ".mysqli_connect_error();
    return false;
}
function db_insert($sql)
{
    global $conn;
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        return "Added Success";
    }
    return false;
}


function getName($sql){
  global $conn;
    $result = mysqli_query($conn,$sql);
   
    if($result)
    {
    
  
    $rows = [];
    if(mysqli_num_rows($result) > 0)
    {
     
       while($rows = mysqli_fetch_array($result))
       {
         return $rows['Serv_Name'];
       }
     }
    return false;
  }

}

function getNamex($sql){
  global $conn;
    $result = mysqli_query($conn,$sql);
   
    if($result)
    {
    
  
    $rows = [];
    if(mysqli_num_rows($result) > 0)
    {
     
       while($rows = mysqli_fetch_array($result))
       {
         return $rows['City_Name'];
       }
     }
    return false;
  }

}










function db_getfield($sql){
  global $conn;
  
  $result = mysqli_query($conn,$sql);
  if($result)
  {
      return $result;
  }
  return false;
}

function getID($table,$feild,$value){
  $sql="SELECT * FROM $table WHERE $feild='$value'";
  global $conn;
  
  $result = mysqli_query($conn,$sql);
  if($result)
  {
  

  $rows = [];
  if(mysqli_num_rows($result) > 0)
  {
   
     while($rows = mysqli_fetch_array($result))
     {
       return $rows['City_ID'];
     }
   }
  return false;
}
}

function getIDx($table,$feild,$value){
  $sql="SELECT * FROM $table WHERE $feild='$value'";
  global $conn;
  
  $result = mysqli_query($conn,$sql);
  if($result)
  {
  

  $rows = [];
  if(mysqli_num_rows($result) > 0)
  {
   
     while($rows = mysqli_fetch_array($result))
     {
       return $rows['Serv_ID'];
     }
   }
  return false;
}
}




function getRow($table,$feild,$value,$feildX,$valueX)
{
    global $conn;
    
    $sql="SELECT * FROM $table WHERE $feild ='$value' AND $feildX='$valueX' ";
    $result = mysqli_query($conn,$sql);
   
    if($result)
    {
    
 
    $rows = [];
    if(mysqli_num_rows($result) > 0)
    {
       //$rows[]=mysqli_fetch_assoc($result);
       while($rows = mysqli_fetch_array($result))
       {
         return $rows;
       }
     }
     else {

      return false;
    }
       
}

}   




function getRowx($table,$feild,$value)
{
    global $conn;
    
    $sql="SELECT * FROM $table WHERE $feild ='$value'  ";
    $result = mysqli_query($conn,$sql);
   
    if($result)
    {
    
 
    $rows = [];
    if(mysqli_num_rows($result) > 0)
    {
       //$rows[]=mysqli_fetch_assoc($result);
       while($rows = mysqli_fetch_array($result))
       {
         return $rows;
       }
     }
     else {

      return false;
    }
       
}

} 



function db_update($sql)
  {
    global $conn;
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        return "Added Success";
    }
    return false;
}




function getRows($table)
{
    global $conn;
    
    $sql="SELECT * FROM $table ";
    $result = mysqli_query($conn,$sql);
   
    if($result)
    {
    
 
    $rows = [];
    if(mysqli_num_rows($result) > 0)
    {
       //$rows[]=mysqli_fetch_assoc($result);
       while($row = mysqli_fetch_array($result))
       {

         $rows[]=$row;
       }
       return $rows;
    }
    else {

      return false;
    }
       
}

}

function deleteRow($sql){
  global $conn;


  $result=mysqli_query($conn,$sql);
  if($result){
    return "Detleted sucess";
  }


  return false;
}



?>
