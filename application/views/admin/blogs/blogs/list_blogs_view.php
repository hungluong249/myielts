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
            Blogs
            <small>List of Blogs</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Blogs</a></li>
            <li class="active">List of Blogs</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Blogs</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <a href="<?php echo base_url('admin/blogs/creatBlogs') ?>" class="btn btn-primary" role="button">Add Item</a>
                        <div class="table-responsive">
                            <table id="table" class="table table_product">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Created At</th>
                                        <th>Created By</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Blog 1</td>
                                        <td>
                                            <p>Vivamus aliquam laoreet urna, sodales imperdiet magna maximus et. Ut sed consequat odio. Quisque pharetra, justo blandit feugiat maximus, metus tellus luctus orci, vehicula vestibulum leo ex vel leo. Sed eleifend molestie cursus. Praesent vel nibh lobortis, pellentesque mauris sit amet, viverra velit. Pellentesque semper maximus enim, vitae volutpat nisl facilisis pulvinar. Praesent vitae ultricies est, non vestibulum lorem. Mauris ut pellentesque sem, eu bibendum quam.</p>
                                        </td>
                                        <td>
                                            <div class="mask_sm">
                                                <img src="http://events.globallandscapesforum.org/wp-content/uploads/sites/2/2017/11/33239101020_d20d6905a9_z.jpg" alt="image">
                                            </div>
                                        </td>
                                        <td>Category I.I</td>
                                        <td><p class="currentDate"></p></td>
                                        <td>Adminstrator</td>
                                        <td>
                                            <span class="label label-success">Available</span>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('admin/blogs/editBlogs') ?>" id="dataActionEdit"><i class="fa fa-pencil" aria-hidden="true"></i> </a>
                                            <a href="" id="dataActionDelete"><i class="fa fa-remove" aria-hidden="true"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Blog 2</td>
                                        <td>
                                            <p>Vivamus aliquam laoreet urna, sodales imperdiet magna maximus et. Ut sed consequat odio. Quisque pharetra, justo blandit feugiat maximus, metus tellus luctus orci, vehicula vestibulum leo ex vel leo. Sed eleifend molestie cursus. Praesent vel nibh lobortis, pellentesque mauris sit amet, viverra velit. Pellentesque semper maximus enim, vitae volutpat nisl facilisis pulvinar. Praesent vitae ultricies est, non vestibulum lorem. Mauris ut pellentesque sem, eu bibendum quam.</p>
                                        </td>
                                        <td>
                                            <div class="mask_sm">
                                                <img src="https://cdn.pixabay.com/photo/2017/04/22/18/41/landscape-2252017_960_720.jpg" alt="image">
                                            </div>
                                        </td>
                                        <td>Category I.II</td>
                                        <td><p class="currentDate"></p></td>
                                        <td>Adminstrator</td>
                                        <td>
                                            <span class="label label-warning">Pending</span>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('admin/blogs/editBlogs') ?>" id="dataActionEdit"><i class="fa fa-pencil" aria-hidden="true"></i> </a>
                                            <a href="" id="dataActionDelete"><i class="fa fa-remove" aria-hidden="true"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Blog 3</td>
                                        <td>
                                            <p>Vivamus aliquam laoreet urna, sodales imperdiet magna maximus et. Ut sed consequat odio. Quisque pharetra, justo blandit feugiat maximus, metus tellus luctus orci, vehicula vestibulum leo ex vel leo. Sed eleifend molestie cursus. Praesent vel nibh lobortis, pellentesque mauris sit amet, viverra velit. Pellentesque semper maximus enim, vitae volutpat nisl facilisis pulvinar. Praesent vitae ultricies est, non vestibulum lorem. Mauris ut pellentesque sem, eu bibendum quam.</p>
                                        </td>
                                        <td>
                                            <div class="mask_sm">
                                                <img src="https://cdn.pixabay.com/photo/2017/04/22/18/41/landscape-2252017_960_720.jpg" alt="image">
                                            </div>
                                        </td>
                                        <td>Category I.I</td>
                                        <td><p class="currentDate"></p></td>
                                        <td>Adminstrator</td>
                                        <td>
                                            <span class="label label-warning">Pending</span>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('admin/blogs/editBlogs') ?>" id="dataActionEdit"><i class="fa fa-pencil" aria-hidden="true"></i> </a>
                                            <a href="" id="dataActionDelete"><i class="fa fa-remove" aria-hidden="true"></i> </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Created At</th>
                                        <th>Created By</th>
                                        <th>Status</th>
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

<!-- REMOVE WHEN USING REAL DATEBASE -->
<script>
    var now = new Date();
    var date = now.getDate() + "/" + now.getMonth() + "/" + now.getFullYear() + " | " + now.getHours() + ":" + now.getMinutes();

    $(function currentDate () {
        $('.currentDate').html(date);
    });
</script>