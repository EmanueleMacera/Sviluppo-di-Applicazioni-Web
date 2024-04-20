<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Update profile - Stema</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<?php
session_start();
if (!isset($_SESSION["session"])) {
    header("Refresh: 0, url=login.php");
    exit();
}

include("database/placeholder.php");
?>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="home_log.php">Stema</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <form id="searchForm" name="searchForm" method="GET" action="database/search.php">
                    <input type="search" class="form-control" placeholder="Search keywords" id="search" name="search" maxlength="15">
                    <button style="display: none;" type="submit" name="searchSubmit" id="searchSubmit"></button>
                </form>
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="home_log.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="database/logout.php" style="background: rgb(163, 145, 84); font-size: 12.4px; border-radius: 28px; transform-origin: 38px 19px; width: 92px; margin-top: 5px; min-height: 0px; height: 42.6562px; text-align: center; font-weight: bold; border-width: 0px; border-color: rgb(255, 255, 255);">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="contact" style="background-image: url('assets/img/map-image.png'); height: 1200px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="height: 116px;">
                    <h2 class="text-uppercase section-heading">PROFILE DATA</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form id="showprofileForm" name="showprofileForm" novalidate="novalidate" method="POST" action="database/update_profile.php">
                        <div class="form-group">
                            <input class="form-control" type="text" id="firstname" value="<?php echo htmlspecialchars($first) ?>" required placeholder="Firstname" name="firstname" maxlength="40">
                            <div id="firstnameError" style="color: red;"></div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" id="lastname" value="<?php echo htmlspecialchars($last) ?>" required placeholder="Lastname" name="lastname" maxlength="40">
                            <div id="lastnameError" style="color: red;"></div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" id="email" value="<?php echo htmlspecialchars($email) ?>" required placeholder="Email" name="email" maxlength="50">
                            <div id="emailError" style="color: red;"></div>
                        </div>
                        <div class="form-group">
                            <a href="update_password.php" class="text-decoration-none">Do you want to change your password?</a>
                        </div>
                        <div class="form-group text-center">
                            <div id="uptSucc" style="color: green;"></div>
                            <button class="btn btn-primary btn-xl text-uppercase" id="submit" type="submit" name="submit" style="width: 100%;">Update Profile</button>
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
    <script src="js/show_profile.js"></script>
</body>

</html>
