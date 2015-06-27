<?php
    require_once '../_inc/first.php';    
    $objPage            = new Page;
    $objPage->data      = "http://www.meetup.com/meetup_api/";
    $objPage->path      = "../";
    $objPage->subtitle  = "Contents";
    $objPage->title     = "MeetUp";

    /*
     * Additional code if necessary
     */
    
    /*
     * HTML BEGIN
     */
    require_once "{$objPage->path}_views/head.php";
    require_once "{$objPage->path}_views/header.php";
    require_once "{$objPage->path}_views/meetup/contents.php";
    require_once "{$objPage->path}_views/footer.php";
    require_once "{$objPage->path}_views/foot.php";
    /*
     * HTML END
     */