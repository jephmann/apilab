<?php
    require_once '../_inc/first.php';
    $objPage            = new Page;
    $objPage->data      = "http://docs.themoviedb.apiary.io/#";
    $objPage->path      = "../";
    $objPage->subtitle  = "Found Movie";
    $objPage->title     = "TheMovieDB";
    
    $topic = 'movie';
    
    if(isset($_GET['id']))
    {
        $id = htmlspecialchars($_GET['id']);    // via this url
    }
    else
    {
        $id = 11235;    // default for testing (Local Hero)
    }
    
    $data = array(
        $topic      => array(),
        'credits'   => array(),
        'images'    => array()
    );
    
    $objMovieDB         = new API_TheMovieDB;
    
    // 1 of 3: topic data    
    $url_topic          = $objMovieDB->url_found($id, $topic);
    $data[$topic]       = $objMovieDB->retrieve_data($url_topic, TRUE);
    
    // topic
    $movie              = $data[$topic];
    $movie_title        = $movie['title'];
    $movie_overview     = $movie['overview'];
    $movie_release_date = $movie['release_date'];
    
    // 2 of 3: topic's credits
    $url_credits        = $objMovieDB->url_movie_credits($id);
    $data['credits']    = $objMovieDB->retrieve_data($url_credits, TRUE);
    
    // credits
    $credits            = $data['credits'];
    $credits_cast       = $credits['cast'];
    $credits_crew       = $credits['crew'];
    $ct_credits_cast    = count($credits_cast);
    $ct_credits_crew    = count($credits_crew);
    
    // 3 of 3: topic's images
    $url_images         = $objMovieDB->url_found($id, $topic, 'images');
    $data['images']     = $objMovieDB->retrieve_data($url_images, TRUE);
    
    // images
    $movie_poster       = $objMovieDB->url_poster($data['movie']['poster_path']);
    $movie_images       = $data['images'];
    $movie_posters      = $movie_images['posters'];
    $movie_backdrops    = $movie_images['backdrops'];
    $ct_posters         = count($movie_posters);
    $ct_backdrops       = count($movie_backdrops);
    
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
    