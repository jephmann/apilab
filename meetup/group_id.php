<?php
    require_once '../_inc/first.php';    
    $objPage            = new Page;
    $objPage->data      = "http://www.meetup.com/meetup_api/";
    $objPage->path      = "../";
    $objPage->subtitle  = "Group ID";
    $objPage->title     = "MeetUp";
    
    $id_group           = 14630102; 
    $objMeetup          = new API_MeetUp;
    $urlData            = $objMeetup->url_group_id($id_group);
    $data               = $objMeetup->json_retrieve($urlData);
    
    /*
     * HTML BEGIN
     */
    require_once "{$objPage->path}_views/head.php";
    require_once "{$objPage->path}_views/header.php";
    require_once "{$objPage->path}_views/meetup/contents.php";
    require_once "{$objPage->path}_views/meetup/article/group_id.php";
    require_once "{$objPage->path}_views/meetup/data.php";
    require_once "{$objPage->path}_views/footer.php";
    require_once "{$objPage->path}_views/foot.php";
    /*
     * HTML END
     */