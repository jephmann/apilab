<?php
    require_once '../_inc/first.php';    
    $objPage            = new Page;
    $objPage->data      = "http://www.wunderground.com/weather/api/";
    $objPage->path      = "../";
    $objPage->subtitle  = "Contents";
    $objPage->title     = "Weather Underground";

    /*
     * Additional code if necessary
     */
    
    /*
     * HTML BEGIN
     */
    require_once "{$objPage->path}_views/head.php";
    require_once "{$objPage->path}_views/header.php";
    require_once "{$objPage->path}_views/wunderground/contents.php";
    require_once "{$objPage->path}_views/footer.php";
    require_once "{$objPage->path}_views/foot.php";
    /*
     * HTML END
     */