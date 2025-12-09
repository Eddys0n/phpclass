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
                        Registered Runners
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-table"></i> Runners Tables
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">
                    <h2>Bordered Table</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Runner</th>
                                <th>Bib #</th>
                                <th>Distance</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>John Smith</td>
                                <td>101</td>
                                <td>5K</td>
                                <td>Registered</td>
                            </tr>
                            <tr>
                                <td>Emma Johnson</td>
                                <td>102</td>
                                <td>10K</td>
                                <td>Confirmed</td>
                            </tr>
                            <tr>
                                <td>Michael Brown</td>
                                <td>203</td>
                                <td>Half Marathon</td>
                                <td>Paid</td>
                            </tr>
                            <tr>
                                <td>Laura Davis</td>
                                <td>310</td>
                                <td>Marathon</td>
                                <td>Registered</td>
                            </tr>
                            <tr>
                                <td>Carlos Martinez</td>
                                <td>411</td>
                                <td>5K</td>
                                <td>Waiting List</td>
                            </tr>
                            <tr>
                                <td>Sophia Miller</td>
                                <td>512</td>
                                <td>10K</td>
                                <td>Confirmed</td>
                            </tr>
                            <tr>
                                <td>David Wilson</td>
                                <td>613</td>
                                <td>Half Marathon</td>
                                <td>Paid</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2>Bordered with Striped Rows</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Runner</th>
                                <th>Bib #</th>
                                <th>Distance</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Anna Lee</td>
                                <td>714</td>
                                <td>5K</td>
                                <td>Registered</td>
                            </tr>
                            <tr>
                                <td>James Taylor</td>
                                <td>815</td>
                                <td>10K</td>
                                <td>Confirmed</td>
                            </tr>
                            <tr>
                                <td>Maria Garcia</td>
                                <td>916</td>
                                <td>Half Marathon</td>
                                <td>Paid</td>
                            </tr>
                            <tr>
                                <td>Robert King</td>
                                <td>100</td>
                                <td>Marathon</td>
                                <td>Registered</td>
                            </tr>
                            <tr>
                                <td>Olivia Clark</td>
                                <td>221</td>
                                <td>5K</td>
                                <td>Waiting List</td>
                            </tr>
                            <tr>
                                <td>Daniel Young</td>
                                <td>322</td>
                                <td>10K</td>
                                <td>Confirmed</td>
                            </tr>
                            <tr>
                                <td>Isabella Hall</td>
                                <td>423</td>
                                <td>Half Marathon</td>
                                <td>Paid</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">
                    <h2>Basic Table</h2>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Runner</th>
                                <th>Bib #</th>
                                <th>Distance</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Lucas Anderson</td>
                                <td>524</td>
                                <td>5K</td>
                                <td>Registered</td>
                            </tr>
                            <tr>
                                <td>Emily Harris</td>
                                <td>625</td>
                                <td>10K</td>
                                <td>Confirmed</td>
                            </tr>
                            <tr>
                                <td>Joshua Scott</td>
                                <td>726</td>
                                <td>Half Marathon</td>
                                <td>Paid</td>
                            </tr>
                            <tr>
                                <td>Grace Lewis</td>
                                <td>827</td>
                                <td>Marathon</td>
                                <td>Registered</td>
                            </tr>
                            <tr>
                                <td>Anthony Walker</td>
                                <td>928</td>
                                <td>5K</td>
                                <td>Waiting List</td>
                            </tr>
                            <tr>
                                <td>Chloe Robinson</td>
                                <td>1029</td>
                                <td>10K</td>
                                <td>Confirmed</td>
                            </tr>
                            <tr>
                                <td>Henry Green</td>
                                <td>1130</td>
                                <td>Half Marathon</td>
                                <td>Paid</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2>Striped Rows</h2>
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Runner</th>
                                <th>Bib #</th>
                                <th>Distance</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Sarah Perez</td>
                                <td>1231</td>
                                <td>5K</td>
                                <td>Registered</td>
                            </tr>
                            <tr>
                                <td>Matthew Hill</td>
                                <td>1332</td>
                                <td>10K</td>
                                <td>Confirmed</td>
                            </tr>
                            <tr>
                                <td>Natalie Adams</td>
                                <td>1433</td>
                                <td>Half Marathon</td>
                                <td>Paid</td>
                            </tr>
                            <tr>
                                <td>Christopher Baker</td>
                                <td>1534</td>
                                <td>Marathon</td>
                                <td>Registered</td>
                            </tr>
                            <tr>
                                <td>Mia Gonzalez</td>
                                <td>1635</td>
                                <td>5K</td>
                                <td>Waiting List</td>
                            </tr>
                            <tr>
                                <td>Andrew Carter</td>
                                <td>1736</td>
                                <td>10K</td>
                                <td>Confirmed</td>
                            </tr>
                            <tr>
                                <td>Victoria Rivera</td>
                                <td>1837</td>
                                <td>Half Marathon</td>
                                <td>Paid</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">
                    <h2>Contextual Classes</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Runner</th>
                                <th>Bib #</th>
                                <th>Distance</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="active">
                                <td>Peter Cole</td>
                                <td>1938</td>
                                <td>5K</td>
                                <td>Checked-in</td>
                            </tr>
                            <tr class="success">
                                <td>Rachel Flores</td>
                                <td>2039</td>
                                <td>10K</td>
                                <td>Confirmed</td>
                            </tr>
                            <tr class="warning">
                                <td>Kevin Hughes</td>
                                <td>2140</td>
                                <td>Half Marathon</td>
                                <td>Waiting List</td>
                            </tr>
                            <tr class="danger">
                                <td>Olivia Reed</td>
                                <td>2241</td>
                                <td>Marathon</td>
                                <td>Cancelled</td>
                            </tr>
                            <tr>
                                <td>Maria Lopez</td>
                                <td>2342</td>
                                <td>5K</td>
                                <td>Registered</td>
                            </tr>
                            <tr>
                                <td>Liam Turner</td>
                                <td>2443</td>
                                <td>10K</td>
                                <td>Registered</td>
                            </tr>
                            <tr>
                                <td>Ella Foster</td>
                                <td>2544</td>
                                <td>Half Marathon</td>
                                <td>Registered</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2>Race Tables Info</h2>
                    <p>
                        Example tables
                    </p>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
