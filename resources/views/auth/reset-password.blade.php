<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>iziPays</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="/app/dist/app.css" />
    <link rel="stylesheet" href="/https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <!-- End Style CSS -->

    <link rel="shortcut icon" href="assets/images/logo/favicon.png" />
    <link rel="apple-touch-icon-precomposed" href="assets/images/logo/favicon.png" />
</head>

<body class="body header-fixed">
    <!-- Header -->


    <header id="header_main" class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header__body d-flex justify-content-between">
                        <div class="header__left">
                            <div class="logo">
                                <a class="light" href="index-2.html">
                                    <img src="/assets/images/logo/logo.png" alt="" width="118" height="32"
                                        data-retina="assets/images/logo/logo@2x.png" data-width="118"
                                        data-height="32" />
                                </a>
                                <a class="dark" href="index-2.html">
                                    <img src="assets/images/logo/logo-dark.png" alt="" width="118"
                                        height="32" data-retina="/assets/images/logo/logo-dark@2x.png"
                                        data-width="118" data-height="32" />
                                </a>
                            </div>
                            <div class="left__main">
                                <nav id="main-nav" class="main-nav">
                                    <ul id="menu-primary-menu" class="menu">
                                        <li class="menu-item-has-children current-menu-item">
                                            <a href="#">Homepage </a>

                                        </li>

                                        <li class="menu-item">
                                            <a href="markets.html">Markets </a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Sell Crypto</a>


                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog</a>


                                        </li>


                                        <li class="menu-item-has-children">
                                            <a href="#"> Pages </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="user-profile.html">User Profile</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="login.html">Login</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="register.html">Register</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="contact.html">Contact</a>
                                                </li>
                                                <li class="menu-item"><a href="faq.html">FAQ</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- /#main-nav -->
                            </div>
                        </div>

                        <div class="header__right">


                            <div class="mode-switcher">
                                <a class="sun" href="#" onclick="switchTheme()">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.99993 11.182C9.7572 11.182 11.1818 9.75745 11.1818 8.00018C11.1818 6.24291 9.7572 4.81836 7.99993 4.81836C6.24266 4.81836 4.81812 6.24291 4.81812 8.00018C4.81812 9.75745 6.24266 11.182 7.99993 11.182Z"
                                            stroke="#23262F" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M8 1V2.27273" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8 13.7271V14.9998" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3.04956 3.04932L3.9532 3.95295" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.0469 12.0469L12.9505 12.9505" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 8H2.27273" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.7273 8H15" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3.04956 12.9505L3.9532 12.0469" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.0469 3.95295L12.9505 3.04932" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="moon" onclick="switchTheme()">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.0089 8.97241C12.7855 9.64616 12.4491 10.2807 12.0107 10.8477C11.277 11.7966 10.2883 12.5169 9.1602 12.9244C8.03209 13.3319 6.81126 13.4097 5.64056 13.1486C4.46987 12.8876 3.39772 12.2986 2.54959 11.4504C1.70145 10.6023 1.1124 9.53013 0.851363 8.35944C0.590325 7.18874 0.668097 5.96791 1.07558 4.8398C1.48306 3.71169 2.2034 2.72296 3.1523 1.9893C3.71928 1.55094 4.35384 1.21447 5.02759 0.991088C4.69163 1.84583 4.54862 2.77147 4.61793 3.7009C4.72758 5.17128 5.36134 6.55346 6.40394 7.59606C7.44654 8.63866 8.82873 9.27242 10.2991 9.38207C11.2285 9.45138 12.1542 9.30837 13.0089 8.97241Z"
                                            stroke="white" stroke-width="1.4" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>

                            <div class="mobile-button"><span></span></div>
                            <div class="wallet">
                                <a href="{{ route('login') }}"> Account </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="register login">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-text center">

                        <p class="desc fs-20">
                            Forgot your password? No problem. Just let us know your email address and <br> we will email
                            you
                            a password reset link that will allow you to choose a new one.
                        </p>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="flat-tabs">


                        <div class="content-tab">

                            <div class="content-inner">
                                <form method="POST" action="{{ route('password.store') }}"> @csrf

                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                    @foreach ($errors->all() as $error)
                                        <p class="text-danger text-center">{{ $error }}</p>
                                    @endforeach


                                    <div class="form-group s1">

                                        <x-text-input id="email" class="form-control " type="email"
                                            name="email" :value="old('email', $request->email)" required autofocus
                                            autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <div class="form-group s1">
                                        <label>Password </label>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Please enter a password." />
                                    </div>

                                    <div class="form-group s1">
                                        <label>Confirm Password </label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            placeholder="Please enter a password." />
                                    </div>




                                    <button type="submit" class="btn-action">Email Password Reset Link</button>

                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="section-sale">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="block-text">
                        <h4 class="heading">Earn up to $25 worth of crypto</h4>
                        <p class="desc">
                            Discover how specific cryptocurrencies work — and get a bit of
                            each crypto to try out for yourself.
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="button">
                        <a href="#">Create Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer__main">
                <div class="row">
                    <div class="col-xl-4 col-md-8">
                        <div class="info">
                            <a href="index-2.html" class="logo">
                                <img src="assets/images/logo/log-footer.png" alt="" />
                            </a>
                            <h6>Let's talk! 🤙</h6>
                            <ul class="list">
                                <li>
                                    <p>+12 345 678 9101</p>
                                </li>
                                <li>
                                    <p>Info.Avitex@Gmail.Com</p>
                                </li>
                                <li>
                                    <p>
                                        Cecilia Chapman 711-2880 Nulla St. Mankato Mississippi
                                        96522
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="widget-link s1">
                            <h6 class="title">PRODUCTS</h6>
                            <ul>
                                <li><a href="spot.html">Spot</a></li>
                                <li><a href="#">Inverse Perpetual</a></li>
                                <li><a href="#">USDT Perpetual</a></li>
                                <li><a href="exchange.html">Exchange</a></li>
                                <li><a href="#">Launchpad</a></li>
                                <li><a href="#">Binance Pay</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="widget-link s2">
                            <h6 class="title">SERVICES</h6>
                            <ul>
                                <li><a href="buy-crypto-select.html">Buy Crypto</a></li>
                                <li><a href="markets.html">Markets</a></li>
                                <li><a href="#">Tranding Fee</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Referral Program</a></li>
                                <li><a href="#">API</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="widget-link s3">
                            <h6 class="title">SUPPORT</h6>
                            <ul>
                                <li><a href="#">Bybit Learn</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="user-profile.html">User Feedback</a></li>
                                <li><a href="#">Submit a request</a></li>
                                <li><a href="#">API Documentation</a></li>
                                <li><a href="#">Trading Rules</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="widget-link s4">
                            <h6 class="title">ABOUT US</h6>
                            <ul>
                                <li><a href="#">About Bybit</a></li>
                                <li><a href="#">Authenticity Check</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Business Contacts</a></li>
                                <li><a href="blog-default.html">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg">
            <div class="footer__bottom">
                <p>Copyright © 2022 Themesflat</p>
                <ul class="list-social">
                    <li>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="/app/js/aos.js"></script>
    <script src="/app/js/jquery.min.js"></script>
    <script src="/app/js/jquery.easing.js"></script>
    <script src="/app/js/popper.min.js"></script>
    <script src="/app/js/bootstrap.min.js"></script>
    <script src="/app/js/jquery.peity.min.js"></script>
    <script src="/app/js/Chart.bundle.min.js"></script>
    <script src="/app/js/apexcharts.js"></script>
    <script src="/app/js/switchmode.js"></script>

    <script src="/app/js/chart.js"></script>
    <script src="/https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

    <!-- Swiper JS -->
    <script src="/app/js/swiper-bundle.min.js"></script>

    <script src="/app/js/swiper.js"></script>

    <script src="/app/js/app.js"></script>
</body>



</html>
