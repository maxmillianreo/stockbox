<?php
  if(!isset($_SESSION['logged_in'])){
    redirect('index.php/MemberCtr');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="<?php echo base_url('assets/logo/favicon/favicon.ico');?>" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url('assets/logo/favicon/favicon.ico');?>" type="image/x-icon">

    <title>StockBox Capital | Member Area</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/dist/css/datatables.bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/simple-sidebar.css'); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

    <!-- Core Javascript -->
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

    <!-- Javascript for Datatables -->
    <script src="<?php echo base_url('assets/dist/js/datatables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/dist/js/datatables.bootstrap.min.js');?>"></script>
</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        StockBox Member Area
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('index.php/HomeCtr/');?>"><i class="glyphicon glyphicon-home"></i>&nbsp;&nbsp;Home</a>
                </li>
                <li>
                    <a href="<?php echo site_url('index.php/HomeCtr/userPanel');?>"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;User Panel</a>
                </li>
                <!-- <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li> -->
                <li>
                    <a href="<?php echo site_url('index.php/HomeCtr/doLogout');?>"><i class="glyphicon glyphicon-log-out"></i>&nbsp;&nbsp;Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1><?php echo $title; ?></h1>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="glyphicon glyphicon-menu-hamburger"></i></a>
                        <?php echo $body; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
        <!-- footer starts here -->
        <style>
          footer{
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1rem;
            background-color: #efefef;
            text-align: center;
          }
        </style>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
                        Copyright &copy; 2016 StockBox Capital Investment</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer ends -->
    </div>
    <!-- /#wrapper -->

    <!-- Menu Toggle Script -->
    <script type="text/javascript">
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>
