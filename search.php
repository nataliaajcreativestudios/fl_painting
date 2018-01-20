<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Links -->
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,300,500">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/material-icons.css">
    <link rel="stylesheet" href="css/search.css">
    <!-- END Links -->

    <!-- JS -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <!-- END JS -->

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <script src='js/device.min.js'></script>
</head>
<body>
<div class="page text-center">
    <!--========================================================
                              HEADER
    =========================================================-->

    <header class="bg-image-1">
        <address class="contact-info-1">
            <a href="#" class="icon icon-xs fa-phone">1-800-777-555</a>
            <a href="mailto:#" class="icon icon-xs fa-desktop">mail@demolink.org</a>
            <span class="icon icon-xs  fa-map-marker">8901 Marmora Road, Glasgow, D04 89GR</span>
        </address>
        <div id="stuck_container" class="stuck_container">

            <!-- Brand -->
            <div class="rd-navbar-brand">
                <div class="rd-navbar-brand__name">
                    <a href="./">arche</a>
                </div>
            </div>
            <!-- END Brand -->

            <!-- RD Navbar -->
            <nav class="nav">
                <ul class="sf-menu" data-type="navbar">
                    <li>
                        <a href="./">Home</a>
                    </li>
                    <li>
                        <a href="index-1.html">About us</a>
                        <ul>
                            <li>
                                <a href="#">Overview</a>
                            </li>
                            <li>
                                <a href="#">News</a>
                                <ul>
                                    <li>
                                        <a href="#">Latest</a>
                                    </li>
                                    <li>
                                        <a href="#">Popular</a>
                                    </li>
                                    <li>
                                        <a href="#">Archive</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">History</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index-2.html">Portfolio</a>
                    </li>
                    <li>
                        <a href="index-3.html">Services</a>
                    </li>
                    <li>
                        <a href="index-4.html">Contacts</a>
                    </li>
                </ul>
            </nav>
            <!-- END RD Navbar -->

            <!-- TM Search -->
            <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
                <label class="search-form_label">
                    <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder="Search.."/>
                    <span class="search-form_liveout"></span>
                </label>
                <button class="search-form_submit fa-search" type="submit"></button>
            </form>
            <!-- END TM Search -->

            <a class="search-form_toggle" href="#"></a>

        </div>
    </header>

    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>

    <section id="content" class="content well-xs">
        <div class="container">
            <h3>Search Results</h3>
            <div id="search-results"></div>
        </div>
    </section>

        
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer class="border-lg">
        <div class="container text-sm-left">
            <div class="copyright">
                Arche © <span id="copyright-year"></span>
                <a href="index-5.html">&middot; Privacy Policy</a>
            </div>
        </div>
    </footer>
</div>

<script src="js/script.js"></script>

</body>
</html>