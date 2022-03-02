<?php
session_start();


define("BURL","http://localhost:8081/medical/");
define("BURLA","http://localhost:8081/medical/admin/");
define("ASSETS","http://localhost:8081/medical/assets/");

define("BL",__DIR__.'/');
define("BLA",__DIR__.'/admin/');


//connect to database

require_once(BL.'functions/db.php');
?>