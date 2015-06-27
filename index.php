<?php
    require_once '_inc/first.php';
    $objPage            = new Page;
    $objPage->title     = "Home";
    $objPage->subtitle  = "Contents";

    /*
     * Additional code if necessary
     */
    
    /*
     * HTML BEGIN
     */
    require_once '_views/head.php';
    require_once '_views/header.php';
?>
        <article>
            <ul>
                <li><a href="meetup/">MeetUp</a></li>
                <li><a href="themoviedb/">TheMovieDB</a></li>
                <li><a href="wunderground/">Weather Underground</a></li>
                <li><a href="cityofchicago/">City of Chicago</a></li>
            </ul>
        </article>
<?php
    require_once '_views/footer.php';
    require_once '_views/foot.php';
    /*
     * HTML END
     */