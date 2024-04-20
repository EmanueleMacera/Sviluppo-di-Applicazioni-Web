<?php
// Avvia la sessione
session_start();
// Verifica se la sessione non è impostata (non loggato)
if (!isset($_SESSION["session"])) {
    // Reindirizza alla pagina di login
    header("Refresh: 0, url = login.php");
    // Assicura che non venga eseguito altro codice dopo il reindirizzamento
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Market - Stema</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="js/store.js" async></script>
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="home_log.php">Stema</a>
            <button class="navbar-toggler navbar-toggler-right" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <form id="searchForm" name="searchForm" novalidate="novalidate" method="GET" action="database/search.php">
                    <input type="search" style="width: 160px;height: 27px;background: rgb(207,207,207);" placeholder="Search keywords" id="search" name="search" maxlength="15"/>
                    <button style="display: none" id="searchSubmit" type="submit" name="searchSubmit">Search</button>
                </form>
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="home_log.php">home</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="database/logout.php" style="background: rgb(163,145,84);font-size: 12.4px;border-radius: 28px;transform-origin: 38px 19px;width: 93px;margin-top: 5px;min-height: 0px;height: 40.6562px;text-align: center;font-weight: bold;border-width: 0px;border-color: rgb(255,255,255);">log out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="contact" style="background-image: url('assets/img/map-image.png');height: 2250px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="height: 116px;">
                    <h1 class="text-uppercase section-heading">STORE</h1>
                
                    <section class="container content-section">    
                        <h3 class="section-header">COIN</h3>
                        <div class="shop-items">
                            <div class="shop-item">
                                <span class="shop-item-title">Stema coin</span>
                                <img class="shop-item-image" src="assets/img/Coin.png" alt="Stema Coin">
                                <div class="shop-item-details">
                                    <span class="shop-item-price">€1.20</span>
                                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                                </div>
                            </div> 
                        </div>
                    </section>
                    <section class="container content-section">
                        <h3 class="section-header">MERCH</h3>
                            <div class="shop-items">
                                <div class="shop-item">
                                    <span class="shop-item-title">T-Shirt</span>
                                    <img class="shop-item-image" src="assets/img/store/hoodie_front.png" alt="Stema's Hoodie Front">
                                    <div class="shop-item-details">
                                        <span class="shop-item-price">€39.99</span>
                                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                                    </div>
                                </div>
                                <div class="shop-item">
                                    <span class="shop-item-title">Coffee Cup</span>
                                    <img class="shop-item-image" src="assets/img/store/coffe_cup.png" alt="Stema's Coffe Cup">
                                    <div class="shop-item-details">
                                        <span class="shop-item-price">€15.99</span>
                                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                                    </div>
                                </div>
                            </div>
                    </section>
                    <section class="container content-section">
                        <h3 class="section-header">CART</h3>
                        <div class="container cart-row">
                            <span class="cart-item cart-header cart-column">ITEM</span>
                            <span class="cart-price cart-header cart-column">PRICE</span>
                            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
                        </div>
                        <div class="container cart-items"></div>
                        <div class="container cart-total">
                            <strong class="cart-total-title">Total</strong>
                            <span class="cart-total-price">€0</span>
                            
                            <p><strong style="color:#DCDCDC">We accept</strong></p>
                            <img width="45px" src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg" alt="Visa" />
                            <img width="45px" src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg" alt="American Express" />
                            <img width="45px" src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg" alt="Mastercard" />
                         </div>
                        <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
                    </section>
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
</body>

</html>
