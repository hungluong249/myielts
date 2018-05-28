<!-- About Stylesheet -->
<link rel="stylesheet" href="<?php echo site_url('assets/sass/') ?>courses.css">

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url('https://images.unsplash.com/photo-1520588831435-1529e6d7cf5e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fd3d7c35892bd8c7c9e757865a764d4c&auto=format&fit=crop&w=1284&q=80');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <h1><?php echo $this->lang->line('contact-title'); ?></h1>
                        <h2><?php echo $this->lang->line('contact-description'); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="fh5co-contact" class="fh5co-section animate-box">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2><?php echo $this->lang->line('contact-chat'); ?></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae enim quae vitae cupiditate, sequi quam ea id dolor reiciendis consectetur repudiandae. Rem quam, repellendus veniam ipsa fuga maxime odio? Eaque!</p>
                <p><a href="mailto:info@yourdomainname.com" class="btn btn-primary"><?php echo $this->lang->line('contact'); ?></a></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">

                <?php
                echo form_open_multipart('', array('class' => 'form-horizontal'));
                ?>

                <div class="form-group col-xs-12">
                    <?php
                    echo form_label($this->lang->line('contact-name') .' (*)', 'contact_name');
                    echo form_error('contact_name');
                    echo form_input('contact_name', set_value('contact_name'), 'class="form-control" id="contact_name"');
                    ?>
                </div>
                <div class="form-group col-xs-12">
                    <?php
                    echo form_label($this->lang->line('contact-mail') .' (*)', 'contact_mail');
                    echo form_error('contact_mail');
                    echo form_input('contact_mail', set_value('contact_mail'), 'class="form-control" id="contact_mail"');
                    ?>
                </div>
                <div class="form-group col-xs-12">
                    <?php
                    echo form_label($this->lang->line('contact-phone') .' (*)', 'contact_phone');
                    echo form_error('contact_phone');
                    echo form_input('contact_phone', set_value('contact_phone'), 'class="form-control" id="contact_phone"');
                    ?>
                </div>
                <div class="form-group col-xs-12">
                    <?php
                    echo form_label($this->lang->line('contact-message'), 'contact_message');
                    echo form_error('contact_message');
                    echo form_textarea('contact_message', set_value('contact_message'), 'class="form-control" id="contact_message"');
                    ?>
                </div>
                <div class="col-xs-12">
                    <?php echo form_submit('submit', $this->lang->line('contact-send'), 'class="btn btn-primary"'); ?>

                </div>

                <?php echo form_close(); ?>

            </div>
        </div>

    </div>
</div>