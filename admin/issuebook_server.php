<?php

include("../main/data_class.php");
if (!isset($_SESSION['id'])) {
    header('location: index.php?msg=Fill Credentials');
}

$book=$_POST['book'];
$userselect= $_POST['userselect'];
$getdate= date("d/m/Y");
$days= $_POST['days'];

$returnDate=Date('d/m/Y', strtotime('+'.$days.'days'));

$obj=new data();
$obj->setconnection();
$obj->issuebook($book,$userselect,$days,$getdate,$returnDate);
?>