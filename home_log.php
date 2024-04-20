<?php
session_start();
if (!isset($_SESSION["session"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Homelog - Stema</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <style>
        body {
            width: auto;
        }

        #searchForm {
            margin-bottom: 15px;
        }

        #search {
            width: 160px;
            height: 27px;
            background: rgb(207, 207, 207);
        }

        #submit {
            display: none;
        }

        #logoutBtn {
            background: rgb(163, 145, 84);
            font-size: 12.4px;
            border-radius: 28px;
            transform-origin: 38px 19px;
            width: 91px;
            margin-top: 5px;
            min-height: 0px;
            height: 44.6562px;
            text-align: center;
            font-weight: bold;
            border-width: 0px;
            border-color: rgb(255, 255, 255);
            margin-right: 8px;
        }

        header.masthead {
            background: url("assets/img/Stema.jpg") center / auto no-repeat;
            height: 932px;
            width: auto;
            filter: blur(0px);
            padding: 0px;
        }

        .intro-text {
            height: 743px;
            width: auto;
        }

        .intro-text span {
            font-size: 63px;
            font-weight: bold;
        }

        .section-heading {
            margin-bottom: 30px;
        }

        .section-subheading {
            margin-bottom: 30px;
        }

        .team-member img {
            width: 225px;
        }

        .clients img {
            height: 41px;
            margin: 5px;
        }

        footer {
            background-color: #f8f9fa;
            padding: 25px 0;
        }

        .copyright {
            font-size: 14px;
            color: #6c757d;
        }

        .quicklinks li {
            display: inline;
            margin-right: 10px;
        }
    </style>
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Stema</a>
            <button class="navbar-toggler navbar-toggler-right" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <form id="searchForm" name="searchForm" novalidate="novalidate" method="GET" action="database/search.php">
                    <input type="search" id="search" name="search" placeholder="Search keywords" maxlength="15" />
                    <button id="submit" type="submit" name="submit">Search</button>
                </form>
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="market.php">Market</a></li>
                    <li class="nav-item"><a id="logoutBtn" class="nav-link" href="database/logout.php">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <span>WELCOME TO STEMA WORLD'S</span>
                <div class="intro-lead-in">It's nice to meet you!</div>
                <a class="btn btn-primary btn-xl text-uppercase" role="button" href="#services">Tell me more</a>
            </div>
        </div>
    </header>

    <section id="services" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Services</h2>
                    <h3 class="text-muted section-subheading">Stema is a new digital currency that opens up a new world.<br>With it, you can buy goods and services in every university.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="section-heading">Uni-Commerce</h4>
                    <p class="text-muted">Buy safely every service offered by the university.<br>You will also be able to exchange your currency with other students to get notes or repetitions.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="section-heading">Newsletter</h4>
                    <p class="text-muted">Want to know more about Stema's work around the world? Subscribe to our short email for manually selected articles, news, and more.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="section-heading">Security</h4>
                    <p class="text-muted">Our wallet offers an advanced security system. You won't have to worry about fraud or cyber attacks. We'll take care of protecting you!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase">About</h2>
                    <h3 class="text-muted section-subheading">Stema's history</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-group timeline">
                        <li class="list-group-item">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" alt="University classroom" src="assets/img/about/Aula.jpg"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2019-2020</h4>
                                    <h4 class="subheading">The founders know each other</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">In their first year at university, they met through a computer lab. The two, forced by events to work together, immediately had an excellent understanding!</p>
                                </div>
                            </div>
                        </li>
                        <!-- Other timeline items -->
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light" id="team">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="team-member"><img class="rounded-circle mx-auto" alt="Developer Emanuele" src="assets/img/team/1.jpg">
                        <h4>Emanuele Macera</h4>
                        <p class="text-muted">Developer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="https://github.com/EmanueleMacera"><i class="fa fa-github"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.instagram.com/emanuele_macera/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="team-member"><img class="rounded-circle mx-auto" alt="Developer Stefano" src="assets/img/team/3.jpg">
                        <h4>Stefano Emuze Pizzuto</h4>
                        <p class="text-muted">Developer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="https://github.com/pxroot"><i class="fa fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3"><a href="https://cedia.unige.it/UniGePASS"><img class="img-fluid d-block mx-auto" alt="Unigepass" src="assets/img/clients/Unigepass.jpg"></a></div>
                <div class="col-sm-6 col-md-3"><a href="https://unige.it/it/"><img class="img-fluid d-block mx-auto" alt="Unige" src="assets/img/clients/Unige.jpg"></a></div>
                <div class="col-sm-6 col-md-3"><a href="https://2021.aulaweb.unige.it/"><img class="img-fluid d-block mx-auto" alt="AulaWeb" src="assets/img/clients/AulaWeb.jpg"></a></div>
                <div class="col-sm-6 col-md-3"><a href="https://www.regione.liguria.it/"><img class="img-fluid d-block mx-auto" alt="RegioneLiguria" src="assets/img/clients/RegioneLiguria.jpg"></a></div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xl-6">
                    <span class="copyright">Copyright&nbsp;© Stema</span>
                </div>
                <div class="col-md-4 col-xl-6 offset-xl-0">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="https://www.google.com/privacypolicy">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="https://en.wikipedia.org/wiki/Terms_of_service">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>
