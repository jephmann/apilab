<?php
    require_once '../_inc/first.php';
    $objPage            = new Page;
    $objPage->data      = "http://www.last.fm/api";
    $objPage->path      = "../";
    $objPage->subtitle  = "Contents";
    $objPage->title     = "Last.fm";

    /*
     * Additional code if necessary
     */    
    
    /*
     * HTML BEGIN
     */
    require_once "{$objPage->path}_views/head.php";
    require_once "{$objPage->path}_views/header.php";
    require_once "{$objPage->path}_views/last.fm/contents.php";
    require_once "{$objPage->path}_views/footer.php";
    require_once "{$objPage->path}_views/foot.php";
    /*
     * HTML END
     */