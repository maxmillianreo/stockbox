<?php $this->load->library('session'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!--
        Awesome Template
        http://www.templatemo.com/preview/templatemo_450_awesome
        -->
		<title>StockBox | Capital Investment</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/templatemo-style.css')?>">
		<script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.singlePageNav.min.js')?>"></script>
		<script src="<?php echo base_url('assets/js/typed.js')?>"></script>
		<script src="<?php echo base_url('assets/js/wow.min.js')?>"></script>
		<script src="<?php echo base_url('assets/js/custom.js')?>"></script>

        <link rel="shortcut icon" href="<?php echo base_url('assets/logo/favicon/favicon.ico');?>" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url('assets/logo/favicon/favicon.ico');?>" type="image/x-icon">

       <style type="text/css">
        .tes {
            width: 70px;
            height: 75px;
            background: #71ab91;
            -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
            transition: width 2s;
            position :absolute;
            float:right;
            margin:0;
            padding: 10px;
        }

        .tes:hover {
            width: 200px;
        }

       </style>
    </head>
	<body id="top">

		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-wave">
     	 		<div class="sk-rect1"></div>
       			<div class="sk-rect2"></div>
       			<div class="sk-rect3"></div>
      	 		<div class="sk-rect4"></div>
      			<div class="sk-rect5"></div>
     		</div>
    	</div>
    	<!-- end preloader -->

        <!-- start header -->
        <!-- <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                         <p><i class="fa fa-phone"></i><span> Phone</span>0858-8330-7511</p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                         <p><i class="fa fa-envelope-o"></i><span> Email</span><a href="#">info@stockbox.com</a></p>
                    </div>
                    <div class="col-md-5 col-sm-4 col-xs-12">
                        <ul class="social-icon">
                            <li><span>Language</span></li>
                            <!-- <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-apple"></a></li>


                        </ul>
                    </div>
                </div>
            </div>
        </header> -->
        <!-- end header -->

    	<!-- start navigation -->
		<nav class="navbar navbar-default templatemo-nav" role="navigation">
            <!-- <div class="tes">
                <span class="fa fa-user" style="font-size: 50px;"></span>  Member Area
            </div> -->
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">
                        <img src="<?php echo base_url('assets/logo/logo.png');?>" height="70">
                    </a>
				</div>

				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#top">Home</a></li>
						<li><a href="#about">About</a></li>
						<!-- <li><a href="#team">Team</a></li> -->
						<li><a href="#service">Product</a></li>
						<li><a href="#portfolio">Testimonial</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>

		</nav>

	  <header>
	      <div class="container">
	          <div class="row">
	              <div class="col-md-3 col-sm-4 col-xs-12">
	                   <p><i class="fa fa-phone"></i><span> Phone</span>0858-8330-7511</p>
	              </div>
	              <div class="col-md-3 col-sm-4 col-xs-12">
	                   <p><i class="fa fa-envelope"></i><span> Email</span>info@stockbox.com</p>
	              </div>


	              <div class="col-md-6 col-sm-4 col-xs-12">
	                  <ul class="social-icon">
	                      <li><a href="<?php echo base_url('MemberCtr');?>" target="_blank"><i class="fa fa-user"><span> Member Area</span></i></a></li>
	                      <li><i class="fa fa-globe"></i><span>Language</span></li>
	                      <li><a href="#"><img src="<?php echo base_url('assets/images/en.png');?>" width="35px"></a></li>
	                      <li><a href="<?php echo base_url('welcome/changeLanguage?lang=en');?>"><img src="<?php echo base_url('assets/images/in.png');?>" width="20px"></a></li>
	                  </ul>

	              </div>
	          </div>
	      </div>
		</header>

    	<!-- start home -->
    	<section id="home">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-offset-2 col-md-8">
    					<h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">We Manage Your Investment.
                        <span>Enjoy 1 % Monthly Interest</span></h1>
    					<div class="element">
                            <div class="sub-element">Deposit Rp 500,000 get Rp 60,000 passive income !</div>
                            <div class="sub-element">StockBox is the first Investment Capital Holding in Indonesia who offers interest more than bank deposits with NO RISK !</div>
                            <div class="sub-element">Gain profit more than 11% anually</div>
                            <div class="sub-element">Wait no more. Start today !</div>
                        </div>
    					<a data-scroll href="#about" class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">GET STARTED</a>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end home -->

    	<!-- start about -->
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">We are <span>StockBox</span></h2>
    				</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-usd"></i>
								</div>
								<h3 class="media-heading">Your Investment Partner</h3>
							</div>
							<div class="media-body">
								<p>We help you save money. All you need to do is just deposit your money to us. And we will transfer your profit as much as 1% of your deposits, monthly directly to your bank account. Your deposit money will be available for withdrawal after the deposit period ends.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-comment-o"></i>
								</div>
								<h3 class="media-heading">Your Financial Consultant</h3>
							</div>
							<div class="media-body">
								<p>Consult your financial planning with us. We are ready to hear your great plans and offer you our best investment products.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-tags"></i>
								</div>
								<h3 class="media-heading">We are Stock Trader</h3>
							</div>
							<div class="media-body">
								<p>Your deposit money will be cycled in Indonesia Stock Exchange Market. Our professional team will do the job. You just have to sit back, relax and wait for the 1% profit monthly. And the most important thing is this investment is 100% safe (No Risk).</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end about -->

    	<!-- start team -->
    	<!-- <section id="team">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>AWESOME</span> TEAM</h2>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">
    						<img src="images/team-img1.jpg" class="img-responsive" alt="team img 1">
    							<div class="team-des">
    								<h4>TRACY</h4>
    								<span>Designer</span>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
    							</div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
    					<div class="team-wrapper">
    						<img src="images/team-img2.jpg" class="img-responsive" alt="team img 2">
    							<div class="team-des">
    								<h4>MARY</h4>
    								<span>Developer</span>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
    							</div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">
    						<img src="images/team-img3.jpg" class="img-responsive" alt="team img 3">
    							<div class="team-des">
    								<h4>JULIA</h4>
    								<span>Director</span>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
    							</div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
    					<div class="team-wrapper">
    						<img src="images/team-img4.jpg" class="img-responsive" alt="team img 4">
    							<div class="team-des">
    								<h4>LINDA</h4>
    								<span>Manager</span>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
    							</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section> -->
    	<!-- end team -->

    	<!-- start service -->
    	<section id="service">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>StockBox</span> Product</h2>
    				</div>
    				<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    					<i class="fa fa-random"></i>
    					<h4>MoneyGrow</h4>
    					<p>
                            Our very first product with these features :
                            <ul>
                                <li>You deposit your money minimal deposit Rp 500,000 and maxmimal Rp 5,000,000 (multiple of Rp 500,000)</li>
                                <li>Determine your investment period. Minimal 3 months dan maxmimal 1 year.</li>
                                <li>Once a month, we will transfer your profit interest as much as 1% of your total deposit to your bank account.</li>
                                <li>By the end of the investment period, we will transfer your last monthly 1% profit interest summed with your initial deposit.</li>
                             </ul>
                        </p>
    				</div>
    				<!-- <div class="col-md-4 active wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
    					<i class="fa fa-cloud"></i>
    					<h4>Cloud Computing</h4>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
    				</div>
    				<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    					<i class="fa fa-cog"></i>
    					<h4>UX Design</h4>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
    				</div> -->
    			</div>
    		</div>
    	</section>
    	<!-- end servie -->

    	<!-- start portfolio -->
    	<section id="portfolio">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">What They Say about <span>StockBox</span></h2>
    				</div>
                     <center><h3> No Reviews yet, Be the First !</h3></center>
    				<!-- <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
    					   <img src="images/portfolio-img1.jpg" class="img-responsive" alt="portfolio img 1">
                                <div class="portfolio-overlay">
                                    <h4>Be The First !</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>

    				</div> -->
    				<!-- <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img2.jpg" class="img-responsive" alt="portfolio img 2">
                                <div class="portfolio-overlay">
                                    <h4>Project Two</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img3.jpg" class="img-responsive" alt="portfolio img 3">
                                <div class="portfolio-overlay">
                                    <h4>Project Three</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img4.jpg" class="img-responsive" alt="portfolio img 4">
                                <div class="portfolio-overlay">
                                    <h4>Project Four</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img3.jpg" class="img-responsive" alt="portfolio img 3">
                                <div class="portfolio-overlay">
                                    <h4>Project Five</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img4.jpg" class="img-responsive" alt="portfolio img 4">
                                <div class="portfolio-overlay">
                                    <h4>Project Six</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img1.jpg" class="img-responsive" alt="portfolio img 1">
                                <div class="portfolio-overlay">
                                    <h4>Project Seven</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img2.jpg" class="img-responsive" alt="portfolio img 2">
                                <div class="portfolio-overlay">
                                    <h4>Project Eight</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div> -->
    			</div>
    		</div>
    	</section>
    	<!-- end portfolio -->

    	<!-- start contact -->
    	<section id="contact">

    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Contact <span>StockBox</span></h2>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
    					<form action="<?php echo base_url('index.php/welcome/sendContactEmail');?>" method="post">
    						<input type="hidden" name="lang" id="lang" value="en">

                            <label>NAME</label>
    						<input type="text" class="form-control" id="txtFullname" name="txtFullname">

                            <label>EMAIL</label>
    						<input type="email" class="form-control" id="txtEmail" name="txtEmail">

                            <label>MESSAGE</label>
    						<textarea rows="4" class="form-control" id="txtMessage" name="txtMessage"></textarea>

                            <input type="submit" class="form-control">
    					</form>
    				</div>

    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
    					<address>
    						<!-- <p class="address-title">Alamat Kami</p>
    						<span></span> -->
    						<p><i class="fa fa-phone"></i> 0858-8330-7511</p>
    						<p><i class="fa fa-envelope-o"></i> info@stockbox.com</p>
    						<!-- <p><i class="fa fa-map-marker"></i> Nissi Bintaro Campus Lantai 3, Jl Tegal Rotan no. 78, Tangerang Selatan</p> -->
    					</address>
    					<ul class="social-icon">
    						<li><h4>Follow us</h4></li>
    						<li><a href="#" class="fa fa-facebook"></a></li>
    						<li><a href="#" class="fa fa-twitter"></a></li>
    						<li><a href="#" class="fa fa-instagram"></a></li>
    					</ul>
    				</div>

                    <div style="display:<?php if(!isset($_SESSION['error'])) echo 'none'; ?>;width: 100%; position:relative;" id="login-alert" class="alert alert-danger col-sm-12">
                      <!-- error msg here -->
                        <?php
                            if(isset($_SESSION['error'])){
                                echo $_SESSION['error'];
                                session_unset($_SESSION['error']);
                            }
                        ?>
                    </div>

                    <div style="display:<?php if(!isset($_SESSION['info'])) echo 'none'; ?>;width: 100%; position:relative;" id="info-alert" class="alert alert-success col-sm-12">
                      <!-- error msg here -->
                        <?php
                            if(isset($_SESSION['info'])){
                                echo $_SESSION['info'];
                                session_unset($_SESSION['info']);
                            }
                        ?>
                    </div>
    			</div>
    		</div>
    	</section>
    	<!-- end contact -->

        <!-- start copyright -->
        <footer id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
                       	Copyright &copy; 2016 StockBox Capital Investment</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end copyright -->

	</body>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('dist/js/jquery.min.js');?>"></script>

    <script src="<?php echo base_url('dist/js/bootstrap.min.js');?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('assets/js/ie10-viewport-bug-workaround.js');?>"></script>

    <script type="text/javascript">
      setTimeout(function() {
          $('#login-alert').fadeOut('slow');
          $('#info-alert').fadeOut('slow');
      }, 4000);
    </script>
</html>
