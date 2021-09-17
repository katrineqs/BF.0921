<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Jorden rundt</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.scss" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger"><div></div></div>
    <div class="menu">
        <div>
            <div>
                <ul>
                    <li><a href="underside.php">Jorden Rundt</a></li>
                    <li><a href="underside.php">Blok</a></li>
                    <li><a href="underside.php">Links</a></li>
                    <li><a href="underside.php">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header class="showcase">
    <div class="container showcase-inner">
        <img src="image/Logofinish1.png">
        <br>
        <a href="underside.php" class="btn">READY FOR TAKEOFF</a>
    </div>
</header>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<scrips src="js/script.js"></scrips>

</body>
</html>
