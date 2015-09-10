		<?php get_header(); ?>						
		<div class="container-fluid">
			<div id="titulo-pagina">
				 <h3><?php the_title();?></h3>
			</div>
			<!--inicion content-pages-->
			 <div id="content-pages">
		 		<?php if (have_posts()):while (have_posts()):the_post();  // se houver post ele imprime a postagem relacionada?>
		 		<p> <?php the_content(); // busca o conteúdo do post ?></p>	
		 		<?php endwhile; else: ?>
		 		<?php endif;?>
			 </div>	
		</div>
    <?php get_footer(); ?>
</body>
</html>