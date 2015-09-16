<?php
// Adiciona suporte à thumbnails nos posts
add_theme_support('post-thumbnails');


/*------- altera ícones do título da categoria dinamicamente recebendo o nome */
function getIconePost($nicename){
	if($nicename==""){
		echo "acao-social.png";
	}
    else{
		echo $nicename.".png";			
    }
}

	
/*-----  retorna link verdadeiro ---------*/	



?>