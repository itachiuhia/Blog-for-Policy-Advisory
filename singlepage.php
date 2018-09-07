<!DOCTYPE HTML>
<html>
<head>
<title>Policy Advisory Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Harsh t@nG0 Gautam">
<meta name="keywords" content="Blog policy advisory pace group Blog new student advisory harsh gautam" />

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<script type="applijewelleryion/x-javascript"> addEventListener("load", function(){ setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //animation-effect -->
</head>
<body>

	<!--start-main-->
	<div class="header-bottom">
		<div class="container">
			<div class="logo">
				<h1><a href="index.php">POLICY ADVISORY BLOG</a></h1>
				<p><label class="of"></label>LET'S MAKE A PERFECT WORLD<label class="on"></label></p>
			</div>
		</div>
	</div>
<!-- banner -->

<div class="banner-1">

</div>

	<!-- technology-left -->
	<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="agileinfo">
     <!-- full Blog-PostDetails -->
			 <?php 
			    include ('php/connection.php');
 
                 if(isset($_GET['id'])){
	                $id=$_GET['id'];
	               
                     }else {
	                  echo $conn->error;
	                  $id=1;
                    }

             $sql="select * from post where Blog_id='$id'";
             $result = $conn->query($sql);
             if($result===false){
             	echo $conn->error;
             } 
             $row=$result->fetch_assoc();
             //'<h2 class="w3">Blog Post Information</h2>'
			 echo'<div class="single">';
			 echo '<img src="image/'.$row["image"].'" class="img-responsive" alt=" Blog Image" style="border: 1px solid #000;padding:5px;">';
			 echo '<div class="b-bottom"> 
			      <h5 class="top">'.$row["title"].'</h5>';
			      $b=$row['text'];
			      $text= html_entity_decode($b);


				echo '<p class="sub">'.$text.'</p>';
			    echo '<p>On'.$row["reg_date"].'</p>
				</div>
			 </div>';
			  ?> 
				
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- technology-right -->
	<div class="col-md-3 technology-right">
				<div class="blo-top1">
				<div class="tech-btm">
				 <h4> Popular Posts </h4>
                   <?php include ('recentpost.php'); ?>
					</div>
				</div>
		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
<!-- footer section-->
<?php
include ('footer1.php');
?>
<div class="copyright wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
<!--footer Section -->
	<?php include ('footer.php'); ?>
</div>
</body>
</html>