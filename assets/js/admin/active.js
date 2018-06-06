$('.btn-row-active').on('click', '.btn-active-admin', function(){
	var controller = $(this).data('controller');
	var url = HOSTNAME + 'admin/'+ controller +'/active';
	var id = $(this).data('id');
	switch(controller){
		case 'opening':
			message = 'Kích hoạt lịch khai giảng này?';
		break;
		case 'banner':
			message = 'Kích hoạt banner này?';
		break;
	}
	if(confirm(message)){
		$.ajax({
			method: "get",
			url: url,
			data: {
				id : id
			},
			success: function(response){
				if (response.status == 200) {
					$('.row-active-'+ id).html('<button class="btn btn-success btn-sm btn-deactive-admin" type="button" data-id="'+ id +'" data-controller="'+ controller +'">Đang Kích Hoạt</button>');
				}
				
			},
			error: function(jqXHR, exception){
				console.log(errorHandle(jqXHR, exception));
			}
		});
	}
});

$('.btn-row-active').on('click', '.btn-deactive-admin', function(){
	var controller = $(this).data('controller');
	var url = HOSTNAME + 'admin/'+ controller +'/deactive';
	var id = $(this).data('id');
	switch(controller){
		case 'opening':
			message = 'Tắt lịch khai giảng này?';
		break;
		case 'banner':
			message = 'Tắt banner này?';
		break;
	}
	if(confirm(message)){
		$.ajax({
			method: "get",
			url: url,
			data: {
				id : id
			},
			success: function(response){
				if (response.status == 200) {
					$('.row-active-'+ id).html('<button class="btn btn-warning btn-sm btn-active-admin" type="button" data-id="'+ id +'" data-controller="'+ controller +'">Không Kích Hoạt</button>');
				}
				
			},
			error: function(jqXHR, exception){
				console.log(errorHandle(jqXHR, exception));
			}
		});
	}
});