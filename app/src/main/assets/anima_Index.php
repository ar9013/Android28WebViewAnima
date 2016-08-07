<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/Carcassone.css" rel="stylesheet">

<title>pic.Infos</title>

<style type="text/css">
  .jumbotron {
    position: relative;
    background: #000 url("res/jumbotron.jpg") center center;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;
}


.qrcode {
    margin: 0ex 0ex 0ex 7ex;
}

</style>

</head>
<body>

<div class="container">
<div class="jumbotron">
  <h1>pic.Infos</h1>
   <table>
   <tr>
  <td><p><a class="btn btn-lg" href="#download" role="button"><img width="167em" height="57em"  src="res/Google-Play-Download.png" /></a></p></td>
 	 <td><p><a class="btn btn-primary btn-lg" href="anima_Login.php" role="button" >登入新增資料</a></p></td> 
	</tr>
</table>
</div>

<div class="panel panel-success">
      <div class="panel-heading"><p><font size="3em">pic.Infos 簡介</font></p></div>
      <div class="panel-body">
        <p>
        pic.Infos 是款擴增實境App，使用攝影機捕捉字畫影像，辨識後顯示字畫相關的資訊，<font color="blue" size="3em">詳細的內容在 Android AR 教學。</font><br />
        <font color="red" size="3em">Bug 回報請到 Google Play Pic.Infos 下方反應，會儘速處理。</font><br /><br />
        <a class="btn btn-lg btn-primary" href="http://ar9013.blogspot.tw/" role="button">Android AR 教學</a>
        <a class="btn btn-lg btn-danger" href="https://github.com/ar9013/OpenCV-Camera-Preview-Text" role="button">Sorce Code Download</a>
        </p>
      </div>
    </div>

<div class="panel panel panel-danger">
      <div class="panel-heading"><p><font size="3em">pic.Infos 更新訊息</font></p></div>
      <div class="panel-body">
        <ul>
        	 <li>2016/05/09   加入名畫資訊維護網頁</li>
          <li>2016/05/06   建置官方網站，公布相關更新訊息</li>
          <li>2016/03/06   因為在一次展覽，開始開發 pic.Infos</li>
          <li>2016/03/06   遇到擴增資訊與辨識物垂直的問題</li>
          <li>2015/09/13   撰寫 使用 OpenCV 與 Java Monkey 遊戲引擎製作Android AR 教學</li>
          <li>2015/09/05   遇到Java Monkey 官方UI 不能在 Android 上使用。</li>
          <li>2015/06/10   開始研究 Java Monkey 遊戲引擎</li>
          <li>2015/03/12   由於Android 的 opengles 使用起來太不方便，尋找替代的遊戲引擎</li>
          <li>2014/11/10   確定使用 OpenCV for Android SDK， 開發擴增實境影像辨識App</li>
          <li>2014/10/23   蒐集 OpenCV for Android SDK 資料</li>
          <li>2014/10/15   放棄 開發 ios 平台的 App</li>
          <li>2014/09/25   開始蒐集影像辨識資料</li>
          <li>2014/07/23   因為多拉a夢 AR 開始蒐集擴增實境先關資料</li>
        </ul>
      </div>
    </div>

<div class="panel panel-info">
      <div class="panel-heading"><p><font size="3em">pic.Infos 操作說明</font></p></div>
      <div class="panel-body">
        <div class="row">
  <div class="col-md-3">1.開啟 pic.Infos</div>
  <div class="col-md-3">2.授予 pic.Infos 存取相機權限</div>
  <div class="col-md-3">3.將相機對準字畫</div>
  <div class="col-md-3">4.手機右側出現字畫相關資訊</div>
</div>
      </div>
    </div>
 
<a name='download'></a> 
<div class="panel panel-success">
      <div class="panel-heading"><p><font size="3em">pic.Infos 下載</font></p></div>
      <div class="panel-body">
        <img class="qrcode" width="95em" height="95em"  src="res/qrcode.jpg" />
      </div>
    </div>
<hr>
  <p><font color="gray">
    開源組織：animaAR &nbsp;&nbsp;&nbsp;&nbsp; 服務位置：台中市公益路二段51號20樓 <br />
    開發者：羅康瑀 &nbsp;&nbsp;&nbsp;&nbsp; tel：0972627493</font>
  </p>


</div>

</body>


</html>