<style type="text/css">
    .image-file{
        display: none;
    }

    [class*='close-'] {
      color: #777;
      font: 14px/100% arial, sans-serif;
      position: absolute;
      right: 5px;
      text-decoration: none;
      text-shadow: 0 1px 0 #fff;
      top: 5px;
    }

    .close-classic:after {
        content: '✖'; /* ANSI X letter */
         color: red;
    }
    .close-classic:hover{
        color: #ffffff;
    }
    /* Dialog */

    .dialog {
        border: 1px solid #ccc;
        border-radius: 5px;
        float: left;
        margin: 20px;
        position: relative;
        width: 150px;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Chỉnh sửa
            <small>Sự kiện</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-default">
                    <div class="box-body">
                        <?php
                        echo form_open_multipart('', array('class' => 'form-horizontal'));
                        ?>
                        <div class="col-xs-12">
                            <h4 class="box-title">Basic Information</h4>
                        </div>
                        <div class="row">
                            <span><?php echo $this->session->flashdata('message'); ?></span>
                        </div>

                        <div class="form-group col-xs-12">
                            <?php
                            echo form_label('Ảnh đại diện đang sử dụng', 'image_old_shared').'<br>';
                            $image = json_decode($detail['image']);
                            ?>
                            <?php foreach (json_decode($detail['image']) as $key => $value): ?>
                                    <div class="dialog remove_<?php echo $key ?>"">
                                    <div class="mask-sm">
                                        <img src="<?php echo base_url('assets/upload/courses/'.$value) ?>" width=150 style="cursor: pointer;" class="btn-active-img" data-id="<?php echo $detail['id'] ?>" data-image="<?php echo $value ?>" data-key="<?php echo $key ?>" data-controller="courses" >
                                        <a href="#" class="close-classic" data-id="<?php echo $detail['id'] ?>" data-image="<?php echo $value ?>" data-key="<?php echo $key ?>"  data-controller="courses" ></a>
                                        <?php if ($value == $detail['avatar']): ?>
                                            <i class="fa fa-thumb-tack" aria-hidden="true" style="color: red"></i>
                                        <?php endif ?>
                                    </div>
                                </div>
                            <?php endforeach ?>
                            <br>
                        </div>

                        <div class="form-group col-xs-12">
                            <?php
                            echo form_label('Ảnh đại diện', 'image_shared');
                            echo form_error('image_shared');
                            echo form_upload('image_shared[]', set_value('image_shared'), 'class="form-control" multiple');
                            ?>
                            <br>
                        </div>
                        <div class="form-group col-xs-12">
                            <div class="form-group col-xs-12">
                                <?php
                                echo form_label('Mã Lớp', 'code_shared');
                                echo form_error('code_shared');
                                echo form_input('code_shared', set_value('code_shared', $detail['code']), 'class="form-control" ');
                                ?>
                            </div>
                        </div>
                        <div class="form-group col-xs-12">
                            <div class="form-group col-xs-12">
                                <?php
                                echo form_label('Lịch Khai Giảng', 'opening_shared');
                                echo form_error('opening_shared');
                                echo form_input('opening_shared', set_value('opening_shared', $detail['opening']), 'class="form-control" id="datepicker"');
                                ?>
                            </div>
                        </div>
                        <div class="form-group col-xs-12">
                            <div class="form-group col-xs-12">
                                <?php
                                echo form_label('Học phí (VND)', 'price_shared');
                                echo form_error('price_shared');
                                echo form_input(array('type' => 'text', 'name' => 'price_shared'), $detail['price'], 'class="form-control price_shared"');
                                ?>
                            </div>
                        </div>
                        <div class="form-group col-xs-12">
                            <div class="form-group col-xs-12">
                                <?php
                                echo form_label('Học phí ưu đãi (VND)', 'discount_shared');
                                echo form_error('discount_shared');
                                echo form_input(array('type' => 'text', 'name' => 'discount_shared'), $detail['discount'], 'class="form-control price_shared"');
                                ?>
                            </div>
                        </div>
						<div class="form-group col-xs-12">
							<div class="form-group col-xs-12">
								<?php
								echo form_label('Cam kết đầu ra', 'promise_shared');
								echo form_error('promise_shared');
								echo form_input(array('type' => 'text', 'name' => 'promise_shared'), $detail['promise'], 'class="form-control"');
								?>
							</div>
						</div>
					<div class="form-group col-xs-12">
						<div class="form-group col-xs-6">
                            <?php
                            echo form_label('Đầu vào', 'input_shared');
                            echo form_error('input_shared');
                            echo form_input(array('type' => 'text', 'name' => 'input_shared'), $detail['input'], 'class="form-control"');
                            ?>
						</div>
						<div class="form-group col-xs-6">
                            <?php
                            echo form_label('Đầu ra', 'output_shared');
                            echo form_error('output_shared');
                            echo form_input(array('type' => 'text', 'name' => 'output_shared'), $detail['output'], 'class="form-control"');
                            ?>
						</div>
					</div>
                        <div class="form-group col-xs-12">
                            <div class="form-group col-xs-12">
                                <?php
                                echo form_label('Slug', 'slug_shared');
                                echo form_error('slug_shared');
                                echo form_input('slug_shared', $detail['slug'], 'class="form-control" id="slug_shared" readonly');
                                ?>
                            </div>
                        </div>
                        <div class="form-group col-xs-12">
                            <?php
                            echo form_label('Banner trên đang sử dụng', 'imagetop_old_shared');
                            ?>
                            <img src="<?php echo base_url('assets/upload/courses/'.$detail['image_top']) ?>" alt="anh-cua-<?php echo $detail['slug'] ?>" style="display: block;" width=150>
                            <br>
                        </div>
                        <div class="form-group col-xs-12">
                            <?php
                            echo form_label('Banner Trên', 'imagetop_shared');
                            echo form_error('imagetop_shared');
                            echo form_upload('imagetop_shared', set_value('imagetop_shared'), 'class="form-control"');
                            ?>
                            <br>
                        </div>
                        <div class="form-group col-xs-12">
                            <?php
                            echo form_label('Banner dưới đang sử dụng', 'imagebottom_old_shared');
                            ?>
                            <img src="<?php echo base_url('assets/upload/courses/'.$detail['image_bottom']) ?>" alt="anh-cua-<?php echo $detail['slug'] ?>" style="display: block;" width=150>
                            <br>
                        </div>
                        <div class="form-group col-xs-12">
                            <?php
                            echo form_label('Banner Dưới', 'imagebottom_shared');
                            echo form_error('imagebottom_shared');
                            echo form_upload('imagebottom_shared', set_value('imagebottom_shared'), 'class="form-control"');
                            ?>
                            <br>
                        </div>
                        <div class="form-group col-xs-12">
                            <div class="form-group col-xs-12">
                                <?php
                                echo form_label('Meta Keywords', 'metakeywords_shared');
                                echo form_error('metakeywords_shared');
                                echo form_input('metakeywords_shared', $detail['meta_keywords'], 'class="form-control" id="metakeywords_shared"');
                                ?>
                            </div>
                        </div>
                        <div class="form-group col-xs-12">
                            <div class="form-group col-xs-12">
                                <?php
                                echo form_label('Meta Description', 'metadescription_shared');
                                echo form_error('metadescription_shared');
                                echo form_input('metadescription_shared', $detail['meta_description'], 'class="form-control" id="metadescription_shared"');
                                ?>
                            </div>
                        </div>
                        <div>
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#vi" aria-controls="vi" role="tab" data-toggle="tab">
                                        <span class="badge">1</span> Tiếng Việt
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#en" aria-controls="en" role="tab" data-toggle="tab">
                                        <span class="badge">2</span> English
                                    </a>
                                </li>
                            </ul>
                            <hr>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="vi">
                                    <div class="form-group col-xs-12">
                                        <div class="form-group col-xs-12">
                                            <?php
                                            echo form_label('Thời gian học', 'time_vi');
                                            echo form_error('time_vi');
                                            echo form_input('time_vi', $detail['time_vi'], 'class="form-control"');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Tiêu đề', 'title_vi');
                                        echo form_error('title_vi');
                                        echo form_input('title_vi', $detail['title_vi'], 'class="form-control" id="title_vi"');
                                        ?>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Giới Thiệu', 'introduce_vi');
                                        echo form_error('introduce_vi');
                                        echo form_textarea('introduce_vi', $detail['introduce_vi'], 'class="form-control"')
                                        ?>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Tổng Quan', 'description_vi');
                                        echo form_error('description_vi');
                                        echo form_textarea('description_vi', $detail['description_vi'], 'class="tinymce-area form-control" ')
                                        ?>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Nội dung', 'content_vi');
                                        echo form_error('content_vi');
                                        echo form_textarea('content_vi', $detail['content_vi'], 'class="tinymce-area form-control"')
                                        ?>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="en">
                                    <div class="form-group col-xs-12">
                                        <div class="form-group col-xs-12">
                                            <?php
                                            echo form_label('Study time', 'time_en');
                                            echo form_error('time_en');
                                            echo form_input('time_en', $detail['time_en'], 'class="form-control"');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Title', 'title_en');
                                        echo form_error('title_en');
                                        echo form_input('title_en', $detail['title_en'], 'class="form-control" id="title_en"');
                                        ?>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Description', 'introduce_en');
                                        echo form_error('introduce_en');
                                        echo form_textarea('introduce_en', $detail['introduce_en'], 'class="form-control"');
                                        ?>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Overview', 'description_en');
                                        echo form_error('description_en');
                                        echo form_textarea('description_en', $detail['description_en'], 'class="tinymce-area form-control"')
                                        ?>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Content', 'content_en');
                                        echo form_error('content_en');
                                        echo form_textarea('content_en', $detail['content_en'], 'class="tinymce-area form-control"')
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo form_submit('submit_shared', 'OK', 'class="btn btn-primary"'); ?>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
