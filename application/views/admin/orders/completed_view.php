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
            Orders
            <small>Completed</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Orders</a></li>
            <li class="active">Completed</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Completed Orders</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="table" class="table table-hover">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Customer's Name</th>
                                    <th>Products</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Full Name A</td>
                                    <td>
                                        <ol>
                                            <li>Laptop</li>
                                            <li>Apple</li>
                                        </ol>
                                    </td>
                                    <td><ol>
                                            <li>1</li>
                                            <li>3</li>
                                        </ol>
                                    </td>
                                    <td>$306</td>
                                    <td>
                                        <span class="label label-success">Completed</span>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('admin/orders/detail') ?>" class="btn btn-default btn-sm" role="button">See Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Full Name B</td>
                                    <td>
                                        <ol>
                                            <li>Laptop</li>
                                        </ol>
                                    </td>
                                    <td><ol>
                                            <li>2</li>
                                        </ol>
                                    </td>
                                    <td>$600</td>
                                    <td>
                                        <span class="label label-success">Completed</span>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('admin/orders/detail') ?>" class="btn btn-default btn-sm" role="button">See Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Full Name C</td>
                                    <td>
                                        <ol>
                                            <li>Laptop</li>
                                        </ol>
                                    </td>
                                    <td><ol>
                                            <li>200</li>
                                        </ol>
                                    </td>
                                    <td>$60000</td>
                                    <td>
                                        <span class="label label-success">Completed</span>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('admin/orders/detail') ?>" class="btn btn-default btn-sm" role="button">See Detail</a>
                                    </td>
                                </tr>
                                </tbody>
                                <tfooter>
                                    <tr>
                                        <th>No.</th>
                                        <th>Customer's Name</th>
                                        <th>Products</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Detail</th>
                                    </tr>
                                </tfooter>
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