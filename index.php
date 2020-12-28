<!DOCTYPE html >
<html>
<head>
<title>Chefaura</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Sacramento&display=swap" rel="stylesheet">
<link href="index_css.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
	$client = new MongoDBClient('mongodb+srv://ankit7890:Qwerty7890@cluster0.yj0oa.mongodb.net/chefaura?retryWrites=true&w=majority');
	$db = $client->chefaura;
	echo" db connect";
	?>
<div id="top">
	<div id="header">
	<center><img src="logo1.jpg"/></center>
	</div>

	<div id="bottom">
		<div id="innerbottom">
			<div id="circle">
				<div id="innercircle" style="z-index:10" >
					<i class="material-icons " style="z-index:10" onclick="form();">add_circle
					</i>
				</div>
			</div>
		</div>
	</div>	
	<div id="main">		
	</div>
</div>
<script>
function load(id,url) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		document.getElementById(id).innerHTML = this.responseText;
	}
	else {
		document.getElementById(id).innerHTML = "<div ><center>Loading...</center></div>";
		console.log(this.status);
		}
	};
	
	xhttp.open("POST", url, true);
	xhttp.send();
}

//var timer = setInterval(load,5000);
document.addEventListener("DOMContentLoaded", function(){
	load("main","main_content.php")
});

function form(){
	window.location.replace("form.php");
}
 function like(param){
  	
	 var x = window.getComputedStyle(param, null).getPropertyValue("color");
	 if(x=="rgb(220, 220, 220)"){
		param.style.color="rgb(191, 15, 24)";
	 }
	 else{
		 param.style.color="rgb(220, 220, 220)";
	 }

 }
/*var imageIndex=1;
function plusSlides(n) {
	 showImage(imageIndex += n);
}

showImage(imageIndex);
function showImage(n){
	var img = document.getElementsByClassName('image');
	for(i=0;i<img.length;i++){
		img[i].style.display='none';
	}
	img[n-1].style.display="block";
}*/


</script>
</body>
</html>

