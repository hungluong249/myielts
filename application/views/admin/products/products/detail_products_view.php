<!-- STYLE -->
<link rel="stylesheet" href="<?php echo site_url('assets/public/') ?>sass/admin/detail.css">

<!-- SCRIPT -->
<script src="<?php echo site_url('assets/public/lib/') ?>dataTable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo site_url('assets/public/lib/') ?>dataTable/js/dataTables.bootstrap.min.js"></script>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Products
            <small>Detail</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Products</a></li>
            <li class="active">Detail</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Detail Products</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
						<div class="row">
							<div class="detail-image col-md-6">
								<label>Image</label>
								<div class="row">
									<div class="item col-md-12">
										<div class="mask-lg">
											<img src="https://i5.walmartimages.com/asr/83532a19-d7c2-4628-bfc9-defd8862820e_1.ce9eb1fa80f30adb291ccc08f36e50b2.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF" alt="Image Detail">
										</div>
									</div>
									<div class="item col-md-4">
										<div class="mask-sm">
											<img src="https://i5.walmartimages.com/asr/83532a19-d7c2-4628-bfc9-defd8862820e_1.ce9eb1fa80f30adb291ccc08f36e50b2.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF" alt="Image Detail">
										</div>
									</div>
									<div class="item col-md-4">
										<div class="mask-sm">
											<img src="https://i5.walmartimages.com/asr/83532a19-d7c2-4628-bfc9-defd8862820e_1.ce9eb1fa80f30adb291ccc08f36e50b2.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF" alt="Image Detail">
										</div>
									</div>
								</div>
							</div>
							<div class="detail-info col-md-6">
								<div class="table-responsive">
									<label>Information</label>
									<table class="table table-striped">
										<tr>
											<th colspan="2">Basic Information</th>
										</tr>
										<tr>
											<th>Name</th>
											<td>Laptop</td>
										</tr>
										<tr>
											<th>Category</th>
											<td>Category I / Category II / Category III</td>
										</tr>
										<tr>
											<th>Quantity</th>
											<td>3600</td>
										</tr>
										<tr>
											<th>Price</th>
											<td>$300</td>
										</tr>
										<tr>
											<th>Status</th>
											<td><span class="label label-success">Available</span></td>
										</tr>
										<tr>
											<th>Description</th>
											<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in arcu sed purus sollicitudin vestibulum. Sed sit amet est non quam sollicitudin tempus nec quis felis. Sed at auctor sem. Praesent blandit nibh eget fringilla ultrices. Sed egestas in lectus in rhoncus. Curabitur id pretium mi. Praesent sodales massa at mollis gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet nulla at ante egestas semper.</td>
										</tr>
										<tr>
											<th>Content</th>
											<td>
												<p>Nam fringilla odio sit amet ante porta, nec varius neque varius. Donec auctor, lectus a cursus sodales, odio risus hendrerit nunc, eget dapibus sapien ex a est. Curabitur placerat eros sit amet mi convallis blandit. Ut nunc libero, sodales a hendrerit fermentum, rhoncus ac enim. Nullam posuere nec erat sit amet rhoncus. Nam dapibus semper leo ac accumsan. Nam eget consequat neque. Cras sed leo in quam ornare facilisis vel vel massa. Etiam sit amet dapibus eros. Maecenas varius leo finibus nulla porta mollis.</p>
												<p>Quisque tincidunt pellentesque mauris. Pellentesque a pretium enim. Nam nunc purus, vulputate ac auctor eu, molestie sit amet tellus. Curabitur pellentesque maximus eros eu sodales. Aliquam aliquet eget libero non vestibulum. In dictum suscipit lectus vel fringilla. Morbi facilisis, diam rhoncus efficitur fringilla, nulla nulla accumsan nisl, vitae rhoncus metus nunc at enim. Donec eu est sit amet arcu mattis mollis. Vestibulum at luctus quam. Donec pharetra ex sem, a feugiat felis luctus ac. Pellentesque feugiat dictum massa quis venenatis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque sit amet orci non velit commodo suscipit in ac velit. Phasellus tempus, orci quis venenatis tincidunt, sapien erat sagittis augue, nec dapibus metus nibh non nibh.</p>
											</td>
										</tr>
										<tr>
											<th colspan="2">Detail Information</th>
										</tr>
										<tr>
											<th>Time</th>
											<td>2016</td>
										</tr>
										<tr>
											<th>Production</th>
											<td>Dell</td>
										</tr>
										<tr>
											<th>Made In</th>
											<td>China</td>
										</tr>
										<tr>
											<th>Ingredients</th>
											<td>Steel</td>
										</tr>
										<tr>
											<th>Weight</th>
											<td>300gr</td>
										</tr>
										<tr>
											<th>Volume</th>
											<td>1l</td>
										</tr>
									</table>
								</div>
							</div>
						</div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
			<div class="col-md-3">
				<div class="box box-warning">
					<div class="box-header">
						<h3 class="box-title">Edit Information</h3>
					</div>
					<div class="box-body">
						<a href="<?php echo base_url('admin/products/editProducts') ?>" class="btn btn-warning" role="button">Edit</a>
					</div>
				</div>
			</div>
        </div>
        <!-- /.row -->
        <!-- END ACCORDION & CAROUSEL-->
    </section>
</div>

<!-- DataTables -->
<script>
    $(function () {
        $('#table').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>