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
                            <div class="form-group col-xs-12">
                                <?php
                                echo form_label('Slug', 'slug_shared');
                                echo form_error('slug_shared');
                                echo form_input('slug_shared', $detail['slug'], 'class="form-control" id="slug_shared" readonly');
                                ?>
                            </div>
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
                                        <?php
                                        echo form_label('Tiêu đề', 'title_vi');
                                        echo form_error('title_vi');
                                        echo form_input('title_vi', $detail['title_vi'], 'class="form-control" id="title_vi"');
                                        ?>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="en">
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Title', 'title_en');
                                        echo form_error('title_en');
                                        echo form_input('title_en', $detail['title_en'], 'class="form-control" id="title_en"');
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