<?php
session_start();
  if ($_SESSION['signed_in']) {
  echo "<script>alert(welcome ".$_SESSION['username'].")</script>";
}
else{
  header("Location: Login.php");
}
include('php/connection.php');

if(isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])){
$id=$_REQUEST['id'];
$sql= "delete from post where Blog_id='$id'";
if($result=$conn->query($sql)){
  header("Location: editpost.php");
  echo '<script>alert("Blog Post has been deleted")</script>';
  
}

}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Policy Advisory Blog</title>
<link rel="icon" href="http://know.policyadvisory.in/images/policy.png" type="image">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Harsh t@nG0 Gautam">
<meta name="keywords" content="Blog policy advisory pace group Blog new student advisory harsh gautam" />

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Fontawesome Icon font -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<link href="css/blogpost.css" rel="stylesheet">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<script type="applijewelleryion/x-javascript"> addEventListener("load", function(){ setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<style>
/* Dropdown Button */
.dropbtn {
  
    background-color: #00d0f5;
    border-radius: 40px;
   border: none;
   padding: 10px;
    cursor: pointer;
}

/* Dropdown menu */
.dropbtn:hover, .dropbtn:focus {
    background-color: #00f0f5;
}
.dropdown {
   position: fixed;
  top: 6px;
  left:10px;
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: rgba(0,0,0,0);
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content a {
    color: #00d0f5;
    padding: 3px 3px;
    text-decoration: none;
    display: block;
    border: none;
    text-align: left;
    border-radius: 3px;
}
.dropdown-content a:hover {background-color: #000}
.show {display:block;}
</style>

</head>
<body>


    <!--start-main-->
	<div class="header-bottom">
		<div class="container">
			<div class="logo wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<h1><a href="index.php">POLICY ADVISORY BLOG</a></h1>
				 <p><label class="of"></label>LET'S MAKE A PERFECT WORLD<label class="on"></label></p> 
			</div>
		</div>
	</div>

<div class="dropdown">
 <!--<button onclick="myFunction()" class="dropbtn">Dropdown</button> -->
 <img src="images/menu.png" onclick="myFunction()" class="dropbtn">
  <div id="myDropdown" class="dropdown-content">
    <a href="upload.php">Upload post</a>
    <a href="adminpanel.php">Admin Panel</a>
    <a href="logout.php">Log Out</a>
  </div>
</div>


<div class="container">
  
  
  <div id="table" class="table-editable">
   <form method="post">
    <table class="table">
      <tr>
      	<th>Blog_id</th>
      	<th>Image</th>
        <th>Title</th>
        <th>Author</th>
        <th>Reg_date</th>
        <th>Text</th>
        <th>Action</th>
      </tr>
      <tr>
     <?php 
        include('php/connection.php');
          $query="select * from post";
        $result=$conn->query($query);
       while($row=$result->fetch_assoc())
       {

       echo '<td><input type="text" name="blog_no" value="'.$row['Blog_id'].'" /></td>
       <td><input type="file" name="image" value="<img src="image/'.$row['image'].'" class="img-responsive" alt="first image" style="border: 1px solid #000;padding:2px; width:120px; height:60px">" /></td>
      <td contenteditable="true"> <input type="text" name="title" value="'.$row['title'].'" /></td>
      <td contenteditable="true"> <input type="text" name="author" value="'.$row['author'].'" /></td>
        <td>'.$row['reg_date'].'</td>
      <td contenteditable="true"> <input type="text" name="fulltext" value="<div class="comment">'.$row['text'].'</div>" /></td>
      <td><input type="submit" name="delete" value="<span class="table-remove glyphicon glyphicon-remove"></span>/></td>
      <input type="submit" name="update" value="Update" />
        </td>

      </tr>'; 
}
       ?>
      <!-- This is our clonable table line -->
      
    </table>
  </form>
  </div>
  <p id="export"></p>
</div>


<div class="copyright wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
<!--footer Section -->
	<?php include ('footer.php'); ?>
</div>
<!--Jquery plugins for show more text -->
<script type="text/javascript" src="http://viralpatel.net/blogs/demo/jquery/jquery.shorten.1.0.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
  
    $(".comment").shorten();
    
  
  });

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<script type="JavaScript" src="js/blog.js"></script>

</body>
</html>