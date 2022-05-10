<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<!-- Mirrored from themelooks.net/demo/dadmin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jan 2019 09:42:01 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard - DAdmin</title>
    <meta name="author" content="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="favicon.png" type="image/png" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="../assets/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="../assets/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" href="../assets/css/morris.min.css" />
    <link rel="stylesheet" href="../assets/css/select2.min.css" />
    <link rel="stylesheet" href="../assets/css/jquery-jvectormap.min.css" />
    <link rel="stylesheet" href="../assets/css/horizontal-timeline.min.css" />
    <link rel="stylesheet" href="../assets/css/weather-icons.min.css" />
    <link rel="stylesheet" href="../assets/css/dropzone.min.css" />
    <link rel="stylesheet" href="../assets/css/ion.rangeSlider.min.css" />
    <link rel="stylesheet" href="../assets/css/ion.rangeSlider.skinFlat.min.css" />
    <link rel="stylesheet" href="../assets/css/datatables.min.css" />
    <link rel="stylesheet" href="../assets/css/fullcalendar.min.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>
    <div class="wrapper">
        <header class="navbar navbar-fixed">
            <div class="navbar--header">
                <a href="index.html" class="logo">
                    <img src="../assets/img/logo.png" alt="" />
                </a>
                <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                <i class="fa fa-bars"></i>
            </a>
            <div class="navbar--search">
                <form action="">
                    <input type="search" name="search" class="form-control" placeholder="Search Something..."
                        required />
                    <button class="btn-link"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="navbar--nav ml-auto">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-bell"></i>
                            <span class="badge text-white bg-blue">7</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="mailbox_inbox.html" class="nav-link">
                            <i class="fa fa-envelope"></i>
                            <span class="badge text-white bg-blue">4</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown nav-language">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <img src="assets/img/flags/us.png" alt="" />
                            <span>English</span> <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">
                                    <img src="assets/img/flags/de.png" alt="" />
                                    <span>German</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/flags/fr.png" alt="" />
                                    <span>French</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/flags/us.png" alt="" />
                                    <span>English</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav--user online">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <img src="assets/img/avatars/01_80x80.png" alt="" class="rounded-circle" />
                            <span>River Pay</span> <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="profile.html"><i class="far fa-user"></i>Profile</a>
                            </li>
                            <li>
                                <a href="mailbox_inbox.html"><i class="far fa-envelope"></i>Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-cog"></i>Settings</a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a href="lock-screen.html"><i class="fa fa-lock"></i>Lock Screen</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-power-off"></i>Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <aside class="sidebar" data-trigger="scrollbar">
            <div class="sidebar--profile">
                <div class="profile--img">
                    <a href="profile.html">
                        <img src="assets/img/avatars/01_80x80.png" alt="" class="rounded-circle" />
                    </a>
                </div>
                <div class="profile--name">
                    <a href="profile.html" class="btn-link">River Pay</a>
                </div>
                <div class="profile--nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="profile.html" class="nav-link" title="User Profile">
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="lock-screen.html" class="nav-link" title="Lock Screen">
                                <i class="fa fa-lock"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="mailbox_inbox.html" class="nav-link" title="Messages">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" title="Logout">
                                <i class="fa fa-sign-out-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar--nav">
                <ul>
                    <li>
                        <ul>
                            <li class="active">
                                <a href="index.php?p=welcome">
                                    <i class="fa fa-home"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-th"></i> <span>Operations</span>
                                </a>
                                <ul>
                                    <li><a href="index.php?p=allsms">History transactions</a></li>
                                    <li><a href="products-edit.html">Edit Products</a></li>
                                    <li><a href="orders.html">Alert transactions</a></li>
                                    <li><a href="order-view.html">Account</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Users panel</a>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-th"></i> <span>Dashboard</span>
                                </a>
                                <ul>
                                    <li><a href="blank.html">Control form</a></li>
                                    <li><a href="page-light.html">List users</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-th-list"></i> <span>Footers</span>
                                </a>
                                <ul>
                                    <li><a href="footer-light.html">Footer Light</a></li>
                                    <li><a href="footer-dark.html">Footer Dark</a></li>
                                    <li>
                                        <a href="footer-transparent.html">Footer Transparent</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>

        </aside>
        <?= $content ?>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery-ui.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/jquery.sparkline.min.js"></script>
    <script src="../assets/js/raphael.min.js"></script>
    <script src="../assets/js/morris.min.js"></script>
    <script src="../assets/js/select2.min.js"></script>
    <script src="../assets/js/jquery-jvectormap.min.js"></script>
    <script src="../assets/js/jquery-jvectormap-world-mill.min.js"></script>
    <script src="../assets/js/horizontal-timeline.min.js"></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/jquery.steps.min.js"></script>
    <script src="../assets/js/dropzone.min.js"></script>
    <script src="../assets/js/ion.rangeSlider.min.js"></script>
    <script src="../assets/js/datatables.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
<!-- Mirrored from themelooks.net/demo/dadmin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jan 2019 09:43:55 GMT -->

</html>