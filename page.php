		<?php get_header(); 
		?>

		<div class="container-fluid">
		<div class="wrap-post col-md-10">		
			<div id="titulo-pagina">
				<img src="<?php bloginfo('template_url')?>/img/<?php the_title()?>.png"><h3><?php the_title();?></h3>
			</div>
			<!--inicion content-pages-->
			 <div id="content-pages">

		 		<?php 
		 			if (have_posts()):
		 			    while (have_posts()): // se houver post ele imprime a postagem relacionada?
		 				the_post();?>  

		 		<?php the_content(); // busca o conteúdo do post ?>
		 		
		 		<?php endwhile; ?>
		 		<?php else: ?>
		 		<?php endif;?>
			 </div>	
			</div>
		</div>
    <?php get_footer(); ?>
</body>
</html>