<!DOCTYPE html>
<html>

<head>
    <title>Good Reading Bookstore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico" type="image/ico">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="./lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./lib/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="./lib/css/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="./lib/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="./lib/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="./lib/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./lib/css/select2.min.css">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/themes/flat-green.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="./css/custom.css">
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
                            <li class="active">Home</li>
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
                                    <img src="./img/profile/jovani.png" class="profile-img">
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
                            <a class="navbar-brand" href="#">
                                <div class="icon fa fa-book"></div>
                                <div class="title"> Good Reading</div>
                            </a>
                            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="index.php">
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
                                                <a href="database/publisher.php">
                                                    <span class="icon fa fa-building"></span><span class="title">Publisher</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="database/book.php">
                                                    <span class="icon fa fa-book"></span><span class="title">Book</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="database/author.php">
                                                    <span class="icon fa fa-pencil"></span><span class="title">Author</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="database/wrote.php">
                                                    <span class="icon fa fa-pencil-square-o"></span><span class="title">Wrote</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="database/customer.php">
                                                    <span class="icon fa fa-user"></span><span class="title">Customer</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="database/sale.php">
                                                    <span class="icon fa fa-money"></span><span class="title">Sale</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="license.php">
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
                        <span class="title">Home</span>
                    </div>
                    <div class="col-md-12" id="home-header">
                        <img class="img-responsive" src="./img/home/header.png" alt="Good Reading" />
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Case Study</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="img-responsive" id="case-study-img" src="./img/home/entity-relationship-diagram.png" alt="Entity-Relationship-Diagram" />
                                            <p align="center" id="case-study-src">
                                                <i>Source: </i>
                                                Fundamentals of Database Management Systems 2nd Edition by Mark Gillenson
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p align="justify">
                                                The diagram shows the E-R diagram for Good Reading Bookstores. Good Reading
                                                is a chain of bookstores that wants to keep track of the books that it sells, their
                                                publishers, their authors, and the customers who buy them. The BOOK entity has
                                                five attributes. Book Number is the unique identifier. A book has exactly one
                                                publisher. Publisher Name is the unique identifier of the PUBLISHER entity. A
                                                publisher may have (and generally has) published many books that Good Reading
                                                carries; however, Good Reading also wants to be able to keep track of some
                                                publishers that currently have no books in Good Reading's inventory (note the
                                                zero-modality symbol from PUBLISHER towards BOOK). A book must have at
                                                least one author but can have many (where in this case "many" means a few,
                                                generally two or three at most). For a person to be of interest to Good Reading
                                                as an author, she must have written at least one and possibly many books that
                                                Good Reading carries. Note that there is a many-to-many relationship between the 
                                                BOOK and AUTHOR that is realized in the associative entity WROTE, which has
                                                no intersection data. The company wants to keep track of which authors wrote
                                                which books, but there are no attributes that further describe that many-to-many
                                                relationship. The associative entity SALE indicates that there is a many-to-many
                                                relationship between books and customers. A book can be involved in many sales
                                                and so can a customer. But a particular sale involves just one book and one customer.
                                                Date, Price, and Quantity are intersection data in the many-to-many relationship
                                                between the BOOK and CUSTOMER entities.
                                            </p>
                                        </div>
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
                <span class="pull-right">2.1 <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> © 2015 Copyright.
            </div>
        </footer>
        <!-- Javascript Libs -->
        <script type="text/javascript" src="./lib/js/jquery.min.js"></script>
        <script type="text/javascript" src="./lib/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./lib/js/Chart.min.js"></script>
        <script type="text/javascript" src="./lib/js/bootstrap-switch.min.js"></script>
        <script type="text/javascript" src="./lib/js/jquery.matchHeight-min.js"></script>
        <script type="text/javascript" src="./lib/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="./lib/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="./lib/js/select2.full.min.js"></script>
        <script type="text/javascript" src="./lib/js/ace/ace.js"></script>
        <script type="text/javascript" src="./lib/js/ace/mode-html.js"></script>
        <script type="text/javascript" src="./lib/js/ace/theme-github.js"></script>
        <!-- Javascript -->
        <script type="text/javascript" src="./js/app.js"></script>
        <script type="text/javascript" src="./js/index.js"></script>
</body>

</html>
