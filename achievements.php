
<?php
session_start();
include 'commonincludefiles.php';
global $conn;
$sa_data = array();
$sa_data = getAllsarpanchData();
$d_sa_data = array();
$d_sa_data = getAlld_sarpanchData();
$talati_data = array();
$talati_data = getAlltalatiData();
$gram_sevak_data = array();
$gram_sevak_data = getAllgram_sevakData();
$history_data = array();
$history_data = getAllhistoryData();
$minister_data = array();
$minister_data = getAllministerData();
$news_data = array();
$news_data = getAllnewsData();
$achievment_data = array();
$achievment_data = getAllachievmentData();
?>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <!-- Meta -->
    <meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" /><meta name="description" /><meta name="author" /><meta name="keywords" content="Jepur Gram Panchayat Vijapur, Gram Panchayat Jepur, Online Jepur Panchayat, Jepur Vijapur, Gram Panchayat Vijapur, Gram Panchayat Software, Jepur Vijapur Mehsana, Gujarat" /><meta name="robots" content="all" /><title>
	અજરાપુરા ગ્રામ  પંચાયત
</title>

    <!-- Style Sheet : START -->
    

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<!-- Customizable CSS -->
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="assets/css/blue.css" />
<link rel="stylesheet" href="assets/css/owl.carousel.css" />
<link rel="stylesheet" href="assets/css/owl.transitions.css" />
<link rel="stylesheet" href="assets/css/animate.min.css" />
<link rel="stylesheet" href="assets/css/rateit.css" />
<link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
<link href="assets/css/lightbox.css" rel="stylesheet">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="assets/css/font-awesome.css" />

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css' />



    <!-- Style Sheet : START -->
</head>
<body>
    <form method="post" action="#" id="form1">
<div class="aspNetHidden">

</div>
        <!-- Header : START -->
        

<header class="header-style-1">
    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account" style="color: darkblue;">
                    
                    <script>
                        var blink_speed = 00;
                        var t = setInterval(function () {
                            var ele = document.getElementById('blinker');
                            ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
                        }, blink_speed);
                    </script>
                    
                </div>
                <!-- /.cnt-account -->

                
                <!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div>
            <!-- /.header-top-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 logo-holder">
                    <div class="logo">
                        <a href="index.php">
                             <p><font size="6"> અજરાપુરા ગ્રામ પંચાયત</font></p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 social">
                    <ul class="link" style="margin-top: 20px;">
                        <li class="instagram pull-right"><a target="_blank" rel="nofollow" href="https://www.instagram.com/" title="Instagram"></a></li>
                        <li class="tw pull-right"><a target="_blank" rel="nofollow" href="https://twitter.com/" title="Twitter"></a></li>
                        <li class="fb pull-right"><a target="_blank" rel="nofollow" href="https://www.facebook.com/" title="Facebook"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li id="Header_A1" class="dropdown "><a href="index.php">મુખ્ય પૃષ્ઠ</a></li>
                                <li id="Header_A2" class="dropdown"><a href="history.php">ઈતિહાસ</a></li>
                                <li id="Header_A3" class="dropdown"><a href="dharohar.php">ધરોહર</a></li>
                                <li id="Header_A4" class="dropdown"><a href="activities.php">પ્રવ્રુતિઓ</a></li>
                                <li id="Header_A13" class="active"><a href="achievements.php">સિદ્ધિઓ</a> </li>
                                <li id="Header_A5" class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">પદાધિકારી</a>
                                    <ul class="dropdown-menu pages">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-xs-12 col-menu">
                                                        <ul class="links">
                                                            <li><a href="sabhya.php">પંચાયત</a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li id="Header_A6" class="dropdown"><a href="govproject.php">યોજનાઓ</a> </li>
                                <li id="Header_A7" class="dropdown"><a href="development.php">વિકાસના કામ</a> </li>
                                <li id="Header_A8" class="dropdown"><a href="bloodgroup.php">બ્લડ ગ્રુપની માહિતી</a> </li>
                                <li id="Header_A9" class="dropdown"><a href="akarni.php">મિલ્કત આકરણી</a> </li>
                                <li id="Header_A10" class="dropdown"><a href="feedback.php">અભિપ્રાય</a> </li>
                                 <li id="Header_A12" class="dropdown"><a href="contact.php">સંપર્ક</a> </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

        <!-- Header : END -->
        
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                
            </ul>
        </div>
    </div>
</div>

        <!-- Content : START -->
        <div class="body-content" style="background-color: beige; margin-top: -28px;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9">
                        <div class="scroll-tabs wow fadeInUp">
                            <div class="more-info-tab clearfix ">
                                <h3 class="new-product-title pull-left">શૈક્ષણીક / વ્યવસાયીક સિદ્ધિઓ</h3>
                            </div>
                            <div class="search-result-container ">
                                <div id="myTabContent" class="tab-content category-list">
                                    <div class="tab-pane active " id="grid-container">
                                        <div class="category-product">
                                            <div class="row">
                                                <?php
												if (!empty($achievment_data)) {
										foreach ($achievment_data as $val) {
														?>
                    
                                                        <div class="col-sm-6 col-md-3 wow fadeInUp">
                                                            <div class="products">
                                                                <div class="product">
                                                                    <div class="product-image">
                                                                        <div class="image">
                                                                            <a href="javascript:void(0);">
                                                                                <img src="images/banner/<?php echo $val['tImage']; ?>" alt="<?php echo $val['achievment_username']; ?>" height="185" width="42"/></a>
                                                                        </div>
                                                                        <div class="tag sale" style="width:50%; border-radius:0px; top:0.3%; right:0px; font-size:14px;"><span><?php echo $val['achievment_type']; ?></span></div>
                                                                    </div>
                                                                    <div class="product-info text-left">
                                                                        <div class="product-price"><span class="price"><?php echo $val['achievment_username']; ?></span></div>
                                                                        <div class="description"><?php echo $val['achievment_detail']; ?> <span class='price'></span></div>
                                                                    </div>
                                                                    <div class="cart clearfix animate-effect" style="left:55%;">
                                                                        <div class="action">
                                                                            <ul class="list-unstyled">
                                                                                <li class="add-cart-button btn-group">
                                                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"><?php echo $val['achievment_year']; ?></button>
                                                                                    <button class="btn btn-primary cart-btn" type="button"><?php echo $val['achievment_year']; ?></button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
										}
								}
														?>
            
                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar : START -->
                    
		
                    <!--Sidebar : END-->
                </div>
            </div>
        </div>
        <!-- Content : END -->
        <!-- Footer : START -->
        <footer id="footer" class="footer color-bg">
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title" style="color:#898989 ;">વિકાસના કામ માટે ડોનેશન</h4>
                    </div>
                    <div class="module-body">
                        <ul class="toggle-footer" style="">
                            <li class="media">
                                <div class="media-body">
                                    <p style="color:#ffffff;"><b>BANK NAME : </b>BANK OF BARODA</p>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-body">
                                    <p style="color:#ffffff;"><b>A/C NO : </b>**************</p>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-body">
                                    <p style="color:#ffffff;"><b>IFSC CODE : </b>BARBORANCHH</p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="module-heading">
                        <h4 class="module-title" style="color:#898989;">ગવર્મેન્ટ વેબ સાઈટ</h4>
                    </div>
                    <div class="module-body">
                        <ul class="list-unstyled">
                            <li class="first"><a title="ગ્રામ ગૃહનિર્માણ અને ગ્રામ વિકાસ વિભાગ" href="https://panchayat.gujarat.gov.in/panchayatvibhag/" target="_blank">ગ્રામ ગૃહનિર્માણ અને ગ્રામ વિકાસ વિભાગ</a></li>
                            <li class="first"><a title="ભારતીય ડાક" href="https://www.indiapost.gov.in/">ભારતીય ડાક</a></li>
                            <li class="first"><a title="નર્મદા, જળ સંપત્તિ, પાણી પુરવઠા અને કલ્પસર વિભાગ" href="https://guj-nwrws.gujarat.gov.in/" target="_blank">નર્મદા, જળ સંપત્તિ, પાણી પુરવઠા અને કલ્પસર વિભાગ</a></li>
                            <li class="first"><a title="ગુજરાત ઊર્જા વિકાસ નિગમ લિમિટેડ" href="http://www.gseb.com/">ગુજરાત ઊર્જા વિકાસ નિગમ લિમિટેડ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="module-heading">
                        <h4 class="module-title" style="color:#898989;">ગવર્મેન્ટ વેબ સાઈટ</h4>
                    </div>
                    <div class="module-body">
                        <ul class="list-unstyled">
                            <li class="first"><a title="મતદાર કાર્ડ" href="https://ceo.gujarat.gov.in/" target="_blank">ઓનલાઈન મતદાર કાર્ડ</a></li>
                            <li class="first"><a title="આધાર કાર્ડ" href="https://ceo.gujarat.gov.in/" target="_blank">ઓનલાઈન આધાર કાર્ડ</a></li>
                            <li class="first"><a title="Any ROR" href="https://anyror.gujarat.gov.in/" target="_blank">Any ROR</a></li>
                            <li class="first"><a title="i-ખેડૂત" href="https://ikhedut.gujarat.gov.in/" target="_blank">i-ખેડૂત</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                     <div class="module-heading">
                        <h4 class="module-title" style="color:#898989;">તત્કાલીન સુવિધાના નંબર</h4>
                    </div>
                    <div class="module-body">
                        <ul class="list-unstyled">
                            <li class="first"><a href="javascript:void(0);" title="વિજાપુર તાલુકા પોલીસ સ્ટેશન" target="_blank">પોલીસ સ્ટેશન :  (02763) 270401</a></li>
                            <li class="first"><a href="javascript:void(0);" title="નગરપાલિકા ફાયર  સ્ટેશન" target="_blank">નગરપાલિકા Fire : (02763)270369</a></li>
                            <li class="first"><a href="javascript:void(0);" title="એ.પી.એમ.સી ફાયર સ્ટેશન" target="_blank">APMC Fire : (02763) 272751</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-12 no-padding">
                <div class="clearfix">
                    <p style="color:white; text-align:center;">ALL RIGHTS RESERVED BY AJARAPURA GRAM PANCHAYAT <sup style="color:white;">®</sup></a> <br/>  
					<script type="text/javascript" ></script></p>
                </div>
            </div>
        </div>
    </div>
</footer>

        <!-- Footer : END -->
    </form>
    

<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/echo.min.js"></script>
<script src="assets/js/jquery.easing-1.3.min.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script>
<script src="assets/js/jquery.rateit.min.js"></script>
<script type="text/javascript" src="assets/js/lightbox.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/scripts.js"></script>

</body>

<!-- Mirrored from www.jepurpanchayat.com/achievements.aspx by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 10:45:28 GMT -->
</html>
