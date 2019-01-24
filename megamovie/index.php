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
                    <a href="posterinfo.php">INFO</a>
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
            <p>Where movies & art unite</p>

        </div>

    <div id="button-wrapper">

         <button type="button">filter by title</button>

         <button type="button">filter by director</button>
            
         <button type="button">filter by genre</button>
         
    </div>


    <div class="section-three">

   
        <?php include "poster.php"; ?>
           
    </div>



