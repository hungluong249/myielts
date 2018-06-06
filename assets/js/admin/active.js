$('.btn-row-active').on('click', '.btn-active-admin', function(){
	var url = HOSTNAME + 'admin/opening/active';
	var id = $(this).data('id');
	if(confirm('Kích hoạt lịch khai giảng này?')){
		$.ajax({
			method: "get",
			url: url,
			data: {
				id : id
			},
			success: function(response){
				if (response.status == 200) {
					$('.row-active-'+ id).html('<button class="btn btn-success btn-sm btn-deactive-admin" type="button" data-id="'+ id +'">Đang Kích Hoạt</button>');
				}
				
			},
			error: function(jqXHR, exception){
				console.log(errorHandle(jqXHR, exception));
			}
		});
	}
});

$('.btn-row-active').on('click', '.btn-deactive-admin', function(){
	var url = HOSTNAME + 'admin/opening/deactive';
	var id = $(this).data('id');
	if(confirm('Không kích hoạt lịch khai giảng này?')){
		$.ajax({
			method: "get",
			url: url,
			data: {
				id : id
			},
			success: function(response){
				if (response.status == 200) {
					$('.row-active-'+ id).html('<button class="btn btn-warning btn-sm btn-active-admin" type="button" data-id="'+ id +'">Không Kích Hoạt</button>');
				}
				
			},
			error: function(jqXHR, exception){
				console.log(errorHandle(jqXHR, exception));
			}
		});
	}
});