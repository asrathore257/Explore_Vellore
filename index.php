<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Vellore Tourism</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="style.css">

<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
    /* Dropdown Button */
.dropbtn {
  background-color:black;
  color:black;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: green;
  min-width: 160px;
  box-shadow: green;
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: green;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: black;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;background-color:green}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: green;}
</style>
<!--animate-->
<link href=\ rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<body>
    

    <?php if($_SESSION['login'])
    {?>
    <div class="top-header">
        <div class="container">
            <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
                <li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li class="prnt"><a href="profile.php">My Profile</a></li>
                    <li class="prnt"><a href="change-password.php">Change Password</a></li>
                <li class="prnt"><a href="tour-history.php">My Tour History</a></li>
                <li class="prnt"><a href="issuetickets.php">Issue Tickets</a></li>
            </ul>
            <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
                <li class="tol">Welcome :</li>				
                <li class="sig"><?php echo htmlentities($_SESSION['login']);?></li> 
                <li class="sigi"><a href="logout.php" >/ Logout</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div><?php } else {?>
    <div class="top-header">
        <div class="container">
            <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
                <li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
                    <li class="hm"><a href="admin/index.php">Manager login</a></li>
            </ul>
            <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
                <li class="tol"></li>				
                <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
                <li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Sign In</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php }?>
    <!--- /top-header ---->
    <!--- header ---->
    <div class="header">
        <div class="container">
            <div class="logo wow fadeInDown animated" data-wow-delay=".5s">
                <a href="index.php">Vellore <span>Tourism</span></a>	
            </div>
        
            <div class="lock fadeInDown animated" data-wow-delay=".5s"> 
                
                <li><div class="securetxt"> Welcome to Vellore </div></li>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--- /header ---->
    <!--- footer-btm ---->
    <div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
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
                            <ul class="nav navbar-nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="places.html">attractions</a></li>
                                    <li><a href="package-list.php">Packages</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li>
                                    <div class="dropdown">
                                    <a href="#">INFO </a>
                                    <div class="dropdown-content">
                                      <a href="page.php?type=aboutus">About us</a>
                                      <a href="page.php?type=terms">Terms & condition</a>
                                      <a href="page.php?type=privacy">privacy policY</a>
                                    </div>
                                  </div>
                                                          
                                </li>
                                    <li><a href="page.php?type=contact">Contact Us</a></li>
                                    <?php if($_SESSION['login'])
    {?>
                                    <li>Need Help?<a href="#" data-toggle="modal" data-target="#myModal3"> / Write Us </a>  </li>
                                    <?php } else { ?>
                                    <li><a href="enquiry.php"> MESSAGE-BOARD </a>  </li>
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
    

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>One’s destination is never a place</h3>
            <p>but a new way of seeing things</p>
            <a href="#" class="btn">discover more</a>
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="images/temple.mp4"></span>
            <span class="vid-btn" data-src="images/tr1.mp4"></span>
            <span class="vid-btn" data-src="images/tr2.mp4"></span>

        </div>

        <div class="video-container">
            <video src="images/temple.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>

    <!-- home section ends -->

    <!-- book section starts  -->


    <!-- packages section starts  -->

    <section class="packages" id="places">

    <section class="packages" id="packages">

        <h1 class="heading">
            <span>P</span>
            <span>A</span>
            <span>C</span>
            <span>K</span>
            <span>A</span>
            <span>G</span>
            <span>E</span>
            <span>S</span>

        </h1>

        <div class="container">
            <div class="holiday">
            
        
        
        
            
            <h3>Package List</h3>
        
                            
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
                        <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                            <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                            <h4>Package Name: <?php echo htmlentities($result->PackageName);?></h4>
                            <h6>Package Type : <?php echo htmlentities($result->PackageType);?></h6>
                            <p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
                            <p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
                        </div>
                        <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                            <h5>USD <?php echo htmlentities($result->PackagePrice);?></h5>
                            <a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
        
        <?php }} ?>
                    
                
        <div><a href="package-list.php" class="view">View More Packages</a></div>
        </div>
                    <div class="clearfix"></div>
            </div>
        
    </section>

    <!-- packages section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3> <a href="book.html">hotels</a></h3>
                <p>5star,4star in affordable price</p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3><a href="travel.html">car/bike rentals</a></h3>
                <p>cab,car,traveller,bike</p>
            </div>
        </div>

    </section>


   
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
<script src="script.js"></script>
<?php include('includes/signup.php');?>			
<!-- //signu -->
<?php include('includes/footer.php');?>
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>	

</body>

</html>