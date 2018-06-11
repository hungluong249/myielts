<!-- Homepage Stylesheet -->
<link rel="stylesheet" href="<?php echo site_url('assets/sass/') ?>homepage.min.css">

<!--
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url('http://www.lifeoftrends.com/wp-content/uploads/2017/08/InspiredStudents.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="display-t js-fullheight">
					<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
						<h1><?php echo $this->lang->line('intro-about'); ?></h1>
						<a href="#fh5co-about" class="btn btn-primary"><?php echo $this->lang->line('getting-started'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
-->

<div class="header container-fluid">

	<div class="row">
			<div class="left col-sm-3 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><?php echo $this->lang->line('register-title'); ?> </h3>
					</div>
					<div class="panel-body">
                        <?php
                        echo form_open_multipart('', array('class' => 'form-horizontal', 'id' => 'register-courses-form'));
                        ?>
						<div class="col-xs-12">

						</div>
						<div class="form-group col-xs-12">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i> </span>
                                <?php
                                //echo form_label($this->lang->line('register-name') .' (*)', 'register_courses_name');
                                echo '';
                                echo form_error('register_courses_name');
                                echo form_input('register_courses_name', set_value('register_courses_name'), 'class="form-control" id="register-courses-name" placeholder="' . $this->lang->line('register-name') . '"');
                                ?>
							</div>

						</div>
						<div class="form-group col-xs-12">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i> </span>
                                <?php
                                //echo form_label($this->lang->line('register-email') .' (*)', 'register_courses_mail');
                                echo form_error('register_courses_mail');
                                echo form_input('register_courses_mail', set_value('register_courses_mail'), 'class="form-control" id="register-courses-mail" placeholder="'. $this->lang->line('register-email') .'"');
                                ?>
							</div>
						</div>
						<div class="form-group col-xs-12">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i> </span>
                                <?php
                                //echo form_label($this->lang->line('register-phone') .' (*)', 'register_courses_phone');
                                echo form_error('register_courses_phone');
                                echo form_input('register_courses_phone', set_value('register_courses_phone'), 'class="form-control" id="register-courses-phone" placeholder="'. $this->lang->line('register-phone') .'"');
                                ?>
							</div>
						</div>
						<div class="form-group col-xs-12">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-address-card" aria-hidden="true"></i> </span>
								<!--<label><?php echo $this->lang->line('register-age'); ?></label>-->
								<input type="number" class="form-control" id="register-courses-age" name="register_courses_age" min="0" placeholder="<?php echo $this->lang->line('register-age'); ?>">
							</div>
						</div>
						<!--
						<div class="form-group col-xs-12">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-building" aria-hidden="true"></i> </span>
                                <?php
                                //echo form_label($this->lang->line('register-office'), 'register_courses_workplace');
                                echo form_error('register_courses_workplace');
                                echo form_input('register_courses_workplace', set_value('register_courses_workplace'), 'class="form-control" id="register-courses-workplace" placeholder="'. $this->lang->line('register-office') .'"');
                                ?>
							</div>
						</div>
						-->
						<div class="col-xs-12">
							<!--<small><?php echo $this->lang->line('register-info'); ?><br><br></small>-->
						</div>

						<input type="hidden" name="courses_id" value="" id="courses-id">
						<div class="col-xs-12">
                            <?php echo form_submit(array('type' => 'submit', 'name' => 'submit'), $this->lang->line('register-submit') , 'class="btn btn-primary btn-register"'); ?>
							<br>
						</div>


                        <?php echo form_close(); ?>

					</div>
				</div>
			</div>

			<div class="right col-sm-9 col-xs-12">
				<div id="header-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#header-slider" data-slide-to="0" class="active"></li>
						<li data-target="#header-slider" data-slide-to="1"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<?php foreach ($banners as $key => $value): ?>
							<div class="item <?php echo ($key == 0)? 'active' : '' ?>">
								<div class="mask">
									<img src="<?php echo base_url('assets/upload/banners/'. $value['image']) ?>" alt="...">
								</div>
							</div>
						<?php endforeach ?>

						<!--
						<?php foreach (json_decode($detail['image'])as $key => $value): ?>
							<div class="item <?php echo ($key == 0)? 'active' : '' ?>">
								<div class="mask">
									<img src="<?php echo base_url('assets/upload/courses/' . $value) ?>" alt="...">
								</div>
							</div>
						<?php endforeach; ?>
						-->
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#header-slider" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#header-slider" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>

		</div>

</div>

<div id="fh5co-methods" class="fh5co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 fh5co-heading animate-box">
				<h2><?php echo $this->lang->line('methods-head'); ?></h2>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 col-xs-12 img-wrap animate-box" data-animate-effect="fadeInUp">
						<p><?php echo $this->lang->line(''); ?></p> <!--Description cho phan phuong phap giang day-->
					</div>
				</div>
			</div>

			<div class="item col-sm-3 col-xs-6 img-wrap animate-box" data-animate-effect="fadeInUp">
				<div class="icon">
					<img src="<?php echo site_url('assets/img/') ?>method-1.png" alt="phuong phap so 1">
				</div>
				<div class="content">
					<h4><?php echo $this->lang->line('method-1-head'); ?></h4>
					<ul>
						<li><?php echo $this->lang->line('method-1-content-1'); ?></li>
						<li><?php echo $this->lang->line('method-1-content-2'); ?></li>
					</ul>

				</div>
			</div>

			<div class="item col-sm-3 col-xs-6 img-wrap animate-box" data-animate-effect="fadeInUp">
				<div class="icon">
					<img src="<?php echo site_url('assets/img/') ?>method-2.png" alt="phuong phap so 1">
				</div>
				<div class="content">
					<h4><?php echo $this->lang->line('method-2-head'); ?></h4>
					<ul>
						<li><?php echo $this->lang->line('method-2-content-1'); ?></li>
						<li><?php echo $this->lang->line('method-2-content-2'); ?></li>
					</ul>

				</div>
			</div>

			<div class="item col-sm-3 col-xs-6 img-wrap animate-box" data-animate-effect="fadeInUp">
				<div class="icon">
					<img src="<?php echo site_url('assets/img/') ?>method-3.png" alt="phuong phap so 1">
				</div>
				<div class="content">
					<h4><?php echo $this->lang->line('method-3-head'); ?></h4>
					<ul>
						<li><?php echo $this->lang->line('method-3-content-1'); ?></li>
						<li><?php echo $this->lang->line('method-3-content-2'); ?></li>
					</ul>

				</div>
			</div>

			<div class="item col-sm-3 col-xs-6 img-wrap animate-box" data-animate-effect="fadeInUp">
				<div class="icon">
					<img src="<?php echo site_url('assets/img/') ?>method-4.png" alt="phuong phap so 1">
				</div>
				<div class="content">
					<h4><?php echo $this->lang->line('method-4-head'); ?></h4>
					<ul>
						<li><?php echo $this->lang->line('method-4-content-1'); ?></li>

					</ul>

				</div>
			</div>

		</div>
	</div>
</div>

<div id="fh5co-courses" class="fh5co-section">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 fh5co-heading animate-box">
				<h2><?php echo $this->lang->line('courses-head'); ?></h2>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
            <?php foreach ($courses as $key => $value): ?>
			<div class="item col-xs-12 img-wrap animate-box" data-animate-effect="fadeInUp">
				<div class="inner">
					<div class="head">
						<h3><?php echo $value['title'] ?></h3>
					</div>
					<div class="content">
						<p><b><?php echo $this->lang->line('courses-input'); ?>: <?php echo $value['input'] ?></b></p>
						<p><b><?php echo $this->lang->line('courses-output'); ?>: <?php echo $value['output'] ?></b></p>
						<br>
						<span class="description"><?php echo $value['description'] ?></span>
					</div>
					<div class="foot">
						<a href="<?php echo base_url('courses/detail/'. $value['slug']) ?>" class="btn btn-default" role="button"><?php echo $this->lang->line('see-more'); ?></a>
					</div>

					<div class="arrow"></div>
				</div>
			</div>
            <?php endforeach ?>
		</div>

	</div>
</div>

<div id="fh5co-benefit" class="fh5co-section">
	<div class="container-fluid">
		<img src="<?php echo base_url('assets/upload/benefits/'. $benefit['image']) ?>" alt="beifit img">
	</div>
</div>

<div id="fh5co-team" class="fh5co-section">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
				<h2><?php echo $this->lang->line('team-head'); ?></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, consequatur. Aliquam quaerat pariatur repellendus veniam nemo, saepe, culpa eius aspernatur cumque suscipit quae nobis illo tempora. Eum veniam necessitatibus, blanditiis facilis quidem dolore! Dolorem, molestiae.</p>

			</div>
		</div>
		<div class="row">
			<?php foreach ($team as $key => $value): ?>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="fh5co-blog animate-box">
						<a href="">
							<div class="mask">
								<img src="<?php echo base_url('assets/upload/teams/'. $value['image']) ?>" alt="img">
							</div>
						</a>
						<div class="blog-text">
							<h3><?php echo $value['title'] ?></h3>
							<p><?php echo $value['description'] ?></p>
							<!--
							<ul class="stuff">
								<li><a href="<?php echo base_url('about') ?>"><?php echo $this->lang->line('see-more'); ?><i class="icon-arrow-right22"></i></a></li>
							</ul>
							-->
						</div>
					</div>
				</div>
            <?php endforeach ?>

		</div>
	</div>
</div>

<!--
<div id="fh5co-about" class="fh5co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 img-wrap animate-box" data-animate-effect="fadeInLeft">
				<img src="<?php echo base_url('assets/upload/about/'. $about['avatar']) ?>" alt="img about" width="100%">
			</div>
			<div class="col-md-5 col-md-push-1 animate-box">
				<div class="section-heading">
					<h2><?php echo $about['about_title'] ?></h2>
                    <?php echo $about['about_content'] ?>
					<p><a href="<?php echo base_url('about') ?>" class="btn btn-primary"><?php echo $this->lang->line('more-info'); ?></a></p>
				</div>
			</div>
		</div>
	</div>
</div>
-->

<!--
<div id="fh5co-featured-menu" class="fh5co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 fh5co-heading animate-box">
				<h2><?php echo $this->lang->line('courses'); ?></h2>
				<div class="row">
					<div class="col-md-6">
						<p><?php echo $this->lang->line('intro-courses'); ?></p>
					</div>
				</div>
			</div>

			<?php foreach ($courses as $key => $value): ?>
				<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
					<div class="fh5co-item">
						<div class="mask">
							<img src="<?php echo base_url('assets/upload/courses/' . $value['avatar']); ?>" alt="<?php echo $value['slug'] ?> img">
						</div>
						<h3><?php echo $value['title'] ?></h3>

						<span class="fh5co-price"><?php echo number_format($value['price']) ?> vnd</span>

						<p><?php echo $value['description'] ?></p>
						<a href="<?php echo base_url('courses/detail/'. $value['slug']) ?>" class="btn btn-default" role="button"><?php echo $this->lang->line('see-more'); ?></a>
					</div>
				</div>
			<?php endforeach ?>

		</div>
	</div>
</div>
-->

<!--
<div id="fh5co-slider" class="fh5co-section animate-box">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 animate-box">
				<div class="fh5co-heading">
					<h2><?php echo $this->lang->line('testinomial'); ?></h2>
				</div>
			</div>
			<div class="col-xs-12 animate-box">
				<aside id="fh5co-slider-wrwap">
					<div class="flexslider">
						<ul class="slides">
                           	<?php foreach ($comments as $key => $value): ?>
								<li>
									<div class="overlay-gradient"></div>
									<div class="mask">
										<img src="<?php echo base_url('assets/upload/comments/'. $value['image']) ?>" alt="img person">
									</div>
									<div class="container-fluid">
										<div class="row">
											<div class="col-xs-6 slider-text slider-text-bg">
												<div class="slider-text-inner">
													<div class="desc">
														<p><?php echo $value['description'] ?></p>
														<blockquote>
															<p class="author"><cite>&mdash; <?php echo $value['title'] ?></cite></p>
														</blockquote>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
                            <?php endforeach ?>
						</ul>
					</div>
				</aside>
			</div>
		</div>
	</div>
</div>
-->


<div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url('https://www.bestcolleges.com/wp-content/uploads/African_American_Graduates.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2><?php echo $this->lang->line('slogan'); ?></h2>
				<!--
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae enim quae vitae cupiditate, sequi quam ea id dolor reiciendis consectetur repudiandae. Rem quam, repellendus veniam ipsa fuga maxime odio? Eaque!</p>
				-->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register-courses">
					<?php echo $this->lang->line('join-now'); ?>!
				</button>
			</div>
		</div>
	</div>
</div>

<div id="fh5co-blog" class="fh5co-section">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
				<h2><?php echo $this->lang->line('blogs'); ?></h2>
				<!--
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, consequatur. Aliquam quaerat pariatur repellendus veniam nemo, saepe, culpa eius aspernatur cumque suscipit quae nobis illo tempora. Eum veniam necessitatibus, blanditiis facilis quidem dolore! Dolorem, molestiae.</p>
				-->
			</div>
		</div>
		<div class="row">

            <?php foreach ($blogs as $key => $value): ?>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="fh5co-blog animate-box">
						<a href="#">
							<div class="mask">
								<img src="<?php echo base_url('assets/upload/blogs/'. $value['image']) ?>" alt="<?php echo $value['slug'] ?> img">
							</div>
						</a>
						<div class="blog-text">
							<span class="posted_on"><?php echo date_format(date_create($value['updated_at']), 'd-m-Y') ?></span>
							<h3><a href="<?php echo base_url('blogs/detail/'. $value['slug']) ?>"><?php echo $value['title'] ?></a></h3>
							<p><?php echo $value['description'] ?></p>
							<ul class="stuff">
								<!-- <li><i class="icon-heart2"></i>1.2K</li>
								<li><i class="icon-eye2"></i>2K</li> -->
								<li><a href="<?php echo base_url('blogs/detail/'. $value['slug']) ?>"><?php echo $this->lang->line('see-more'); ?><i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			<?php endforeach ?>

		</div>
	</div>
</div>

<!--
<div class="btn-register">
	<button class="btn btn-primary btn-fixed" data-toggle="modal" data-target="#register-courses">
		<i class="fa fa-2x fa-pencil-square-o" aria-hidden="true"></i>
	</button>
</div>
-->
