<link rel="stylesheet" href="<?php echo site_url('assets/sass/admin/') ?>detail.css">
<style type="text/css">
    .image-file{
        display: none;
    }

    [class*='close-'] {
      color: #777;
      font: 14px/100% arial, sans-serif;
      position: absolute;
      right: 5px;
      text-decoration: none;
      text-shadow: 0 1px 0 #fff;
      top: 5px;
    }

    .close-classic:after {
        content: '✖'; /* ANSI X letter */
         color: red;
    }
    .close-classic:hover{
        color: #ffffff;
    }
    /* Dialog */

    .dialog {
        border: 1px solid #ccc;
        border-radius: 5px;
        float: left;
        margin: 20px;
        position: relative;
        width: 150px;
    }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Khóa học
            <small>Chi tiết</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Khóa học</a></li>
            <li class="active">Chi tiết</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Chi tiết Khóa học</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="detail-image col-md-12">
                                <label>Hình ảnh</label>
                                <div class="row">
                                    <?php foreach (json_decode($detail['image']) as $key => $value): ?>
                                        <div class="item dialog">
                                            <img src="<?php echo base_url('assets/upload/courses/'.$value) ?>" width=150 style="cursor: pointer;" class="btn-active-img" data-id="<?php echo $detail['id'] ?>" data-image="<?php echo $value ?>" data-key="<?php echo $key ?>" data-controller="courses" >
                                            <a href="#" class="close-classic" data-id="<?php echo $detail['id'] ?>" data-image="<?php echo $value ?>" data-key="<?php echo $key ?>"  data-controller="courses" ></a>
                                            <?php if ($value == $detail['avatar']): ?>
                                                <i class="fa fa-thumb-tack" aria-hidden="true" style="color: red"></i>
                                            <?php endif ?>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                                <label>Banner</label>
                                <div class="row">
                                    <div class="item col-md-6">
                                        <img src="<?php echo base_url('assets/upload/courses/'. $detail['image_top'] ) ?>" alt="Image Detail" style="width: 100%">
                                    </div>
                                    <div class="item col-md-6">
                                        <img src="<?php echo base_url('assets/upload/courses/'. $detail['image_bottom'] ) ?>" alt="Image Detail" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-info col-md-12">
                                <div class="table-responsive">
                                    <label>Thông tin</label>
                                    <table class="table table-striped">
                                        <tr>
                                            <th colspan="2">Thông tin cơ bản</th>
                                        </tr>
                                        <tr>
                                            <th>Mã Lớp</th>
                                            <td><?php echo $detail['code'] ?> </td>
                                        </tr>
                                        <tr>
                                            <th>Lịch Khai Giảng</th>
                                            <td><?php echo $detail['opening'] ?> </td>
                                        </tr>
										<tr>
											<th>Cam kết đầu ra</th>
											<td><?php echo $detail['promise'] ?> </td>
										</tr>
                                        <tr>
                                            <th>Học Phí</th>
                                            <td><?php echo number_format($detail['price']) ?> <strong> VND</strong></td>
                                        </tr>
                                        <tr>
                                            <th>Học Phí Ưu Đãi</th>
                                            <td><?php echo number_format($detail['discount']) ?> <strong> VND</strong></td>
                                        </tr>
                                        <tr>
                                            <th>Slug</th>
                                            <td><?php echo $detail['slug'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Meta Keywords</th>
                                            <td><?php echo $detail['meta_keywords'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Meta Description</th>
                                            <td><?php echo $detail['meta_description'] ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">

                                <!-- Nav tabs -->
                                <ul class="nav nav-pills nav-justified" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#vi" aria-controls="vi" role="tab" data-toggle="tab">
                                            <span class="badge">1</span> Tiếng Việt
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#en" aria-controls="en" role="tab" data-toggle="tab">
                                            <span class="badge">2</span> English
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="vi">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <th style="width: 130px">Thời gian học: </th>
                                                        <td><?php echo $detail['time_vi'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 100px">Tiêu đề: </th>
                                                        <td><?php echo $detail['title_vi'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 100px">Giới thiệu: </th>
                                                        <td><?php echo $detail['description_vi'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 100px">Nội dung: </th>
                                                        <td><?php echo $detail['content_vi'] ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="en">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <th style="width: 130px">Study time: </th>
                                                        <td><?php echo $detail['time_en'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 100px">Title: </th>
                                                        <td><?php echo $detail['title_en'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 100px">Description: </th>
                                                        <td><?php echo $detail['description_en'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 100px">Content: </th>
                                                        <td><?php echo $detail['content_en'] ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
                        <a href="<?php echo base_url('admin/courses/edit/'.$detail['id']) ?>" class="btn btn-warning" role="button">Chỉnh sửa</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- END ACCORDION & CAROUSEL-->
    </section>
</div>