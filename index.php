<?php
session_start();

if(!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}else{
    pagamento();
}

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <link href="styles/homepage/styles.css" rel="stylesheet">
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                document.addEventListener('scroll', () => {
                    let navBar = document.querySelector('nav');
                    if (window.scrollY > 0) {
                        navBar.style.background = 'white';
                        navBar.style.boxShadow = '0 5px 20px #48D1CC'
                    }
                    else {
                        navBar.style.background = 'transparent';
                        navBar.style.boxShadow = 'none'
                    }
                })
            })
        </script>
    </head>
    <body>
        <nav>
            <div id="navbar">
                <div id="navbar-logo">
                    <img src="images/eLife.png" width="140" height="70">
                </div>
                <div id="navbar-links">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="products.html">Products</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                    </ul>
                    <button class="blue-button">
                        Shop Now
                    </button>
                </div>
            </div>
        </nav>
        

        <!-- TOP -->
        <div id="home-top-container">
            <div id="home-top-wrapper">
                <div id="home-top-text">
                    <h1>
                        Track Your Steps With Quality Smartwatch
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse 
                        pellentesque, ante vitae cursus elementum, lectus sapien auctor tortor, 
                        quis pharetra ligula sapien eu augue.
                    </p>
                    <button class="blue-button">
                        See Collection
                    </button>
                </div>
                <div id="home-top-image">
                    <img src="images/topwatch.png" alt="Large Blue Smartwatch">
                </div>
            </div>
        </div>

        <!-- OUR COLLECTION/ TYPES OF PRODUCTS SELLING -->
        <div id="collection-container">
            <h1>Our Collection</h1>
            <div id="collection-items-wrapper">
                <div class="collection-item">
                    <div class="collection-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-headphones" viewBox="0 0 16 16">
                            <path d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5"/>
                        </svg>
                    </div>
                    <span class="collection-name">
                        Headphone
                    </span>
                </div>
                <div class="collection-item">
                    <div class="collection-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                            <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                        </svg>
                    </div>
                    <span class="collection-name">
                        Phone
                    </span>
                </div>
                <div class="collection-item">
                    <div class="collection-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"fill="currentColor" class="bi bi-smartwatch" viewBox="0 0 16 16">
                            <path d="M9 5a.5.5 0 0 0-1 0v3H6a.5.5 0 0 0 0 1h2.5a.5.5 0 0 0 .5-.5z"/>
                            <path d="M4 1.667v.383A2.5 2.5 0 0 0 2 4.5v7a2.5 2.5 0 0 0 2 2.45v.383C4 15.253 4.746 16 5.667 16h4.666c.92 0 1.667-.746 1.667-1.667v-.383a2.5 2.5 0 0 0 2-2.45V8h.5a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5H14v-.5a2.5 2.5 0 0 0-2-2.45v-.383C12 .747 11.254 0 10.333 0H5.667C4.747 0 4 .746 4 1.667M4.5 3h7A1.5 1.5 0 0 1 13 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-7A1.5 1.5 0 0 1 3 11.5v-7A1.5 1.5 0 0 1 4.5 3"/>
                          </svg>
                    </div>
                    <span class="collection-name">
                        Smartwatch
                    </span>
                </div>
                <div class="collection-item">
                    <div class="collection-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-tablet-landscape" viewBox="0 0 16 16">
                            <path d="M1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm-1 8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2z"/>
                            <path d="M14 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0"/>
                          </svg>
                    </div>
                    <span class="collection-name">
                        Tablet
                    </span>
                </div>
                <div class="collection-item">
                    <div class="collection-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                            <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5"/>
                          </svg>
                    </div>
                    <span class="collection-name">
                        PC
                    </span>
                </div>
            </div>
        </div> <!-- END OF PRODUCT COLLECTION-->

        <!-- BEST SELLERS – PRODUCT SECTION -->
        <div class="product-section-container">
            <h1>Best Sellers</h1>
            <span class="product-section-description">
                Lectus sapien auctor tortor quis pharetra ligula sapien eu augue. Praesent bibendum sapien ut 
                est venenatis semper.
            </span>
            <ul class="product-section-items-wrapper">
                <li class="product-item">
                    <div class="product-image">
                        <img src="images/collection/watch.png" alt="Torquoise SmartWatch">
                    </div>
                    <div class="product-text">
                        <span class="product-title">
                            Turquoise Light Blue<br>
                            Single Wool Smartwatch
                        </span>
                        <div class="product-purchase">
                            <span class="product-price">
                                $300.00
                            </span>
                            <button class="blue-button add-to-cart">
                                Add To Cart
                            </button>
                        </div>
                    </div>
                </li>
                <li class="product-item">
                    <div class="product-image">
                        <img src="images/collection/ipad.png" alt="Torquoise SmartWatch">
                    </div>
                    <div class="product-text">
                        <span class="product-title">
                            Sunshine Yellow Bright Curve-Edged Tablet
                        </span>
                        <div class="product-purchase">
                            <span class="product-price">
                                $200.00
                            </span>
                            <button class="blue-button add-to-cart">
                                Add To Cart
                            </button>
                        </div>
                    </div>
                </li>
                <li class="product-item">
                    <div class="product-image">
                        <img src="images/collection/headphone.png" alt="Sunshine Yellow Bright">
                    </div>
                    <div class="product-text">
                        <span class="product-title">
                            Candyfloss Pink Two-Earpiece Headphone
                        </span>
                        <div class="product-purchase">
                            <span class="product-price">
                                $500.00
                            </span>
                            <button class="blue-button add-to-cart">
                                Add To Cart
                            </button>
                        </div>
                    </div>
                </li>
            </ul>
        </div> <!-- END OF BEST SELLERS - PRODUCT SECTION -->

        <!-- IPAD PROMO -->
        <div class="promo-container">
            <div class="promo-box">
                <div class="promo-image">
                    <img src="images/collection/ipad.png" alt="Candyfloss Pink Two-Earpiece Headphone">
                </div>
                <div class="promo-content">
                    <h1>New Arrivals</h1>
                    <h2>Sunshine Ipad</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Curabitur tristique quam eget eros convallis, 
                        sit amet pellentesque. 
                    </p>
                    <div>
                        <button class="white-button">
                            SHOP NOW
                        </button>
                    </div>
                </div>
            </div>
        </div> <!-- END OF IPAD PROMO -->
        
    </body>
    <footer>
        <div id="footer-top">
            <img src="images/eLife.png" alt="eLife Logo" width="220px" height="110px">
            <div id="footer-socials-wrapper">
                <div class="footer-social">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg>
                    <span>012 345 6789</span>
                </div>
                <div class="footer-social">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
                    </svg>
                    <span>Telegram</span>
                </div>
                <div class="footer-social">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
                    </svg>
                    <span>Twitter</span>
                </div>
            </div>
        </div>
        <div id="footer-bottom">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="#">Products</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
            </ul>
            <p>
                Copyright © 2024 eLife. All rights reserved.
            </p>
        </div>
    </footer>
</html>