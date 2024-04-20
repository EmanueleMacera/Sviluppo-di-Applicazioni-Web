<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Update password - Stema</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<?php
	session_start();
	if (!isset($_SESSION["session"])) {
		header("Refresh: 0, url = login.php");
	}
	?>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="home_log.php">Stema</a>
		<button class="navbar-toggler navbar-toggler-right" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
			
			<form id="searchForm" name="searchForm" novalidate="novalidate" method="GET" action="database/search.php">
				<input type="search" style="width: 160px;height: 27px;background: rgb(207,207,207);" placeholder="Search keywords" id="search" name="search" maxlength="15"/>
				<button style="display: none" id="searchSubmit" type="submit" name="searchSubmit">Search</button>
			</form>
			
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="home_log.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="database/logout.php" style="background: rgb(163,145,84);font-size: 12.4px;border-radius: 28px;transform-origin: 38px 19px;width: 92px;margin-top: 5px;min-height: 0px;height: 42.6562px;text-align: center;font-weight: bold;border-width: 0px;border-color: rgb(255,255,255);">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
	
    <section id="contact" style="background-image:url('assets/img/map-image.png'); height:1200px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="height: 116px;">
                    <h2 class="text-uppercase section-heading">UPDATE PASSWORD<br></h2>
                </div>
            </div>
                <div class="col-lg-12">
                    <form id="updatepassForm" name="updatepassForm" novalidate="novalidate" method="POST" action="database/update_password.php">
                            <div class="col-md-6 col-xxl-6 offset-xl-3 offset-xxl-3" style="height: 282px;">
								<input class="form-control" type="password" id="oldpass" placeholder="Insert your old password *" required="" style="height: 66px;padding: 20px;" name="oldpass" maxlength="25">
								<div id="oldpassError" style="color:red"></div>
								<input class="form-control" type="password" id="newpass" placeholder="Insert your new password *" required="" style="height: 66px;padding: 20px; margin-top: 15px;" name="newpass" maxlength="25">
								<div id="newpassError" style="color:red"></div>
								<input class="form-control" type="password" id="confpass" placeholder="Repeat your new password *" required="" style="height: 66px;padding: 20px; margin-top: 15px;" name="confpass" maxlength="25">
								<div id="confpassError" style="color:red"></div>
								<div class="col-lg-12 text-center" style="height: 68px;">
									<div id="uptSucc" style="color:green"></div>
									<button class="btn btn-primary btn-xl text-uppercase" id="submit" type="submit" name="submit" style="width: 248px; height: 68px; padding: 21px 40px;text-align: center; margin-top: 15px;">update</button>
								</div>
                            </div>
                    </form>
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
	<script src="js/update_password.js"></script>
</body>

</html>