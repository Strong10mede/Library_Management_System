<?php

session_start();


include("../main/data_class.php");

if (!isset($_SESSION['id'])) {
    header('location: ../index.php?msg=Fill Credentials');
}


$userid=$_GET['userid'];
$bookid=$_GET['bookid'];





$obj=new data();
$obj->setconnection();
$obj->requestbook($userid,$bookid);

?>