<?php
$name = $_GET['username'];
$pass = $_GET['password'];

require_once('comm.php');

// 如果用户名和密码判断通过的确是开发者，那么设置他的cookie
function makeCookie($name){
	$str = md5($name.'iLoveZZ');
	// 一天后过期
	setcookie('login',$str,time()+intval(24*3600));
}



?>
<!DOCTYPE html>
<html lang="en" ng-app="back">
<head>
	<meta charset="UTF-8">
	<title>欢迎来到屌之管理后台——缺斯汀.张先生</title>
	<link rel="stylesheet" href="css/manage.css">
	<script src="script/angular-min.js"></script>
	<script src="script/main.js"></script>
</head>
<body ng-controller="backCtrl">
	<div class="name">前端关注—_—后台管理系统，这个系统有彩蛋……………………（谁tm有时间开发彩蛋 啊）</div>
	<div class="left">
		<div class="function" ng-click="choosePublish()">发布文章</div>
		<div class="function" ng-click="chooseReview()">查看反馈</div>
		<div class="function" ng-click="chooseList()">文章列表</div>
		<div class="function" ng-click="chooseChange()">修改文章（需ID）</div>
	</div>
	<div class="right">
		<!-- 发布新文章 -->
		<div ng-show="showItems.publish" id="puhlish">
			<form action="publish.php" method="post">
				<input type="text" name="title" placeholder="题目"><br>
				<input type="text" name="author" placeholder="作者"><br>
				<input type="text" name="tag" placeholder="标签"><br>
				<input type="date" name="time" placeholder="如果不选择，就是今天，如果选了以后的某一天就会在某一天发布"><br>
				<textarea name="content" id="" cols="100" placeholder="正文，注意一定要写html源代码" rows="10"></textarea><br>
				<input type="submit" value="publish">
			</form>
		</div>
		<!-- 查看反馈 -->
		<div ng-show="showItems.review" id="advices">
			<table>
				<tr>
					<td>反馈时间</td>
					<td>联系方式</td>
					<td>反馈内容</td>
				</tr>
				<tr ng-repeat="data in advices">
					<td class="time" ng-bind="data.time"></td>
					<td class="name" ng-bind = "data.contact"></td>
					<td class="content" ng-bind="data.content"></td>
				</tr>
			</table>

		</div>
		<!-- 文章列表 -->
		<div ng-show="showItems.list" id="paperList">
			<table>
				<tr>
					<td>id</td>
					<td>题目</td>
					<td>作者</td>
					<td>时间</td>
					<td>标签</td>
					<td>摘要</td>
				</tr>
				<tr ng-repeat="data in papers">
					<td class="" ng-bind="data.id"></td>
					<td class="" ng-bind = "data.title"></td>
					<td class="" ng-bind="data.author"></td>
					<td class="" ng-bind="data.time"></td>
					<td class="" ng-bind="data.tag"></td>
					<td class="" ng-bind="data.abstract"></td>
				</tr>
			</table>
		</div>
		<!-- 修改文章 -->
		<div ng-show="showItems.change" id="changePaper">
			<form action="changePaper.php" method="post">
				<input type="text" name="id" placeholder="文章ID">
				<input type="text" name="timu" placeholder="题目"><br>
				<input type="text" name="zuozhe" placeholder="作者"><br>
				<input type="text" name="biaoqian" placeholder="标签"><br>
				<input type="date" name="riqi" placeholder="如果不选择，就是今天，如果选了以后的某一天就会在某一天发布"><br>
				<textarea name="zhengwen" id="" cols="100" placeholder="正文，注意一定要写html源代码" rows="10"></textarea>
			</form>
		</div>
	</div>
</body>
</html>
