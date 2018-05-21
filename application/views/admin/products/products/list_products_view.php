<!-- STYLE -->
<link rel="stylesheet" href="<?php echo site_url('assets/public/lib/') ?>dataTable/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="<?php echo site_url('assets/public/') ?>sass/admin/datatable.css">

<!-- SCRIPT -->
<script src="<?php echo site_url('assets/public/lib/') ?>dataTable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo site_url('assets/public/lib/') ?>dataTable/js/dataTables.bootstrap.min.js"></script>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Products
            <small>List of Products</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Products</a></li>
            <li class="active">List of Products</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Products</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <a href="<?php echo base_url('admin/products/creatProducts') ?>" class="btn btn-primary" role="button">Add Item</a>
                        <div class="table-responsive">
                            <table id="table" class="table table_product">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Description</th>
                                    <th>Detail</th>
                                    <th>Category</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="mask_sm">
                                            <img src="https://i5.walmartimages.com/asr/83532a19-d7c2-4628-bfc9-defd8862820e_1.ce9eb1fa80f30adb291ccc08f36e50b2.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">
                                        </div>
                                    </td>
                                    <td>Laptop</td>
                                    <td>Sit amet salami venison chicken flank fatback doner.</td>
                                    <td>
										<a href="<?php echo base_url('admin/products/detail') ?>"
                                        <button class="btn btn-default btn-sm" type="button" data-toggle="collapse" data-target="#collapse_1" aria-expanded="false" aria-controls="collapse_1">See Detail</button>
                                    </td>
                                    <td>Electricity</td>
                                    <td>3.600</td>
                                    <td>$300</td>
                                    <td><span class="label label-success">Available</span></td>
                                    <td>
                                        <a href="<?php echo base_url('admin/products/editProducts') ?>" id="dataActionEdit"><i class="fa fa-pencil" aria-hidden="true"></i> </a>
                                        <a href="" id="dataActionDelete"><i class="fa fa-remove" aria-hidden="true"></i> </a>
                                    </td>

                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="mask_sm">
                                            <img src="https://media.istockphoto.com/photos/red-apple-picture-id495878092">
                                        </div>
                                    </td>
                                    <td>Apple</td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    <td>

                                    </td>
                                    <td>Fruit</td>
                                    <td>7.322</td>
                                    <td>$2</td>
                                    <td><span class="label label-warning">Pending</span></td>
                                    <td>
                                        <a href="<?php echo base_url('admin/products/editProducts') ?>" id="dataActionEdit"><i class="fa fa-pencil" aria-hidden="true"></i> </a>
                                        <a href="" id="dataActionDelete"><i class="fa fa-remove" aria-hidden="true"></i> </a>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Description</th>
                                    <th>Detail</th>
                                    <th>Category</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
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