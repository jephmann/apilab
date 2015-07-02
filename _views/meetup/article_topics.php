<article>
    <section id="meta">
        <h2><?php echo $data['meta']['title'] ?></h2>
        <h3><?php echo $data['meta']['description'] ?></h3>
        <p>Updated:&nbsp;<?php echo $data['meta']['updated'] ?></p>
    </section>
    <section id="results">
            <ul>
                <?php
                    $ct_results = count($data['results']);
                    for($i=0;$i<$ct_results;$i++):
                        $results_id             = $data['results'][$i]['id'];
                        $results_name           = $data['results'][$i]['name'];
                        $results_link           = $data['results'][$i]['link'];
                        $results_description    = $data['results'][$i]['description'];
                        
                        ?>
                    <li><?php
                        echo $results_id; ?><br /><a target="_blank" href="<?php
                        echo $results_link ?>"><?php
                        echo $results_name; ?></a><br /><em><?php
                        echo $results_description; ?></em></li>                
                <?php endfor; ?>
            </ul>
        
    </section>
</article>