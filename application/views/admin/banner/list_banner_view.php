<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="content-wrapper">
    <section class="content row">
        <div class="col-md-12">
            <?php if ($this->session->flashdata('message_error')): ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                    <?php echo $this->session->flashdata('message_error'); ?>
                </div>
            <?php endif ?>
            <?php if ($this->session->flashdata('message_success')): ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    <?php echo $this->session->flashdata('message_success'); ?>
                </div>
            <?php endif ?>
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash() ?>" id="csrf" />
            <div >
                <a type="button" href="<?php echo site_url('admin/banner/create'); ?>" class="btn btn-primary">Thêm mới</a>
            </div>
            <div >
                <div  style="margin-top: 10px;">
                    <table class="table table-hover table-bordered table-condensed">
                    	<?php if ($result): ?>
			                <tr>
				                <td><b><a href="#">No.</a></b></td>
				                <td><b><a href="#">Image</a></b></td>
				                <td><b><a href="#">Active</a></b></td>
				                <td><b>Operations</b></td>
			                </tr>
			                <?php $no = 1 ?>
			                <?php foreach ($result as $key => $value): ?>
		                        <tr class="remove_<?php echo $value['id'] ?>">
		                            <td><?php echo $no++ ?></td>
		                            <td style="width: 50%"><img src="<?php echo base_url('assets/upload/banners/'.$value['image']) ?>" width=100%></td>
									<td class="row-active-<?php echo $value['id'] ?> btn-row-active">
		                            <?php if ($value['is_activated'] == 0): ?>
                                        <button class="btn btn-warning btn-sm btn-active-admin" type="button" data-id="<?php echo $value['id'] ?>" data-controller="banner">Không Kích Hoạt</button>
                                    <?php else: ?>
                                        <button class="btn btn-success btn-sm btn-deactive-admin" type="button" data-id="<?php echo $value['id'] ?>" data-controller="banner">Đang Kích Hoạt</button>
                                    <?php endif ?>
									</td>
		                            <td>
		                            <a href="javascript:void(0);" class="dataActionDelete btn-remove" data-controller="banner" data-id="<?php echo $value['id'] ?>" >
			                            <i class="fa fa-trash-o" aria-hidden="true"></i>
			                        </a>
		                        </tr>
	                        <?php endforeach ?>
						<?php else: ?>
                        	<tr class="odd"><td colspan="9">Chưa có Banner</td></tr>
                        <?php endif ?>
                    </table>
		            <div class="col-md-6 col-md-offset-5">
		                <!-- <?php echo $page_links; ?> -->
		            </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
	var base_url = location.protocol + "//" + location.host + (location.port ? ':' + location.port : '')+'/hnx/';
	$('.btn-is-active').click(function(e){
		e.preventDefault()
	    var btn_check = $(this);
	    var id = $(this).attr('data-id');
	    if(confirm('Tắt banner?')){
	        jQuery.ajax({
	            method: "get",
	            url: base_url + 'admin/banner/active',
	            // url: location.protocol + "//" + location.host + (location.port ? ':' + location.port : '') + "/tuoithantien/comment/create_comment",
	            data: {id : id},
	            success: function(result){
	                if(JSON.parse(result).isExists == false){
	                    alert('false');
	                }else{
	                    window.location.reload();
	                }
	            }
	        });
	    };
	});

	$('.btn-not-active').click(function(){
	    var btn_check = $(this);
	    var id = $(this).attr('data-id');
	    if(confirm('Kích hoạt banner?')){
	        jQuery.ajax({
	            method: "get",
	            url: base_url + 'admin/banner/active',
	            // url: location.protocol + "//" + location.host + (location.port ? ':' + location.port : '') + "/tuoithantien/comment/create_comment",
	            data: {id : id},
	            success: function(result){
	                if(JSON.parse(result).isExists == false){
	                    alert('false');
	                }else{
	                    window.location.reload();
	                }
	            }
	        });
	    };
	})
</script>
