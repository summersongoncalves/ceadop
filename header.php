<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
	<meta charset="<?php bloginfo('charset')?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('-',true,'right');bloginfo()?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css_galeria/gallery.prefixed.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css_galeria/gallery.theme.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css_galeria/normalize.css"/>
	<?php wp_head();?>
</head>
<body>

<div id="header">
			<div id="header_logo">
			   <a href="<?php bloginfo('home')?>"> <img src="<?php bloginfo('template_url')?>/img/logo.png" alt="CEADOP LOGO">	</a>
			</div>
			<p class="titulo">Centro Evangelístico da Assembléia de Deus de Olaria no Prado</p>
			
			<div id="header_menu">
				<ul>
					<li ><a href="<?php bloginfo('home')?>">Principal</a></li>
					<?php wp_list_pages('title_li=&exclude=36,33,31,41');?>
              </ul>
              <form action="" method="post">
	              <div id="header_search">
				    <input type="text" id="txtBusca" placeholder="Buscar..."/>
					<input type="submit" name="search" id="btnBusca" alt="Buscar" value="" />
				   </div>
			  </form>   
			</div><!--fecha header-menu-->
</div>