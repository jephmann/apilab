<?php
    require_once '../_inc/first.php';    
    $objPage            = new Page;
    $objPage->data      = "http://www.meetup.com/meetup_api/";
    $objPage->path      = "../";
    $objPage->subtitle  = "Topics";
    $objPage->title     = "MeetUp";
    
    $objMeetup         = new API_MeetUp;
    $urlData            = $objMeetup->url_topics();
    $data               = $objMeetup->retrieve_data($urlData, TRUE);
    
    /*
     * HTML BEGIN
     */
    require_once "{$objPage->path}_views/head.php";
    require_once "{$objPage->path}_views/header.php";
    require_once "{$objPage->path}_views/meetup/contents.php";
    require_once "{$objPage->path}_views/meetup/article/topics.php";
    require_once "{$objPage->path}_views/meetup/data.php";
    require_once "{$objPage->path}_views/footer.php";
    require_once "{$objPage->path}_views/foot.php";
    /*
     * HTML END
     */