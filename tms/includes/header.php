<?php if($_SESSION['login'])
{?>
	<div class="top-header bg-gradient-to-r from-blue-600 to-blue-800 text-white py-2">
	<div class="container">
		<ul class="tp-hd-lft flex items-center space-x-4">
			<li class="hover:text-blue-200 transition-colors"><a href="index.html" class="flex items-center"><i class="fa fa-home mr-1"></i> Home</a></li>
			<li class="hover:text-blue-200 transition-colors"><a href="profile.php">My Profile</a></li>
			<li class="hover:text-blue-200 transition-colors"><a href="change-password.php">Change Password</a></li>
			<li class="hover:text-blue-200 transition-colors"><a href="tour-history.php">My Tour History</a></li>
			<li class="hover:text-blue-200 transition-colors"><a href="issuetickets.php">Raised Tickets</a></li>
		</ul>
	<ul class="tp-hd-rgt flex items-center space-x-4"> 
			<li>Welcome :</li>				
			<li class="font-semibold"><?php echo htmlentities($_SESSION['login']);?></li> 
			<li><a href="logout.php" class="hover:text-blue-200 transition-colors">/ Logout</a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
</div><?php } else {?>
	<div class="top-header bg-gradient-to-r from-blue-600 to-blue-800 text-white py-2">
	<div class="container">
		<ul class="tp-hd-lft flex items-center space-x-4">
			<li class="hover:text-blue-200 transition-colors"><a href="index.php" class="flex items-center"><i class="fa fa-home mr-1"></i> Home</a></li>
			<li class="hover:text-blue-200 transition-colors"><a href="admin/index.php">Admin Login</a></li>
		</ul>
	<ul class="tp-hd-rgt flex items-center space-x-4"> 
			<li><i class="fa fa-phone mr-1"></i> Toll Number : 123-4568790</li>				
			<li><a href="#" data-toggle="modal" data-target="#myModal" class="hover:text-blue-200 transition-colors">Sign Up</a></li> 
			<li><a href="#" data-toggle="modal" data-target="#myModal4" class="hover:text-blue-200 transition-colors">/ Sign In</a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
</div>
	<!-- disable JS/CSS animations site-wide for minimal UI -->
	<script>
		// If jQuery is present, turn off jQuery animations
		if (window.jQuery) {
			jQuery.fx && (jQuery.fx.off = true);
		}
		// Respect reduced motion preference and force no animations
		try {
			var style = document.createElement('style');
			style.type = 'text/css';
			style.appendChild(document.createTextNode('@media (prefers-reduced-motion: no-preference){*{animation:none !important; transition:none !important;}}'));
			document.head.appendChild(style);
		} catch (e) { /* ignore */ }
	</script>
<?php }?>
<!--- /top-header ---->
<!--- header ---->
<div class="header bg-white shadow-md py-4">
	<div class="container">
	<div class="logo">
			<a href="index.php" class="text-3xl font-bold">
				<span class="text-blue-600">Tourism</span> 
				<span class="text-gray-600">Management System</span>
			</a>	
		</div>
	
	<div class="lock flex items-center"> 
			<li class="text-green-600"><i class="fa fa-lock mr-2"></i></li>
			<li><div class="securetxt text-green-600 font-semibold">SAFE &amp; SECURE</div></li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm bg-gray-50 shadow-inner">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav flex space-x-6">
							<li><a href="index.php" class="hover:text-blue-600 transition-colors">Home</a></li>
							<li><a href="page.php?type=about us" class="hover:text-blue-600 transition-colors">About</a></li>
								<li><a href="package-list.php" class="hover:text-blue-600 transition-colors">Tour Packages</a></li>
								<li><a href="page.php?type=privacy" class="hover:text-blue-600 transition-colors">Privacy Policy</a></li>
								<li><a href="page.php?type=terms" class="hover:text-blue-600 transition-colors">Terms of Use</a></li>
								<li><a href="page.php?type=contact" class="hover:text-blue-600 transition-colors">Contact Us</a></li>
								<?php if($_SESSION['login'])
{?>
								<li>Need Help?<a href="#" data-toggle="modal" data-target="#myModal3" class="hover:text-blue-600 transition-colors"> / Write Us </a></li>
								<?php } else { ?>
								<li><a href="enquiry.php" class="hover:text-blue-600 transition-colors"> Enquiry </a></li>
								<?php } ?>
								<div class="clearfix"></div>

						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>