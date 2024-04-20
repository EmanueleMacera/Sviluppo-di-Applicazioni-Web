<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registration - Stema</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">

    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="home_log.php">Stema</a>
            <button class="navbar-toggler navbar-toggler-right" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php" style="background: rgb(163,145,84);font-size: 12.4px;border-radius: 28px;transform-origin: 38px 19px;width: 89px;margin-top: 5px;min-height: 0px;height: 40.6562px;text-align: center;font-weight: bold;border-width: 0px;border-color: rgb(255,255,255);">Log in</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section id="contact" style="background-image:url('assets/img/map-image.png'); height:1200px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="height: 116px;">
                    <h2 class="text-uppercase section-heading">SIGN UP</h2>
                    <h3 class="text-muted section-subheading">Complete the form<br></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="signupForm" name="signupForm" novalidate="novalidate" method="POST" action="database/registration.php">
                        <div class="row">
                            <div class="col-md-6 offset-xl-3" style="height: 399px;">
                                <input class="form-control" type="text" id="firstname" placeholder="Firstname" required="" style="height: 66px;padding: 20px;" name="firstname" maxlength="40">
                                <div id="firstnameError" style="color:red"></div>
                                <input class="form-control" type="text" id="lastname" placeholder="Surname" required="" style="height: 66px;padding: 20px; margin-top: 15px;" name="lastname" maxlength="40">
                                <div id="lastnameError" style="color:red"></div>    
                                <input class="form-control" type="email" id="email" placeholder="E-mail" required="" style="height: 66px;padding: 20px; margin-top: 15px;" name="email" maxlength="50">
                                <div id="emailError" style="color:red"></div>
                                <input class="form-control" type="password" id="pass" placeholder="Password" required="" style="height: 66px;padding: 20px; margin-top: 15px;" name="pass" maxlength="25">
                                <div id="passwordError" style="color:red"></div>
                                <input class="form-control" type="password" id="confirm" placeholder="Confirm password" required="" style="height: 66px;padding: 20px; margin-top: 15px;" name="confirm" maxlength="25">
                                <div id="confirmError" style="color:red"></div>
                                <div class="col-lg-12 text-center" style="height: 66px;padding: 20px; margin-top: 15px;">
                                    <div id="regSucc" style="color: green"></div>
                                    <button class="btn btn-primary btn-xl text-uppercase" id="submit" type="submit" name="submit">Sign Up</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xl-6"><span class="copyright">Copyright&nbsp;© Stema</span></div>
                <div class="col-md-4 col-xl-6">
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
    <script src="js/registration.js"></script>
</body>

</html>
