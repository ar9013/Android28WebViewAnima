<meta charset="utf-8">
<?php
	session_start();
	include 'anima_api.php';	// $link
	
		$delno=$_REQUEST['delno'];
		
		// 將要刪除資料
		$sql = "DELETE FROM picture WHERE id={$delno}";
		mysqli_query($link, $sql);
		?>
		<script>
		location.href="anima_CRUD.php";
		alert("已成功刪除");
		</script>