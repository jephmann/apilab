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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    </head>
    <body ng-app="apilab">
            <div class="container" ng-controller="ctrlAPILab">

                <h1>{{text_h1}}</h1>                    
                <h2>{{text_h2}}</h2>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Job Title</th>
                            <th>Name</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="employee in cityEmployees | orderBy:'-employee_annual_salary'">
                                <td>{{employee.job_titles}}</td>
                                <td>{{employee.name}}</td>
                                <td>{{employee.employee_annual_salary}}</td>
                        </tr>
                    </tbody>
                </table>
<?php
    require_once "{$objPage->path}_views/footer.php";
    require_once "{$objPage->path}_views/foot.php";