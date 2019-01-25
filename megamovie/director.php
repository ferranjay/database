<?php

    //title.PHP

    include "db_connection.php";   
    
    
    $sql_querie = "SELECT mov_id, mov_poster FROM movies limit 15 ORDER BY mov_dir";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        $movie_poster = $row['mov_poster'];
        $m_id = $row['mov_id']; 
        //echo $movie_id;

        echo '<div class="poster">' .
             '<a href="getPosterbyTitle.php?movie_id=' . $m_id . '">'  .
                '<img src="img/' . $movie_poster . '" alt="' . $row['mov_id'] . '" style="width:100%">' .   
             '</a>' .       
             '</div>';
  
    }       

    $conn = null;
  
?>