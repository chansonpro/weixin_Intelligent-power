<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
	<link rel="stylesheet" type="text/css" href="css/table.css" media="all" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>    
	<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>  
  <?php
              header('content-type=text/html;charset = utf-8');
              require './conn/conn.php';
              $sql  = "SELECT *FROM dyjkrecord ORDER BY id DESC LIMIT 1";
              $row  = $mysqli->query($sql);
              $info = mysqli_fetch_assoc($row);
              $hjtemp   = $info['hjtemp'];
              $dl1  = $info['dl1'];
              $dl2  = $info['dl2'];
              $mjzt = $info['mjzt'];//门禁
              $fszt = $info['fszt'];//风扇状态
              $sxt1zt = $info['sxt1zt'];//摄像头1状态
              $sxt2zt = $info['sxt2zt'];//摄像头2状态
              $bgdyzt = $info['bgdyzt']; //补光状态
              $ztsj = $info['ztsj'];//RTC终端的时间
              
              $mysqli->close();
          ?>
    <div data-role="page">
      <div data-role="header" data-theme = "b" data-position="fixed">
     	 <a href="datalist.php" data-role = "button" data-icon="home" >回到首页</a>
	    <h1>电源监控模块云平台</h1>
      </div>
      <div data-role="content">
        <ul data-role="listview" data-filter="true">
			  <li data-role="list-divider">参数查看</li>
	         <div data-role="collapsible">
		          <h3>环境温度</h3>
		          <?php echo "<font color='red'>环境温度:</font>".$hjtemp."</br>";  ?>
        	</div>
        	<div data-role="collapsible">
	          <h3>开关变量</h3>
	          <?php              
	            echo "<font color='red'>电流1: </font>".$dl1."</br>";
	            echo "<font color='red'>电流2: </font>".$dl2."</br>";
	            echo "<font color='red'>门禁状态: </font>".$mjzt."</br>";
	            echo "<font color='red'>风扇状态: </font>".$fszt."</br>";
	            echo "<font color='red'>摄像头1状态: </font>".$sxt1zt."</br>";
	            echo "<font color='red'>摄像头2状态: </font>".$sxt2zt."</br>";
	            echo "<font color='red'>补光状态: </font>".$bgdyzt."</br>";
	          ?>
        	</div>
       	 	 <li data-role="list-divider">曲线绘制</li>
       	 	 <a href="http://chenclass.cn/weixin/wendu.php" data-rel="dialog" data-role="button" data-mini="true">环境温度曲线图</a>
       	 </ul>
      </div>
      <div data-role="footer" data-position = "fixed" data-theme="e">
      	    <h4>&copy;中国计量大学-机电工程学院</h4>
      </div>
    </div>
  </body>
</html>
