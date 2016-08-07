<?php        //　//把我要的函數（功能）都寫進去
	$db_host = 'localhost';    //預設3306可以不用寫 如果別的要寫列如'localhost:3125'
	$db_user = 'root';       //
	$db_pass = 'root';		//
	$db_name = 'animaDB';    //鎖定哪個庫名
	
	$link = mysqli_connect($db_host, $db_user,
					$db_pass, $db_name) 
				//這句話是在執行網頁 與ＭＱＬ連接	 
				
			or die("Server ERROR");
	mysqli_query($link, 'SET NAME utf8');	//設定SQ交談語言使用編碼是UTF8 中文輸入中文出來 (確認專案偏好設定是否為UTF8)
    //規定查詢的字串
//create table tab2 (id integer primary key AUTO_INCREMENT, c2 varchar(254))
//create table 自訂表名(欄位自訂名稱 integer primary key AUTO_INCREMENT, 自訂名稱 varchar(長度))

?>