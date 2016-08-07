<?php 
	include 'anima_api.php';
	
	$name = $_REQUEST['m_name'];
	$account = $_REQUEST['m_account'];
	$passwd = $_REQUEST['m_passwd'];

	
	$sql = "INSERT INTO member (m_name,m_account,m_passwd) 
	VALUES ('{$name}','{$account}','{$passwd}')";
	
	$rs = mysqli_query($link, $sql);
	mysqli_close($link);
	
	header("Location: anima_Login.php");
	
?>