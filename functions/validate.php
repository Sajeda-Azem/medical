<?php

function checkEmpty($value)
{
    if(empty($value)){
        return false;

    }

    else{
        return true;
    }
}


function validEmail($email){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        return false;

    }
    return true;

}
    function validpassword($password,$pass)
    {
        if($password != $pass)
        {
            return false;

        }

        return true;


    }



    function checkless($value,$min){

if(trim(strlen($value)) <= $min){
    return false;

}
return true;




    }


?>