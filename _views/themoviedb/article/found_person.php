<article>
    <p>
        If accessed directly, this page would be populated with data based on a
        default id. Otherwise, data would be populated via an id selected from a
        search page.
    </p>
    <section id="person">
        <h3><?php echo $person_name; ?></h3>
        <p><?php echo $person_biography; ?></p>
        <p>Born: <?php echo $person_birthday; ?></p>
        <p>Died: <?php echo $person_deathday; ?></p>
    </section>
    <section id="credits">
        <ul>
            <li>Cast Credits: <?php echo $ct_credits_cast; ?></li>
            <li>Crew Credits: <?php echo $ct_credits_crew; ?></li>
        </ul>
    </section>
    <section id="profile">
        <h3>Profile(s)</h3>
        <p>
            Default (Main) Profile:<br />
            <img alt="" src="<?php echo $person_profile; ?>" />
        </p>
        <p>Other Posters (if any):</p>
        <?php
            for ($p=0; $p<$ct_profiles; $p++) :
                $src_profile = $objMovieDB->url_profile($person_profiles[$p]['file_path']);
                ?><img alt="" src="<?php echo $src_profile; ?>" /><?php    
            endfor;
        ?>
    </section>    
</article>