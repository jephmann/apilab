(function(){
	"use strict"

	angular.module('apilab',[] ).controller('ctrlAPILab', function($scope,$http){
		$scope.title = "Hello"


		$http.get("https://data.cityofchicago.org/resource/xzkq-xp2w.json")
		.success(function(response){
			$scope.cityEmployees = response
		})
	})
})();