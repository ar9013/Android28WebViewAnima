<?php 
	session_start();
	session_destroy();
	header('Location: anima_Index.php');
?>