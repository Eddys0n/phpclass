<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Marathon Master</title>
    <?php
        $err_css="";
        if (isset($load_error)){
          $load_error=null;
          $err_css= "alert alert-danger";
          echo "<script>document.location.href='#login'</script>";
        }
    ?>

    <style>
        input{
            margin: 7px !important;
            padding: 7px;
        }
    </style>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand topnav" href="#">Marathon Master</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#about">About</a>
                </li>
                <li>
                    <a href="#services">Services</a>
                </li>
                <li>
                    <a href="#login">Login</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<!-- Header -->
<a name="about"></a>
<div class="intro-header">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h1>Marathon Master</h1>
                    <h3>Software that just Runs!</h3>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.intro-header -->

<!-- Page Content -->

<a  name="services"></a>
<div class="content-section-a">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading"><br>Special Thanks</h2>
                <p class="lead">A special thanks to <a target="_blank" href="http://join.deathtothestockphoto.com/">Sponsor</a> The Marathon Master 2025 is an annual race that brings together runners of all ages and skill levels.
                    Our goal is to promote health, fitness, and community spirit throughout the Fox Valley area.
                    This year’s event includes 5K, 10K, and Half Marathon categories, featuring certified routes,
                    hydration stations, custom medals, and fun activities for families.</p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <img class="img-responsive" src="img/sponsor.jpg" alt="">
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.content-section-a -->

<div class="content-section-b">

    <div class="container">

        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Our Mission<br></h2>
                <p class="lead">To encourage an active and healthy lifestyle by creating an event that is accessible to the entire community.
                    We aim to inspire both new and experienced runners to challenge themselves while supporting local youth
                    sports and public health programs. <a target="_blank" href="http://www.psdcovers.com/">Marathon</a>! Visit their website</p>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                <img class="img-responsive" src="img/run.jpg" alt="">
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.content-section-b -->

<a  name="login"></a>
<div class="content-section-a">

    <div class="container">
        <div class="row">
            <div class=" col-sm-12 <?= $err_css?> ">
                <?php
                $validation = service('validation');
                if ($validation->hasError('username')){
                    echo $validation->getError('username'). "<br/>";
                }
                if ($validation->hasError('password')) {
                    echo $validation->getError('password') . "<br/>";
                }
                if ($validation->hasError('password2')){
                    echo $validation->getError('password2'). "<br/>";
                }
                if ($validation->hasError('email')) {
                    echo $validation->getError('email') . "<br/>";
                }

                ?>
            </div>
        </div>
        </div>
        <div class="row">
            <div class=" col-sm-2"></div>
            <div class=" col-sm-5">
                <h2>Login</h2>
                <?php
                    echo form_open('http://10.7.66.180/marathon/public/login');
                    echo form_input('username','','placeholder="Enter Username"'). "<br>";
                    echo form_password('password','','placeholder="Enter Password"'). "<br>";
                    echo form_submit('submit','Login');
                    echo form_close();
                ?>
            </div>
            <div class=" col-sm-5">
                <h2>Create Account</h2>
                <?php
                echo form_open('http://10.7.66.180/marathon/public/create');
                echo form_input('username','','placeholder="Enter Username"'). "<br>";
                echo form_password('password','','placeholder="Enter Password"'). "<br>";
                echo form_password('password2','','placeholder="Retype Password"'). "<br>";
                echo form_input('email','','placeholder="Enter Email"'). "<br>";
                echo form_submit('submit','Create Account');
                echo form_close();
                ?>
            </div>
            <div class=" col-sm-1"></div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.content-section-a -->


<a  name="contact"></a>
<div class="banner">

    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h2>Connect to Start Marathon:</h2>
            </div>
            <div class="col-lg-6">
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.banner -->

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-inline">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
                <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
