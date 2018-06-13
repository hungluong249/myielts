<!-- About Stylesheet -->
<link rel="stylesheet" href="<?php echo site_url('assets/sass/') ?>courses.min.css">

<div class="header container-fluid">
	<div class="container">
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

                        <?php if ($detail['image'] != '' && $detail['image'] != null): ?>
                        	<?php foreach (json_decode($detail['image']) as $key => $value): ?>
								<li data-target="#header-slider" data-slide-to="<?php echo $key ?>" class="<?php echo ($key == 0)? 'active' : '' ?>"></li>
                            <?php endforeach ?>
                        <?php endif ?>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<?php if ($detail['image'] != '' && $detail['image'] != null): ?>
							<?php foreach (json_decode($detail['image']) as $key => $value): ?>
								<div class="item <?php echo ($key == 0)? 'active' : '' ?>">
									<div class="mask">
										<img src="<?php echo base_url('assets/upload/courses/'. $value) ?>" alt="...">
									</div>
								</div>
							<?php endforeach ?>
						<?php endif ?>
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
							<img src="<?php echo site_url('assets/upload/courses/' . $detail['image_top'] )?>" alt="">
							<img src="<?php echo site_url('assets/upload/courses/' . $detail['image_bottom'] )?>" alt="">
							<?php echo $detail['courses_description'] ?>
                            <h3 class="promise"><?php echo $this->lang->line('courses-promise'); ?>: <?php echo $detail['promise'] ?></h3>
						</div>

					</div>
					<div role="tabpanel" class="tab-pane" id="detail">
						<div class="section-heading">
							<?php echo $detail['courses_content'] ?>
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
									<td><?php echo $detail['courses_title'] ?></td>
									<td><?php echo $detail['code'] ?></td>
									<td><?php echo $detail['courses_time'] ?></td>
									<td><?php echo $detail['opening'] ?></td>
									<td><?php echo number_format($detail['price']) ?></td>
									<td><?php echo ($detail['discount'] != 0 )? number_format($detail['discount']) : number_format($detail['price']) ?></td>
									<td>
										<button class="btn btn-primary" data-toggle="modal" data-target="#register-courses">
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
                    <div class="fb-share-button" data-href="" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmyielts.vn%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
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
