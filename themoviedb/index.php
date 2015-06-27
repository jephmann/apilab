<?php
    require_once '../_inc/first.php';    
    $objPage            = new Page;
    $objPage->data      = "https://www.themoviedb.org/documentation/api";
    $objPage->path      = "../";
    $objPage->subtitle  = "Contents";
    $objPage->title     = "TheMovieDB";

    /*
     * Additional code if necessary
     */
    
    /*
     * HTML BEGIN
     */
    require_once "{$objPage->path}_views/head.php";
    require_once "{$objPage->path}_views/header.php";
    require_once "{$objPage->path}_views/themoviedb/contents.php";
    require_once "{$objPage->path}_views/footer.php";
    require_once "{$objPage->path}_views/foot.php";
    /*
     * HTML END
     */