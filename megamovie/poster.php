<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Roboto" rel="stylesheet">

    <title>Mega Movie</title>
</head>
<body>

 <!-- navigation bar-->
 <header>
        <nav class="menu">
            <ul class="menu">
                <li>
                    <a href="index.php">HOME</a>
                </li>
                <li>
                    <a href="#colors">COLORS</a>
                </li>
                <li>
                    <a href="#posters">POSTERS</a>
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
       <p>Where movies & art come together</p>
    </div>

    <div class="section-three">
        <div class="poster">
        <?php 
        if ($_SESSION['admin'] == 42) {
            echo "<a href='admin_check.php' class='nav_menu'>Product toevoegen</a>";
            echo "<a href='uitloggen.php' class='nav_menu'>Uitloggen</a>";
            echo "<img src='img/".$image."' width='50px'>";
            }
        else if ($_SESSION ['admin'] == 1) {
            echo "<a href='uitloggen.php' class='nav_menu'>Uitloggen</a>";
            echo "<img src='img/".$image."' width='50px'>";
        }
        else {
            echo "<a href='aanmelden.php' class='nav_menu'>Aanmelden</a>";
            echo "<a href='inlogscherm.php' class='nav_menu'>Inloggen</a>";
        }
        ?>
            

        </div>
       
    </div>

    <form action="/action_page.php">Search<br>
    <input type="search" name="q">
</form>







    
</body>
</html>

