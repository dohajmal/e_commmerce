(function($){
	//tt les element en function addPanier quant on clique debut du function
    $('.addPanier').click(function(event){
	event.preventDefault();
	$.get($(this).attr('href'),{},function(data){
		if(data.error){
			alert(data.message);
		}else{
				if(confirm(data.message + '. voulez vous consulter votre panier ?  ')){
					location.href = '../view/panier.php';
		}else{
			$('#total').empty().append(data.total);
			$('#count').empty().append(data.count);
		}
		}
			},'json');
	return false;
});

})(jQuery);