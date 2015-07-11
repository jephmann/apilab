<?php
    require_once '../_inc/first.php';    
    $objPage            = new Page;
    $objPage->data      = "http://docs.themoviedb.apiary.io/#";
    $objPage->path      = "../";
    $objPage->subtitle  = "Search Movie";
    $objPage->title     = "TheMovieDB";    
    
    /*
     * 1. get the number of pages ("total_pages") from the query (retrieved via class method)
     * 2. use this number to get the results ("results") from each page
     * 3. push each results array into the larger data array
     * 4. compare the number of results arrays pushed with the number of results ("total_results") from the query (retrieved via class method)
     * 5. list key parameters from each result     * 
     */
    
    $search_topic   = "movie";
    $search_text    = "Carry  On";  // test default; otherwise via input
    $objMovieDB     = new API_TheMovieDB;    
    $totals         = $objMovieDB->totals($search_topic, $search_text);
    $total_pages    = $totals['total_pages'];
    $total_results  = $totals['total_results'];
    $data_results   = array();
    
    for($i=1; $i<=$total_pages; $i++)
    {
        $url_search     = $objMovieDB->url_search($search_topic, $search_text, $i);
        $page_data      = $objMovieDB->retrieve_data($url_search, TRUE);
        $count_results  = count($page_data['results']);
        for($r=0; $r<$count_results; $r++)
        {
            array_push($data_results, $page_data['results'][$r]);
        }
    }
    if($total_results == count($data_results))
    {
        $data = $data_results;
    }
    else
    {
        $data = "{count($data_results)} (number of listed results) did not equal {$total_results} (from the original search)";
    }
    
    /*
     * HTML BEGIN
     */
    require_once "{$objPage->path}_views/head.php";
    require_once "{$objPage->path}_views/header.php";
    require_once "{$objPage->path}_views/themoviedb/contents.php";
    require_once "{$objPage->path}_views/themoviedb/article/search_movie.php";
    require_once "{$objPage->path}_views/themoviedb/data.php";
    require_once "{$objPage->path}_views/footer.php";
    require_once "{$objPage->path}_views/foot.php";
    /*
     * HTML END
     */