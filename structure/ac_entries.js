angular
	.module("angelocovinoApp",[])
	.directive("footerEntry", function(){
		var customTemplate='<a ng-href="{{info.href}}';
		if(document.location.hostname == "localhost"){customTemplate+=".php";}
		customTemplate+='">{{info.html}}</a><br />';
		return {
			scope: {info: "="},
			restrict: 'E',
			template: customTemplate
		};
	})
	.directive("footerEntryName", function(){
		return {
			scope: {info: "="},
			restrict: 'E',
			template: '<a name="{{info.name}}">{{info.html}}</a><br />'
		};
	})
	.controller("footerCtrl", ["$scope", "$http", function footerCtrl($scope, $http){
		//"use strict";

		$scope.data = {};
		$scope.url = 'structure/footer_entries.php';
		$scope.fetchData = function() {
			$http
				.get($scope.url)
				.success(function(data, status, headers, config){
					$scope.data = data;
				})
				.error(function(data, status, headers, config){
				});
				/*
				.then(function(result){
					$scope.data = result.data;
				});
				*/
		}
		
		$scope.fetchData();
		
		$scope.contacts = [
			{
				"html":"email",
				"name":"email"
			},{
				"html":"address",
				"name":"address"
			},{
				"html":"mobile phone",
				"name":"mobilephone"
			}
		];
	}])
	.directive("navEntry", function(){
		var customTemplate='<a ng-class="{menu_active: page == info.html}" ng-href="{{info.href}}';
		if(document.location.hostname == "localhost"){customTemplate+=".php";}
		customTemplate+='">{{info.html}}</a>';
		return {
			scope: {info: "=", page: "@"},
			restrict: 'E',
			template: customTemplate
		};
	})
	.controller("navCtrl", ["$scope", "$http", function navCtrl($scope, $http){
		$scope.data = {};
		$scope.url = 'structure/nav_entries.php';
		$scope.fetchData = function(){
			$http
				.get($scope.url)
				.success(function(data, status, headers, config){
					$scope.data = data;
				})
				.error(function(data, status, headers, config){
				});
		}
		
		$scope.fetchData();
	}]);
	
	
			/* DIRECTIVE
			controller: function($scope, $element, $attrs, $transclude){
			},
			compile: function(elem, attrs){
				return function(scope, elem, attrs){
					//elem.css("background-color", "#ffff00");
				}
			}
			*/