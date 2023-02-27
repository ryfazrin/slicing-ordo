<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit&family=Poppins&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/normalize.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <header class="header container">
        <!-- NAVBAR -->
        <nav>
            <a class="navbar-brand" href="#">
                <img src="assets/logo.png" alt="logo">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Catalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About US</a>
                </li>
                <li class="nav-item lang">
                    <a class="disabled" href="#">ID</a> | <a href="#">EN</a>
                </li>
            </ul>
        </nav>

        <!-- HERO -->
        <div class="hero">
            <p class="text-1">A Nicklaus City Golf Course</p>
            <h1 class="text-2">Elevate your Game</h1>
            <p class="text-3">Bukit Darmo Golf welcomes you to world of fine golfing on one of the most challenging courses in Asia
                designed by Jack Nicklaus I</p>
            <div class="btn-group-social">
                <button class="btn btn-social btn-dark" type="button">
                    <span><img src="assets/service.svg" alt=""></span> Our Service
                </button>
                <button class="btn btn-social btn-primary" type="button">
                    <span><img src="assets/phone.svg" alt=""></span> Contact Us
                </button>
            </div>
        </div>
    </header>

    <!-- MAIN -->
    <main>
        <!-- ABOUT US -->
        <section class="about-us">
            <header class="title">
                <h2>About Us</h2>
                <p>bukit Darmo Golf</p>
            </header>
            <div class="body container">
                <figure>
                    <img src="assets/about-us.png" alt="about us">
                </figure>
                <p>Strategically located at the intersection of Jalan Mayjend Sungkono and the toll road. Bukit Darmo
                    Golf Surabaya is easyliy accessible. It's just 10 minutes from Surabaya city centre. Bukit Darmo
                    Golf welcomes you to world of fine golfing on one of the most challenging courses in Asia designed
                    by Jack Nicklaus II.</p>
            </div>
        </section>

        <!-- SERVICE -->
        <section class="service">
            <header class="title">
                <h2>Service</h2>
                <p>What We Can Provide</p>
            </header>
            <div class="body container">
                <!-- ARTICLES -->
                <article>
                    <img src="assets/service-1.png" alt="service 1">
                    <div class="body">
                        <h3>Driving Range</h3>
                        <p>We welcome you to join lessons from Beginner to Advance</p>
                        <a href="#">
                            Get More info <span><img src="assets/arrow-right.svg"></span>
                        </a>
                    </div>
                </article>
                <article>
                    <img src="assets/service-1.png" alt="service 1">
                    <div class="body">
                        <h3>Driving Range</h3>
                        <p>We welcome you to join lessons from Beginner to Advance</p>
                        <a href="#">
                            Get More info <span><img src="assets/arrow-right.svg"></span>
                        </a>
                    </div>
                </article>
                <article>
                    <img src="assets/service-1.png" alt="service 1">
                    <div class="body">
                        <h3>Driving Range</h3>
                        <p>We welcome you to join lessons from Beginner to Advance</p>
                        <a href="#">
                            Get More info <span><img src="assets/arrow-right.svg"></span>
                        </a>
                    </div>
                </article>
                <article>
                    <img src="assets/service-1.png" alt="service 1">
                    <div class="body">
                        <h3>Driving Range</h3>
                        <p>We welcome you to join lessons from Beginner to Advance</p>
                        <a href="#">
                            Get More info <span><img src="assets/arrow-right.svg"></span>
                        </a>
                    </div>
                </article>
            </div>
        </section>

        <!-- OUR SERVICE -->
        <section>
            <div>
                <h2>BROWSE OUR SERVICE</h2>
                <p>Bukit Darmo Golf is dedicated to improving your golf game by designing various easy to understand golf training programs within the exellent practice facilities.</p>
                <button type="button">Contact Us</button>
            </div>
            <div>
                <img src="" alt="">
            </div>
        </section>

        <!-- HOLE & SPACES -->
        <section>
            <div>
                <div>
                    <h2>Holes & spaces</h2>
                    <p>We have 18 holes in Bukit Darmo Course that offers a lot of variety to give our members and guests a unique experience at every hole.</p>
                </div>
                <div>
                    <button type="button">Contact Us</button>
                </div>
            </div>
            <div class="body">
                <!-- ARTICLES with IMAGE background -->
                <article>
                    <img src="" alt="article 1">
                    <div class="body">
                        <h3>Hole 1</h3>
                        <div>
                            <span>Par</span><span>5</span>
                        </div>
                        <div>
                            <span>Par</span><span>5</span>
                        </div>
                    </div>
                </article>
            </div>
            <div class="footer">
                <div>dot paging</div>
                <div>
                    <button type="button">Previus</button>
                    <button type="button">Next</button>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer>
        <div>
            <img src="" alt="footer logo">
            <h1>Bukit Darmo Golf</h1>
            <p><span>Logo</span> Jl. Bukit Darmo Golf Block G-2 Surabaya</p>
            <p><span>Logo</span> bdgsby@bukitdarmogolf.com</p>
            <p><span>Logo</span> (031) 731 5555 - (031) 732 5555</p>
        </div>
        <div>
            <p>© Bukit Darmo Golf 2022</p>
        </div>
    </footer>
</body>

</html>