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
                        Marathon Registration
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> Registration Form
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <!-- LEFT COLUMN – REGISTRATION FORM -->
                <div class="col-lg-6">

                    <form role="form">

                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input class="form-control" id="fullName" name="fullName" placeholder="Enter your full name">
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input class="form-control" type="email" id="email" name="email" placeholder="Enter your email">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input class="form-control" type="tel" id="phone" name="phone" placeholder="Enter your phone number">
                        </div>

                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input class="form-control" type="date" id="dob" name="dob">
                        </div>

                        <div class="form-group">
                            <label>Gender</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="Male" checked> Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="Female"> Female
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="Other"> Other / Prefer not to say
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="distance">Race Distance</label>
                            <select class="form-control" id="distance" name="distance">
                                <option value="">-- Select distance --</option>
                                <option>5K</option>
                                <option>10K</option>
                                <option>Half Marathon (21K)</option>
                                <option>Full Marathon (42K)</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tshirt">T-Shirt Size</label>
                            <select class="form-control" id="tshirt" name="tshirt">
                                <option value="">-- Select size --</option>
                                <option>XS</option>
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                                <option>XXL</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="emergencyName">Emergency Contact Name</label>
                            <input class="form-control" id="emergencyName" name="emergencyName" placeholder="Person to contact in case of emergency">
                        </div>

                        <div class="form-group">
                            <label for="emergencyPhone">Emergency Contact Phone</label>
                            <input class="form-control" id="emergencyPhone" name="emergencyPhone" placeholder="Emergency phone number">
                        </div>

                        <div class="form-group">
                            <label for="notes">Additional Notes</label>
                            <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="Medical conditions, pace, team name, etc."></textarea>
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="waiver">
                                    I agree to the event rules and the race waiver.
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit Registration</button>
                        <button type="reset" class="btn btn-default">Clear Form</button>

                    </form>

                </div>

                <!-- RIGHT COLUMN – EVENT INFO -->
                <div class="col-lg-6">
                    <h2>Event Information</h2>
                    <p>
                        Welcome to the official registration page for the <strong>City Marathon 2025</strong>.
                        Please fill out the form to reserve your spot in the race.
                    </p>

                    <h3>Race Details</h3>
                    <ul>
                        <li><strong>Date:</strong> October 12, 2025</li>
                        <li><strong>Start Time:</strong> 8:00 AM</li>
                        <li><strong>Location:</strong> Downtown City Park</li>
                    </ul>

                    <h3>Included With Registration</h3>
                    <ul>
                        <li>Official race T-shirt</li>
                        <li>Finisher medal</li>
                        <li>Water and aid stations along the course</li>
                        <li>Post-race snacks and refreshments</li>
                    </ul>

                    <h3>Important Notes</h3>
                    <p>
                        Please arrive at least 30 minutes before the start time to pick up your race bib.
                        By submitting the form, you confirm that you are physically able to participate in the event.
                    </p>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

