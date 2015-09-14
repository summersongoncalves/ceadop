<?php get_header(); ?>

	<div class="container-fluid">
		<div class="content-category">
			<h3 class="titulo-categoria"><?php  single_cat_title(' ',true); ?></h3>
				<?php if ( have_posts() ) : ?>
					<?php if ( category_description() ) : // Show an optional category description ?>
						 <div class="archive-meta"><?php echo category_description(); ?></div>
					<?php endif; ?>
					<?php /* The loop */ ?>

					<?php while ( have_posts() ) :the_post();?>
					<div class="titulo-post"><?php the_title();?></div>
					<div class="postagem"><?php the_content(); ?></div>
					<?php endwhile; ?>
					      
  						<?php echo next_posts_link('Recentes')?>    
  						<?php echo previous_posts_link('Anterior')?>
					<?php else : ?>
			 				<h4>Ainda não há posts nesta categoria</h4>
                    		<p>Erro 404 </p>
                    		<p>Lamentamos esta categoria ainda não possui artigos.</p>
					<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
</body>
</html>