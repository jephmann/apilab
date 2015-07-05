<article>
    <section id="meta">
        <?php
            $meta_title         = $data['meta']['title'];
            $meta_description   = $data['meta']['description'];
            $meta_updated       = $data['meta']['updated'];
        ?><h2><?php
        echo $meta_title; ?></h2>
        <h3><?php
        echo $meta_description; ?></h3>
        <p>Updated:&nbsp;<?php
        echo $meta_updated; ?></p>
    </section>
    <section id="results">
        <?php
            $results_link           = $data['results'][0]['link'];
            $results_description    = $data['results'][0]['description'];
            $results_name           = $data['results'][0]['name'];
            $results_link           = $data['results'][0]['link'];
            $results_id            = $data['results'][0]['id'];
            $results_city            = $data['results'][0]['city'];
        ?>
        <h2><a target="_blank" href="<?php
        echo $results_link; ?>"><?php
        echo $results_name; ?></a></h2>
        <h3><?php
        echo $results_city; ?></h3>
        <p><?php
        echo $results_description; ?></p>
    </section>
</article>