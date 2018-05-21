<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Order
            <small>#007612</small>
        </h1>
        <ol class="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Orders</a></li>
                <li class="active">Order Detail</li>
            </ol>
        </ol>
    </section>

    <div class="pad margin no-print">
        <div class="callout callout-info" style="margin-bottom: 0!important;">
            <h4><i class="fa fa-info"></i> Note:</h4>
            This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
        </div>
    </div>

    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-globe"></i> Mato Creative
                    <small class="pull-right">Date: <span id="currentDate"></span></small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-3 invoice-col">
                From
                <address>
                    <strong>Admin, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (804) 123-5432<br>
                    Email: info@almasaeedstudio.com
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-3 invoice-col">
                To
                <address>
                    <strong>John Doe</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (555) 539-1037<br>
                    Email: john.doe@example.com
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-3 invoice-col">
                <b>Order #007612</b><br>
                <br>
                <b>Order ID:</b> 4F3S8J<br>
                <b>Payment Due:</b> 2/22/2014<br>
                <b>Account:</b> 968-34567
            </div>
            <!-- /.col -->
            <div class="col-sm-3 status-col">
                <h4>Status:</h4>
                <span class="label label-success">Completed</span>
                <br>
                <span class="label label-warning">Pending</span>
                <br>
                <span class="label label-danger">Cancelled</span>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Product</th>
                            <th>Serial #</th>
                            <th>Description</th>
                            <th>Qty</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Laptop</td>
                            <td>455-981-221</td>
                            <td>Best Quality</td>
                            <td>2</td>
                            <td>$64.50</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Apple</td>
                            <td>247-925-726</td>
                            <td>Secondhand</td>
                            <td>3</td>
                            <td>$50.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
                <p class="lead">Payment Methods:</p>
                <img src="<?php echo site_url('assets/public/lib/') ?>dist/img/credit/visa.png" alt="Visa">
                <img src="<?php echo site_url('assets/public/lib/') ?>dist/img/credit/mastercard.png" alt="Mastercard">
                <img src="<?php echo site_url('assets/public/lib/') ?>dist/img/credit/american-express.png" alt="American Express">
                <img src="<?php echo site_url('assets/public/lib/') ?>dist/img/credit/paypal2.png" alt="Paypal">

                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                </p>
            </div>
            <!-- /.col -->
            <div class="col-xs-6">
                <p class="lead">Amount Due <span id="dueDate"></span></p>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width:50%">Subtotal:</th>
                            <td>$250.30</td>
                        </tr>
                        <tr>
                            <th>Tax (9.3%)</th>
                            <td>$10.34</td>
                        </tr>
                        <tr>
                            <th>Shipping:</th>
                            <td>$5.80</td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>$265.24</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <a href="<?php echo base_url('admin/orders/print') ?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                <button type="button" class="btn btn-success pull-right">
                    <i class="fa fa-check-square-o"></i> Complete Order
                </button>
                <button type="button" class="btn btn-danger pull-right" style="margin-right: 5px;">
                    <i class="fa fa-close"></i> Cancel Order
                </button>
                <!--
                <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                    <i class="fa fa-download"></i> Generate PDF
                </button>
                -->
            </div>
        </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
</div>
<!-- /.content-wrapper -->

<!-- REMOVE WHEN USING REAL DATEBASE -->
<script>
    var now = new Date();
    var date = now.getDate() + "/" + now.getMonth() + "/" + now.getFullYear();
    var dueDate = (now.getDate() + 5) + "/" + now.getMonth() + "/" + now.getFullYear();
    //var time = now.getHours() + ":" + now.getMinutes();

    $(function currentDate () {
        $('#currentDate').html(date);
        $('#dueDate').html(dueDate);
    });
</script>