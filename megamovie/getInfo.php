<?php

    //getInfo.PHP

    include "db_connection.php";   
    
    
    $sql_querie = "SELECT mov_id, mov_poster FROM movies limit 20";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        $movie_poster = $row['mov_poster'];
        $m_id = $row['mov_id']; 
        //echo $movie_id;

        echo '<div class="postercolor">' .
             '<div class="postercolor2">' .
             '<a href="getSinglePosterInfo.php?movie_id=' . $m_id . '">'  .
                '<img src="img/' . $movie_poster . '" alt="' . $row['mov_id'] . '" style="width:100%">' .   
             '</a>' . 
             '</div>';      
             '</div>';
             '<div class="postercolor3">' .
             '</div>';
  
    }       

    $conn = null;
  
?>