var app  = angular.module('back',[]);
app.controller('backCtrl',function($scope,$http){
	// 四个模块，谁显示，谁不显示
	$scope.showItems = {
		publish:false,
		review:false,
		list:false,
		change:false
	}

	// 选择一个模块显示
	$scope.chooseToShow = function(name){
		for(var index in $scope.showItems){
			if(index === name){
				$scope.showItems[index] = true;
			}else{
				$scope.showItems[index] = false;
			}
		}
	}
	// 默认显示发布文章模块

	$scope.chooseToShow('publish');


	// 点击发布文章
	$scope.choosePublish = function(){
		$scope.chooseToShow('publish');

	}

	// 点击文章列表
	$scope.chooseList = function(){
		$scope.chooseToShow('list');
		$http({
		  method: 'GET',
		  url: 'getPaperList.php'
		}).then(function successCallback(response) {
			// 已经获取了今天的文章
			console.log(response);
			$scope.papers = response.data;
		}, function errorCallback(response) {
			console.log(response);
			alert('网络问题，请查看控制台输出');
		});
	}

	// 点击反馈列表
	$scope.chooseReview = function(){
		$scope.chooseToShow('review');
		$http({
		  method: 'GET',
		  url: 'listAdvices.php'
		}).then(function successCallback(response) {
			// 已经获取了今天的文章
			console.log(response);
			$scope.advices = response.data;
		}, function errorCallback(response) {
			console.log(response);
			alert('网络问题，请查看控制台输出');
		});

	}
	// 点击修改文章
	$scope.chooseChange = function(){
		$scope.chooseToShow('change');

	}
})