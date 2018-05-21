<!-- STYLE -->
<link rel="stylesheet" href="<?php echo site_url('assets/public/') ?>sass/admin/forms.css">

<!-- SCRIPT -->
<script src="<?php echo site_url('assets/public/') ?>js/admin/script.js"></script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Products
            <small>List of Products</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Products</a></li>
            <li class="active">List of Products</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add item</h3>
                    </div>
                    <!-- /.box-header -->
                    <?php
                    echo form_open_multipart('', array('class' => 'form-horizontal'));
                    ?>
                    <div class="box-body">

                        <div class="col-md-12">
                            <h4 class="box-title">Basic Information</h4>
                        </div>
                        <div class="form-group col-md-12">
                            <?php
                            echo form_label('Name', 'products_name');
                            echo form_error('products_name');
                            echo form_input('products_name', set_value('products_name'), 'class="form-control" id="products_name"');
                            ?>
                        </div>
                        <div class="form-group col-md-4"> <!-- Split the columns due to numbers of level of Category -->
                            <?php
                            echo form_label('Category Level 1', 'products_category_1');
                            echo form_error('products_category_1');
                            echo form_dropdown('products_category_1', $option = array('1' => 'Electricity', '2' => 'Fruit', '3' => 'Food'), 0, 'class="form-control" id="products_category_1"');
                            ?>
                        </div>
                        <div class="form-group col-md-4"> <!-- Split the columns due to numbers of level of Category -->
                            <?php
                            echo form_label('Category Level 2', 'products_category_2');
                            echo form_error('products_category_2');
                            echo form_dropdown('products_category_2', $option = array('1' => 'Good', '2' => 'Normal', '3' => 'Bad'), 0, 'class="form-control" id="products_category_2"');
                            ?>
                        </div>
                        <div class="form-group col-md-4"> <!-- Split the columns due to numbers of level of Category -->
                            <?php
                            echo form_label('Category Level 3', 'products_category_3');
                            echo form_error('products_category_3');
                            echo form_dropdown('products_category_3', $option = array('1' => 'New', '2' => 'Old'), 0, 'class="form-control" id="products_category_3"');
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            echo form_label('Quantity', 'products_quantity');
                            echo form_error('products_quantity');
                            echo form_input('products_quantity', set_value('products_quantity'), 'class="form-control" id="products_quantity"');
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            echo form_label('Price', 'products_price');
                            echo form_error('products_price');
                            echo '<div class="input-group">';
                            echo '<span class="input-group-addon"><i class="fa fa-dollar" aria-hidden="true"></i> USD </span>';
                            echo form_input('products_price', set_value('products_price'), 'class="form-control" id="products_price"');
                            echo '</div>';
                            ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?php
                            echo form_label('Image Input', 'products_image');
                            echo form_error('products_image');
                            echo form_upload('products_image', set_value('products_image'), 'id="products_image"');
                            ?>
                            <p class="help-block">Click to upload. First image 'll be used as avatar of the product.</p>
                        </div>
						<div class="image-preview col-md-12">
							<label>Image preview:</label>
							<div class="item">
								<div class="mask">
									<img src="https://i5.walmartimages.com/asr/83532a19-d7c2-4628-bfc9-defd8862820e_1.ce9eb1fa80f30adb291ccc08f36e50b2.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">
									<span class="close-preview"><i class="fa fa-2x fa-close" aria-hidden="true"></i></span>
								</div>
								<div class="mask">
									<img src="https://i5.walmartimages.com/asr/83532a19-d7c2-4628-bfc9-defd8862820e_1.ce9eb1fa80f30adb291ccc08f36e50b2.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">
									<span class="close-preview"><i class="fa fa-2x fa-close" aria-hidden="true"></i></span>
								</div>
							</div>
						</div>
                        <div class="form-group col-md-12">
                            <?php
                            echo form_label('Description', 'products_description');
                            echo form_error('products_description');
                            echo form_textarea('products_description', set_value('products_description'), 'class="form-control box_content" id="products_description"');
                            ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?php
                            echo form_label('Content', 'products_content');
                            echo form_error('products_content');
                            echo form_textarea('products_content', set_value('products_content'), 'class="form-control box_content" id="products_content"');
                            ?>
                        </div>

                        <div class="col-md-12">
                            <h4 class="box-title">Detail Information</h4>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            echo form_label('Time', 'products_time');
                            echo form_error('products_time');
                            echo form_input('products_time', set_value('products_time'), 'class="form-control" id="products_time"');
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            echo form_label('Production', 'products_production');
                            echo form_error('products_production');
                            echo form_input('products_production', set_value('products_production'), 'class="form-control" id="products_production"');
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            echo form_label('Made in', 'products_madein');
                            echo form_error('products_madein');
                            echo form_input('products_madein', set_value('products_madein'), 'class="form-control" id="products_madein"');
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            echo form_label('Ingredients', 'products_madeof');
                            echo form_error('products_madeof');
                            echo form_input('products_madeof', set_value('products_madeof'), 'class="form-control" id="products_madeof"');
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            echo form_label('Weight', 'products_weight');
                            echo form_error('products_weight');
                            echo '<div class="input-group">';
                            echo '<span class="input-group-addon"> gram </span>';
                            echo form_input('products_weight', set_value('products_weight'), 'class="form-control" id="products_weight"');
                            echo '</div>';
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            echo form_label('Volume', 'products_volume');
                            echo form_error('products_volume');
                            echo '<div class="input-group">';
                            echo '<span class="input-group-addon"> ml </span>';
                            echo form_input('products_volume', set_value('products_volume'), 'class="form-control" id="products_volume"');
                            echo '</div>';
                            ?>
                        </div>

                        <div class="col-md-12">
                            <h4 class="box-title">Finalize</h4>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="check_available">
                                <?php
                                echo form_error('products_active');
                                echo form_checkbox('products_active', 1, false , 'id="products_active"');
                                ?>
                                <span>Available?</span>
                                <p>Check the box if you want to show above information immediately. Uncheck to set it to pending mode.</p>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="check_show">
                                <?php
                                echo form_error('products_show');
                                echo form_checkbox('products_show', 1, false , 'id="products_show"');
                                ?>
                                <span>Show on Homepage</span>
                                <p>Check the box if you want to show this product on Homepage. Uncheck to ignore.</p>
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

            <div class="col-md-3 nav_side">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Contents</h3>
                    </div>
                    <div class="box-body">
                        <ol>
                            <li>Basic Information</li>
                                <ul>
                                    <li>Name of Product</li>
                                    <li>Category</li>
                                    <li>Quantity</li>
                                    <li>Price</li>
                                    <li>Input Image</li>
                                    <li>Description</li>
                                    <li>Content</li>
                                </ul>
                            <li>Detail Information</li>
                                <ul>
                                    <li>Time</li>
                                    <li>Production</li>
                                    <li>Made In</li>
                                    <li>Ingredients</li>
                                    <li>Weight</li>
                                    <li>Volume</li>
                                </ul>
                            <li>Finalize</li>
                        </ol>
                    </div>
                </div>
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

