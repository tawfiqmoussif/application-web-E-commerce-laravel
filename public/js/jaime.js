$(".jaime").on('click',function(){
	var jaime_s = $(this).attr('data-jaime');
	var produit_id = $(this).attr('data-produitid');
     $.ajax({
     	type : 'POST',
     	url : url,
     	data : {jaime_s: jaime_s,produit_id: produit_id, _token:token },
     	success : function(data){
     		alert('ok§§');

     	}
     });
});