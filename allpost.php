<?php
include ('php/connection.php');

$sql="select image,title,author,text,reg_date from post order by reg_date desc";
$result=$conn->query($sql);
 while($row=$result->fetch_assoc()){
          echo '<div class="blog-grids1">
				<div class="col-md-6">
					<div class="blog-grid-left1">';
				echo '<a href="singlepage.html"><img src='.$row["image"].' alt="blog image" class="img-responsive"></a>';
				echo '</div> </div>
					<div class="col-md-6">
					<div class="blog-grid-right1">
						<a href="singlepage.html">'.$row["title"].'</a>';
						echo '<h4>'.$row['reg_date'].'</h4>';
					echo '<p>'.$row['text'].'</p>';
					  echo '</div>
					<div class="clearfix"> </div>
					<div class="bht1">
						<a href="singlepage.html">Read More</a>
					</div> </div>
				<div class="clearfix"> </div>
			</div>';

 }
?>