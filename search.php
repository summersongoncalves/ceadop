<?php
/*
Template Name: Search Page
*/
?>
	<?php get_header(); 
 	 $idAntigo = 0;
 	 echo "id >> "; var_dump($post->ID);
 	 var_dump($idAntigo);

?>

<div class="container-fluid">
 <div class="wrap-post col-md-10">		
	<div id="titulo-pagina">
			<img src="<?php bloginfo('template_url')?>/img/search.png"><h3>Resultado</h3>
	</div>
		<!--inicion content-pages-->
		
		<?php if ( have_posts() ):?>	
		<div id="content-pages">		
			<?php while ( have_posts() ):the_post();?>	
			<?php if($post->ID==$idAntigo){}else{?>				
					<div class="postagem-search row">						
						<div class="titulo-post">					
							<a href="<?php the_Permalink();?>"> <?php the_title();?></a>							
						</div>
						<?php if(has_post_thumbnail()):?>
							<div class="post-thumb">
					   			<?php the_post_thumbnail();?>
							</div>
					 	<?php endif; // fim do if has_post_thumbnail?> 			
						<?php  if (has_excerpt() ) : ?>
							<div class="resumo-post">					
								<?php the_excerpt(); ?>	
							</div>							
						<?php endif; // fim do has_excerpt?>
						<a href="<?php the_Permalink();?>"><button type="button" class="btn btn-primary btn-sm">Continuar Lendo...</button></a>							
					</div> <!--fim da div postagem-search-->			
				<?php $idAntigo=$post->ID?>	
			<?php };?>
			<?php endwhile;?>


			<?php echo next_posts_link('Proxima pagina');?>    
			<?php echo previous_posts_link('Anterior');?>
			<?php else : ?>
	 				<h4>Não foi encontrado resultado</h4>
            		<p>Tente utilizando outra palavra-chave.</p>
			<?php endif; ?>
	

		  </div>	
	</div>	

</div>

		
	
<?php get_footer(); ?>
</body>
</html>