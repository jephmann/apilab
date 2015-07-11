<article>
    <p>PAGES: <?php
        echo $total_pages; ?></p>
    <p>RESULTS: <?php
        echo $total_results; ?></p>
    <ol>
        <?php
            $ct_data = count($data);
            for ($i=0; $i<$ct_data; $i++) :
                $movie_id           = $data[$i]['id'];
                $movie_title        = $data[$i]['title'];
                $movie_release_date = $data[$i]['release_date'];
                ?><li><em><a href="found_movie.php?id=<?php
                echo $movie_id; ?>"><span class="label label-success"><?php
                echo $movie_title; ?></span></a></em> (<?php
                echo $movie_release_date; ?>)</li><?php
            endfor;
        ?>
    </ol>
</article>