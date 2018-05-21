<!-- About Stylesheet -->
<link rel="stylesheet" href="<?php echo site_url('assets/sass/') ?>courses.css">

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url('https://images.unsplash.com/photo-1450107579224-2d9b2bf1adc8?ixlib=rb-0.3.5&s=0b0fc084bc0625659cbdd0f04b191f62&auto=format&fit=crop&w=1350&q=80');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <h1>Detail Document</h1>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register-course">Register Now!</button>
                        <a href="https://drive.google.com/file/d/0B_fCE0_n87wRRE5yZTlSRThVdmM/view?usp=sharing" class="btn btn-primary" download="https://drive.google.com/file/d/0B_fCE0_n87wRRE5yZTlSRThVdmM/view?usp=sharing" target="_blank">
                            Download now!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="fh5co-detail" class="fh5co-section">
    <div class="container">
        <div class="row">
            <div class="left col-md-8 col-md-offset-2 col-sm-12">
                <div class="section-heading">
                    <h2>Book 101</h2>
                </div>
                <div class="section-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae neque quisquam at deserunt ab praesentium architecto tempore saepe animi voluptatem molestias, eveniet aut laudantium alias, laboriosam excepturi, et numquam? Atque tempore iure tenetur perspiciatis, aliquam, asperiores aut odio accusamus, unde libero dignissimos quod aliquid neque et illo vero nesciunt. Sunt!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam iure reprehenderit nihil nobis laboriosam beatae assumenda tempore, magni ducimus abentey.</p>
                    <p>In sed feugiat lorem. Etiam gravida risus vitae enim iaculis, in tincidunt nisi rhoncus. Suspendisse sodales nibh a semper finibus. Morbi varius lacus eu lectus mattis, id mattis nibh dignissim. Aliquam maximus sem in neque pretium volutpat. Sed pulvinar, nisl ut commodo rhoncus, est elit dictum lectus, vitae mollis massa turpis ac dolor. Nunc fermentum sapien at mattis porta. Vivamus quis elit et mi ultrices placerat eget id dolor. Proin tellus eros, venenatis eu rutrum commodo, dignissim vel libero. Nulla et magna dictum mi aliquam porttitor sed eu lectus. Praesent pretium feugiat tristique. Curabitur dignissim, augue quis imperdiet lobortis, sapien dui egestas libero, ac aliquet odio mauris ut sapien. Etiam tristique quis turpis eget iaculis.</p>

                    <p>Nulla efficitur lectus sed dolor ornare bibendum. In feugiat nec risus non rhoncus. Donec mollis non sapien quis commodo. Sed massa quam, molestie a consequat quis, finibus in dolor. Suspendisse sagittis sed massa et pellentesque. Vivamus sit amet mi a elit faucibus aliquam. Vestibulum non erat at augue dapibus euismod. Integer eget nibh iaculis, accumsan elit vitae, ultricies arcu.</p>

                    <img src="http://www.gettingsmart.com/wp-content/uploads/2017/07/College-Students-Using-Laptops-Feature-Image.jpg" alt="detail image">

                    <p>Aenean rhoncus sagittis tempus. Vivamus vehicula accumsan ullamcorper. Curabitur id accumsan dui. Maecenas tristique aliquam arcu nec elementum. Ut posuere porttitor velit eu euismod. Sed luctus justo eget pharetra molestie. Vivamus vitae convallis massa. Maecenas commodo pulvinar enim, nec dapibus neque porttitor quis. Ut vestibulum velit ut metus maximus, sit amet tincidunt quam pulvinar. Aenean ac dui convallis dolor bibendum venenatis. Quisque faucibus turpis finibus, posuere enim et, imperdiet urna. Donec tincidunt ex in massa cursus, et pellentesque ex accumsan. Etiam quis nunc bibendum, interdum mauris quis, fermentum nibh.</p>
                </div>
                <div class="section-footer">
                    <p>Shared:</p>
                    <ul class="list-inline">
                        <li><a href=""><i class="fa fa-facebook-f"></i> Facebook </a></li>
                    </ul>
                </div>
            </div>



        </div>
    </div>
</div>

<div class="btn-register">
    <button class="btn btn-primary btn-fixed" data-toggle="modal" data-target="#register-course">
        <i class="fa fa-2x fa-pencil-square-o" aria-hidden="true"></i>
    </button>
</div>

<div class="modal fade" id="register-course" tabindex="-1" role="dialog" aria-labelledby="registerCourseLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="registerCourseLabel">Register</h4>
            </div>
            <div class="modal-body">
                <div class="modal-cover">
                    <img src="http://www.gettingsmart.com/wp-content/uploads/2017/07/College-Students-Using-Laptops-Feature-Image.jpg" alt="register cover">
                </div>
                <div class="modal-text">
                    <?php
                    echo form_open_multipart('', array('class' => 'form-horizontal'));
                    ?>
                    <div class="col-xs-12">
                        <label>Book Registered</label>
                        <h3>Book 101</h3>
                    </div>
                    <div class="form-group col-xs-12">
                        <?php
                        echo form_label('Full Name (*)', 'register_name');
                        echo form_error('register_name');
                        echo form_input('register_name', set_value('register_name'), 'class="form-control" id="register_name"');
                        ?>
                    </div>
                    <div class="form-group col-xs-12">
                        <?php
                        echo form_label('Email (*)', 'register_mail');
                        echo form_error('register_mail');
                        echo form_input('register_mail', set_value('register_mail'), 'class="form-control" id="register_mail"');
                        ?>
                    </div>
                    <div class="form-group col-xs-12">
                        <?php
                        echo form_label('Your phone number (*)', 'register_phone');
                        echo form_error('register_phone');
                        echo form_input('register_phone', set_value('register_phone'), 'class="form-control" id="register_phone"');
                        ?>
                    </div>
                    <div class="form-group col-xs-12 col-sm-4">
                        <label>Your age</label>
                        <input type="number" class="form-control" id="register_age" name="register_age" min="0">
                    </div>
                    <div class="form-group col-xs-12 col-sm-8">
                        <?php
                        echo form_label('Workplace/ School', 'register_workplace');
                        echo form_error('register_workplace');
                        echo form_input('register_workplace', set_value('register_workplace'), 'class="form-control" id="register_workplace"');
                        ?>
                    </div>
                    <div class="col-xs-12">
                        <?php echo form_submit('submit', 'Register to get Download Link', 'class="btn btn-primary"'); ?>
						<br>
						<small>We will send a link within an email to download your requested book</small>
                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
