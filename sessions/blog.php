<?php
// add includes
?>
<!doctype html>
<html>
<head>
<title>Login Demo with Sessions :: Blog</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1">
<title>Login Demo with Sessions</title>
<link href='//fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" media="only screen and (min-width:601px)"  href="css/desktop.css">
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Blog Page</a></h1>
			</div>
            
            
             <?php 
			/////////////////////////// conditional includes here		
			?>
            
           <nav>
				<ul>
					<li><a href="index.php">Homepage</a></li>
					<li class="current_page_item"><a href="blog.php">Blog</a></li>
					<li><a href="#">Photos</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div id="banner">
			<div class="content"><img src="images/orangeLights.jpg" alt="Orange Lights" class="bannerImg"></div>
		</div>
	</div>
	<!-- end #header -->
	
	<div id="page">
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">MEMBERS ONLY :: This Needs Securing</a></h2>
				<p class="meta"><span class="date">September 11, 2017</span><span class="posted">Posted by <a href="#">Someone</a></span></p>
				<div class="entry">
					<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.  Mauris quam enim, molestie in,  ut, lobortis a, est.</p>
					<p class="links"><a href="#" class="more">Read More</a><a href="#" title="b0x" class="comments">Comments</a></p>
				</div>
			</div>
			<div class="post">
				<h2 class="title"><a href="#">Lorem ipsum sed aliquam</a></h2>
				<p class="meta"><span class="date">September 09, 2017</span><span class="posted">Posted by <a href="#">Someone</a></span></p>
				<div class="entry">
					<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.  Mauris quam enim, molestie in,  ut, lobortis a, est.</p>
					<p class="links"><a href="#" class="more">Read More</a><a href="#" title="b0x" class="comments">Comments</a></p>
				</div>
			</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>Categories</h2>
					<ul>
						<li><a href="#">Aliquam libero</a></li>
						<li><a href="#">Consectetuer adipiscing elit</a></li>
						<li><a href="#">Metus aliquam pellentesque</a></li>
						<li><a href="#">Suspendisse iaculis mauris</a></li>
						<li><a href="#">Urnanet non molestie semper</a></li>
						<li><a href="#">Proin gravida orci porttitor</a></li>
					</ul>
				</li>
				<li>
					<h2>Blogroll</h2>
					<ul>
						<li><a href="#">Aliquam libero</a></li>
						<li><a href="#">Consectetuer adipiscing elit</a></li>
						<li><a href="#">Metus aliquam pellentesque</a></li>
						<li><a href="#">Suspendisse iaculis mauris</a></li>
						<li><a href="#">Urnanet non molestie semper</a></li>
						<li><a href="#">Proin gravida orci porttitor</a></li>
					</ul>
				</li>
				<li>
					<h2>Archives</h2>
					<ul>
						<li><a href="#">Aliquam libero</a></li>
						<li><a href="#">Consectetuer adipiscing elit</a></li>
						<li><a href="#">Metus aliquam pellentesque</a></li>
						<li><a href="#">Suspendisse iaculis mauris</a></li>
						<li><a href="#">Urnanet non molestie semper</a></li>
						<li><a href="#">Proin gravida orci porttitor</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
	</div>
	<!-- end #page --> 
</div>
<footer>
	<p>&copy;Copyright  2017 mustbebuilt.com</p>
</footer>
<!-- end #footer -->
</body>
<?php
include('includes/debugger.inc.php');
?>
</html>
