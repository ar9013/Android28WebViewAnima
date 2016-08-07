<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>名畫資料維護</h3>
            </div>
            <div class="row">
             <p>
                    <a href="anima_Create.php" class="btn btn-success">Create</a>
                    <a href="Logout.php" class="btn btn-info">Logout</a>
                </p>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                  <!--  <th>ID</th> -->   
                      <th>畫 名</th>
                      <th>作 者</th>
                      <th>年 代</th>
                      <th>畫 作 材 質</th>
                      <th>畫 作 大 小</th>
                      <th>館 藏 處</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  include 'anima_api.php'; // 資料庫連接資訊
                 
                   $rs = mysqli_query($link, "SELECT * FROM picture"); //連接資料庫後  撈出 cust 所有資料
                   
                   while ($row = mysqli_fetch_array($rs)){
                   									
                   	echo '<tr>';
                   // echo "<td>$id</td>";
                 
                   	echo '<td>'.$row['pic_name'].'</td>';
                    echo '<td>'.$row['pic_author'].'</td>';
                   	echo '<td>'.$row['pic_year'].'</td>';
                   	echo '<td>'.$row['pic_material'].'</td>';
                   	echo '<td>'.$row['pic_size'].'</td>';
                   	echo '<td>'.$row['pic_museum'].'</td>';
                   	echo '<td width="140">
                  		<a class="btn btn-default" href="anima_Update.php?editno='.$row['id'].'">Edit</a>
																			<a class="btn btn-danger" href="Delete.php?delno='.$row['id'].'">Delete</a></td>';
                   	echo '</tr>';
                   }
                   
                   mysqli_close($link);
                   
                   
                  ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>
