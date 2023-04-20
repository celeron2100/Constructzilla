<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="" />
	<meta property="og:title" content="Constructzilla - Construction Template"/>
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="../resources/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Constructzilla - Construction Template</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="../resources/css/plugins.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/style.min.css">
	<link class="skin" rel="stylesheet" type="text/css" href="../resources/css/skin/skin-1.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/templete.min.css">
	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="../resources/plugins/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="../resources/plugins/revolution/css/navigation.css">
	<!-- Revolution Navigation Style -->
	
</head>
<body id="bg"><div id="loading-area"></div>
<div class="page-wrapers">
    <!-- Content -->
    <div class="page-content dez-login bg-secondry">
		<div class="top-head text-center logo-header">
			<a href="index.html">
				<img src="../resources/images/logo.png" alt=""/>
			</a>
		</div>
        <div class="login-form">
			<div class="tab-content nav">
                <div id="login" class="tab-pane active text-center">
                    <form class="p-a30 dez-form" method="POST" action="{{ route('loginAccount') }}">
                        @csrf
                        <h3 class="form-title m-t0">Sign In</h3>
                        <div class="dez-separator-outer m-b5">
                            <div class="dez-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your e-mail address and your password. </p>
                        <div class="form-group">
                            <input name="name" required="" class="form-control" placeholder="User Name" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="password" required="" class="form-control " placeholder="Type Password" type="password"/>
                        </div>
                        @if(isset($err))
                            <div style="color:red;">{{ $err }}</div>
                        @endif
						<div class="form-group text-left">
                            <button class="site-button m-r5 dz-xs-flex">login</button>
                            <label>
                            <input id="check1" type="checkbox">
							<label for="check1">Remember me</label>
                            </label>
                            <a data-toggle="tab" href="#forgot-password" class="m-l10"><i class="fa fa-unlock-alt"></i> Forgot Password</a>
						</div>
						<div class="dz-social clearfix">
							<h5 class="form-title m-t5 pull-left">Sign In With</h5>
							<ul class="dez-social-icon dez-border pull-right dez-social-icon-lg text-white">
								<li><a class="fa fa-facebook  fb-btn" href="javascript:;" target="bank"></a></li>
								<li><a class="fa fa-twitter  tw-btn" href="javascript:;" target="bank"></a></li>
								<li><a class="fa fa-linkedin link-btn" href="javascript:;" target="bank"></a></li>
								<li><a class="fa fa-google-plus  gplus-btn" href="javascript:;" target="bank"></a></li>
							</ul>
						</div>
                    </form>
                    <div class="bg-primary p-a15 bottom">
						<a data-toggle="tab" href="#developement-1" class="text-white">Create an account</a>
					</div>
                </div>
                <div id="forgot-password" class="tab-pane fade">
                    <form class="p-a30 dez-form text-center">
                        <h3 class="form-title m-t0">Forget Password ?</h3>
                        <div class="dez-separator-outer m-b5">
                            <div class="dez-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your e-mail address below to reset your password. </p>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Email Id" type="text"/>
                        </div>
                        <div class="form-group text-left"> <a class="site-button outline gray" data-toggle="tab" href="#login">Back</a>
                            <button class="site-button pull-right">Submit</button>
                        </div>
                    </form>
                </div>
                <div id="developement-1" class="tab-pane fade">
                    <form class="p-a30 dez-form text-center text-center">
                        <h3 class="form-title m-t0">Sign Up</h3>
                        <div class="dez-separator-outer m-b5">
                            <div class="dez-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your personal details below: </p>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Full Name" type="text"/>
                        </div>
						<div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="User Name" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Email Id" type="text"/>
                        </div>
                        
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Password" type="password"/>
                        </div>
                        <div class="">
                            <input name="dzName" required="" class="form-control" placeholder="Re-type Your Password" type="password"/>
                        </div>
                        <div class="m-b30">
							<input id="check2" type="checkbox"/>
							<label for="check2">I agree to the <a href="#">Terms of Service </a>& <a href="#">Privacy Policy</a> </label>
                        </div>
                        <div class="form-group text-left "> 
							<a class="site-button outline gray" data-toggle="tab" href="#login">Back</a>
                            <button class="site-button pull-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
		<div class="bottom-footer text-center text-white">
			<p>2020 © DexignZone - HTML Template. </p>
		</div>
	</div>
    <!-- Content END-->
</div>
<!-- JavaScript  files ========================================= -->
<script src="../resources/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="../resources/plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="../resources/plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="../resources/plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="../resources/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="../resources/plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="../resources/plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="../resources/plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="../resources/plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="../resources/plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="../resources/plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="../resources/plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="../resources/js/custom.min.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="../resources/js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->
<script src="../resources/js/dz.ajax.js"></script><!-- CONTACT JS  -->


</body>
</html>
