(function(){
	"use strict"

	angular.module('apilab',[] ).controller('ctrlAPILab', function($scope,$http){
		$scope.title = "Hello"
		$scope.newTask = "" // initialize
		$scope.tasks = ["Take out trash", "Create trash", "Mow the lawn"]


		$http.get("https://data.cityofchicago.org/resource/xzkq-xp2w.json")
		.success(function(response){
			$scope.cityEmployees = response
		})

		$scope.addTask = function(task){
			if (task != "") {
				$scope.tasks.push(task)
				$scope.newTask = "";
			}
		}

		$scope.addEmployee = function(employee){
			$scope.cityEmployees.push(employee)
		}

		$scope.deleteTask = function(task){
			var index = $scope.tasks.indexOf(task)
			$scope.tasks.splice(index, 1)
		}
	})
})();