$(document).ready(function(){
	var csrf_hash = $("input[name='csrf_myielts_token']").val();
	$('.btn-remove').click(function(){
		var controller = $(this).data('controller');
		var id = $(this).data('id');
		var url = HOSTNAME + 'admin/' + controller + '/remove';
		
		if(confirm('Chắc chắn xóa?')){
        $.ajax({
            method: "post",
            url: url,
            data: {
                id : id, csrf_myielts_token : csrf_hash
            },
            success: function(response){
                if(response.status == 200){
                    csrf_hash = response.reponse.csrf_hash;
                    $('.remove_' + id).fadeOut();
                }
            },
            error: function(jqXHR, exception){
                console.log(errorHandle(jqXHR, exception));
            }
        });
    }
	});
});