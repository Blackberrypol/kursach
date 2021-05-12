<?php
include("dbconnect.php");
$getid = $_GET['deleteid'];
$sel = "DELETE FROM `articles1` WHERE `id` = '$getid'";
$qry = mysqli_query($mysqli, $sel);
if($qry) {
 header("location: ".getenv("SITE_ADRESS")."/t1.php");

}

?>