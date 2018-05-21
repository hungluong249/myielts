<!-- OVERVIEW STYLE -->
<link rel="stylesheet" href="<?php echo site_url('assets/public/sass/') ?>admin/overview.css">

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Product
            <small>Overview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Product</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-widget">
                    <div class="box-header with-border">
                        <h3 class="box-title">Latest Products</h3>

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
                                    <th>Product</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Laptop</td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    <td>Electric</td>
                                    <td>3.600</td>
                                    <td>$300</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Apple</td>
                                    <td>Salami venison chicken flank fatback doner.</td>
                                    <td>Fruit</td>
                                    <td>7.322</td>
                                    <td>$2</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-primary" href="<?php echo base_url('admin/products/products') ?>" role="button">See Detail</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">

                <div class="info-box bg-aqua">
                    <span class="info-box-icon"><i class="fa fa-cubes"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Products on Stock</span>
                        <span class="info-box-number">41,410</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            70%/100% Stock
                        </span>
                    </div>
                </div>

                <div class="info-box bg-aqua">
                    <span class="info-box-icon"><i class="fa fa-cube"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Kind of Products</span>
                        <span class="info-box-number">2</span>

                        <span class="progress-description">
                            Number of Product's Kind
                        </span>
                    </div>
                </div>

                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sale Chart</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="chart">
                            <canvas id="barChart" style="height:230px"></canvas>
                            <div>
                                <ul id="inputData" class="list-unstyled list-inline"></ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END ACCORDION & CAROUSEL-->
    </section>
</div>

<script src="<?php echo site_url('assets/public/lib/') ?>chartJs/js/Chart.js"></script>
<!-- page script -->
<script>
    $(function () {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        var areaChartData = {
            labels  : ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [
                {
                    label               : 'Laptop',
                    data                : [65, 59, 80, 81, 56, 55, 40, 54, 43, 12, 54, 65],
                    fillColor           : '#3b8bba',
                    strokeColor         : '#3b8bba'
                },
                {
                    label               : 'Apple',
                    data                : [28, 48, 40, 19, 86, 27, 90, 86, 54, 45, 23, 23],
                    fillColor           : '#00a65a',
                    strokeColor         : '#00a65a'
                }
            ]
        }

        var outputData = '';
        for (var i=0; i<areaChartData.datasets.length; i++) {
            outputData += '<li style="margin-right: 5px;"><span style="width: 10px; height: 10px; color: #fff; padding: 5px; background-color:' + areaChartData.datasets[i].fillColor + ';">' + areaChartData.datasets[i].label + '</span></li>';
        }

        $('#inputData').html(outputData);

        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
        var barChart                         = new Chart(barChartCanvas)
        var barChartData                     = areaChartData

        var barChartOptions                  = {
            //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
            scaleBeginAtZero        : true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines      : true,
            //String - Colour of the grid lines
            scaleGridLineColor      : 'rgba(0,0,0,.05)',
            //Number - Width of the grid lines
            scaleGridLineWidth      : 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines  : true,
            //Boolean - If there is a stroke on each bar
            barShowStroke           : true,
            //Number - Pixel width of the bar stroke
            barStrokeWidth          : 2,
            //Number - Spacing between each of the X value sets
            barValueSpacing         : 5,
            //Number - Spacing between data sets within X values
            barDatasetSpacing       : 1,
            //String - A legend template
            legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
            //Boolean - whether to make the chart responsive
            responsive              : true,
            maintainAspectRatio     : true
        }

        barChartOptions.datasetFill = false
        barChart.Bar(barChartData, barChartOptions)

        //





        //
    })
</script>

