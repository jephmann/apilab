<?php
    require_once '../_inc/first.php';
    $objPage = new Page;
    $objPage->subtitle = "Weather Underground";
    $objPage->path = "../";

    /*
     * Additional code if necessary
     */
    
    /*
     * HTML BEGIN
     */
    require_once "{$objPage->path}_views/head.php";
    require_once "{$objPage->path}_views/header.php";
?>
        <article>
            <h3>Hello</h3>
            <p>etc.</p>
            <ul>
                <li><a href="<?php echo $objPage->path ?>">HOME</a></li>
                <li><a href="">One of many Weather Underground links</a></li>
            </ul>
        </article>
<?php
    require_once "{$objPage->path}_views/footer.php";
    require_once "{$objPage->path}_views/foot.php";
    /*
     * HTML END
     */