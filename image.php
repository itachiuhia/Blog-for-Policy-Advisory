<?php
include ('php/connection.php');
 
 
 $sql ="select * from post order by reg_date desc limit 1";
 
 $result =$conn->query($sql);

 $row= $result->fetch_assoc(); 

 $id=$row['Blog_id'];

   
   echo '<div class="tc-ch wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<div class="tch-img">
					<a href="singlepage.php?id='.$id.'"></a><img src="image/'.$row['image'].'" class="img-responsive" alt="first image" style="border: 1px solid #000;padding:5px;"></a>
				</div>';
				echo '<h3><a href="singlepage.php?id='.$id.'">'.$row['title'].'</a></h3>';
				 echo '<h6>BY <a href="singlepage.php?id='.$id.'">'.$row['author'].'</a> on '.$row['reg_date'].'</h6>';
				 //split the string into smaller part
				 $str=substr($row['text'],0,475);
				echo '<p>'.$str.'.....</p>';
					echo '<div class="bht1">
			     <a href="singlepage.php?id='.$id.'">Continue Reading</a>
				</div>
				<div class="clearfix"></div>
			</div>';
		
?>	