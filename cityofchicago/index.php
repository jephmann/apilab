<?php
    require_once '../_inc/first.php';
    $objPage = new Page;
    $objPage->subtitle = "City of Chicago";
    $objPage->path = "../";

    /*
     * Additional code if necessary
     */
    
    $objChicago = new API_CityOfChicago;
    $urlChicagoResource = $objChicago->url_resource();
    echo $urlChicagoResource;
    
    $dataChicago = $objChicago->json_retrieve($urlChicagoResource);
    
    
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
                <li><a href="">One of many City of Chicago links</a></li>
            </ul>
            <pre>
                    <?php print_r($dataChicago); ?>
                </pre>
            
            
            
        </article>
<?php
    require_once "{$objPage->path}_views/footer.php";
    require_once "{$objPage->path}_views/foot.php";
    /*
     * HTML END
     */