<!DOCTYPE html>
<html>

<head>
    <title>Good Reading Bookstore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../favicon.ico" type="image/ico">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="../lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/select2.min.css">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/themes/flat-green.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
</head>

<body class="flat-green">
    <div class="app-container">
        <div class="row content-container">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-expand-toggle">
                            <i class="fa fa-bars icon"></i>
                        </button>
                        <ol class="breadcrumb navbar-breadcrumb">
                            <li>Good Reading</li>
                            <li>Database</li>
                            <li class="active">Sale</li>
                        </ol>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-th icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-times icon"></i>
                        </button>
                        <li class="dropdown profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jovani Warguez <span class="caret"></span></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li class="profile-img">
                                    <img src="../img/profile/jovani.png" class="profile-img">
                                </li>
                                <li>
                                    <div class="profile-info">
                                        <h4 class="username">jovanidash21</h4>
                                        <p>jwardash21@gmail.com</p>
                                        <div class="btn-group margin-bottom-2x" role="group">
                                            <a href="https://jovaniwarguez.wordpress.com/" target="_blank">
                                                <button type="button" class="btn btn-default"><i class="fa fa-user"></i> Website</button>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="side-menu sidebar-inverse">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="../index.php">
                                <div class="icon fa fa-book"></div>
                                <div class="title"> Good Reading</div>
                            </a>
                            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                        </div>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="../index.php">
                                    <span class="icon fa fa-home"></span><span class="title">Home</span>
                                </a>
                            </li>
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-element">
                                    <span class="icon fa fa-database"></span><span class="title">Database</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-element" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li>
                                                <a href="publisher.php">
                                                    <span class="icon fa fa-building"></span><span class="title">Publisher</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="book.php">
                                                    <span class="icon fa fa-book"></span><span class="title">Book</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="author.php">
                                                    <span class="icon fa fa-pencil"></span><span class="title">Author</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wrote.php">
                                                    <span class="icon fa fa-pencil-square-o"></span><span class="title">Wrote</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="customer.php">
                                                    <span class="icon fa fa-user"></span><span class="title">Customer</span>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="sale.php">
                                                    <span class="icon fa fa-money"></span><span class="title">Sale</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="../license.php">
                                    <span class="icon fa fa-thumbs-o-up"></span><span class="title">License</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body">
                    <div class="page-title">
                        <span class="title">Sale</span>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Table</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="datatable table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Book Number</th>
                                                    <th>Customer Number</th>
                                                    <th>Date</th>
                                                    <th>Price (&#8369)</th>
                                                    <th>Quantity</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Book Number</th>
                                                    <th>Customer Number</th>
                                                    <th>Date</th>
                                                    <th>Price (&#8369)</th>
                                                    <th>Quantity</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                    include('../db_connect.php');
                                                    $sale = "SELECT * FROM sale";
                                                    $saleResult = $connect->query($sale);
                                                    if($saleResult->num_rows > 0)
                                                    {
                                                        while($saleRows = $saleResult->fetch_assoc())
                                                        {
                                                            $book_number = $saleRows['book_number'];
                                                            $customer_number = $saleRows['customer_number'];
                                                            $date = $saleRows['date'];
                                                            $price = $saleRows['price'];
                                                            $quantity = $saleRows['quantity'];
                                                            echo 
                                                                "<tr>
                                                                    <td>"
                                                                        .$book_number.
                                                                    "</td>
                                                                    <td>"
                                                                        .$customer_number.
                                                                    "</td>
                                                                    <td>"
                                                                        .$date.
                                                                    "</td>
                                                                    <td>"
                                                                        .$price.
                                                                    "</td>
                                                                    <td>"
                                                                        .$quantity.
                                                                    "</td>
                                                                </tr>";
                                                        }
                                                    }
                                                    else
                                                    {
                                                        // echo "<center><h1>No Results.</h1></center>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="app-footer">
            <div class="wrapper">
                <span class="pull-right">2.1 <a href="../license.php"><i class="fa fa-long-arrow-up"></i></a></span> © 2015 Copyright.
            </div>
        </footer>
        <!-- Javascript Libs -->
        <script type="text/javascript" src="../lib/js/jquery.min.js"></script>
        <script type="text/javascript" src="../lib/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../lib/js/Chart.min.js"></script>
        <script type="text/javascript" src="../lib/js/bootstrap-switch.min.js"></script>
        <script type="text/javascript" src="../lib/js/jquery.matchHeight-min.js"></script>
        <script type="text/javascript" src="../lib/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../lib/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="../lib/js/select2.full.min.js"></script>
        <script type="text/javascript" src="../lib/js/ace/ace.js"></script>
        <script type="text/javascript" src="../lib/js/ace/mode-html.js"></script>
        <script type="text/javascript" src="../lib/js/ace/theme-github.js"></script>
        <!-- Javascript -->
        <script type="text/javascript" src="../js/app.js"></script>
        <script type="text/javascript" src="../js/index.js"></script>
</body>

</html>
