<?php
include ('php/connection.php');

$start=0;
$limit=10;

$sql= "select * from post";
$result=$conn->query($sql);

$total=$result->num_rows;

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$start=($id-1)*$limit;
}else {
	$id=1;
}
$page=ceil($total/$limit);

$sql2="select * from post limit ".$start.",".$limit."";
$query=$conn->query($sql2);

?>

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
<!--	<div class="header-bottom">
		<div class="container">
			<div class="logo wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<h1><a href="index.php">POLICY ADVISORY BLOG</a></h1>
				 <p><label class="of"></label>LET'S MAKE A PERFECT WORLD<label class="on"></label></p> 
			</div>
		</div>
	</div> -->
<!-- banner -->

<div class="banner-1">
	<div class="container">
			<div class="logo wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<h1><a href="index.php" style="color:#f2f2f2;font-size:60px;">POLICY ADVISORY BLOG</a></h1>
			</div>
		</div>
	
</div>
  <!-- technology-left -->
	<div class="technology">
	  <div class="container">
		<div class="col-md-9 technology-left">
			<div class="blog">  
		
			<h2 class="w3">All Recent Post</h2>
			<?php
         while($row=$query->fetch_assoc()){

 	         echo '<div class="blog-grids1">
				    <div class="col-md-6">
					<div class="blog-grid-left1">';
				echo '<a href="singlepage.php?id='.$row['Blog_id'].'"><img style="border: 1px solid #000;padding:5px;" src="image/'.$row['image'].'" alt="blog image" class="img-responsive"></a>';
				echo '</div> </div>
					<div class="col-md-6">
					<div class="blog-grid-right1">
						<a href="singlepage.php?id='.$row['Blog_id'].'">'.$row["title"].'</a>';
						echo '<h4>'.$row['reg_date'].'</h4>';

						 $str=substr($row['text'],0,130);
					echo '<p>'.$str.'....</p>';
					  echo '</div>
					<div class="clearfix"> </div>
					<div class="bht1">
						<a href="singlepage.php?id='.$row['Blog_id'].'">Read More</a>
					</div> </div>
				<div class="clearfix"> </div>
			</div>'; }
?>
			
			<nav class="paging">
				<ul class="pagination pagination-lg">
					<?php  if($id > 1) { ?> 
					<li><a href="?id=<?php echo ($id-1); ?>">Previous</a></li> <?php }?>
				    <?php 
				    for($i=1;$i<=$page;$i++){ ?>
					<li><a href="?id=<?php echo $i ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					<?php  if($id!=$page) {?>
					<li><a href="?id=<?php echo ($id+1); ?>">Next</a></li>
					<?php } ?>
					
				</ul>
			</nav>
		
	        </div>
		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right">
				<div class="blo-top1">
				<div class="tech-btm">
				 <h4>Popular Posts </h4>
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
	<?php 
	include ('footer.php'); 
    $conn->close();      
	?>
    
</div>
</body>
</html>