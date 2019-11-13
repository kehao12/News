<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quản lý thể loại</title>

    <!-- Bootstrap core CSS-->
    <link href="./resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="./resources/font/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="./resources/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./resources/css/sb-admin.css" rel="stylesheet">


</head>

<body id="page-top">

<?php include('header.php')?>
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('menu.php'); ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Quản lý thể loại</li>
                </ol>

                <!-- Page Content -->
                <?php include('thongbao.php')?>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Quản lý thể loại
                        <button class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#create">Thêm
                            thể loại
                        </button>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên môn học</th>
                                        <th>Danh mục</th>

                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên thể loại</th>
                                        <th>Danh mục</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    if($data!=null){ 
                                    $i=1; foreach ($data as $value ) {
                                   ?>
                                    <tr>
                                        <td><?php echo $i++;?></td>
                                        <td style="font-size:15px;"><?php echo $value['TenTL'];?></td>
                                        <?php foreach($data1 as $value1){
                                            if($value['idDM']==$value1['idDM']){?>
                                        <td><?php echo $value1['TenDM']?>
                                        </td>
                                        <?php }}?>

                                        <td>
                                            <div class="tt" style="margin: 0 auto; text-align: center;">
                                                <a href="#" data-toggle="modal"
                                                    data-target="#upModal<?php echo $value['idTL'] ?>">
                                                    <i class="fas fa-edit" style="color: green;"></i>
                                                </a>
                                                <div class="modal fade" id="upModal<?php echo $value['idTL'] ?>">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">

                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Sửa thể loại</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>

                                                            <!-- Modal body -->
                                                            <div class="modal-body" style="text-align: left !important;">
                                                                <form
                                                                action="?controller=Admin&action=suatl&id=<?php echo $value['idTL'] ?>"
                                                                    style="margin-bottom: 20px;" method="post">
                                                               
                                                                    <div class="form-group">
                                                                        <label for="tieude">Tên thể loại:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="TenTL"
                                                                            value="<?php echo  $value['TenTL'] ?>"
                                                                            id="tieude" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="filter">Thứ tự:</label>
                                                                        <select class="form-control" name="ThuTu">
                                                                            <option
                                                                                value="<?php echo  $value['ThuTu'] ?>"
                                                                                selected><?php echo  $value['ThuTu'] ?>
                                                                            </option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                        </select>
                                                                    </div>


                                                                    <button type="submit" name="them1"
                                                                        class="btn btn-default btn-primary">Sửa
                                                                        mục</button>
                                                                 
                                                                </form>
                                                            </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <a href="#" data-toggle="modal"
                                                    data-target="#delModal<?php echo $value['idTL'] ?>">
                                                    <i class="fas fa-trash-alt"
                                                        style="color: red;margin-left: 20px;"></i>
                                                </a>

                                                <div class="modal fade" id="delModal<?php echo $value['idTL'] ?>"
                                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Bạn muốn
                                                                    xóa?</h5>
                                                                <button class="close" type="button" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Nhấn "Xóa" để xóa thể loại
                                                                <?php echo $value['TenTL'] ?>.</div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button"
                                                                    data-dismiss="modal">Huỷ bỏ</button>
                                                                <a class="btn btn-primary"
                                                                    href="?controller=Admin&action=xoatl&id=<?php echo $value['idTL'] ?>">Xóa</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php }}?>
                                    <div class="modal fade" id="create">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Thêm thể loại</h4>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <?php include('theloai/themtl.php')?>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->


        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn muốn thoát?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Nhấn "Thoát" để đăng xuất.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Huỷ bỏ</button>
                    <a class="btn btn-primary" href="login.html">Thoát</a>
                </div>
            </div>
        </div>
    </div> -->

    <?php include('logout.php');?>

    <!-- Bootstrap core JavaScript-->
    <script src="resources/js/jquery.min.js"></script>
    <script src="resources/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="resources/js/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="resources/datatables/jquery.dataTables.js"></script>
    <script src="resources/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="resources/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="resources/js/datatables-demo.js"></script>

    <script type="text/javascript">

$(document).ready(function () {
 
window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
        <?php unset($_SESSION['success']);
        unset($_SESSION['fail']); ?>
    });
}, 5000);
 
});
</script>

</body>

</html>