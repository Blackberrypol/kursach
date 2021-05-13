<?php

	session_start();

    setcookie("jwt", false, 1,'/');

	header("location: ".$_SERVER["HTTP_REFERER"]);
	die();

?>