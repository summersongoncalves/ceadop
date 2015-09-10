$(document).ready(function(){
/* --------- altera logo ao passar mouse ------------*/
var path =$(".logo-ceadop")[0].src;
	$(".logo-ceadop").hover(function(){
		$(this).attr("src",path.replace("logobw.png","logo.png")).delay(4000).fadeIn();
		
		},function(){
		$(this).attr("src",path.replace("logo.png","logobw.png")).delay(4000).fadeIn();
		
	});	
/*------------------ campo textArea é escondido ao abrir-------*/	
$(".wrap-endereco").hide();

/*----------mostra campo textArea quando check 'sim' é utilizado ---------*/
$("#recebe-visita").click(function(){
	if(!$(this).is(":checked")){
		$(".wrap-endereco").show();
	}
});

});
