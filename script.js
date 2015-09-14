$(document).ready(function(){
// reset checkbox

$("input:checkbox").removeAttr('checked');

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
		$(".wrap-endereco").toggle('slow');
	}	
	
	});
/*--------------- função do botão subir -------------------*/
$('#img-subir').hide();

$(window).scroll(function () {
	if ($(this).scrollTop() > 100) {
		$('#img-subir').fadeIn();
	} else {
		$('#img-subir').fadeOut();
	}
});


  $('#img-subir').click(function(){ 
          $('html, body').animate({scrollTop:0}, 2000);
      return false;

  });


});

