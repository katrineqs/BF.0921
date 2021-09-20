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

<div class="headerbillede">
    <div class="topbillede">
        <div class="zoom">
            <img src="image/zionleft.png" class="zoom_layer zoom__layer--left js-zoom-zion-left">
            <img src="image/zionright.png" class="zoom_layer zoom__layer--right js-zoom-zion-right">
            <div class="zoom__text js-zoom-text">
                <div>lad</div>
                <div class="zoom__text--large">Eventyret</div>
                <div class="text-right">Begynde</div>
            </div>
        </div>
    </div>
</div>

</head>
<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<div class="infoside bg-white">
    <br>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active text-brandfarve" aria-current="page" href="index.php">Tilbage til start</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-brandfarve" href="#">Nyttige link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-brandfarve" href="#">Kontakt</a>
        </li>
    </ul>
    <br>
    <div class="container mw-100 justify-content-center">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="overskrift text-center text-brandfarve">DRØMMER DU OM AT REJSE?</h1>
                <br>
                <h3 class="afsnit">For os blev drømmen til virkelighed i 2016. Vi fremlejede vores lejleghed - solgte ud, sparede op - og tog så med rygsæk jorden rundt.</h3>
                <br>
                <p>Vores rejseerfaring, fif, tips og gode råd har vi samlet på denne side så andre nemt kan virkeliggøre deres rejse.</p>
            </div>
            <div class="col-sm-6">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image/San2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image/mon2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image/Mon1.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-bokse m-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100" style="width: 100;">
                    <img src="image/kin2.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Fra ide til afrejse</h5>
                        <p class="card-text">Hvordan kommer man fra drømme og ide, til konkret planlægning af rute? Hvad gør vi med vores bolig mens vi er ude og rejse? Hvilke papire skal man have på plads?</p>
                        <a href="#" class="btn bg-brandfarve btn-primary">Læs artikel</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="...">
                    <img src="image/kin1.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Rejsedagbog</h5>
                        <p class="card-text">Det bliver også "hverdag" når man rejser i en længere periode. Det er en god ide at skrive dagbog og nedskrive reflektioner, oplevelser og indtryg.</p>
                        <a href="#" class="btn btn-brandfarve">Læs med her</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 100;">
                    <img src="image/pakkeliste.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Hvad skal man pakke?</h5>
                        <p class="card-text">"Du skal selv løfte tasken!" Så tag kun det mest nødvendige med... men hvad er det? Vi har samlet en liste over de mest nødvendige ting til din rygsæk</p>
                        <a href="#" class="btn btn-brandfarve">Se listen her</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <picture class="forsidebillede">
        <source srcset="image/kinmur.jpg" media="(max-width: 800px)">
        <source srcset="image/kinmur.jpg" media="(max-width: 1000px)">
        <source srcset="image/kinmur.jpg">
        <img src="image/kinmur.jpg" alt="image/kinmur.jpg">
    </picture>
    <br>
    <div class="container mw-100 justify-content-center">
        <div class="row">
            <div class="col-sm-6">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image/San1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image/Gra1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image/mon3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h1 class="overskrift text-center text-brandfarve">JORDEN RUNDT 2016</h1>
                <br>
                <h3 class="afsnit">Vores tur gik gennem: Danmark, Sverige, Finland, Rusland, Mongoliet, Kina og USA</h3>
                <br>
                <p>Kun fra Kina til USA, og fra USA til Danmark brugte vi fly - ellers foregik hele turen på land med tog, bus og bil. En fantaksisk oplevelser med mange kulturer, oplevelser og nye venskaber.</p>
            </div>
        </div>
    </div>
    <div class="card-bokse m-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100" style="width: 100;">
                    <img src="image/usa1.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">USA - TOP 10</h5>
                        <p class="card-text">Vi krydsede USA fra Californien til New York i bil - 18 stater i alt på 2 måneder. Læs vore top 10 anbefalinger fra turen gennem USA</p>
                        <a href="#" class="btn bg-brandfarve btn-primary">Klik her</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 100;">
                    <img src="image/tra3.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Den transibiriske jernbane</h5>
                        <p class="card-text">Fra Rusland til Kina rejste vi med tog. En ubeskrivelig smu tur gennem hele det enorme Rusland med stop i Mongoliet og videre til Kina</p>
                        <a href="#" class="btn btn-brandfarve">Læs mere her</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 100;">
                    <img src="image/kin3.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Historie i Kina</h5>
                        <p class="card-text">Sæt god tid af når du besøger Kina. Det enorme land rummer så meget historie, kultur og eventyr</p>
                        <a href="#" class="btn btn-brandfarve">Se listen her</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="footer">
            <picture class="forsidebillede">
                <source srcset="image/footer.jpg" media="(max-width: 800px)">
                <source srcset="image/footer.jpg" media="(max-width: 1000px)">
                <source srcset="image/footer.jpg">
                <img src="image/footer.jpgg" alt="image/footer.jpg">
            </picture>
    </div>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

<script type="text/javascript">
    const zoomZionLeft = document.querySelector('.js-zoom-zion-left');
    const zoomZionRight = document.querySelector('.js-zoom-zion-right');
    const zoomText = document.querySelector('.js-zoom-text');

    document.addEventListener('scroll', () => {
        const scroll = window.pageYOffset;
        console.log(scroll);

        zoomZionLeft.style.width = (100 + scroll/5) + '%';
        zoomZionLeft.style.left = - scroll/5 +'%';
        zoomZionLeft.style.bottom = - scroll/5 + '%';

        zoomZionRight.style.width = (100 + scroll/5) + '%';
        zoomZionRight.style.right = - scroll/5 + '%';
        zoomZionRight.style.bottom = - scroll/5 + '%';

        zoomText.style.bottom = scroll/7 + '%';

    });


</script>


</body>

</html>
