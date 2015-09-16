<form class="navbar-form navbar-right" id="form-busca"action="<?php bloginfo('home')?>/"  method="post" role="search"> 
	<div class="form-group">
		<input type="text" name="s"id = "s"class="form-control" value="<?php the_search_query();?>"placeholder="Buscar..."/>
	</div>
	<a href="#" id = "btn-buscar"class="btn btn-info">
	<span class="glyphicon glyphicon-search"></span> Search</a>
</form>