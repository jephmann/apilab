(
    function(){
	"use strict"        

	angular.module('apilab',[] ).controller(
                'ctrlAPILab', function($scope, $http){
		$scope.text_h1 = "City of Chicago"
		$scope.text_h2 = "City Employees"
        
                $scope.sortType = 'department';
                $scope.sortReverse = false;
                
		$http.get("https://data.cityofchicago.org/resource/xzkq-xp2w.json").success(
                    function(response){
                        $scope.cityEmployees = response
                    }
                )
        
        
            }
        )
    }
)();