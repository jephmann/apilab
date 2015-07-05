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
            <div class="container">
                <div ng-controller="ctrlAPILab">
                    <h1>{{text_h1}}</h1>                    
                    <h2>{{text_h2}}</h2>
                    <div class="table-responsive"> 
                        <table class="table table-condensed table-striped table-bordered table-hover">
                            <caption>{{text_h1}} | {{text_h2}}</caption>
                            <thead>
                                <tr>
                                    <th>Department</th>
                                    <th>Job Title</th>
                                    <th>Name</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="employee in cityEmployees | orderBy:['department', 'job_titles', '-employee_annual_salary']">
                                        <td>{{employee.department}}</td>
                                        <td>{{employee.job_titles}}</td>
                                        <td>{{employee.name}}</td>
                                        <td>{{employee.employee_annual_salary}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
<?php
    require_once "{$objPage->path}_views/cityofchicago/contents.php";
    require_once "{$objPage->path}_views/footer.php";
    require_once "{$objPage->path}_views/foot.php";