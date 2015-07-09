<?php
    require_once '../_inc/first.php';    
    $objPage            = new Page;
    $objPage->data      = "http://www.meetup.com/meetup_api/";
    $objPage->path      = "../";
    $objPage->subtitle  = "Member ID";
    $objPage->title     = "MeetUp";
    
    $id_member          = 9700980; 
    $objMeetup          = new API_MeetUp;
    $urlData            = $objMeetup->url_member_id($id_member);
    $data               = $objMeetup->retrieve_data($urlData, TRUE);
    
    /*
     * HTML BEGIN
     */
    require_once "{$objPage->path}_views/head.php";
    require_once "{$objPage->path}_views/header.php";
    require_once "{$objPage->path}_views/meetup/contents.php";
    require_once "{$objPage->path}_views/meetup/article/member_id.php";
    require_once "{$objPage->path}_views/meetup/data.php";
    require_once "{$objPage->path}_views/footer.php";
    require_once "{$objPage->path}_views/foot.php";
    /*
     * HTML END
     */