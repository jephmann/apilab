<article>
    <section id="member">
        <?php
            $name       = $data['name'];
            $bio        = $data['bio'];
            $hometown   = $data['hometown'];
            $link       = $data['link'];
        ?><h2><a target="_blank" href="<?php
        echo $link; ?>"><?php
        echo $name; ?></a></h2>
        <h3><?php
        echo $hometown; ?></h3>
        <p><?php
        echo $bio; ?></p>
    </section>
    <section id="topics">
        <ul><?php
            $ct_topics      = count($data['topics']);
            for($i=0;$i<$ct_topics;$i++):
            $topics_name    = $data['topics'][$i]['name'];
            ?><li><?php
            echo $topics_name; ?></li>                
        <?php endfor; ?></ul>        
    </section>
</article>