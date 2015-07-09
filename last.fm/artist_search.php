<?php
    require_once '../_inc/first.php';    
    $objPage            = new Page;
    $objPage->data      = "http://www.last.fm/api";
    $objPage->path      = "../";
    $objPage->subtitle  = "Artist Search";
    $objPage->title     = "Last.fm";
    
    /*
     * TOGGLE TEST
     * TRUE = JSON
     * FALSE = XML
     */
    $json               = FALSE;
    // json             = TRUE;
    
    $artist             = "Harry  Nilsson";
    $objLastFM          = new API_LastFM;    
    $urlData            = $objLastFM->url_search_artist($artist);
    if($json)
    {
        $urlData        = "{$urlData}&format=json";
    }
    $data = $objLastFM->retrieve_data($urlData, $json);
    
    /*
     * HTML BEGIN
     */
    require_once "{$objPage->path}_views/head.php";
    require_once "{$objPage->path}_views/header.php";
    require_once "{$objPage->path}_views/last.fm/contents.php";
    require_once "{$objPage->path}_views/last.fm/article/artist_search.php";
    require_once "{$objPage->path}_views/last.fm/data.php";
    require_once "{$objPage->path}_views/footer.php";
    require_once "{$objPage->path}_views/foot.php";
    /*
     * HTML END
     */