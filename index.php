		<?php get_header(); ?>
		
			<div id="content">
				<div id="content_anuncio">
				  <div class="gallery autoplay items-3">
					    <div id="item-1" class="control-operator"></div>
					    <div id="item-2" class="control-operator"></div>
					  <!--  <div id="item-3" class="control-operator"></div>-->

					    <figure class="item">
					      <img src="<?php bloginfo('template_url')?>/img/estudo2.jpg" alt="Estudos bíblicos">
					    </figure>

					    <figure class="item">
					       <img src="<?php bloginfo('template_url')?>/img/cruz2.jpg" alt="Palavra pastoral">
					    </figure>
					<!--
				    <figure class="item">
				      <h1>Item 3</h1>
				    </figure>
 					-->
				    <div class="controls">
				      <a href="#item-1" class="control-button">•</a>
				      <a href="#item-2" class="control-button">•</a>
				    </div>
				   </div> <!-- fim gallery autoplay-->
				 </div><!-- fim da div content_anuncio-->

			<p class="titulo-destaques">Destaques</p>
			<div id="content_destaques">					
				<div id="item1">
					<a href="<?php the_Permalink();?>"><img src="<?php bloginfo('template_url')?>/img/pedido.jpg" alt="Pedido de oração"></a>
					<p class="descricao">Se você tem orado com um propósito específico, deixe aqui o teu pedido, pois iremos ajudar.
Juntos nós somos mais fortes!!!!
</p>
				</div>
				<div id="item2">
					<a href=""><img src="<?php bloginfo('template_url')?>/img/cruz.jpg" alt="Estudos bíblicos"></a>
					<p class="descricao">Seja abençoado através de estudos bíblicos. 
Que certamente irão te levar a um nível mais alto em Cristo!!
" Então conheçamos, e prossigamos em conhecer ao SENHOR..." Oséias 6:3.
</p>
				</div>
				<div id="item3">
					<a href=""><img src="<?php bloginfo('template_url')?>/img/visao.jpg" alt="Visão"></a>
					<p class="descricao">Conheça a visão que o Senhor deu ao CEADOP. Nossa missão na Terra e nosso alvo - Cristo Jesus!</p>
				</div>
			
			</div>	<!-- fim da div content-destaques-->				
		</div> <!-- fim da div content-->
				


    <?php get_footer(); ?>
</body>
</html>