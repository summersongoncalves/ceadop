<!--footer-->
<div id="footer_all">
	<div id="footer-mid">
			
			<div id="footer_lista">
				<div id="footer-coluna1">
				<ul>					
					<?php wp_list_pages('title_li=&exclude=14,12,36,41,17');?>					
				</div>						
				 <div id="footer-coluna2">					
						<?php wp_list_pages('title_li=&exclude=14,19,36,31,33');?>										
				</div>
					
				<div id="footer-coluna3">					
					<?php wp_list_pages('title_li=&exclude=33,31,19,41,12,17');?>									
				</div>
					
				<div id="footer-coluna4">
					<?php wp_list_categories('title_li=&hide_empty=0');?>
				</div>	
					</ul>
			</div>
			
			<div id="footer_cadastro">			
				<form action="" method="post" accept-charset="utf-8">
					<label>Cadastre seu email e receba notícias e programações do CEADOP</label>
					<input type="text" name="cadastro_email" placeholder="Email..." id="cx-email">
					<input type="submit" value="enviar" id="bt-enviar" name="cadastrar"/>
				</form>
			</div>
			<div id="footer-logo">
				<a href="<?php bloginfo('home')?>"><img src="<?php bloginfo ('template_url')?>/img/logo.png" alt="CEADOP LOGO">	</a>
			</div>
			<div class="powered"> Powered by Summerson Gonçalves</div>
	</div> <!---fim footer mid-->
		<div id="footer_txt">
			<p>&copy2015. Centro Evangelístico da Assembléia de Deus de Olaria do Prado. Todos os direitos Reservados.</p>
			<address>Av. Nossa Senhora do Amparo - Prado - Conselheiro Paulino - Nova Friburgo - RJ	</address>
			
		</div> 
</div>

	
	<!---fim footer all -->
	<?php wp_footer() ;?>