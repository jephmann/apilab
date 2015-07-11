<article>
    <p>Stuff ya gotta watch:</p>
    <ul>
        <li>In the "known_for" sub-arrays within each person result, movies appear as either "title" or "name".</ul>
    <p>PAGES: <?php
        echo $total_pages; ?></p>
    <p>RESULTS: <?php
        echo $total_results; ?></p>
    <ol>
        <?php
            $ct_data = count($data);
            for ($i=0; $i<$ct_data; $i++) :
                $person_id      = $data[$i]['id'];
                $person_name    = $data[$i]['name'];
                $known_for      = $data[$i]['known_for'];
                $ct_known_for   = count($known_for);
                ?><li><a href="found_person.php?id=<?php
                echo $person_id; ?>"><span class="label label-success"><?php
                echo $person_name; ?></span></a><?php
                for ($j=0; $j<$ct_known_for; $j++) :
                    $known_for_id           = $known_for[$j]['id'];
                    $known_for_movie        = NULL;
                    if(isset($known_for[$j]['title']))
                    {
                        $known_for_movie    = $known_for[$j]['title'];
                    }
                    else
                    {
                        $known_for_movie    = $known_for[$j]['name'];
                    }                    
                    ?>&nbsp;&nbsp;<a href="found_movie.php?id=<?php
                    echo $known_for_id ?>"><span class="label label-info"><em><?php
                    echo $known_for_movie; ?></em></span></a><?php    
                endfor; ?></li><?php
            endfor;
        ?>
    </ol>
</article>