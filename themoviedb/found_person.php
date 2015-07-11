<?php
    require_once '../_inc/first.php';
    $objPage            = new Page;
    $objPage->data      = "http://docs.themoviedb.apiary.io/#";
    $objPage->path      = "../";
    $objPage->subtitle  = "Found Movie";
    $objPage->title     = "TheMovieDB";
    
    $topic = 'person';
    
    if(isset($_GET['id']))
    {
        $id = htmlspecialchars($_GET['id']);    // via this url
    }
    else
    {
        $id = 8635;     // default for testing (Buster Keaton)
    }
    
    $data = array(
        $topic      => array(),
        'credits'   => array(),
        'images'    => array()
    );
    
    $objMovieDB = new API_TheMovieDB;
    
    // 1 of 3: topic data    
    $url_topic          = $objMovieDB->url_person($id);
    $data[$topic]       = $objMovieDB->retrieve_data($url_topic, TRUE);
    
    // 2 of 3: topic's credits
    $url_credits        = $objMovieDB->url_person_credits($id);
    $data['credits']    = $objMovieDB->retrieve_data($url_credits, TRUE);
    
    // 3 of 3: topic's images
    $url_images         = $objMovieDB->url_person_images($id);
    $data['images']     = $objMovieDB->retrieve_data($url_images, TRUE);
    
    /*
     * HTML BEGIN
     */
    require_once "{$objPage->path}_views/head.php";
    require_once "{$objPage->path}_views/header.php";
    require_once "{$objPage->path}_views/themoviedb/contents.php";
    require_once "{$objPage->path}_views/themoviedb/article/found_movie.php";
    require_once "{$objPage->path}_views/themoviedb/data.php";
    require_once "{$objPage->path}_views/footer.php";
    require_once "{$objPage->path}_views/foot.php";
    /*
     * HTML END
     */
    