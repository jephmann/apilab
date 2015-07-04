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

		<div ng-controller="ctrlAPILab">
			<h1>{{title}}</h1>
			<table border="1">
				<tr>
					<th>Job Title</th>
					<th>Name</th>
					<th>Salary</th>
				</tr>
				<tr ng-repeat="employee in cityEmployees | orderBy:'-employee_annual_salary'">
					<td>{{employee.job_titles}}</td>
					<td>{{employee.name}}</td>
					<td>{{employee.employee_annual_salary}}</td>
				</tr>
			</table>
<?php
    require_once "{$objPage->path}_views/footer.php";
    require_once "{$objPage->path}_views/foot.php";