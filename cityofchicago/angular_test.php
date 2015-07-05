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
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <body ng-app="apilab">
            <div class="container">
                <div ng-controller="ctrlAPILab">
                    <h1>{{text_h1}}</h1>                    
                    <h2>{{text_h2}}</h2>
                    <div class="alert alert-info">
                        <p>Sort Type: {{ sortType }}</p>
                        <p>Sort Reverse: {{ sortReverse }}</p>
                    </div>
                    <div class="table-responsive"> 
                        <table class="table table-condensed table-striped table-bordered table-hover">
                            <caption>{{text_h1}} | {{text_h2}}</caption>
                            <thead>
                                <tr>
                                    <th>
                                        <a  href="#" ng-click="sortType = 'department'; sortReverse = !sortReverse">
                                        Department
                                        <span ng-show="sortType == 'department' && !sortReverse" class="fa fa-caret-down"></span>
                                        <span ng-show="sortType == 'department' && sortReverse" class="fa fa-caret-up"></span>
                                        </a>
                                    </th>
                                    <th>
                                        <a  href="#" ng-click="sortType = 'job_titles'; sortReverse = !sortReverse">
                                        Job Title
                                        <span ng-show="sortType == 'job_titles' && !sortReverse" class="fa fa-caret-down"></span>
                                        <span ng-show="sortType == 'job_titles' && sortReverse" class="fa fa-caret-up"></span>
                                        </a>
                                    </th>
                                    <th>
                                        <a  href="#" ng-click="sortType = 'name'; sortReverse = !sortReverse">
                                        Name
                                        <span ng-show="sortType == 'name' && !sortReverse" class="fa fa-caret-down"></span>
                                        <span ng-show="sortType == 'name' && sortReverse" class="fa fa-caret-up"></span>
                                        </a>
                                    </th>
                                    <th>
                                        <a  href="#" ng-click="sortType = 'employee_annual_salary'; sortReverse = !sortReverse">
                                        Salary
                                        <span ng-show="sortType == 'employee_annual_salary' && !sortReverse" class="fa fa-caret-down"></span>
                                        <span ng-show="sortType == 'employee_annual_salary' && sortReverse" class="fa fa-caret-up"></span>
                                        </a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="employee in cityEmployees | orderBy:sortType:sortReverse">
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