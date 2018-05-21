<!-- OVERVIEW STYLE -->
<link rel="stylesheet" href="<?php echo site_url('assets/public/sass/') ?>admin/overview.css">

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Orders
            <small>Overview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Orders</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="small-box bg-orange">
                            <div class="inner">
                                <h3>10</h3>

                                <p>Pending Orders</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-refresh"></i>
                            </div>
                            <a href="<?php echo base_url('admin/orders/pending') ?>" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>20</h3>

                                <p>Completed Orders</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-check-square-o"></i>
                            </div>
                            <a href="<?php echo base_url('admin/orders/completed') ?>" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>5</h3>

                                <p>Cancelled Orders</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-window-close-o"></i>
                            </div>
                            <a href="<?php echo base_url('admin/orders/cancelled') ?>" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.col -->

            <div class="col-md-12">
                <div class="box box-widget">
                    <div class="box-header with-border">
                        <h3 class="box-title">Latest Orders</h3>

                        <div class="box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tr>
                                    <th>No.</th>
                                    <th>Customer's Name</th>
                                    <th>Products</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                </tr>
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
                                        <span class="label label-warning">Pending</span>
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
                                        <span class="label label-danger">Cancelled</span>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('admin/orders/detail') ?>" class="btn btn-default btn-sm" role="button">See Detail</a>
                                    </td>
                                </tr>
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