(
    function(){
	"use strict"        

	angular.module('apilab',[] ).controller(
                'ctrlAPILab', function($scope, $http){
		$scope.text_h1 = "City of Chicago"
		$scope.text_h2 = "City Employees"
		$http.get("https://data.cityofchicago.org/resource/xzkq-xp2w.json").success(
                    function(response){
                        $scope.cityEmployees = response
                    }
                )
            }
        )
    }
)();