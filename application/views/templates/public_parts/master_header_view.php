<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo (isset($meta_description))? $meta_description : 'Trung tâm Tiếng Anh myIELTS - Make IELTS Meaningful' ?>" />
	<meta name="keywords" content="<?php echo (isset($meta_keywords))? $meta_keywords : 'myIELTS, IELTS, learning' ?>" />
    <title>myIELTS</title>

	<!-- FAVICON -->
	<link rel="shortcut icon" type="image/png" href="<?php echo site_url('assets/img/favicon.png') ?>"/>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo site_url('assets/lib/') ?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo site_url('assets/lib/') ?>fontAwesome/css/font-awesome.min.css">


    <!-- Google Font -->
    <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700,700i" rel="stylesheet">

	<!-- animate CSS -->
	<link rel="stylesheet" href="<?php echo site_url('assets/lib/') ?>animate/animate.min.css">
	<!-- icomoon CSS -->
	<link rel="stylesheet" href="<?php echo site_url('assets/lib/') ?>icomoon/icomoon.min.css">
	<!-- flexslider CSS -->
	<link rel="stylesheet" href="<?php echo site_url('assets/lib/') ?>flexslider/css/flexslider.min.css">

	<!-- Main Stylesheet
	<link rel="stylesheet" href="<?php echo site_url('assets/sass/') ?>main.css"> -->

	<!-- jQuery 3 -->
	<script src="<?php echo site_url('assets/lib/') ?>jquery/jquery.min.js"></script>

	<!-- Main Js -->
	<script src="<?php echo site_url('assets/js/') ?>main.js"></script>
	<script src="<?php echo site_url('assets/lib/') ?>jquery/jquery.validate.min.js"></script>
	<!-- Easing JS -->
	<script src="<?php echo site_url('assets/lib/') ?>jquery/jquery.easing.1.3.js"></script>
	<!-- Bootstrap JS -->
	<script src="<?php echo site_url('assets/lib/') ?>bootstrap/js/bootstrap.min.js"></script>
	<!-- Waypoint Js -->
	<script src="<?php echo site_url('assets/lib/') ?>jquery/jquery.waypoints.min.js"></script>
	<!-- Stellar Js -->
	<!-- <script src="<?php echo site_url('assets/lib/') ?>jquery/jquery.stellar.min.js"></script> -->
	<!-- Stellar Js -->
	<script src="<?php echo site_url('assets/lib/') ?>flexslider/js/jquery.flexslider-min.js"></script>

</head>

<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&appId=175775833085283&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div class="fh5co-loader"></div>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url('') ?>">
				<img src="<?php echo site_url('assets/img/logo-c.png')?>" alt="logo">
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar-collapse">
            <?php
            $url_vi = '';
            $url_en = '';
            switch($current_link){
                case 'homepage':
                    $url_vi = base_url() . 'vi';
                    $url_en = base_url() . 'en';
                    break;
                case 'about':
                    $url_vi = base_url() . 'vi/about';
                    $url_en = base_url() . 'en/about';
                    break;
                case 'courses':
                    $url_vi = base_url() . 'vi/courses';
                    $url_en = base_url() . 'en/courses';
                    break;
                case 'detail_courses':
                    $url_vi = base_url() . 'vi/courses/detail/'. $current_slug;
                    $url_en = base_url() . 'en/courses/detail/'. $current_slug;
                    break;
                case 'document':
                    $url_vi = base_url() . 'vi/document';
                    $url_en = base_url() . 'en/document';
                    break;
                case 'detail_document':
                    $url_vi = base_url() . 'vi/document/detail/'. $current_slug;
                    $url_en = base_url() . 'en/document/detail/'. $current_slug;
                    break;
                case 'blogs':
                    $url_vi = base_url() . 'vi/blogs/'. $current_slug;
                    $url_en = base_url() . 'en/blogs/'. $current_slug;
                    break;
                case 'detail_blogs':
                    $url_vi = base_url() . 'vi/blogs/detail/'. $current_slug;
                    $url_en = base_url() . 'en/blogs/detail/'. $current_slug;
                    break;
                case 'contact':
                    $url_vi = base_url() . 'vi/contact';
                    $url_en = base_url() . 'en/contact';
                    break;
                default:
                    $url_vi = base_url() . 'vi';
                    $url_en = base_url() . 'en';
                    break;
            }
            ?>
			<ul class="nav navbar-nav">

			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="<?php echo base_url('homepage') ?>"><i class="fa fa-home" aria-hidden="true"></i> <span class="sr-only">(current)</span></a>
				</li>
				<li>
					<a href="<?php echo base_url('about') ?>">
                        <?php echo $this->lang->line('about'); ?>
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php echo $this->lang->line('courses'); ?> <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<!--<li><a href="<?php echo base_url('') ?>">Tong quan khoa hoc</a></li>-->
						<?php foreach ($courses_menu as $key => $value): ?>
							<li><a href="<?php echo base_url('courses/detail/'. $value['slug']) ?>"><?php echo $value['title'] ?></a></li>
						<?php endforeach ?>
					</ul>
				</li>
				<li>
					<a href="<?php echo base_url('opening') ?>">
                        <?php echo $this->lang->line('opening-day'); ?>
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php echo $this->lang->line('blogs'); ?> <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<?php foreach ($posts_menu as $key => $value): ?>
							<li><a href="<?php echo base_url('blogs/'. $value['slug']) ?>"><?php echo $value['title'] ?></a></li>
						<?php endforeach ?>
						
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo base_url('document') ?>"><?php echo $this->lang->line('document'); ?></a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo base_url('contact') ?>">
                        <?php echo $this->lang->line('contact'); ?>
					</a>
				</li>

				<li><a href="<?php echo $url_vi; ?>">Vi</a></li>
				<li></li>
				<li><a href="<?php echo $url_en; ?>">En</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<div id="page">



