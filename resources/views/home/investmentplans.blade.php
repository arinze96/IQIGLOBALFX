<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pricing - IQIGLOBALFX Bitcoin Crypto Currency Template</title>
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
                            src="{{ asset("assets/file/images/styleswitcher/colors/orange.png") }}" alt="" width="30"
                            height="30" /></a>
                </li>
                <li>
                    <a id="green-css" href="#" title="green" class="color"><img
                            src="{{ asset("assets/file/images/styleswitcher/colors/green.png") }}" alt="" width="30"
                            height="30" /></a>
                </li>
                <li>
                    <a id="blue-css" href="#" title="blue" class="color"><img
                            src="{{ asset("assets/file/images/styleswitcher/colors/blue.png") }}" alt="" width="30"
                            height="30" /></a>
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
        <!-- Banner Area Starts -->
        <section class="banner-area">
            <div class="banner-overlay">
                <div class="banner-text text-center">
                    <div class="container">
                        <!-- Section Title Starts -->
                        <div class="row text-center">
                            <div class="col-xs-12">
                                <!-- Title Starts -->
                                <h2 class="title-head">Our <span>Prices</span></h2>
                                <!-- Title Ends -->
                                <hr>
                                <!-- Breadcrumb Starts -->
                                <ul class="breadcrumb">
                                    <li><a href="{{ route("app.home") }}"> home</a></li>
                                    <li>pricing</li>
                                </ul>
                                <!-- Breadcrumb Ends -->
                            </div>
                        </div>
                        <!-- Section Title Ends -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Area Ends -->
        <!-- Pricing Starts -->
        <section class="pricing">
            <div class="container">
                <!-- Section Content Starts -->
                <h3 class="text-center">Buy Bitcoins</h3>
                <p class="text-center">Buy bitcoins with your credit card or cash here! Register to IQIGLOBALFX and get your
                    bitcoins today.</p>
                <div class="row pricing-tables-content pricing-page">
                    <div class="pricing-container">
                        <!-- Pricing Tables Starts -->
                        <ul class="pricing-list bounce-invert">
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <!-- Pricing Table #1 Starts -->
                                    <li>
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
                                    <!-- Pricing Table #1 Ends -->
                                </ul>
                            </li>
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <!-- Pricing Table #2 Starts -->
                                    <li>
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
                                    <!-- Pricing Table #2 Ends -->
                                </ul>
                            </li>
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <!-- Pricing Table #3 Starts -->
                                    <li>
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
                                    <!-- Pricing Table #3 Ends -->
                                </ul>
                            </li>
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <!-- Pricing Table #4 Starts -->
                                    <li>
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
                                    <!-- Pricing Table #4 Ends -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <h3 class="text-center sell-title">sell Bitcoins</h3>
                <p class="text-center">Sell easy, fast and secure Bitcoin. The money will be transferred to your PayPal
                    or bank account.</p>
                <div class="row pricing-tables-content pricing-page">
                    <div class="pricing-container">
                        <!-- Pricing Tables Starts -->
                        <ul class="pricing-list bounce-invert">
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <!-- Pricing Table #1 Starts -->
                                    <li>
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
                                    <!-- Pricing Table #1 Ends -->
                                </ul>
                            </li>
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <!-- Pricing Table #2 Starts -->
                                    <li>
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
                                    <!-- Pricing Table #2 Ends -->
                                </ul>
                            </li>
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <!-- Yearlt Pricing Table #3 Starts -->
                                    <li>
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
                                    <!-- Pricing Table #3 Ends -->
                                </ul>
                            </li>
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <!-- Pricing Table #4 Starts -->
                                    <li>
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
                                    <!-- Pricing Table #4 Ends -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Ends -->
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
                            <p class="action-btn"><a class="btn btn-primary" href="{{ route("user.register") }}">Register Now</a>
                            </p>
                            <!-- Call To Action Button Ends -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action Section Ends -->
        @include('includes.home_footer')
        <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
        @include('includes.home_script')

    </div>
    <!-- Wrapper Ends -->
</body>


<!-- Mirrored from slimhamdi.net/IQIGLOBALFX/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 08:09:53 GMT -->

</html>
