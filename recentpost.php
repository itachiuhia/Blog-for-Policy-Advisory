<?php
include ('php/connection.php');

$sql="select * from post order by reg_date desc limit 7";
$result=$conn->query($sql);

 while($row=$result->fetch_assoc())
{
	 $id= $row['Blog_id'];

	 	echo '<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
							<div class="blog-grid-left">';
						echo '<a href="singlepage.php?id='.$id.'"><img src="image/'.$row['image'].'" class="img-responsive" alt="blog image"></a>';
						echo '</div>
							<div class="blog-grid-right">
								<h5><a href="singlepage.php?id='.$id.'">'.$row['title'].'</a></h5>';
						echo '</div><div class="clearfix"> </div></div>' ;
}
?>