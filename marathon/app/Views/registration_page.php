<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php
        echo view('include/header');
        echo view('include/menu');
        ?>
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Athlete Registration
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-desktop"></i> Athlete Registration Overview
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h1>City Marathon 2025</h1>
                <p>
                    Welcome to the official athlete registration page. Here you can find
                    everything you need to get ready for race day: registration details,
                    race day schedule, course information, and important updates.
                </p>
                <p>
                    <a href="#" class="btn btn-primary btn-lg" role="button">
                        Register Now &raquo;
                    </a>
                </p>
            </div>

            <!-- QUICK ACTION BUTTONS -->
            <div class="page-header">
                <h1>Quick Actions</h1>
            </div>
            <p>
                <button type="button" class="btn btn-lg btn-primary">Register for the Race</button>
                <button type="button" class="btn btn-lg btn-success">Download Race Guide (PDF)</button>
                <button type="button" class="btn btn-lg btn-info">View Course Map</button>
                <button type="button" class="btn btn-lg btn-warning">Update Registration</button>
                <button type="button" class="btn btn-lg btn-danger">Cancel Registration</button>
                <button type="button" class="btn btn-lg btn-link">Contact Support</button>
            </p>
            <p>
                <button type="button" class="btn btn-default">FAQs</button>
                <button type="button" class="btn btn-info">Parking Info</button>
                <button type="button" class="btn btn-danger">Emergency Info</button>
            </p>

            <!-- COURSE MAP THUMBNAIL -->
            <div class="page-header">
                <h1>Course Map Preview</h1>
            </div>
            <img class="img-thumbnail" src="http://placehold.it/400x400" alt="Marathon Course Map">
            <p class="text-muted">
                Preview of the marathon course. The official, high-resolution map will be
                available in the race guide and at the packet pickup area.
            </p>

            <!-- DROPDOWN MENUS -->
            <div class="page-header">
                <h1>Race Resources</h1>
            </div>
            <div class="dropdown theme-dropdown clearfix">
                <a id="dropdownMenu1" href="#" role="button" class="sr-only dropdown-toggle" data-toggle="dropdown">
                    Race Resources <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li class="active" role="presentation">
                        <a role="menuitem" tabindex="-1" href="#">Race Rules & Regulations</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="#">Training Plans</a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="#">Parking & Transportation</a>
                    </li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="#">Race Results (after event)</a>
                    </li>
                </ul>
            </div>

            <!-- NAVBAR -->
            <div class="page-header">
                <h1>Navigation</h1>
            </div>

            <div class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">City Marathon</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="marathon-registration.html">Register</a></li>
                            <li><a href="#race-info">Race Info</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    More <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Training Tips</a></li>
                                    <li><a href="#">Volunteers</a></li>
                                    <li><a href="#">Sponsors</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Useful Links</li>
                                    <li><a href="#">Race Photos</a></li>
                                    <li><a href="#">Past Results</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>

            <!-- ALERTS -->
            <div class="page-header">
                <h1>Important Alerts</h1>
            </div>
            <div class="alert alert-success">
                <strong>Registration Open!</strong> You can now register for all race distances.
            </div>
            <div class="alert alert-info">
                <strong>Heads up!</strong> Online registration will close one week before race day.
            </div>
            <div class="alert alert-warning">
                <strong>Limited Spots!</strong> Half Marathon is almost full. Register soon to secure your spot.
            </div>
            <div class="alert alert-danger">
                <strong>Weather Notice!</strong> In case of severe weather, race start times may be adjusted.
            </div>

            <!-- PROGRESS BARS -->
            <div class="page-header">
                <h1>Registration Capacity</h1>
            </div>
            <p>5K Fun Run</p>
            <div class="progress">
                <div class="progress-bar" role="progressbar"
                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                     style="width: 60%;">
                    <span class="sr-only">60% Full</span>
                </div>
            </div>
            <p>10K Race</p>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar"
                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                     style="width: 40%;">
                    <span class="sr-only">40% Full</span>
                </div>
            </div>
            <p>Half Marathon</p>
            <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar"
                     aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                     style="width: 80%;">
                    <span class="sr-only">80% Full</span>
                </div>
            </div>
            <p>Full Marathon</p>
            <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar"
                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                     style="width: 50%;">
                    <span class="sr-only">50% Full</span>
                </div>
            </div>

            <!-- LIST GROUPS -->
            <div class="page-header" id="race-info">
                <h1>Race Day Information</h1>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <h3>Race Day Schedule</h3>
                    <ul class="list-group">
                        <li class="list-group-item">06:00 AM - Packet pickup opens</li>
                        <li class="list-group-item">07:30 AM - Warm-up session</li>
                        <li class="list-group-item">08:00 AM - Marathon & Half start</li>
                        <li class="list-group-item">08:30 AM - 10K start</li>
                        <li class="list-group-item">09:00 AM - 5K start</li>
                    </ul>
                </div>
                <!-- /.col-sm-4 -->
                <div class="col-sm-4">
                    <h3>What to Bring</h3>
                    <div class="list-group">
                        <a href="#" class="list-group-item active">Photo ID</a>
                        <a href="#" class="list-group-item">Confirmation email</a>
                        <a href="#" class="list-group-item">Running shoes & gear</a>
                        <a href="#" class="list-group-item">Weather-appropriate clothing</a>
                        <a href="#" class="list-group-item">Personal hydration (optional)</a>
                    </div>
                </div>
                <!-- /.col-sm-4 -->
                <div class="col-sm-4" id="contact">
                    <h3>Contact & Support</h3>
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            <h4 class="list-group-item-heading">Race Office</h4>
                            <p class="list-group-item-text">
                                Email: info@citymarathon.com<br>
                                Phone: (555) 123-4567
                            </p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">Emergency On Race Day</h4>
                            <p class="list-group-item-text">
                                Look for medical tents and volunteers along the course.
                            </p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">Volunteer Team</h4>
                            <p class="list-group-item-text">
                                Interested in helping? Join our volunteer crew and support the runners.
                            </p>
                        </a>
                    </div>
                </div>
                <!-- /.col-sm-4 -->
            </div>

            <!-- PANELS -->
            <div class="page-header">
                <h1>Registration Packages</h1>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">5K Fun Run</h3>
                        </div>
                        <div class="panel-body">
                            <p>Perfect for beginners and families.</p>
                            <ul>
                                <li>Entry fee: $25</li>
                                <li>Finisher medal</li>
                                <li>Event T-shirt</li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">10K Race</h3>
                        </div>
                        <div class="panel-body">
                            <p>Great for experienced runners.</p>
                            <ul>
                                <li>Entry fee: $40</li>
                                <li>Chip timing</li>
                                <li>Finisher medal & T-shirt</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.col-sm-4 -->
                <div class="col-sm-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Half Marathon</h3>
                        </div>
                        <div class="panel-body">
                            <p>Challenge yourself with 21K.</p>
                            <ul>
                                <li>Entry fee: $70</li>
                                <li>Chip timing</li>
                                <li>Finisher medal & premium T-shirt</li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Full Marathon</h3>
                        </div>
                        <div class="panel-body">
                            <p>The ultimate 42K challenge.</p>
                            <ul>
                                <li>Entry fee: $100</li>
                                <li>Chip timing & results online</li>
                                <li>Finisher medal & premium T-shirt</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.col-sm-4 -->
                <div class="col-sm-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Late Registration</h3>
                        </div>
                        <div class="panel-body">
                            <p>Available if spots remain.</p>
                            <ul>
                                <li>Additional $10 late fee</li>
                                <li>Limited T-shirt sizes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Cancellation Policy</h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                No refunds after the final registration deadline.
                                You may transfer your bib to another runner before that date.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.col-sm-4 -->
            </div>

            <!-- WELL -->
            <div class="page-header">
                <h1>Need Help?</h1>
            </div>
            <div class="well">
                <p>
                    If you have any questions about the registration process, race rules,
                    or special accommodations, please contact our support team at
                    <strong>support@citymarathon.com</strong>. We are happy to help you
                    have a safe and enjoyable race experience.
                </p>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

