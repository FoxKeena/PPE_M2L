(function($){
	var width=$("#diaporama").width();
	translateX(1);
	var nbr = 1;
	var total=$("#diaporama #diaposlider .diapo").size();
	$("#diaporama .topnav .nav").on('click', 'img', function(e) {
		e.preventDefault();
		var select=$(this).attr("value");

		/* Quand on appuie sur les boutons en dessous des images. */
		if(select!=0 && select<=total)
		{
			
			nbr=select-1+1;
			translateX(nbr);
		}
	});

	/* Quand on appuie sur la fleche de gauche. */
	$('.left').click(function(){
		if(nbr!=1)
		{
			
			nbr -=1;
			translateX(nbr);
		}
		else if(nbr==1)
		{
			nbr = total;

			translateX(nbr);
		}
	});

	/* Quand on appuie sur la fleche de droite. */
	$('.right').click(function(){
		if(nbr!=total)
		{

			nbr+=1;
			translateX(nbr);
		}
		else if(nbr==total)
		{

			nbr=1;
			translateX(nbr);
		}
	});
	function translateX(nbr)
	{
		var px = (nbr-1)*-width;
		$('#diaposlider').css("-moz-transform", 'translateX(' + px + 'px)');
		$('#diaposlider').css("-webkit-transform", 'translateX(' + px + 'px)');
		$('#diaposlider').css("-o-transform", 'translateX(' + px + 'px)');
		$('#diaposlider').css("-ms-transform", 'translateX(' + px + 'px)');
		$('#diaposlider').css("transform", 'translateX(' + px + 'px)');
	}

/* Fonction qui fait que le slide bouge automatiquement et en boucle */
function autoswitch(){
	setTimeout(function() 
	{

		if(nbr!=total)
		{

			nbr+=1;
			translateX(nbr);
		}
		else if(nbr==total)
		{

			nbr=1;
			translateX(nbr);
		}
		autoswitch();
	}, 5000);
}
autoswitch();
})(jQuery);