<!doctype html>
<html>
<head>
<title>Create Recipe</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
.header{
  background-color:yellow;
  padding:1em;
  text-align:center;
  font-size: larger;
}

.container{
	width:100%;
  }
  
.container .btn .btncontent{
   font-size:1.1em;
   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
   opacity:1; 
   color:rgb(26, 24, 24);
   padding:0.1em;
  }
.btn{
    margin:0.8em;

  }
.btn button{
    color:rgb(98, 107, 112);
    padding:0.05em;
    border:0 solid white;
    background-color: white; 
  }

.progressbar{
  counter-reset:step;
  padding:unset;
  margin-top:1.8em;
}

.progressbar li{
	list-style-type:none;
	float:left;
	position:relative;
	width:50%;
	text-align:center;
	}

.progressbar li:before{
	content:counter(step);
	counter-increment:step;
	width:1.6em;
	height:1.6em;
	line-height:1.66em;
	border:0.5px solid rgb(78, 81, 83);
	display:block;
	text-align:center;
	margin:0 auto 10px auto;
	border-radius:100%;
  background-color:white;
  color:grey;
  }
.progressbar li.pics:before{
  border:0.5px solid rgb(97, 187, 247);
  color:rgb(97, 187, 247);
}
.progressbar li.active:before{
  background-color: rgb(97, 187, 247);
  border:0px solid white;
  color:white;
}

.progressbar li:after{
	content:'';
	position:absolute;
	width:100%;
	height:0.02em;
	top:0.8em;
	left:-50%;
        z-index:-1;
        background-color:grey;
	}
.progressbar li.active:after{
        background-color: rgb(97, 187, 247);
}
.progressbar li:first-child:after{
	content:none;
  }
  
.material-icons{
	position: absolute;
   	top: 0.8em;
    	left: 0.4em;
	color: rgb(97, 187, 247);	
}

.container div ul li{
  line-height:0.2em;
 } 
 .container div ul li.active span{
  font-size:0.7em;
  color: rgb(97, 187, 247);
  
}
.container div ul li span{
  font-size:0.7em;
  font-weight:600;
  color: rgb(160, 158, 158);  
}

.container div ul li.pics span{
  font-size:0.7em;
  font-weight:600;
  color: rgb(97, 187, 247); 
}
.header{
  background-color:yellow;
  padding:1em;
  text-align:center;
  font-size: larger;
}

.container{
	width:100%;
  }
  
  .container .btn .btncontent{
   font-size:1.1em;
   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
   opacity:1; 
   color:rgb(26, 24, 24);
   padding:0.1em;
  }
 .btn{
    margin:0.8em;

  }
  .btn button{
    color:rgb(98, 107, 112);
    padding:0.05em;
    border:0 solid white;
    background-color: white;
   
  }


.progressbar{
  counter-reset:step;
  padding:unset;
  margin-top:1.8em;
}

.progressbar li{
	list-style-type:none;
	float:left;
	position:relative;
	width:50%;
	text-align:center;
	}

.progressbar li:before{
	content:counter(step);
	counter-increment:step;
	width:1.6em;
	height:1.6em;
	line-height:1.66em;
	border:0.5px solid rgb(78, 81, 83);
	display:block;
	text-align:center;
	margin:0 auto 10px auto;
	border-radius:100%;
  background-color:white;
  color:grey;
  }
.progressbar li.pics:before{
  border:0.5px solid rgb(97, 187, 247);
  color:rgb(97, 187, 247);
}
.progressbar li.active:before{
  background-color: rgb(97, 187, 247);
  border:0px solid white;
  color:white;
}

.progressbar li:after{
	content:'';
	position:absolute;
	width:100%;
	height:0.02em;
	top:0.8em;
	left:-50%;
  z-index:-1;
  background-color:grey;
	}
.progressbar li.active:after
{
  background-color: rgb(97, 187, 247);
}
.progressbar li:first-child:after{
	content:none;
  }
  


.container div ul li{
  line-height:0.2em;
 } 
 .container div ul li.active span{
  font-size:0.7em;
  color: rgb(97, 187, 247);
  
}
.container div ul li span{
  font-size:0.7em;
  font-weight:600;
  color: rgb(160, 158, 158);  
}

.container div ul li.pics span{
  font-size:0.7em;
  font-weight:600;
  color: rgb(97, 187, 247);
  
}

.step1{
 margin-top:3em;
 display:none;
}
.step1 input{
  border-width: 0 0 1px 0;
  width:87%;
  line-height:2em;
  font-size:0.8em;
  margin-left:4.5%;
  padding-left:2%;
}
.step1 textarea{
  border-width: 0 0 1px 0;
  width:87%;
  /*line-height:2em;*/
  font-size:1.2em;
  margin-left:4.5%;
  padding-left:2%;
  height:1.5em;
}
.step12 {
	display: grid; 
	grid-template-columns: auto auto auto;
	grid-template-rows:5.5em 5.5em 5.5em;
	grid-gap:0.5em;
}
label{
	display:none;
}
.image{
	display:none;
	opacity:0;
	z-index:-1;
}
/*#img1,#img2,#img3,#img4,#img5{
	opacity:0;
	z-index:-1;
}*/
.step12 > label div{
	text-align:center;
	vertical-align:middle;
	border:0.05em solid lightgray;
	color:lightgray;
	
}

</style>
</head>
<body>
<div class="container">
          <div class="btn">
		<button id="back" onclick="back()" class="btncontent" style="float:left" ><i class="material-icons" >arrow_back</i></button>
		<button id="formback" onclick="fback()" class="btncontent" style="float:left" ><i class="material-icons" >arrow_back</i></button>
		<span class="btncontent"> &nbsp;&nbsp;&nbsp;&nbsp;Add Recipe</span>
		<button id="next" class="btncontent" onclick="next();" style="float:right;color:rgb(97, 187, 247)">Next</button>
		<button id="post" type="submit" form="form" class="btncontent" name="upload" style="float:right;color:rgb(97, 187, 247)">Post</button>
          </div>
          
          <div>
            <ul class="progressbar">
              <li id="caption" class="pics"><span><b>Caption</b></span></li>
              <li id="media"  style="float:right" ><span>Media</span></li>
            </ul>
          </div>
          <br/><br/><br/>
</div>
         
<form id="form" action="post.php" method="post" enctype="multipart/form-data">
	<div class="step1">
		<span style="float:right;margin-right:2em;">/50</span><span id="count1" style="float:right"></span>
		<input id="title" type="text" name="title" placeholder="Recipe Title* ( 3-5 words)"   maxlength=50  required /><br/><br/><br/>
		<span style="float:right;margin-right:1.5em;">/250</span><span id="count2" style="float:right"></span>
		<textarea id="description" placeholder="Description " wrap="soft" maxlength=250 name="description" value="" ></textarea>
	</div>
	<div class="step1">
		<div class="step12">
			<label for="img1" style="display:block;"><div id="divImg1" ><br/><i class="material-icons" style="position:unset;color:lightGray;">add_photo_alternate</i></br>Photos*<br/>(max 5)</div></label>
			<input id="img1" class="image" type="file" name="img1" onchange="box(2)" ondblclick="boxclose(1)" required />
			<label for="img2"><div id="divImg2"><br/><i class="material-icons" style="position:unset;color:lightGray;">add_photo_alternate</i><br/>Add More +<br/><br/> </div></label>
			<input id="img2" class="image" type="file" name="img2"onchange="box(3)" ondblclick="boxclose(2)"  value=""/>
			<label for="img3"><div id="divImg3"><br/><i class="material-icons" style="position:unset;color:lightGray;">add_photo_alternate</i></br>Add More +<br/><br/></div></label>
			<input id="img3" class="image" type="file" name="img3" onchange="box(4) " ondblclick="boxclose(3)" value=""/>
			<label for="img4"><div id="divImg4"><br/><i class="material-icons" style="position:unset;color:lightGray;">add_photo_alternate</i></br>Add More +<br/><br/></div></label>
			<input id="img4" class="image" type="file" name="img4" onchange="box(5) " ondblclick="boxclose(4)"  value=""/>
			<label for="img5"><div id="divImg5"><br/><i class="material-icons" style="position:unset;color:lightGray;">add_photo_alternate</i></br>Add More +<br/><br/></div></label>
			<input id="img5" class="image" type="file" name="img5" value=""/>
		</div>
	</div>
	

</form>
<script>
//mutltistep form
function box(n){
var x= document.getElementsByTagName('label');
x[n-1].style.display='block';
}

function boxclose(n){
this.value="";
var x= document.getElementsByTagName('label');
x[n-1].style.display='none';
}


var tab=0;
show(tab);

function show(i){
	var x = document.getElementsByClassName("step1");
	var y = document.getElementById("next");
	var z = document.getElementById("post");
	var a = document.getElementById("back");
	var b = document.getElementById("formback");
	var c = document.getElementById("caption");
	var d = document.getElementById("media");

	x[i].style.display="block";

	if(i==0){
		y.style.display="block";
		z.style.display="none";
		x[1].style.display="none";
		b.style.display="none";
		a.style.display="block";
		c.classList.remove("pics");
		c.classList.add("active");
		d.classList.remove("active");
		}
	else{
		z.style.display="block";
		y.style.display="none";
		x[0].style.display="none";
		a.style.display="none";
		b.style.display="block";
		c.classList.remove("active");
		c.classList.add("pics");
		d.classList.add("active");
		}
	

	}
//to go next
var tit = document.getElementById("title");
tit.addEventListener("click", event);
function event(){
	this.placeholder="Recipe Title* ( 3-5 words)";
	this.style.color="rgb(118,118,118)";
	this.style.borderColor="rgb(118,118,118)";
	this.style.fontSize="0.8em";
	
	}

function next(){
	var title=document.getElementById("title");
	var x=title.value;

	if(title.value == ""){
		title.style.borderColor="red";
		title.placeholder=" * ADD RECIPE TITLE";
		title.style.color="red";
		}
	else{
		show(1);}
}
// to go back

function back(){
	window.location.replace("index.php");
}

function fback(){
	show(0);
}

//count words limit

var maxchar=0;

var i1 = document.getElementById("title");
var c1 = document.getElementById("count1");

var i2 = document.getElementById("description");
var c2 = document.getElementById("count2");

c1.innerHTML = maxchar;

c2.innerHTML = maxchar;
    
i1.addEventListener("keyup",function(){ count(51,i1,c1);},false);//count function calling

i2.addEventListener("keyup",function(){ count(251,i2,c2);},false);//count function calling

function count(maxchar,i,c) {
	var len =  i.value.length;
	if (len >= maxchar) {
		this.preventDefault();//this is inherit in addEventListener so no need of parameter
		} 
	else {
		c.innerHTML = len;    
		}
	}

//image_preview
/*function imagePreview(id,url) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		document.getElementById(id).innerHTML = this.responseText;
		
		}
	else{
		console.log(this.status);
		}
	};
	
	xhttp.open("POST", url, true);
	xhttp.send();
}*/
	

</script>

</body>
</html>
