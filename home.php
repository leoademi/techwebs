<?php include_once "inc/header.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

	<script>
		
		var i = 0; 			// Fillimi
		var images = [];	// Iterimi mes imazheve 
		var time = 3500;	// Koha mes fotove
	 
		// Image List
		
		images[0] = 'images/homebgck3.png';
		images[1] = 'images/servicebackground.png';
		images[2] = 'images/homebgck4.png';
		//images[3] = 'images/';
		
		
		// Change Image
		function changeImg(){
		document.slide.src = images[i];

	
	if(i < images.length - 1){
	  
	  i++; 
	} else { 
		
		i = 0;
	}

		// Run function every x seconds
		setTimeout("changeImg()", time);
}

		// Run function when page loads
		window.onload=changeImg;
		
	</script>
</head>
<body>
<header>
		<div class="container">
			<div id="emri">
				<img src="images/techwebslogo1.png-removebg-preview.png">
			</div>
</header>
    	<section id="foto">
			<div class="fotoo">
				<div class="img"><img name="slide"/>
				</div>
			
			</div>
		</section>

	<div class="partneret">
			<h1>Partneret</h1>
		<div class="pr">

			<div class="pa">							
				<img src="images/amazon.png" width="80">
				<h4>Amazon</h4>
 			</div>

			<div class="pa">
	  			<img src="images/google.png" width="80" >
	  			<h4>Google</h4>
   			</div>

	   		<div class="pa">
		 		<img src="images/dell.png" width="80">
		 		<h4>Dell</h4>
	   		 </div>

	    	<div class="pa">
		 		<img src="images/hp.png" width="80">
		 		<h4>Hp</h4>
	    	</div>
			
  		
		</div>
	</div>
		<div class="aboutus">
			<h1> Qfare thone te tjeret per ne</h1>
			<div class="as">

				<div class="aa">
					<h3> Personi i pare</h3>
					<img src="images/aboutusperson1.png" width="200">
					<p> Teksti i personit ne fjale</p>
				</div>
				<div class="aa">
					<h3> Personi i dyte</h3>
					<img src="images/aboutusperson1.png" width="200">
					<p> Teksti i personit ne fjale</p>
				</div>
				<div class="aa">
					<h3> Personi i trete</h3>
					<img src="images/aboutusperson1.png" width="200">
					<p> Teksti i personit ne fjale</p>
				</div>
			</div>
		</div>

		<div class="services">
			<h1>Rreth pakove dhe trajnereve:</h1>
				<span class="border"></span>

		<div class="sv">
			<a href="#ss"><img src="images/aboutusperson1.png" width="200" ></a>
			<a href="#ss1"><img src="images/aboutusperson2.png" width="200"></a>
			<a href="#ss2"><img src="images/aboutusperson1.png" width="200"></a>
		</div>

		<div class="section" id="ss">
			<span class="name">Pako 1 - Leonard Ademi</span>
			<span class="border"></span>
		
			<ul>
				<li>Html</li>
				<li>Css</li>
				<li>Java</li>
				<li>WordPress</li>
			</ul>

			<a href="services.html">Read more &gt;&gt;</a>
		</div>

		<div class="section" id="ss1">
			<span class="name">Pako 2 - Elsa Topalli</span>
			<span class="border"></span>
		
			<ul>
				<li>Html</li>
				<li>Css</li>
				<li>Javascript</li>
			
			</ul>

			<a href="services.html">Read more &gt;&gt;</a>

		</div>

		<div class="section" id="ss2">
			<span class="name">Pako 3</span>
			<span class="border"></span>
		
			<ul>
				<li>Angular</li>
				<li>ReactJS</li>
				<li>Python</li>
			</ul>

			<a href="services.html">Read more &gt;&gt;</a>
		</div>
	</div>
	

	
	<div id="footer">
		<h4>Follow us</h4>
		<p>Mos harroni të na ndiqni përmes profileve të mediave tona sociale dhe vazhdoni me lajmet tona të fundit.</p>
		<div class="imgimg">
			<div class ="image">
				<a href="https://www.facebook.com/" target="_blank"><img src="https://img.icons8.com/color/48/000000/facebook.png"/> </a>
			</div>

			<div class="image">
				<a href="https://www.instagram.com/"target="_blank"><img src="https://img.icons8.com/color/48/000000/instagram-new.png"/></a>
			</div>

			<div class="image">
				<a href="https://www.twitter.com/"target="_blank"><img src="images/twitter.png"></a>
			</div>

		</div>

		<p class="paragraf">techwebs &copy;2021</p>

	</div>

</body>
</html>