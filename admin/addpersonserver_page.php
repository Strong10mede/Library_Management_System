<?php

include("../main/data_class.php");
if (!isset($_SESSION['id'])) {
    header('location: index.php?msg=Fill Credentials');
}

$addnames=$_POST['addname'];
$addpass= $_POST['addpass'];
$addemail= $_POST['addemail'];
$type= $_POST['type'];


$obj=new data();
$obj->setconnection();
$obj->addnewuser($addnames,$addpass,$addemail,$type);

?>
