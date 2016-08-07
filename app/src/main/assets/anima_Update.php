<?php 
include 'anima_api.php';
session_start();

if (!isset($_REQUEST['editno'])) header('Location: anima_Login.php');

$editno = $_REQUEST['editno']; //傳過來的 修改id 用一個變恕存著。

$sql = "SELECT * FROM picture WHERE id={$editno}"; //sql 語法 從資料庫中撈出該id 的那一筆資料

$rs = mysqli_query($link, $sql); // 執行sql 語法
$row = mysqli_fetch_array($rs); //將執行的結果放到 row 陣列中

?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset= "utf-8" />
 
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    </head>
    
    <body>
    <div class="container">
    <div class="row" align="center">
                <h3>修改名畫資料</h3>
            </div>
<form action='Update.php' >
<input type='hidden' name='id' value='<?php echo $row['id']; ?>' />
	<table class="table table-striped table-bordered">
		<tr>
			<th>畫名</th>
			<td><input type='text' name='pic_name' value='<?php echo $row['pic_name']; ?>'/></td>
		</tr>
		<tr>
			<th>作者</th>
			<td><input type='text' name='pic_author' value='<?php echo $row['pic_author']; ?>' /></td>
		</tr>
		<tr>
			<th>年代</th>
			<td>
				<input type='text' name='pic_year' value='<?php echo $row['pic_year']; ?>'/>
			</td>
		</tr>
		<tr>
			<th>畫布材質</th>
			<td>
				<input type='text' name='pic_material' value='<?php echo $row['pic_material']; ?>'/>
			</td>
		</tr>
		
		<tr>
			<th>原作尺寸</th>
			<td>
				<input type='text' name='pic_size' value='<?php echo $row['pic_size']; ?>'/>
			</td>
		</tr>
		<tr>
			<th>館藏處</th>
			<td>
				<input type='text'   name='pic_museum' value='<?php echo $row['pic_museum']; ?>'/>
			</td>
		</tr>
		<tr>
			<td colspan='2' align="center">
				<button type="submit" class="btn btn-success">Update</button>
     <a class="btn btn-info" href="anima_CRUD.php">Back</a>
			</td>
		</tr>
		
	</table>
</form>
</div>
</body>
</html>




