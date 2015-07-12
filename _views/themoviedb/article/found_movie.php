<article>
    <p>
        If accessed directly, this page would be populated with data based on a
        default id. Otherwise, data would be populated via an id selected from a
        search page.
    </p>
    <section id="movie">
        <h3><?php echo $movie_title; ?></h3>
        <p><?php echo $movie_overview; ?></p>
        <p>Released: <?php echo $movie_release_date; ?></p>
    </section>
    <section id="credits">
        <ul>
            <li>Cast Credits: <?php echo $ct_credits_cast; ?></li>
            <li>Crew Credits: <?php echo $ct_credits_crew; ?></li>
        </ul>
    </section>
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
</article>