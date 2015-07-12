<article>
    <p>
        If accessed directly, this page would be populated with data based on a
        default id. Otherwise, data would be populated via an id selected from a
        search page.
    </p>
    <section id="movie">
        <h3><em><?php echo $movie_title; ?></em></h3>
        <p>Released: <?php echo $movie_release_date; ?></p>
        <p><?php echo $movie_overview; ?></p>
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
                $name          = $credits_cast[$ca]['name'];
                $character      = $credits_cast[$ca]['character'];
                $id_name       = $credits_cast[$ca]['id'];
                $href_movie     = urldecode("found_person.php?id={$id_name}"); ?><li><strong><a href="<?php
                echo $href_movie; ?>"><?php
                echo $name; ?></a></strong><br /><?php
                echo $character; ?></li><?php
            endfor; ?>
        </ul>
        <h3>Crew Credits: <?php echo $ct_credits_crew; ?></h3>
        <ul>
            <?php for($cr=0; $cr<$ct_credits_crew; $cr++ ) :
                $name          = $credits_crew[$cr]['name'];
                $department     = $credits_crew[$cr]['department'];
                $job            = $credits_crew[$cr]['job'];
                $id_name       = $credits_crew[$cr]['id'];
                $href_movie     = urldecode("found_person.php?id={$id_name}"); ?><li><strong><a href="<?php
                echo $href_movie; ?>"><?php
                echo $name; ?></a></strong><br /><?php
                echo $department; ?>:&nbsp;<?php
                echo $job; ?></li><?php
            endfor; ?>
        </ul>
    </section>
    <section id="images">
        <section id="poster">
            <h3>Poster(s)</h3>
            <p>
                Default (Main) Poster:<br />
                <img alt="" src="<?php echo $movie_poster; ?>" />
            </p>        
            <p>Other Posters (if any):</p>
            <?php
                for ($p=0; $p<$ct_posters; $p++) :
                    $src_poster = $objMovieDB->url_poster($movie_posters[$p]['file_path']);
                    ?><img alt="" src="<?php echo $src_poster; ?>" /><?php    
                endfor;
            ?>
        </section>
        <section id="backdrop">
            <h3>Backdrop(s)</h3>
            <?php
                for ($b=0; $b<$ct_backdrops; $b++) :
                    $src_backdrop = $objMovieDB->url_backdrop($movie_backdrops[$b]['file_path']);
                    ?><img alt="" src="<?php echo $src_backdrop; ?>" /><?php    
                endfor;
            ?>
        </section>
    </section>
</article>