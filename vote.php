<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>    
	<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>  
    <div data-role="page">
      <div data-role="header" data-theme = "b" data-position="fixed">
     	 <a href="#" data-role = "button" data-icon="home" >回到首页</a>
	    <h1>你好，杭州</h1>
      </div>
      <div data-role="content">
		  <ul data-role="listview" data-filter="true">
			  <li data-role="list-divider">个性化</li>
	          <li><a href="">面板<span class="ui-li-count">20</span></a></li>
	          <li>桌布</li>
	          <li>主画面</li>
			  <li data-role="list-divider">账户管理</li>
	          <li><img src="fb2.png"><h3>Facebook</h3><p><a href="http://www.baidu.com" data-rel="external">查看脸书最新消息</a></p></li>
	          <li>Google</li>
	          <li><img src="weather.png" class="ui-li-icon">气象</li>
			  <li><img src="email.png" class="ui-li-icon">邮件</li>
       	  </ul>
        <form method="post" action="confirm.php">
			<div data-role="fieldcontain">
			  <label for="useremail">输入E-mail：</label>
			  	<input type="email" name="useremail">
			  <label for="userurl">输入网址：</label>
			  	<input type="url" name="userurl">
			  <label for="usersearch">输入搜索关键字：</label>
			  	<input type="search" name="usersearch">
			  <label for="usertel">输入电话：</label>
			  	<input type="tel" name="usertel">
			  <label for="usernumber">输入数字1-10：</label>
			  	<input type="number" name="usernumber" max="10" min="1">
			  <label for="userrange">选择数字1-10：</label>
			  	<input type="range" name="userrange" max="10" min="1">
			  <label for="userdate">输入日期：</label>
		  		<input type="date" name="userdate">		
		  	  
		 	 <li><label for="openwifi">开启Wi-Fi：</label></li>
		  		<select name="openwifi" data-role="slider" data-theme="e">		    
            		<option value="off">关
					<option value="on">开
		  		</select>
		  		<label for="userintro">输入自我介紹：</label>
		 	     <textarea name="userintro" data-mini="true"></textarea>	
		  	 <label for="userphone">您使用哪家业者的服务？</label>
	          <select name="userphone[]" multiple>
	            <option value="中华电信">中华电信
	            <option value="台湾大哥大" selected>台湾大哥大
	            <option value="远传">远传
	            <option value="威宝">威宝
	          </select>	
	        <fieldset data-role="controlgroup">
	            <legend>上課時間</legend>
	            <label for="class-day">星期幾</label>
		            <select name="class-day" data-native-menu="false">
		              <option value="周一">周一</option>
					  <option value="周二">周二</option>
		              <option value="周三">周三</option>
					  <option value="周四">周四</option>
					  <option value="周五">周五</option>
		            </select>
	            <label for="class-time">時段</label>
		            <select name="class-time" data-native-menu="false">
					  <option value="早上">早上</option>
					  <option value="中午">中午</option>
					  <option value="晚上">晚上</option>
		            </select>
	          </fieldset>	
	          <fieldset data-role="controlgroup" data-type="horizontal">
	            <legend>您使用过哪些品牌的手机？</legend>
	           		 <input type="checkbox" name="userphone[]" id="brand1" value="htc">
	            <label for="brand1">hTC</label>
	           		 <input type="checkbox" name="userphone[]" id="brand2" value="Apple">
	            <label for="brand2">Apple</label>
					 <input type="checkbox" name="userphone[]" id="brand3" value="SONY">
	            <label for="brand3">SONY</label>
	          </fieldset> 

	          <fieldset data-role="controlgroup" data-type="horizontal" >
	            <legend>您最喜欢哪种水果？</legend>
	            	<input type="radio" name="fruit" id="kind1" value="peach">
	            <label for="kind1">水蜜桃</label>
	            	<input type="radio" name="fruit" id="kind2" value="apple">
	            <label for="kind2">苹果</label>
					<input type="radio" name="fruit" id="kind3" value="banana">
	            <label for="kind3">香蕉</label>
	          </fieldset>		  
			</div>	
			<div data-role="fieldcontain">
				<input type="submit" value="确定">
			</div>
        </form>		
	  </div>
	  <div data-role = "controlgroup" data-type = "horizontal">
		  	<a href="#" data-role = "button" data-icon="plus"   data-theme="e">添加</a>
		    <a href="#" data-role = "button" data-icon="edit"   data-theme="e">编辑</a>
		    <a href="#" data-role = "button" data-icon="delete" data-theme="e">删除</a>
	  </div>
      <!-- <div data-role="footer" data-position = "fixed" data-theme="e">
      	    <h4>&copy;快乐影视</h4>
      	  </div> -->
    </div>
  </body>
</html>
