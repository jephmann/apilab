<?php
    require_once '../_inc/first.php';
    $objPage            = new Page;
    $objPage->data      = "https://data.cityofchicago.org/";
    $objPage->path      = "../";
    $objPage->subtitle  = "Contents";
    $objPage->title     = "City of Chicago";

    /*
     * Additional code if necessary
     */    
    
    /*
     * HTML BEGIN
     */
    require_once "{$objPage->path}_views/head.php";
    require_once "{$objPage->path}_views/header.php";
    require_once "{$objPage->path}_views/cityofchicago/contents.php";
    require_once "{$objPage->path}_views/footer.php";
    require_once "{$objPage->path}_views/foot.php";
    /*
     * HTML END
     */