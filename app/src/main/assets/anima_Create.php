<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset= "utf-8" />
 
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    </head>
    
    <body>
    <div class="container">
    <div class="row" align="center">
                <h3>新增名畫資料</h3>
            </div>
<form action='Create.php' >
	<table class="table table-striped table-bordered">
		<tr>
			<th>畫名</th>
			<td><input type='text' name='pic_name' /></td>
		</tr>
		<tr>
			<th>作者</th>
			<td><input type='text' name='pic_author' /></td>
		</tr>
		<tr>
			<th>年代</th>
			<td>
				<input type='text' name='pic_year' />
			</td>
		</tr>
		<tr>
			<th>畫布材質</th>
			<td>
				<input type='text' name='pic_material' />
			</td>
		</tr>
		
		<tr>
			<th>原作尺寸</th>
			<td>
				<input type='text' name='pic_size' />
			</td>
		</tr>
		<tr>
			<th>館藏處</th>
			<td>
				<input type='text' name='pic_museum' />
			</td>
		</tr>
		<tr>
			<td colspan='2' align="center">
				<button type="submit" class="btn btn-success">Create</button>
     <a class="btn btn-info" href="anima_CRUD.php">Back</a>
			</td>
		</tr>
		
	</table>
</form>
</div>
</body>
</html>
