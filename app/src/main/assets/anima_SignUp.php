<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset= "utf-8" />
 
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    </head>
    
    <body>
    <div class="container">
    <div class="row" align="center">
                <h3>新增會員資料</h3>
            </div>
<form action='CreateMember.php' >
	<table class="table table-striped table-bordered">
		<tr>
			<th>會員姓名</th>
			<td><input type='text' name='m_name' /></td>
		</tr>
		<tr>
			<th>會員帳號</th>
			<td><input type='text' name='m_account' /></td>
		</tr>
		<tr>
			<th>會員密碼</th>
			<td>
				<input type='text' name='m_passwd' />
			</td>
		</tr>
	
		<tr>
			<td colspan='2' align="center">
				<button type="submit" class="btn btn-success">Create</button>
     <a class="btn btn-info" href="anima_Login.php">Back</a>
			</td>
		</tr>
		
	</table>
</form>
</div>
</body>
</html>
