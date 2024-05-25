<!DOCTYPE html>
<html lang="zxx" class="js">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Izipays</title>
    <link rel="stylesheet" href="/assets/css/dashlitee5ca.css?ver=3.2.3">
    <link id="skin-default" rel="stylesheet" href="/assets/css/themee5ca.css?ver=3.2.3">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-91615293-4');
    </script>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head"></div>
                <div class="nk-sidebar-element nk-sidebar-body">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt"></h6>
                                </li>
                                <li class="nk-menu-item"><span class="nk-menu-icon"><em></em></span><span
                                        class="nk-menu-text"></li>
                                <li class="nk-menu-item"><a href="" class="nk-menu-link"><span
                                            class="nk-menu-icon"><em></em></span><span class="nk-menu-text"></span><span
                                            class="nk-menu-badge"></span></a></li>
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Admin Dashboard</h6>
                                </li>

                                <li class="nk-menu-item"><a href="{{ route('currency') }}" class="nk-menu-link"><span
                                            class="nk-menu-icon"><em class="icon ni ni-text-rich"></em></span><span
                                            class="nk-menu-text">Upload Currency</span></a></li>

                                <li class="nk-menu-item"><a href="{{ route('all.currency') }}" class="nk-menu-link"><span
                                            class="nk-menu-icon"><em class="icon ni ni-text-rich"></em></span><span
                                            class="nk-menu-text">Currency Table</span></a></li>

                                <li class="nk-menu-item"><a href="{{ route('all.users') }}" class="nk-menu-link"><span
                                            class="nk-menu-icon"><em class="icon ni ni-text-rich"></em></span><span
                                            class="nk-menu-text">All Users</span></a></li>

                                <li class="nk-menu-item"><a href="email-templates.html" class="nk-menu-link"><span
                                            class="nk-menu-icon"><em class="icon ni ni-text-rich"></em></span><span
                                            class="nk-menu-text">Rewards</span></a></li>

                                <li class="nk-menu-item"><a href="email-templates.html" class="nk-menu-link"><span
                                            class="nk-menu-icon"><em class="icon ni ni-text-rich"></em></span><span
                                            class="nk-menu-text">Settings</span></a></li>





                            </ul>
                        </div>

                    </div>

                </div>
            </div>
            <div class="nk-wrap ">
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1"><a href="#"
                                    class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                                        class="icon ni ni-menu"></em></a></div>
                            <div class="nk-header-brand d-xl-none"><a href="index.html" class="logo-link"><img
                                        class="logo-light logo-img" src="images/logo.png"
                                        srcset="/demo1/images/logo2x.png 2x" alt="logo"><img
                                        class="logo-dark logo-img" src="/images/logo-dark.png"
                                        srcset="/demo1/images/logo-dark2x.png 2x" alt="logo-dark"></a>
                            </div>

                            <div class="nk-header-news d-none d-xl-block">
                                <div class="nk-news-list"><a class="nk-news-item" href="#">
                                        <div class="nk-news-icon"><em class="icon ni ni-card-view"></em>

                                        </div>
                                        <div class="nk-news-text">
                                            <p>We exchange <span> You Explore... Explore</span></p><em
                                                class=""></em>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">

                                    <li class="dropdown user-dropdown"><a href="#" class="dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-name dropdown-indicator">{{ Auth::user()->name }}</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar"><span>{{ Auth::user()->name }}</span></div>
                                                    <div class="user-info"><span class="lead-text">{{ Auth::user()->name }}</span><span
                                                            class="sub-text">{{ Auth::user()->email }}</span></div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="user-profile-regular.html"><em
                                                                class="icon ni ni-user-alt"></em><span>View
                                                                Profile</span></a></li>


                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">

                                                    <li>
                                                        <a onclick="logout()" href="#"><i
                                                            class="icon ni ni-signout"></i>Log
                                                            Out</a>
                                                        <form id="logout-form" action="{{ route('logout') }} "
                                                            method="post"> @csrf</form>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                @yield('content')

                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2024 iziPays <a href="#"
                                    target="_blank">Exchange</a></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right" data-content="demoML"
        data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Switch Demo Layout</h6><a
                class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2" data-target="demoML"
                href="#"><em class="icon ni ni-cross"></em></a>
        </div>

    </div>

    <div class="pmo-lv pmo-dark"><a class="pmo-close" href="#"><em class="ni ni-cross"></em></a><a
            class="pmo-wrap" target="_blank" href="/https://softnio.com/get-early-access/">
            <div class="pmo-text text-white">Looking for functional script for Investment Platform? Check out <em
                    class="ni ni-arrow-long-right"></em></div>
        </a></div><a class="pmo-st pmo-dark" target="_blank" href="/https://softnio.com/get-early-access/">
        <div class="pmo-st-img"><img src="../images/landing/promo-investorm.png" alt="Investorm"></div>
        <div class="pmo-st-text">Looking for Advanced <br> Investment Platform?</div>
    </a>
    <script src="/assets/js/bundlee5ca.js?ver=3.2.3"></script>
    <script src="/assets/js/scriptse5ca.js?ver=3.2.3"></script>
    <script src="/assets/js/demo-settingse5ca.js?ver=3.2.3"></script>
    <script src="/assets/js/charts/gd-investe5ca.js?ver=3.2.3"></script>


    <script>
        function logout() {
            $('#logout-form').submit();
        }
    </script>
</body>


</html>
