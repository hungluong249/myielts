<!-- About Stylesheet -->
<link rel="stylesheet" href="<?php echo site_url('assets/sass/') ?>courses.css">

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url('https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=3ad3ef89775ee46b86723c2fa64b6805&auto=format&fit=crop&w=1350&q=80');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <h1>Blogs</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="fh5co-featured-menu" class="fh5co-section">
    <div class="container">
        <div class="row">
            <?php for ($i = 0; $i < 6; $i++) { ?>
                <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
                    <div class="fh5co-item">
                        <div class="mask">
                            <a href="<?php echo base_url('blogs/detail') ?>">
                                <img src="https://images.unsplash.com/photo-1450107579224-2d9b2bf1adc8?ixlib=rb-0.3.5&s=0b0fc084bc0625659cbdd0f04b191f62&auto=format&fit=crop&w=1350&q=80" alt="popular course img">
                            </a>
                        </div>

                        <a href="<?php echo base_url('blogs/detail') ?>">
                            <span class="fh5co-price">Blog Post</span>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
                        <a href="<?php echo base_url('blogs/detail') ?>" class="btn btn-default" role="button">See more</a>
                    </div>
                </div>
            <?php } ?>
        </div>


    </div>
</div>