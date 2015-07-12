<article>
    <p>
        If accessed directly, this page would be populated with data based on a
        default id. Otherwise, data would be populated via an id selected from a
        search page.
    </p>
    <section id="person">
        <h3><?php echo $person_name; ?></h3>
        <ul>
            <li>Born: <?php echo $person_birthday; ?></li>
            <li>Died: <?php echo $person_deathday; ?></li>
        </ul>
        <p><?php echo nl2br($person_biography); ?></p>
        <h4>
            <a target="_blank" href="<?php echo $imdb_link; ?>">
                <span class="label label-warning">
                    IMDB
                </span>
            </a>
        </h4>
    </section>
    <section id="credits">
        <h3>Cast Credits: <?php echo $ct_credits_cast; ?></h3>
        <ul>
            <?php for($ca=0; $ca<$ct_credits_cast; $ca++ ) :
                $release_date   = $credits_cast[$ca]['release_date'];
                $title          = $credits_cast[$ca]['title'];
                $character      = $credits_cast[$ca]['character'];
                $id_movie       = $credits_cast[$ca]['id'];
                $href_movie     = urldecode("found_movie.php?id={$id_movie}"); ?><li><?php
                echo $release_date; ?>&nbsp;<em><strong><a href="<?php
                echo $href_movie; ?>"><?php
                echo $title; ?></a></strong></em><br /><?php
                echo $character; ?></li><?php
            endfor; ?>
        </ul>
        <h3>Crew Credits: <?php echo $ct_credits_crew; ?></h3>
        <ul>
            <?php for($cr=0; $cr<$ct_credits_crew; $cr++ ) :
                $release_date   = $credits_crew[$cr]['release_date'];
                $title          = $credits_crew[$cr]['title'];
                $department     = $credits_crew[$cr]['department'];
                $job            = $credits_crew[$cr]['job'];
                $id_movie       = $credits_crew[$cr]['id'];
                $href_movie     = urldecode("found_movie.php?id={$id_movie}"); ?><li><?php
                echo $release_date; ?>&nbsp;<em><strong><a href="<?php
                echo $href_movie; ?>"><?php
                echo $title; ?></a></strong></em><br /><?php
                echo $department; ?>:&nbsp;<?php
                echo $job; ?></li><?php
            endfor; ?>
        </ul>
    </section>
    <section id="images">
        <section id="profiles">
            <h3>Profile(s)</h3>
            <p>
                Default (Main) Profile:<br />
                <img alt="" src="<?php echo $person_profile; ?>" />
            </p>
            <p>Other Profiles (if any):<br />
            <?php
                for ($p=0; $p<$ct_profiles; $p++) :
                    $src_profile = $objMovieDB->url_profile($person_profiles[$p]['file_path']);
                    ?><img alt="" src="<?php echo $src_profile; ?>" /><?php    
                endfor;
            ?></p>
        </section>
    </section>    
</article>