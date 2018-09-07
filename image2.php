<?php
include ('php/connection.php');
$sql ="select * from post order by reg_date desc limit 2 offset 1";
$result =$conn->query($sql);

while($row= $result->fetch_assoc()){

       
		echo '<div class="col-md-6 w3ls-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					 <div class="tc-ch">';
					echo '<div class="tch-img">';
				echo '<a href="singlepage.php?id='.$row['Blog_id'].'"></a><img style="border: 1px solid #000;padding:5px;" src="image/'.$row['image'].'" class="img-responsive" alt="second image" width="300px" height="250px"></a>
						  </div>';
					
					echo '<h3><a href="singlepage.php?id='.$row['Blog_id'].'">'.$row['title'].'</a></h3>';
					echo '<h6>BY<a href="singlepage.php?id='.$row['Blog_id'].'">'.$row['author']. '</a>'.$row['reg_date'].'</h6>';

					//split the string into smaller part
				    $str=substr($row['text'],0,175);
					echo '<p>'.$str.'....</p>';
					echo '<div class="bht1">';
						echo '<a href="singlepage.php?id='.$row['Blog_id'].'">Read More</a>
							</div> ';
		echo '<div class="clearfix"></div></div></div>'; }
				
				
?>