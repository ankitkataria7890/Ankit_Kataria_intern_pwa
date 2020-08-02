<?php 
include 'database.php' ;
echo '<script> 
		console.log("connected to server");
	</script>';
$content="SELECT * FROM chefaura ORDER BY id DESC LIMIT 50";
$content_q=mysqli_query($con,$content);
$content_r=mysqli_num_rows($content_q);

while($row=mysqli_fetch_array($content_q)){
	
	echo '<div class="title"><p>'.ucwords($row['title']).'</p></div>';
	echo '<div class="image">';
	if($row['img1']!=""){
		echo "<img src='".$row['img1']."' alt='loading..'>";
		//echo'<a class="carousel-item" href="#one!"><img src="'.$row["img1"].'"></a>';
	}
	if($row['img2']!=""){
		echo "<img src='".$row['img2']."' >";
		//echo'<a class="carousel-item" href="#one!"><img src="'.$row["img2"].'"></a>';
	}
	if($row['img3']!=""){
		echo "<img src='".$row['img3']."' >";
		//echo'<a class="carousel-item" href="#one!"><img src="'.$row["img3"].'"></a>';
	}
	if($row['img4']!=""){
		echo "<img src='".$row['img4']."' >";
		//echo'<a class="carousel-item" href="#one!"><img src="'.$row["img4"].'"></a>';
	}
	if($row['img5']!=""){
		echo "<img src='".$row['img5']."'>";
		//echo'<a class="carousel-item" href="#one!"><img src="'.$row["img5"].'"></a>';
	}
	//echo '<a class="prev" onclick="plusSlides(this)">&#10094;</a>';
	//echo '<a class="next" onclick="plusSlides(this)">&#10095;</a>';
 	echo '</div>';
	echo '<div><button id="like" onclick="like(this);" ><i class="material-icons" style="font-size:2.3em;">favorite</i></button>'.' '.$row['like'].'</div>';
	if($row['description']){
	echo '<div class="description"><p>'.$row['description'].'</p></div>';}	
}
	echo '<script> function like(this){
  				this.style.color = "red";}
				</script>';
				
?>
