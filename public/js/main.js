$(function(){

	$(document).on('click', function() {
		$('.result').hide();
	});
	$('.result').hide();

	$('#searchbox').keyup(function(event) {

		var form = $('#search').serialize();
		$.ajax({
			url: '/seachcity',
			type: 'get',
			data: form,
			success: function(data) {
				if(data) {
					$('.include').html(data);
					$('.result').show();
				} 
				
			}
		});
		
	});
});