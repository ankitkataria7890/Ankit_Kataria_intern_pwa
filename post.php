<?php
if(isset($_POST['upload'])){
$host='localhost';
$dbuser='root';
$dbpassword='';
$dbname='image';
$con=mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if(!$con){
die("not connected");
}

$title=$_POST['title'];
$desc=$_POST['description'];

include  'image.php';

$img1 = image('img1');
$img2 = image('img2');
$img3 = image('img3');
$img4 = image('img4');
$img5 = image('img5');

$sql = "INSERT INTO img (title,description,img1,img2,img3,img4,img5) VALUES ('$title','$desc','$img1','$img2','$img3','$img4','$img5')"; 
$abc=mysqli_query($con,$sql);
if($abc){
	echo " <script>
	alert('Recipe posted successfully !');
	window.location.replace('index.php');
	</script>";
}
}

?>