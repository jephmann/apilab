    <footer>
        <h3>Copyright 2015 by Jeffrey Hartmann</h3>
        <p><?php if ($objPage->data) : ?>
            Data Source: <a target="_blank" href="<?php
            echo $objPage->data ?>"><?php
            echo $objPage->title ?></a>
            <?php endif; ?></p>
    </footer>