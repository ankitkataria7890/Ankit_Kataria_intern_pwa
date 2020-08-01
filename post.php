<?php
if(isset($_POST['upload'])){
include 'database.php';
$title=$_POST['title'];
$desc=$_POST['description'];

include  'image.php';

$img1 = image('img1');
$img2 = image('img2');
$img3 = image('img3');
$img4 = image('img4');
$img5 = image('img5');

$sql = "INSERT INTO chefaura (title,description,img1,img2,img3,img4,img5) VALUES ('$title','$desc','$img1','$img2','$img3','$img4','$img5')"; 
$abc=mysqli_query($con,$sql);
if($abc){
	echo " <script>
	alert('Recipe posted successfully !');
	window.location.replace('index.php');
	</script>";
}
}

?>
