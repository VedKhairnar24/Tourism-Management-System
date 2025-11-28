<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Tourism Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- animations removed for minimal UI -->
</head>
<body>
<?php include('includes/header.php');?>
<div class="banner">
	<div class="container">
		<div class="banner-text">
			<h1>Discover Your Dream Destination</h1>
			<p>Discover breathtaking destinations like Santorini’s sunsets, Iguazú Falls’ misty cascades, or Cappadocia’s fairy-tale landscapes with our tailored travel packages. Designed for luxury and adventure, each itinerary offers exclusive experiences, from private boat tours to guided treks, ensuring unforgettable memories. Let us handle every detail for a seamless, sustainable journey to the planet’s most stunning locales.</p>
			<a href="package-list.php" class="btn btn-primary btn-lg">Explore Packages</a>
		</div>
	</div>
</div>

<!-- Featured Destinations -->
<div class="featured-destinations">
	<div class="container">
	<h2 class="text-center">Featured Destinations</h2>
		<div class="row">
			<div class="col-md-4">
				<div class="destination-card">
					<img src="images/h1.jpg" alt="Beach Paradise" class="img-responsive">
					<div class="destination-info">
						<h3>Beach Paradise</h3>
						<p>Experience the perfect blend of sun, sand, and sea</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="destination-card">
					<img src="images/h2.jpg" alt="Mountain Adventure" class="img-responsive">
					<div class="destination-info">
						<h3>Mountain Adventure</h3>
						<p>Discover breathtaking views and thrilling experiences</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="destination-card">
					<img src="images/h3.jpg" alt="Cultural Heritage" class="img-responsive">
					<div class="destination-info">
						<h3>Cultural Heritage</h3>
						<p>Immerse yourself in rich traditions and history</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!---holiday---->
<div class="container">
	<div class="holiday">
	<h3 class="text-center">Popular Tour Packages</h3>
		<div class="row">
<?php $sql = "SELECT * from tbltourpackages order by rand() limit 4";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm">
				<div class="col-md-3 room-left">
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle">
					<h4>Package Name: <?php echo htmlentities($result->PackageName);?></h4>
					<h6>Package Type : <?php echo htmlentities($result->PackageType);?></h6>
					<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
				</div>
				<div class="col-md-3 room-right">
					<h5>₹ <?php echo htmlentities($result->PackagePrice);?></h5>
					<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
			</div>

<?php }} ?>
			
		
<div><a href="package-list.php" class="view">View More Packages</a></div>
</div>
			<div class="clearfix"></div>
	</div>



<!--- routes ---->
<div class="routes">
	<div class="container">
		<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="glyphicon glyphicon-list-alt"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>80000</h3>
				<p>Enquiries</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="fa fa-user"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>1900</h3>
				<p>Registered users</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="fa fa-ticket"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>7,00,00,000+</h3>
				<p>Booking</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>