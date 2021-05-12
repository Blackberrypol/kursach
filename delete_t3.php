<?php
include("dbconnect.php");
$getid = $_GET['deleteid'];
$sel = "DELETE FROM `articles3` WHERE `id` = '$getid'";
$qry = mysqli_query($mysqli, $sel);
if($qry) {
 header("location: ".getenv("SITE_ADRESS")."/t3.php");
}

?>