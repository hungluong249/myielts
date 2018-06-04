<!-- About Stylesheet -->
<link rel="stylesheet" href="<?php echo site_url('assets/sass/') ?>courses.min.css">


<header id="fh5co-header" class="fh5co-cover " role="banner"  data-stellar-background-ratio="0.5">
    <div class="overlay"></div>

</header>


<div class="header container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><?php echo $this->lang->line('register-title'); ?>: <?php echo $detail['courses_title'] ?></h3>
					</div>
					<div class="panel-body">
                        <?php
                        echo form_open_multipart('', array('class' => 'form-horizontal', 'id' => 'register-courses-form'));
                        ?>
						<div class="col-xs-12">

						</div>
						<div class="form-group col-xs-12">
                            <?php
                            //echo form_label($this->lang->line('register-name') .' (*)', 'register_courses_name');
                            echo form_error('register_courses_name');
                            echo form_input('register_courses_name', set_value('register_courses_name'), 'class="form-control" id="register-courses-name" placeholder="' . $this->lang->line('register-name') . '"');
                            ?>
						</div>
						<div class="form-group col-xs-12">
                            <?php
                            //echo form_label($this->lang->line('register-email') .' (*)', 'register_courses_mail');
                            echo form_error('register_courses_mail');
                            echo form_input('register_courses_mail', set_value('register_courses_mail'), 'class="form-control" id="register-courses-mail" placeholder="'. $this->lang->line('register-email') .'"');
                            ?>
						</div>
						<div class="form-group col-xs-12">
                            <?php
                            //echo form_label($this->lang->line('register-phone') .' (*)', 'register_courses_phone');
                            echo form_error('register_courses_phone');
                            echo form_input('register_courses_phone', set_value('register_courses_phone'), 'class="form-control" id="register-courses-phone" placeholder="'. $this->lang->line('register-phone') .'"');
                            ?>
						</div>
						<div class="form-group col-xs-12">
							<!--<label><?php echo $this->lang->line('register-age'); ?></label>-->
							<input type="number" class="form-control" id="register-courses-age" name="register_courses_age" min="0" placeholder="<?php echo $this->lang->line('register-age'); ?>">
						</div>
						<div class="form-group col-xs-12">
                            <?php
                            //echo form_label($this->lang->line('register-office'), 'register_courses_workplace');
                            echo form_error('register_courses_workplace');
                            echo form_input('register_courses_workplace', set_value('register_courses_workplace'), 'class="form-control" id="register-courses-workplace" placeholder="'. $this->lang->line('register-office') .'"');
                            ?>
						</div>
						<div class="col-xs-12">
							<small><?php echo $this->lang->line('register-info'); ?><br><br></small>
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

			<div class="col-sm-8 col-xs-12">
				<div id="header-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#header-slider" data-slide-to="0" class="active"></li>
						<li data-target="#header-slider" data-slide-to="1"></li>
						<li data-target="#header-slider" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="mask">
								<img src="..." alt="...">
							</div>
						</div>
						<div class="item">
							<div class="mask">
								<img src="..." alt="...">
							</div>
						</div>
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

</div>

<div id="fh5co-detail" class="fh5co-section">
    <div class="container">
        <div class="row">
            <div class="content col-xs-12">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#description" aria-controls="description" role="tab" data-toggle="tab">
                            <?php echo $this->lang->line('courses-description'); ?>
						</a>
					</li>
					<li role="presentation">
						<a href="#detail" aria-controls="detail" role="tab" data-toggle="tab">
                            <?php echo $this->lang->line('courses-detail'); ?>
						</a>
					</li>
					<li role="presentation">
						<a href="#timetable" aria-controls="timetable" role="tab" data-toggle="tab">
                            <?php echo $this->lang->line('courses-timetable'); ?>
						</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="description">
						<div class="section-heading">
							<h2><?php echo $this->lang->line('courses-description'); ?></h2>
						</div>
						<div class="section-body">
							<?php echo $detail['courses_description'] ?>
                            <h3 class="promise"><?php echo $this->lang->line('courses-promise'); ?>: <?php echo $detail['promise'] ?></h3>
						</div>

					</div>
					<div role="tabpanel" class="tab-pane" id="detail">
						<div class="section-heading">
							<h2><?php echo $this->lang->line('courses-detail'); ?></h2>
						</div>
						<div class="section-body">
                            <?php echo $detail['courses_content'] ?>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="timetable">
						<div class="section-heading">
							<h2><?php echo $this->lang->line('courses-timetable'); ?></h2>
						</div>
						<div class="section-body">
							<table class="table table-bordered">
								<thead>
								<tr>
									<th rowspan="2"><?php echo $this->lang->line('timetable-course'); ?></th>
									<th rowspan="2"><?php echo $this->lang->line('timetable-class'); ?></th>
									<th rowspan="2"><?php echo $this->lang->line('timetable-time'); ?></th>
									<th rowspan="2"><?php echo $this->lang->line('timetable-opening'); ?></th>
									<th colspan="2"><?php echo $this->lang->line('timetable-fee'); ?></th>
									<th rowspan="2"><?php echo $this->lang->line('timetable-register'); ?></th>
								</tr>
								<tr>
									<th><?php echo $this->lang->line('timetable-non-discount'); ?></th>
									<th><?php echo $this->lang->line('timetable-fee-discount'); ?></th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>
										<button class="btn btn-primary" data-toggle="modal" data-target="#register">
                                            <?php echo $this->lang->line('timetable-register'); ?>
										</button>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
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
	<button class="btn btn-primary btn-fixed" data-toggle="modal" data-target="#register">
		<i class="fa fa-2x fa-pencil-square-o" aria-hidden="true"></i>
	</button>
</div>


