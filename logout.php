<?php
	require_once ('class/SessionClas.php');
	session_destroy();
	header("location:index.php?content=homepage");
	
	
?>