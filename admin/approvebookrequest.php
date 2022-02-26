<?php

include("../main/data_class.php");
if (!isset($_SESSION['id'])) {
    header('location: index.php?msg=Fill Credentials');
}

$request=$_GET['reqid'];
$book=$_GET['book'];
$userselect= $_GET['userselect'];
$getdate= date("d/m/Y");
$days= $_GET['days'];

$returnDate=Date('d/m/Y', strtotime('+'.$days.'days'));

$obj=new data();
$obj->setconnection();
$obj->issuebookapprove($book,$userselect,$days,$getdate,$returnDate,$request);
?>
