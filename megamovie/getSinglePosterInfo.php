<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Raleway" rel="stylesheet">
    
    <title>Mega Movie</title>
</head>

 <!-- navigation bar-->
 <header>
        <nav class="menu">
            <ul class="menu">
                <li>
                    <a href="index.php">HOME</a>
                </li>
                <li>
                    <a href="getSinglePosterInfo.php">INFO</a>
                </li>
                <li>
                    <a href="contact.php">CONTACT</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- landing page -->

    <a name="home"></a>
        <div class="section-one">
            <h1 class="title">Mega Movie</h1>
        </div>
    

        <div class="section-two">
            <p>WHERE MOVIES & ART UNITE</p>

        </div>

    <div id="button-wrapper">

        <button class="one" type="button" onclick="window.location.href='getPosterbyTitle.php'">order by title</button>

        <button class="two" type="button" onclick="window.location.href='getPosterbyDir.php'">order by director</button>
   
        <button class="three" type="button" onclick="window.location.href='getPosterbyGen.php'">order by genre</button>
    </div>


    <div class="section-three">

    <div class="poster">

<?php

    //poster.PHP  

    include "db_connection.php";   

    $movies_index = $_GET['movie_id'];
    
    $sql_querie = "SELECT mov_id, mov_poster, mov_title, mov_lang, mov_year FROM movies WHERE mov_id = '$movies_index'";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        $movie_poster = $row['mov_poster'];
        $movie_id = $row['mov_id']; 
        $movie_title = $row ['mov_title'];
        $movie_lang = $row ['mov_lang'];
        $movie_year = $row ['mov_year'];

        //echo $movie_id;

        echo 
             '<a href="getSinglePosterInfo.php?movie_id=' . $movie_id . '">'  .
                '<img src="img/' . $movie_poster . '" alt="' . $row['mov_id'] . '" style="width:100%">' .   
             '</a>' . '</div>' .
             '<div class="postertext">' .
             '<h1>' . $row['mov_title']  . ' <br> ' . $row['mov_lang'] . '<br>' . $row['mov_year'] . '</h1>' .
             '</div>';    
             
  
    }       

    $conn = null;
  
?>


</div>





