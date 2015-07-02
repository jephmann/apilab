<?php
    require_once '../_inc/first.php';
    $objPage        = new Page;
    $objPage->title = "City of Chicago";
    $objPage->path  = "../";
    $objPage->data  = "https://data.cityofchicago.org/";    
    $code               = htmlspecialchars($_GET['code']);
    $objPage->subtitle  = $code;
    $objChicago         = new API_CityOfChicago;
    $urlData            = $objChicago->url_data($code);    
    $data               = $objChicago->json_retrieve($urlData);    
    
    /*
     * HTML BEGIN
     */
    require_once "{$objPage->path}_views/head.php";
    require_once "{$objPage->path}_views/header.php";
    require_once "{$objPage->path}_views/cityofchicago/contents.php";
    require_once "{$objPage->path}_views/cityofchicago/data.php";
    require_once "{$objPage->path}_views/footer.php";
    require_once "{$objPage->path}_views/foot.php";
    /*
     * HTML END
     */