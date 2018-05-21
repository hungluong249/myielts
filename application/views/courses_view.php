<!-- About Stylesheet -->
<link rel="stylesheet" href="<?php echo site_url('assets/sass/') ?>courses.min.css">

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url('https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=14cc613995f60d89c4a908f3ea5c2409&auto=format&fit=crop&w=1974&q=80');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <h1>myIELTS Courses</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="fh5co-featured-menu" class="fh5co-section">
    <div class="container">
		<div class="row">
            <?php for ($i = 0; $i < 4; $i++) { ?>
				<div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
					<div class="fh5co-item">
						<div class="mask">
							<a href="<?php echo base_url('courses/detail') ?>">
								<img src="http://www.gettingsmart.com/wp-content/uploads/2017/07/College-Students-Using-Laptops-Feature-Image.jpg" alt="popular course img">
							</a>
						</div>
						<a href="<?php echo base_url('courses/detail') ?>">
							<h3>Kid's Course</h3>
						</a>
						<span class="fh5co-price">1.000.000 vnd</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
						<a href="<?php echo base_url('courses/detail') ?>" class="btn btn-default" role="button">See more</a>
						<button type="button" class="btn btn-primary" role="button">Register Now!</button>
					</div>
				</div>
            <?php } ?>
		</div>


    </div>
</div>