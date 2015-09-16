<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
	<meta charset="<?php bloginfo('charset')?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php wp_title('-',true,'right');bloginfo()?></title>	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/style.css"/> 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css_galeria/gallery.prefixed.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css_galeria/gallery.theme.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css_galeria/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/bootstrap/css/bootstrap.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<?php wp_head();?>
</head>
<body>
<div class="container-fluid">	
	<div id="header_logo">
	   <a href="<?php bloginfo('home')?>"> <img class="logo-ceadop" src="<?php bloginfo('template_url')?>/img/logobw.png" alt="CEADOP LOGO">	</a>
	</div>
	<h2 class="titulo">Centro Evangelístico da Assembléia de Deus de Olaria no Prado</h2>
	<nav class="navbar navbar-default"> <!-- barra nevegação-->
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="main-navbar">
					<ul class="nav navbar-nav">
					<li ><a href="<?php bloginfo('home')?>">Principal</a></li>
					<?php wp_list_pages('title_li=&exclude=36,33,31,41');?>
         		 </ul>
	            <?php get_search_form()?>
           </div>
       </div>
     </nav> <!--fim barra naveração-->
</div>