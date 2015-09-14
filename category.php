<?php get_header();
$nicename = get_the_category()[0]->category_nicename; 
?>

	<div class="container-fluid categorias-fluid">
		<div class="content-category">
		 <div class="col-md-9 wrap-post">
		    <div class="wrap-titulo">
			   <img src="<?php bloginfo('template_url')?>/img/<?php getIconePost($nicename)?>"><h3 class="titulo-categoria"><?php  single_cat_title(' ',true); ?></h3>
			</div>
				<?php if ( have_posts() ) : ?>
					<?php if ( category_description() ) : // Show an optional category description ?>
						 <div class="archive-meta"><?php echo category_description(); ?></div>
					<?php endif; ?>
					<?php /* The loop */ ?>

					<?php while ( have_posts() ) :the_post();?>
					<div class="titulo-post"><?php the_title();?></div>
					<hr>
					<div class="row">
					<div class="col-md-10 postagem"><?php the_content(); ?></div>
					</div>
					<hr>
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
</div>

<?php get_footer(); ?>
</body>
</html>