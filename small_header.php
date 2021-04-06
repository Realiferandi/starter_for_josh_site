<!doctype html>
<html>
<head>
<meta charset="<?php bloginfo('charset'); ?>">


	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	
	<meta name="description" content="<?php bloginfo('description'); ?>">


<!—Viewport responsive  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">		
	
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK -->
    <!—Google fonts  --><link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
      <link rel="stylesheet" href="style.css"/>
      <link rel="stylesheet" href="responsive.css" />
    
    <!-- CSS:  --><?php wp_head(); ?> 

    </head>

<body>
   
    <header class="container-fluid small_herobg">
		 <nav class="navbar ">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                <a class="navbar-brand" href="#">JOSH <span class="orange">WHITKIN</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">HOME</a></li>
                    <li><a href="#">PROJECTS</a></li>
                    <li><a href="#">PUBLICATIONS</a></li>
                    <li><a href="#">CV</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>

            </div>
        </div>
    </nav>
        <div class="container">
        </div>
    </header>
