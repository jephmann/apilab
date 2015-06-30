<?php
    require_once '../_inc/first.php';
    $objPage        = new Page;
    $objPage->title = "City of Chicago";
    $objPage->path  = "../";
    $objPage->data  = "https://data.cityofchicago.org/";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php
            echo $objPage->project;
            ?> | <?php
            echo $objPage->title;
            ?></title>
        <link rel="stylesheet" href="<?php echo $objPage->path; ?>_css/common.css">
    </head>
	<body ng-app="apilab">
            <p>
                This page and much of the accompanying AngularJS code comes from
                a hands-on coding MeetUp for those new to AngularJS itself. Said
                MeetUp used City of Chicago data as an API example. I include it
                here for now if only to test AngularJS itself within this
                project's file management system (such as it is). As this
                project evolves (along with my understanding of AngularJS), this
                page may go soon.
            </p>
		{{1+1}}
		<!-- https://data.cityofchicago.org/resource/xzkq-xp2w.json -->

		<div ng-controller="ctrlAPILab">
			<h1>{{title}}</h1>
			{{newTask}}
			<br />
			<input ng-model="newTask" />
			<button ng-click="addTask(newTask)">Add Task</button>
			<ul>
				<li ng-repeat="task in tasks" ng-click="deleteTask(task)">{{task}}</li>
			</ul>
			{{cityEmployees.size}}
			{{new_employee}}
			<input ng-model="new_employee.job_titles">
			<input ng-model="new_employee.name">
			<input ng-model="new_employee.employee_annual_salary">
			<button ng-click="addEmployee(new_employee)">Add Employee</button>
			<table border="1">
				<tr>
					<th>Job Title</th>
					<th>Name</th>
					<th>Salary</th>
				</tr>
				<tr ng-repeat="employee in cityEmployees">
					<td>{{employee.job_titles}}</td>
					<td>{{employee.name}}</td>
					<td>{{employee.employee_annual_salary}}</td>
				</tr>
			</table>
<?php
    require_once "{$objPage->path}_views/footer.php";
    require_once "{$objPage->path}_views/foot.php";