<?php

	session_start();

    setcookie("jwt", false);


	header("location: ".$_SERVER["HTTP_REFERER"]);
	die();

?>