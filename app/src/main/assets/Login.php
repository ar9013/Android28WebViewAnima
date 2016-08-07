<?php
	session_start();
	include 'anima_api.php';	// $link
	
	$account = $_REQUEST['account'];
	$passwd = $_REQUEST['passwd'];
	$sql = "SELECT * FROM member WHERE m_account='{$account}'" .
			" and m_passwd='{$passwd}'";
	$rs = mysqli_query($link, $sql);
	$count = mysqli_num_rows($rs);
	if ($count>0){
		$_SESSION['key'] = 'ok';
		header('Location: anima_CRUD.php');
	}else{
?>
	<meta content='10; url=anima_Login.php' http-equiv='refresh' />
	帳號/密碼錯誤
<?php 
	}
?>