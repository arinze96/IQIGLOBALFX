<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/IQIGLOBALFX/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 08:09:21 GMT -->

<head>
    <title>IQIGLOBALFX - Bitcoin Crypto Currency Template</title>
    @include('includes.home_css')


</head>

<body>
    <!-- SVG Preloader Starts -->
    <div id="preloader">
        <div id="preloader-content">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" width="150px" height="150px" viewBox="100 100 400 400" xml:space="preserve">
                <filter id="dropshadow" height="130%">
                    <feGaussianBlur in="SourceAlpha" stdDeviation="5" />
                    <feOffset dx="0" dy="0" result="offsetblur" />
                    <feFlood flood-color="red" />
                    <feComposite in2="offsetblur" operator="in" />
                    <feMerge>
                        <feMergeNode />
                        <feMergeNode in="SourceGraphic" />
                    </feMerge>
                </filter>
                <path class="path" fill="#000000"
                    d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
                    c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
                    l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
                    c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
                    c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
                    l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
                    C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
                    C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
                    C327.767,212.14,389.234,221.02,379.302,260.846z" />
            </svg>
        </div>
    </div>
    <!-- SVG Preloader Ends -->
    <!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a id="orange-css" href="#" title="orange" class="color"><img
                            src="{{ asset('assets/file/images/styleswitcher/colors/orange.png') }}" alt=""
                            width="30" height="30" /></a>
                </li>
                <li>
                    <a id="green-css" href="#" title="green" class="color"><img
                            src="{{ asset('assets/file/images/styleswitcher/colors/green.png') }}" alt=""
                            width="30" height="30" /></a>
                </li>
                <li>
                    <a id="blue-css" href="#" title="blue" class="color"><img
                            src="{{ asset('assets/file/images/styleswitcher/colors/blue.png') }}" alt=""
                            width="30" height="30" /></a>
                </li>
            </ul>

            <p>BODY SKIN</p>

            <label><input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark"
                    checked="checked" /> Dark</label>
            <label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light" />
                Light</label>

            <hr />

            <p>LAYOUT STYLE</p>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide"
                    checked="checked" /> Wide</label>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed" />
                Boxed</label>

            <hr />

            <a href="#" class="custom-button purchase">Purchase</a>
            <div id="hideSwitcher">&times;</div>

        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        @include('includes.home_header')

        <!-- Header Ends -->
        <!-- Slider Starts -->
        <div>
            <div id="main-slide" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators Starts -->
                <ol class="carousel-indicators visible-lg visible-md">
                    <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                    <li data-target="#main-slide" data-slide-to="1"></li>
                    <li data-target="#main-slide" data-slide-to="2"></li>
                </ol>
                <!-- Indicators Ends -->
                <!-- Carousel Inner Starts -->
                <div class="carousel-inner">
                    <!-- Carousel Item Starts -->
                    <div class="item active bg-parallax item-1">
                        <div class="slider-content">
                            <div class="container">
                                <div class="slider-text text-center">
                                    <h3 class="slide-title"><span>Secure</span> and <span>Easy Way</span><br /> To
                                        Bitcoin
                                    </h3>
                                    <p>
                                        <a href="#" class="slider btn btn-primary">Learn more</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                    <!-- Carousel Item Starts -->
                    <div class="item bg-parallax item-2">
                        <div class="slider-content">
                            <div class="col-md-12">
                                <div class="container">
                                    <div class="slider-text text-center">
                                        <h3 class="slide-title"><span>Bitcoin</span> Exchange <br />You can
                                            <span>Trust</span>
                                        </h3>
                                        <p>
                                            <a href="{{ route('investmentplans') }}"
                                                class="slider btn btn-primary">our
                                                prices</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                </div>
                <!-- Carousel Inner Ends -->
                <!-- Carousel Controlers Starts -->
                <a class="left carousel-control" href="index-2.html#main-slide" data-slide="prev">
                    <span><i class="fa fa-angle-left"></i></span>
                </a>
                <a class="right carousel-control" href="index-2.html#main-slide" data-slide="next">
                    <span><i class="fa fa-angle-right"></i></span>
                </a>
                <!-- Carousel Controlers Ends -->
            </div>
        </div>
        <!-- Slider Ends -->
        <!-- Features Section Starts -->
        <section class="features">
            <div class="container">
                <div class="row features-row">
                    <!-- Feature Box Starts -->
                    <div class="feature-box col-md-4 col-sm-12">
                        <span class="feature-icon">
                            <img id="download-bitcoin"
                                src="{{ asset('assets/file/images/icons/orange/download-bitcoin.png') }}"
                                alt="download bitcoin">
                        </span>
                        <div class="feature-box-content">
                            <h3>Download Bitcoin Wallet</h3>
                            <p>Get it on PC or Mobile to create, send and receive bitcoins.</p>
                        </div>
                    </div>
                    <!-- Feature Box Ends -->
                    <!-- Feature Box Starts -->
                    <div class="feature-box two col-md-4 col-sm-12">
                        <span class="feature-icon">
                            <img id="add-bitcoins"
                                src="{{ asset('assets/file/images/icons/orange/add-bitcoins.png') }}"
                                alt="add bitcoins">
                        </span>
                        <div class="feature-box-content">
                            <h3>Add coins to your Wallet</h3>
                            <p>Add bitcoins you’ve created or exchanged via credit card.</p>
                        </div>
                    </div>
                    <!-- Feature Box Ends -->
                    <!-- Feature Box Starts -->
                    <div class="feature-box three col-md-4 col-sm-12">
                        <span class="feature-icon">
                            <img id="buy-sell-bitcoins"
                                src="{{ asset('assets/file/images/icons/orange/buy-sell-bitcoins.png') }}"
                                alt="buy and sell bitcoins">
                        </span>
                        <div class="feature-box-content">
                            <h3>Buy/Sell with Wallet</h3>
                            <p>Enter receiver's address, specify the amount and send.</p>
                        </div>
                    </div>
                    <!-- Feature Box Ends -->
                </div>
            </div>
        </section>
        <!-- Features Section Ends -->
        <!-- About Section Starts -->
        <section class="about-us">
            <div class="container">
                <!-- Section Title Starts -->
                <div class="row text-center">
                    <h2 class="title-head">About <span>Us</span></h2>
                    <div class="title-head-subtitle">
                        <p>a commercial website that lists wallets, exchanges and other bitcoin related info</p>
                    </div>
                </div>
                <!-- Section Title Ends -->
                <!-- Section Content Starts -->
                <div class="row about-content">
                    <!-- Image Starts -->
                    <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                        <img id="about-us" class="img-responsive img-about-us"
                            src="{{ asset('assets/file/images/about-us.png') }}" alt="about us">
                    </div>
                    <!-- Image Ends -->
                    <!-- Content Starts -->
                    <div class="col-sm-12 col-md-7 col-lg-6">
                        <h3 class="title-about">WE ARE IQIGLOBALFX</h3>
                        <p class="about-text">A place for everyone who wants to simply buy and sell Bitcoins. Deposit
                            funds using your Visa/MasterCard or bank transfer. Instant buy/sell of Bitcoins at fair
                            price is guaranteed. Nothing extra. Join over 700,000 users from all over the world
                            satisfied with our services.</p>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#menu1">Our Mission</a></li>
                            <li><a data-toggle="tab" href="#menu2">Our advantages</a></li>
                            <li><a data-toggle="tab" href="#menu3">Our guarantees</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="menu1" class="tab-pane fade in active">
                                <p>Bitcoin is based on a protocol known as the blockchain, which allows to create,
                                    transfer and verify ultra-secure financial data without interference of third
                                    parties.</p>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <p>Our mission as an official partner of Bitcoin Foundation is to help you enter and
                                    better understand the world of #1 cryptocurrency and avoid any issues you may
                                    encounter.</p>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <p>We are here because we are passionate about open, transparent markets and aim to be a
                                    major driving force in widespread adoption, we are the first and the best in
                                    cryptocurrency. </p>
                            </div>
                        </div>
                        <a class="btn btn-primary" href="about.html">Read More</a>
                    </div>
                    <!-- Content Ends -->
                </div>
                <!-- Section Content Ends -->
            </div>
        </section>
        <!-- About Section Ends -->
        <!-- Features and Video Section Starts -->
        <section class="image-block">
            <div class="container-fluid">
                <div class="row">
                    <!-- Features Starts -->
                    <div class="col-md-8 ts-padding img-block-left">
                        <div class="gap-20"></div>
                        <div class="row">
                            <!-- Feature Starts -->
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="feature text-center">
                                    <span class="feature-icon">
                                        <img id="strong-security"
                                            src="{{ asset('assets/file/images/icons/orange/strong-security.png') }}"
                                            alt="strong security" />
                                    </span>
                                    <h3 class="feature-title">Strong Security</h3>
                                    <p>Protection against DDoS attacks, <br>full data encryption</p>
                                </div>
                            </div>
                            <!-- Feature Ends -->
                            <div class="gap-20-mobile"></div>
                            <!-- Feature Starts -->
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="feature text-center">
                                    <span class="feature-icon">
                                        <img id="world-coverage"
                                            src="{{ asset('assets/file/images/icons/orange/world-coverage.png') }}"
                                            alt="world coverage" />
                                    </span>
                                    <h3 class="feature-title">World Coverage</h3>
                                    <p>Providing services in 99% countries<br> around all the globe</p>
                                </div>
                            </div>
                            <!-- Feature Ends -->
                        </div>
                        <div class="gap-20"></div>
                        <div class="row">
                            <!-- Feature Starts -->
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="feature text-center">
                                    <span class="feature-icon">
                                        <img id="payment-options"
                                            src="{{ asset('assets/file/images/icons/orange/payment-options.png') }}"
                                            alt="payment options" />
                                    </span>
                                    <h3 class="feature-title">Payment Options</h3>
                                    <p>Popular methods: Visa, MasterCard, <br>bank transfer, cryptocurrency</p>
                                </div>
                            </div>
                            <!-- Feature Ends -->
                            <div class="gap-20-mobile"></div>
                            <!-- Feature Starts -->
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="feature text-center">
                                    <span class="feature-icon">
                                        <img id="mobile-app"
                                            src="{{ asset('assets/file/images/icons/orange/mobile-app.png') }}"
                                            alt="mobile app" />
                                    </span>
                                    <h3 class="feature-title">Mobile App</h3>
                                    <p>Trading via our Mobile App, Available<br> in Play Store & App Store</p>
                                </div>
                            </div>
                            <!-- Feature Ends -->
                        </div>
                        <div class="gap-20"></div>
                        <div class="row">
                            <!-- Feature Starts -->
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="feature text-center">
                                    <span class="feature-icon">
                                        <img id="cost-efficiency"
                                            src="{{ asset('assets/file/images/icons/orange/cost-efficiency.png') }}"
                                            alt="cost efficiency" />
                                    </span>
                                    <h3 class="feature-title">Cost efficiency</h3>
                                    <p>Reasonable trading fees for takers<br> and all market makers</p>
                                </div>
                            </div>
                            <!-- Feature Ends -->
                            <div class="gap-20-mobile"></div>
                            <!-- Feature Starts -->
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="feature text-center">
                                    <span class="feature-icon">
                                        <img id="high-liquidity"
                                            src="{{ asset('assets/file/images/icons/orange/high-liquidity.png') }}"
                                            alt="high liquidity" />
                                    </span>
                                    <h3 class="feature-title">High Liquidity</h3>
                                    <p>Fast access to high liquidity orderbook<br> for top currency pairs</p>
                                </div>
                            </div>
                            <!-- Feature Ends -->
                        </div>
                    </div>
                    <!-- Features Ends -->
                    <!-- Video Starts -->
                    <div class="col-md-4 ts-padding bg-image-1">
                        <div>
                            <div class="text-center">
                                <a class="button-video mfp-youtube"
                                    href="https://www.youtube.com/watch?v=0gv7OC9L2s8"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Video Ends -->
                </div>
            </div>
        </section>
        <!-- Features and Video Section Ends -->
        <!-- Pricing Starts -->
        <section class="pricing">
            <div class="container">
                <!-- Section Title Starts -->
                <div class="row text-center">
                    <h2 class="title-head">affordable <span>packages</span></h2>
                    <div class="title-head-subtitle">
                        <p>Purchase Bitcoin using a credit card or with your linked bank account</p>
                    </div>
                </div>
                <!-- Section Title Ends -->
                <!-- Section Content Starts -->
                <div class="row pricing-tables-content">
                    <div class="pricing-container">
                        <!-- Pricing Switcher Starts -->
                        <div class="pricing-switcher">
                            <p>
                                <input type="radio" name="switch" value="buy" id="buy-1" checked>
                                <label for="buy-1">BUY</label>
                                <input type="radio" name="switch" value="sell" id="sell-1">
                                <label for="sell-1">SELL</label>
                                <span class="switch"></span>
                            </p>
                        </div>
                        <!-- Pricing Switcher Ends -->
                        <!-- Pricing Tables Starts -->
                        <ul class="pricing-list bounce-invert">
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <!-- Buy Pricing Table #1 Starts -->
                                    <li data-type="buy" class="is-visible">
                                        <header class="pricing-header">
                                            <h2>GET 0.007 BTC <span>For </span></h2>
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-dollar"></i></span>
                                                <span class="value">100</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                                        </footer>
                                    </li>
                                    <!-- Buy Pricing Table #1 Ends -->
                                    <!-- Sell Pricing Table #1 Starts -->
                                    <li data-type="sell" class="is-hidden">
                                        <header class="pricing-header">
                                            <h2>GET 100 USD <span>For </span></h2>

                                            <div class="price">
                                                <span class="currency"><i class="fa fa-bitcoin"></i></span>
                                                <span class="value">0.2</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                                        </footer>
                                    </li>
                                    <!-- Sell Pricing Table #1 Ends -->
                                </ul>
                            </li>
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <!-- Buy Pricing Table #2 Starts -->
                                    <li data-type="buy" class="is-visible">
                                        <header class="pricing-header">
                                            <h2>GET 0.015 BTC <span>For </span></h2>
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-dollar"></i></span>
                                                <span class="value">300</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                                        </footer>
                                    </li>
                                    <!-- Buy Pricing Table #2 Ends -->
                                    <!-- Sell Pricing Table #2 Starts -->
                                    <li data-type="sell" class="is-hidden">
                                        <header class="pricing-header">
                                            <h2>GET 1000 USD <span>For </span></h2>
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-bitcoin"></i></span>
                                                <span class="value">0.5</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                                        </footer>
                                    </li>
                                    <!-- Sell Pricing Table #2 Ends -->
                                </ul>
                            </li>
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <!-- Buy Pricing Table #3 Starts -->
                                    <li data-type="buy" class="is-visible">
                                        <header class="pricing-header">
                                            <h2>GET 0.031 BTC <span>For </span></h2>
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-dollar"></i></span>
                                                <span class="value">500</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                                        </footer>
                                    </li>
                                    <!-- Buy Pricing Table #3 Ends -->
                                    <!-- Yearlt Pricing Table #3 Starts -->
                                    <li data-type="sell" class="is-hidden">
                                        <header class="pricing-header">
                                            <h2>GET 3000 USD <span>For </span></h2>

                                            <div class="price">
                                                <span class="currency"><i class="fa fa-bitcoin"></i></span>
                                                <span class="value">1</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                                        </footer>
                                    </li>
                                    <!-- Sell Pricing Table #3 Ends -->
                                </ul>
                            </li>
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <!-- Buy Pricing Table #4 Starts -->
                                    <li data-type="buy" class="is-visible">
                                        <header class="pricing-header">
                                            <h2>GET 0.081 BTC <span>For </span></h2>
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-dollar"></i></span>
                                                <span class="value">1,000</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                                        </footer>
                                    </li>
                                    <!-- Buy Pricing Table #4 Ends -->
                                    <!-- Sell Pricing Table #4 Starts -->
                                    <li data-type="sell" class="is-hidden">
                                        <header class="pricing-header">
                                            <h2>GET 9000 USD <span>For </span></h2>
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-bitcoin"></i></span>
                                                <span class="value">2</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                                        </footer>
                                    </li>
                                    <!-- Sell Pricing Table #4 Ends -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Ends -->
        <!-- Bitcoin Calculator Section Starts -->
        <section class="bitcoin-calculator-section">
            <div class="container">
                <div class="row">
                    <!-- Section Heading Starts -->
                    <div class="col-md-12">
                        <h2 class="title-head text-center"><span>Bitcoin</span> Calculator</h2>
                        <p class="message text-center">Find out the current Bitcoin value with our easy-to-use
                            converter</p>
                    </div>
                    <!-- Section Heading Ends -->
                    <!-- Bitcoin Calculator Form Starts -->
                    <div class="col-md-12 text-center">
                        <form class="bitcoin-calculator" id="bitcoin-calculator">
                            <!-- Input #1 Starts -->
                            <input class="form-input" name="btc-calculator-value" value="1">
                            <!-- Input #1 Ends -->
                            <div class="form-info"><i class="fa fa-bitcoin"></i></div>
                            <div class="form-equal">=</div>
                            <!-- Input/Result Starts -->
                            <input class="form-input form-input-result" name="btc-calculator-result">
                            <!-- Input/Result Ends -->
                            <!-- Select Currency Starts -->
                            <div class="form-wrap">
                                <select id="currency-select" class="form-input select-currency select-primary"
                                    name="btc-calculator-currency"
                                    data-dropdown-class="select-primary-dropdown"></select>
                            </div>
                            <!-- Select Currency Ends -->
                        </form>
                        <p class="info"><i>* Data updated every 15 minutes</i></p>
                    </div>
                    <!-- Bitcoin Calculator Form Ends -->
                </div>
            </div>
        </section>
        <!-- Bitcoin Calculator Section Ends -->
        <!-- Team Section Starts -->
        <section class="team">
            <div class="container">
                <!-- Section Title Starts -->
                <div class="row text-center">
                    <h2 class="title-head">our <span>experts</span></h2>
                    <div class="title-head-subtitle">
                        <p> A talented team of Cryptocurrency experts based in London</p>
                    </div>
                </div>
                <!-- Section Title Ends -->
                <!-- Team Members Starts -->
                <div class="row team-content team-members">
                    <!-- Team Member Starts -->
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                        <div class="team-member">
                            <!-- Team Member Picture Starts -->
                            <img src="{{ asset('assets/file/images/team/member1.jpg') }}" class="img-responsive"
                                alt="team member">
                            <!-- Team Member Picture Ends -->
                            <!-- Team Member Details Starts -->
                            <div class="team-member-caption social-icons">
                                <h4>Lina Marzouki</h4>
                                <p>Ceo Founder</p>
                                <ul class="list list-inline social">
                                    <li>
                                        <a href="#" class="fa fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-google-plus"></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Member Details Ends -->
                        </div>
                    </div>
                    <!-- Team Member Ends -->
                    <!-- Team Member Starts -->
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                        <div class="team-member">
                            <!-- Team Member Picture Starts -->
                            <img src="{{ asset('assets/file/images/team/member2.jpg') }}" class="img-responsive"
                                alt="team member">
                            <!-- Team Member Picture Ends -->
                            <!-- Team Member Details Starts -->
                            <div class="team-member-caption social-icons">
                                <h4>Marco Verratti</h4>
                                <p>Director</p>
                                <ul class="list list-inline social">
                                    <li>
                                        <a href="#" class="fa fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-google-plus"></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Member Details Ends -->
                        </div>
                    </div>
                    <!-- Team Member Ends -->
                    <!-- Team Member Starts -->
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                        <!-- Team Member-->
                        <div class="team-member">
                            <!-- Team Member Picture Starts -->
                            <img src="{{ asset('assets/file/images/team/member3.jpg') }}" class="img-responsive"
                                alt="team member">
                            <!-- Team Member Picture Ends -->
                            <!-- Team Member Details Starts -->
                            <div class="team-member-caption social-icons">
                                <h4>Emilia Bella</h4>
                                <p>Bitcoin Consultant</p>
                                <ul class="list list-inline social">
                                    <li>
                                        <a href="#" class="fa fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-google-plus"></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Member Details Ends -->
                        </div>
                    </div>
                    <!-- Team Member Ends -->
                    <!-- Team Member Starts -->
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                        <div class="team-member">
                            <!-- Team Member Picture Starts -->
                            <img src="{{ asset('assets/file/images/team/member4.jpg') }}" class="img-responsive"
                                alt="team member">
                            <!-- Team Member Picture Ends -->
                            <!-- Team Member Details Starts -->
                            <div class="team-member-caption social-icons">
                                <h4>Antonio Conte</h4>
                                <p>Bitcoin Developer</p>
                                <ul class="list list-inline social">
                                    <li>
                                        <a href="#" class="fa fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-google-plus"></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Member Details Ends -->
                        </div>
                    </div>
                    <!-- Team Member Ends -->
                </div>
                <!-- Team Members Ends -->
            </div>
        </section>
        <!-- Team Section Ends -->
        <!-- Quote and Chart Section Starts -->
        <section class="image-block2">
            <div class="container-fluid">
                <div class="row">
                    <!-- Quote Starts -->
                    <div class="col-md-4 img-block-quote bg-image-2">
                        <blockquote>
                            <p>Bitcoin is one of the most important inventions in all of human history. For the first
                                time ever, anyone can send or receive any amount of money with anyone else, anywhere on
                                the planet, conveniently and without restriction. It’s the dawn of a better, more free
                                world.</p>
                            <footer><img src="{{ asset('assets/file/images/ceo.jpg') }}" alt="ceo" /> <span>Marc
                                    Smith</span> - CEO</footer>
                        </blockquote>
                    </div>
                    <!-- Quote Ends -->
                    <!-- Chart Starts -->
                    <div class="col-md-8 bg-grey-chart">
                        <div class="chart-widget dark-chart chart-1">
                            <div>
                                <div class="btcwdgt-chart" data-bw-theme="dark"></div>
                            </div>
                        </div>
                        <div class="chart-widget light-chart chart-2">
                            <div>
                                <div class="btcwdgt-chart" bw-theme="light"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Chart Ends -->
                </div>
            </div>
        </section>
        <!-- Quote and Chart Section Ends -->
        <!-- Blog Section Starts -->
        <section class="blog">
            <div class="container">
                <!-- Section Title Starts -->
                <div class="row text-center">
                    <h2 class="title-head">Bitcoin <span>News</span></h2>
                    <div class="title-head-subtitle">
                        <p>Discover latest news about Bitcoin on our blog</p>
                    </div>
                </div>
                <!-- Section Title Ends -->
                <!-- Section Content Starts -->
                <div class="row latest-posts-content">
                    <!-- Article Starts -->
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <div class="latest-post">
                            <!-- Featured Image Starts -->
                            <a href="blog-post.html"><img class="img-responsive"
                                    src="{{ asset('assets/file/images/blog/blog-post-small-1.jpg') }}"
                                    alt="img"></a>
                            <!-- Featured Image Ends -->
                            <!-- Article Content Starts -->
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="blog-post.html">How Cryptocurrency Begun and Its Impact To Financial
                                        Transactions</a>
                                </h4>
                                <div class="post-text">
                                    <p>incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis
                                        nostrud...</p>
                                </div>
                            </div>
                            <div class="post-date">
                                <span>01</span>
                                <span>JAN</span>
                            </div>
                            <a href="#" class="btn btn-primary">read more</a>
                            <!-- Article Content Ends -->
                        </div>
                    </div>
                    <!-- Article Ends -->
                    <!-- Article Starts -->
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <div class="latest-post">
                            <!-- Featured Image Starts -->
                            <a href="blog-post.html"><img class="img-responsive"
                                    src="{{ asset('assets/file/images/blog/blog-post-small-2.jpg') }}"
                                    alt="img"></a>
                            <!-- Featured Image Ends -->
                            <!-- Article Content Starts -->
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="#">Cryptocurrency - Who Are Involved With It? Words about
                                        members</a>
                                </h4>
                                <div class="post-text">
                                    <p>incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis
                                        nostrud...</p>
                                </div>
                            </div>
                            <div class="post-date">
                                <span>17</span>
                                <span>MAR</span>
                            </div>
                            <a href="#" class="btn btn-primary">read more</a>
                            <!-- Article Content Ends -->
                        </div>
                    </div>
                    <!-- Article Ends -->
                    <!-- Article Start -->
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <div class="latest-post">
                            <!-- Featured Image Starts -->
                            <a href="blog-post.html"><img class="img-responsive"
                                    src="{{ asset('assets/file/images/blog/blog-post-small-3.jpg') }}"
                                    alt="img"></a>
                            <!-- Featured Image Ends -->
                            <!-- Article Content Starts -->
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="#">Risks & Rewards Of Investing In Bitcoin. Pros and Cons</a>
                                </h4>
                                <div class="post-text">
                                    <p>incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis
                                        nostrud...</p>
                                </div>
                            </div>
                            <div class="post-date">
                                <span>25</span>
                                <span>FEB</span>
                            </div>
                            <a href="#" class="btn btn-primary">read more</a>
                            <!-- Article Content Ends -->
                        </div>
                    </div>
                </div>
                <!-- Section Content Ends -->
            </div>
        </section>
        <!-- Blog Section Ends -->
        <!-- Call To Action Section Starts -->
        <section class="call-action-all">
            <div class="call-action-all-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Call To Action Text Starts -->
                            <div class="action-text">
                                <h2>Get Started Today With Bitcoin</h2>
                                <p class="lead">Open account for free and start trading Bitcoins!</p>
                            </div>
                            <!-- Call To Action Text Ends -->
                            <!-- Call To Action Button Starts -->
                            <p class="action-btn"><a class="btn btn-primary" href="#">Register Now</a>
                            </p>
                            <!-- Call To Action Button Ends -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action Section Ends -->
        <!-- Footer Starts -->
        @include('includes.home_footer')
        <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
        @include('includes.home_script')
        <!-- Footer Ends -->
        <!-- Back To Top Starts  -->
        <!-- Back To Top Ends  -->



    </div>
    <!-- Wrapper Ends -->
</body>


<!-- Mirrored from slimhamdi.net/IQIGLOBALFX/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 08:09:42 GMT -->

</html>
