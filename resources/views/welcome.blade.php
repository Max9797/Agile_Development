
<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Interior-Design-Responsive-Website-Templates-Edge">
    <meta name="author" content="webThemez.com">
    <title>Home - Flat Responsive Bootstrap Theme</title>
    <link rel="favicon" href="../../assets/images/favicon.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='../../assets/css/camera.css' type='text/css' media='all'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Fixed navbar -->
<div id="header-top">
    <!--  HEADER TOP -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="text">

                    <p>Toll Free : (002) 124 2548</p>

                </div>
            </div><!-- end -->
            <div class="col-md-6">
                <div class="social text-center pull-right">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-flickr"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>

            </div><!-- end -->
        </div><!-- end .row -->
    </div>
</div>
<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="index.html">
                <img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right mainNav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>

                <li><a href="projects.html">Projects</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="sidebar-right.html">Right Sidebar</a></li>
                        <li><a href="#">Dummy Link1</a></li>
                        <li><a href="#">Dummy Link2</a></li>
                        <li><a href="#">Dummy Link3</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
                <li>
                @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                </li><li>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                @endif
                </li>

            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->

<!-- Header -->
<header id="head">
    <div class="container">
        <div class="fluid_container">
            <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                <div data-thumb="assets/images/slides/thumbs/img1.jpg" data-src="assets/images/slides/img1.jpg">
                </div>
                <div data-thumb="assets/images/slides/thumbs/img2.jpg" data-src="assets/images/slides/img2.jpg">
                </div>
                <div data-thumb="assets/images/slides/thumbs/img3.jpg" data-src="assets/images/slides/img3.jpg">
                </div>
            </div><!-- #camera_wrap_3 -->
        </div><!-- .fluid_container -->
    </div>
</header>
<!-- /Header -->

<div class="head-box" style="margin-top:-20px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h2 class="text-center text-uppercase last">Search for your desired house to rent</h2>

                <p class="text-center last">You may search based on gender, city and range</p>

                <div class="search-panel">
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <input type="text" class="form-control" id="city" placeholder="City" autocomplete="off">
                        </div>
                        <div class="form-group hidden-xs adv">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input class="form-control price" type="text" placeholder="From">
                            </div>
                        </div>
                        <div class="form-group hidden-xs adv">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input class="form-control price" type="text" placeholder="To">
                            </div>
                        </div>
                        <div class="form-group hidden-xs adv">
                            <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> For Rent</label></div>
                        </div>
                        <div class="form-group hidden-xs adv">
                            <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> For Sale</label></div>
                        </div>
                        <div class="form-group">
                            <a href="" class="btn btnsearch">Search</a>
                        </div>
                    </form>
                </div>
            </div><!-- end .col-sm-12 -->
        </div><!-- ene .row -->
    </div>
</div>

<div class="row h-100">
    <div class="col-sm-12 my-auto">
        <div class="card">

            <!-- /.card-header -->
            <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="5%">No.</th>
                        <th>Gender</th>
                        <th>City</th>
                        <th>Price</th>
                        <th width="10%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Male</td>
                        <td>
                           Bayan Lepas
                        </td>
                        <td>RM200.00</td>
                        <td ><button type="button" class="btn btn-block btn-success">More Info</button>
                        <button type="button" class="btn btn-block btn-success">Book</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>

<footer id="footer">
    <div class="container">
        <div class="social text-center">
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-flickr"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
        </div>

        <div class="clear"></div>
        <!--CLEAR FLOATS-->
    </div>
    <div class="footer2">
        <div class="container">
            <div class="row">

                <div class="col-md-6 panel">
                    <div class="panel-body">
                        <p class="simplenav">
                            <a href="index.html">Home</a> |
                            <a href="about.html">About</a> |
                            <a href="services.html">Services</a> |

                            <a href="projects.html">Projects</a> |
                            <a href="contact.html">Contact</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 panel">
                    <div class="panel-body">
                        <p class="text-right">
                            Copyright &copy; 2019. <a href="https://webthemez.com/tag/free" target="_blank">HTML Templates</a> by WebThemez.com
                        </p>
                    </div>
                </div>

            </div>
            <!-- /row of panels -->
        </div>
    </div>
</footer>

<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="../../assets/js/modernizr-latest.js"></script>
<script type='text/javascript' src='../../assets/js/jquery.min.js'></script>
<script type='text/javascript' src='../../assets/js/fancybox/jquery.fancybox.pack.js'></script>

<script type='text/javascript' src='../../assets/js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='../../assets/js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='../../assets/js/camera.min.js'></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/custom.js"></script>
<script>
    jQuery(function(){

        jQuery('#camera_wrap_4').camera({
            height: '600',
            loader: 'bar',
            pagination: false,
            thumbnails: false,
            hover: false,
            opacityOnGrid: false,
            imagePath: 'assets/images/'
        });

    });
</script>

</body>
</html>
