<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh sách
            <small>Thông điệp</small>
        </h1>
<!--        <ol class="breadcrumb">-->
<!--            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>-->
<!--            <li class="active">Product/ Service</li>-->
<!--        </ol>-->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <?php if ($this->session->flashdata('message_error')): ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                    <?php echo $this->session->flashdata('message_error'); ?>
                </div>
            <?php endif ?>
            <?php if ($this->session->flashdata('message_success')): ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    <?php echo $this->session->flashdata('message_success'); ?>
                </div>
            <?php endif ?>
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash() ?>" id="csrf" />
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Thông điệp</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <a href="<?php echo base_url('admin/our_message/create') ?>" class="btn btn-primary" role="button">Thêm mới</a>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="table-responsive">
                            <table id="table" class="table table_product">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Giới thiệu</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if($result): ?>
                                <?php $i = 1; ?>
                                <?php foreach ($result as $key => $value): ?>
                                    <tr class="remove_<?php echo $value['id'] ?>">
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $value['description'] ?></td>
                                        <td>
                                            <a href="<?php echo base_url('admin/our_message/edit/'. $value['id']) ?>" class="dataActionEdit"><i class="fa fa-pencil" aria-hidden="true"></i> </a>
                                            <a href="javascript:void(0);" class="dataActionDelete btn-remove" data-controller="our_message" data-id="<?php echo $value['id'] ?>" ><i class="fa fa-remove" aria-hidden="true"></i> </a>
                                        </td>

                                    </tr>
                                <?php endforeach ?>
                                <?php else: ?>
                                    <tr>
                                        Chưa có Thông điệp
                                    </tr>
                                <?php endif; ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Giới thiệu</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="col-md-6 col-md-offset-5 page">
                            <?php echo $page_links ?>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>

                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>