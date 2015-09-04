		<?php get_header(); ?>
		
		<div id="content">
							
	
			<div id="titulo-pagina">
				 <span><?php the_title();?></span>
			</div>
			<!--inicion content-pages-->
			 <div id="content-pages">
		 		<?php if (have_posts()):while (have_posts()):the_post();  // se houver post ele imprime a postagem relacionada?>
		 		<p> <?php the_content(); // busca o conteúdo do post ?></p>	
		 		<?php endwhile; else: ?>
		 		<?php endif;?>
			 </div>	
			<!--fim content-pages-->



		</div> <!-- fim da div content-->
				


    <?php get_footer(); ?>
</body>
</html>