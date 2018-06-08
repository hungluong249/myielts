<!-- Opening Stylesheet -->
<link rel="stylesheet" href="<?php echo site_url('assets/sass/') ?>opening.min.css">


<div id="fh5co-opening" class="fh5co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 fh5co-heading animate-box">
				<h2><?php echo $this->lang->line('courses-timetable'); ?></h2>
			</div>
			<div class="content">

                <?php foreach ($result as $key => $value): ?>
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
						<td><?php echo $value['title'] ?></td>
						<td><?php echo $value['code'] ?></td>
						<td><?php echo $value['time'] ?></td>
						<td><?php echo $value['opening'] ?></td>
						<td><?php echo number_format($value['price']) ?></td>
						<td><?php echo ($value['discount'] == null)? number_format($value['discount']) : number_format($value['price']) ?></td>
						<td>
							<button class="btn btn-primary" data-toggle="modal" data-target="#register-courses">
                                <?php echo $this->lang->line('timetable-register'); ?>
							</button>
						</td>
					</tr>
					</tbody>
				</table>
                <?php endforeach ?>
			</div>
		</div>
	</div>
</div>