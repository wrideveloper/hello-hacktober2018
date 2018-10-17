<?php include 'assets.php'; ?><!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap Template</title>


</head>

<body class="fixed-sn mdb-skin">

    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed custom-scrollbar">

            <!-- Logo -->
            <li>
                <div class="logo-wrapper sn-ad-avatar-wrapper">
                    <img src="http://mdbootstrap.com/images/avatars/img%20(9)" class="img-fluid rounded-circle">
                    <div class="rgba-stylish-strong">
                        <p class="user white-text">Admin<br>admin@gmail.com</p>
                    </div>
                </div>
            </li>
            <!--/. Logo -->

            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-briefcase"></i>Laporan PO<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Masukkan data</a>
                                </li>
                                <li><a href="#" class="waves-effect">List Laporan PO</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->

        </ul>
        <!--/. Sidebar navigation -->

        <!--Navbar-->
        <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">

            <!-- SideNav slide-out button -->
            <div class="float-xs-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>

            <!-- Breadcrumb-->
            <div class="breadcrumb-dn">
                <p>PT. Energi</p>
            </div>


            <!-- <ul class="nav navbar-nav float-xs-right">

                <li class="nav-item ">
                    <a class="nav-link"> <span class="tag red z-depth-1">2</span> <i class="fa fa-shopping-cart"></i> <span class="hidden-sm-down">Cart</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Contact</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down">Support</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link"><i class="fa fa-sign-in"></i> <span class="hidden-sm-down">Register</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="hidden-sm-down">Profile</span></a>
                    <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item" href="#">Logout</a>
                        <a class="dropdown-item" href="#">My account</a>
                    </div>
                </li>
            </ul> -->

        </nav>
        <!--/.Navbar-->
    </header>
    <!--/Double navigation-->

    <!--Main layout-->
  
    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="../../../js/jquery-3.1.1.min.js"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="../../../js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../../../js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../../../js/mdb.min.js"></script>

    <script>
        // SideNav init
        $(".button-collapse").sideNav();
        var el = document.querySelector('.custom-scrollbar');
        Ps.initialize(el);
    </script>

</body>

</html>