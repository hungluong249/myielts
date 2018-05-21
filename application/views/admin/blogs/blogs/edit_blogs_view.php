<!-- STYLE -->
<link rel="stylesheet" href="<?php echo site_url('assets/public/lib/') ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="<?php echo site_url('assets/public/') ?>sass/admin/forms.css">

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Blogs
            <small>List of Blogs</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Blogs</a></li>
            <li class="active">List of Blogs</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit item</h3>
                    </div>
                    <!-- /.box-header -->
                    <?php
                    echo form_open_multipart('', array('class' => 'form-horizontal'));
                    ?>
                    <div class="box-body">
                        <!-- form start -->

                        <div class="form-group">
                            <?php
                            echo form_label('Title', 'blogs_title');
                            echo form_error('blogs_title');
                            echo form_input('blogs_title', set_value('blogs_title'), 'class="form-control" id="blogs_title"');
                            ?>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6"> <!-- Split the columns due to numbers of level of Category -->
                                <?php
                                echo form_label('Category Level 1', 'blogs_category_1');
                                echo form_error('blogs_category_1');
                                echo form_dropdown('blogs_category_1', $option = array('1' => 'Electricity', '2' => 'Fruit', '3' => 'Food'), 0, 'class="form-control" id="blogs_category_1"');
                                ?>
                            </div>
                            <div class="form-group col-md-6"> <!-- Split the columns due to numbers of level of Category -->
                                <?php
                                echo form_label('Category Level 2', 'blogs_category_2');
                                echo form_error('blogs_category_2');
                                echo form_dropdown('blogs_category_2', $option = array('1' => 'Good', '2' => 'Normal', '3' => 'Bad'), 0, 'class="form-control" id="blogs_category_2"');
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php
                            echo form_label('Image Input', 'blogs_image');
                            echo form_error('blogs_image');
                            echo form_upload('blogs_image', set_value('blogs_image'), 'id="blogs_image"');
                            ?>
                            <p class="help-block">Click to upload.</p>
                        </div>
                        <div class="form-group">
                            <?php
                            echo form_label('Description', 'blogs_description');
                            echo form_error('blogs_description');
                            echo form_textarea('blogs_description', set_value('blogs_description'), 'class="form-control box_content" id="blogs_description"');
                            ?>
                        </div>
                        <div class="form-group">
                            <?php
                            echo form_label('Content', 'blogs_content');
                            echo form_error('blogs_content');
                            echo form_textarea('blogs_content', set_value('blogs_content'), 'class="form-control box_content" id="blogs_content"');
                            ?>
                        </div>
                        <div class="form-group">
                            <div class="check_available">
                                <?php
                                echo form_error('blogs_active');
                                echo form_checkbox('blogs_active', 1, false , 'id="blogs_active"');
                                ?>
                                <span>Available?</span>
                                <p>Check the box if you want to show above information immediately. Uncheck to set it to pending mode.</p>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <?php form_close() ?>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END ACCORDION & CAROUSEL-->
    </section>
</div>

<!-- TINYMCE JS-->
<script type="text/javascript" src="<?php echo site_url('tinymce/tinymce.min.js'); ?>"></script>
<script>
    tinymce.init({
        selector: ".box_content",
        theme: "modern",
        height: 200,
        relative_urls: false,
        remove_script_host: false,
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor responsivefilemanager"
        ],
        content_css: "css/content.css",
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | responsivefilemanager | print preview media fullpage | forecolor backcolor emoticons",
        style_formats: [
            {title: "Bold text", inline: "b"},
            {title: "Red text", inline: "span", styles: {color: "#ff0000"}},
            {title: "Red header", block: "h1", styles: {color: "#ff0000"}},
            {title: "Example 1", inline: "span", classes: "example1"},
            {title: "Example 2", inline: "span", classes: "example2"},
            {title: "Table styles"},
            {title: "Table row 1", selector: "tr", classes: "tablerow1"}
        ],
        external_filemanager_path: "<?php echo site_url('filemanager/'); ?>",
        filemanager_title: "Responsive Filemanager",
        external_plugins: {"filemanager": "<?php echo site_url('filemanager/plugin.min.js'); ?>"}
    });
</script>

