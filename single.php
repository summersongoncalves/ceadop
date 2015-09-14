<?php get_header(); /* ainda não utilizada
    <div class="container-fluid">
            <div id="artigos">
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="artigo">
            <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
            <p><?php the_content(); ?></p>
            </div>   
            <?php endwhile; else: ?>
            <?php wp_reset_query(); ?>
                <div class="artigo">
                    <h2>Nada Encontrado</h2>
                    <p>Erro 404</p>
                    <p>Lamentamos mas não foram encontrados artigos.</p>
                </div>            
            <?php endif; ?>             
        </div>
    </div>
<?php get_footer(); ?>
</body>
</html>*/
?>