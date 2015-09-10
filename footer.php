<!--footer-->
<div class="footer">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="col-md-3">
				<ul>	
					<?php wp_list_pages('title_li=&exclude=14,12,36,41,17');?>
				</ul>
			</div>		
			<div class="col-md-3">					
				<ul>	
					<?php wp_list_pages('title_li=&exclude=14,19,36,31,33');?>

				</ul>
			</div>
			<div class="col-md-3">
				<ul>
					<?php wp_list_pages('title_li=&exclude=33,31,19,41,12,17');?>
				</ul>									
			</div>
			<div class="col-md-3">
				<ul>
					<?php wp_list_categories('title_li=&hide_empty=0');?>
				</ul>
			</div>	
		</div>
		<div class="row-fluid">
			<div class="col-md-11">
				<form  class="form-group form-inline" action="" method="post" accept-charset="utf-8">
					<label class="cadastro-label">Cadastre seu email e receba notícias e programações do CEADOP</label>
					<input type="email" class= "form-control" name="cadastro_email" placeholder="Email..." id="cx-email">
					<input type="submit" class="btn btn-default"value="enviar" id="bt-enviar" name="cadastrar"/>
				</form>					
			</div>
			<div class="col-md-1 pull-right">
				<a href="<?php bloginfo('home')?>"><img class="logo-ceadop" src="<?php bloginfo ('template_url')?>/img/logobw.png" alt="CEADOP LOGO" heigh="70px" width="70px" style="padding-bottom:10px"></a>
			</div>
		</div>		
		
		<div class="footer-2">
			<address>&copy;2015.Centro Evangelístico da Assembléia de Deus de Olaria do Prado. Todos os direitos Reservados.Av. Nossa Senhora do Amparo - Prado - Conselheiro Paulino - Nova Friburgo - RJ	</address>			 
		</div>		 	
	</div>
	<span class="powered">Powered by Summerson Gonçalves</span>   
</div>
<script src="<?php bloginfo('template_url')?>/bootstrap/js/bootstrap.min.js ?> "type="text/javascript" charset="utf-8" async defer></script>
<script src="<?php bloginfo('template_url')?>/script.js ?> "type="text/javascript" charset="utf-8" async defer></script>
	<!---fim footer all -->
	<?php wp_footer() ;?>