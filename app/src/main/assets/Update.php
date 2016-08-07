<?php 
	include 'anima_api.php';
	$id = $_REQUEST['id'];
	$name = $_REQUEST['pic_name'];
	$author = $_REQUEST['pic_author'];
	$year = $_REQUEST['pic_year'];
	$material = $_REQUEST['pic_material'];
	$size = $_REQUEST['pic_size'];
	$museum = $_REQUEST['pic_museum'];
	
	
// 	$sql = "INSERT INTO picture (pic_name,pic_author,pic_year,pic_material,pic_size,pic_museum) 
// 	VALUES ('{$name}','{$author}','{$year}','{$material}','{$size}','{$museum}')";
	
	$sql = "UPDATE picture SET pic_name='{$name}', pic_author='{$author}',pic_year='{$year}',
	pic_material='{$material}',pic_size='{$size}',pic_museum='{$museum}'  WHERE id={$id}";
	
	$rs = mysqli_query($link, $sql);
	mysqli_close($link);
	
	header("Location: anima_CRUD.php");
	
?>