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
        <ul><?php
            $ct_results = count($data['results']);
            for($i=0;$i<$ct_results;$i++):
            $results_id             = $data['results'][$i]['id'];
            $results_name           = $data['results'][$i]['name'];
            $results_link           = $data['results'][$i]['link'];
            $results_description    = $data['results'][$i]['description'];
            ?><li><?php
            echo $results_id; ?><br /><a target="_blank" href="<?php
            echo $results_link ?>"><?php
            echo $results_name; ?></a><br /><em><?php
            echo $results_description; ?></em></li>                
        <?php endfor; ?></ul>        
    </section>
</article>