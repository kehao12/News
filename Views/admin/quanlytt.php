<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quản lý tin tức</title>

    <!-- Bootstrap core CSS-->
    <link href="./resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="./resources/font/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="./resources/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./resources/css/sb-admin.css" rel="stylesheet">
    <script src="./resources/js/jquery-3.3.1.min.js"></script>
    <script language="javascript" type="text/javascript" src="./resources/ckeditor/ckeditor.js"></script>
    <script language="javascript" type="text/javascript" src="./resources/ckfinder/ckfinder.js"></script>



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
                    <li class="breadcrumb-item active">Quản lý tin tức</li>
                </ol>

                <!-- Page Content -->
                <?php include('thongbao.php')?>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Quản lý tin tức
                        <button class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#create">Đăng
                            tin
                        </button>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tiêu đề</th>

                                        <th>Ngày tạo</th>
                                        <th>Thể loại</th>
                                        <th>Lượt xem</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tiêu đề</th>
                                        <th>Ngày tạo</th>
                                        <th>Thể loại</th>
                                        <th>Lượt xem</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php 
                                    $j=1; 
                                if($data!=null){
                                foreach ($data as $value ) {
                                    
                                      ?>
                                    <tr>
                                        <td><?php echo $j++;?></td>
                                        <td style="font-size:15px;"><?php echo $value['TieuDe'];?></td>
                                        <td><?php $date=new DateTime($value['NgayTao']);  echo date_format($date,"d/m/Y") ;?>
                                        </td>

                                        <?php foreach($data3 as $value3){
                                            foreach ($data1 as $value1 ) {
                                        if($value3['idDM']==$value1['idDM'] && $value['idTL']==$value1['idTL']){?>
                                        <td><?php echo $value3['TenDM']." - ".$value1['TenTL'];?></td>
                                        <?php }}}?>

                                        <td><?php echo $value['SoLanXem'];?></td>
                                        <td><?php if($value['TrangThai']==1) echo "Hiện"; else echo "Ẩn"; ?></td>
                                        <td>
                                            <div class="tt" style="margin: 0 auto;text-align:center;">
                                                <a href="#" data-toggle="modal"
                                                    data-target="#upModal<?php echo $value['idBV'] ?>">
                                                    <i class="fas fa-edit" style="color: green;"></i>
                                                </a>
                                                <div class="modal fade bd-example-modal-lg"
                                                    id="upModal<?php echo $value['idBV'] ?>" role="dialog"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-info">

                                                                <h4 class="modal-title text-white">Sửa bài viết</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body" style="text-align:left !important;">
                                                                <form
                                                                    action="?controller=Admin&action=suatt&id=<?php echo $value['idBV']?>"
                                                                    style="margin-bottom: 20px;" method="post">


                                                                    <div class="form-group">
                                                                        <input type="hidden" name="hinhtam"
                                                                            value="<?php echo $value['HinhAnh'] ?>">
                                                                        <input
                                                                            id="ckfinder-input-<?php echo $value['idBV'] ?>"
                                                                            type="hidden" name="hinhanh"
                                                                            value="<?php echo $value['HinhAnh'] ?>"
                                                                            style="width:60%">
                                                                        <img id="hinhanh<?php echo $value['idBV'] ?>"
                                                                            src="<?php echo $value['HinhAnh'];?>" alt=""
                                                                            class="img-fluid"
                                                                            style="width:300px; height:200px;">
                                                                        <!-- <button id="ckfinder-popup-1" class="button-a button-a-background">Browse Server</button> -->
                                                                        <input
                                                                            onclick="selectFileWithCKFinder('ckfinder-input-<?php echo $value['idBV'] ?>','hinhanh<?php echo $value['idBV'] ?>')"
                                                                            type="button" name="btnChonFile"
                                                                            id="btnChonFile" value="Chọn file" />

                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="tieude">Tiêu đề:</label>
                                                                        <input type="text" class="form-control"
                                                                            value="<?php echo $value['TieuDe'];?>"
                                                                            required name="TieuDe">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="tieude">Tác giả:</label>
                                                                        <input type="text" class="form-control"
                                                                            value="<?php echo $value['TacGia'];?>"
                                                                            name="TacGia">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="tomtat">Tóm tắt:</label>
                                                                        <input type="text" class="form-control"
                                                                            value="<?php echo $value['TomTat'];?>"
                                                                            required name="TomTat">
                                                                    </div>
                                                                    <!-- <div class="form-group">
                        <label for="file">URL hình:</label>
                        <input type="file" class="form-control" name="file">
                      </div> -->



                                                                    <div class="form-group">
                                                                        <label for="filter">Mục tin:</label>
                                                                        <select class="form-control" name="idTL">
                                                                            <?php foreach ($data1 as $value2 ) {
								foreach($data3 as $value3){
								if($value2['idTL']==$value['idTL'] && $value3['idDM']==$value2['idDM']){
											?>
                                                                            <option
                                                                                value="<?php echo $value2['idTL'] ?>"
                                                                                selected>
                                                                                <?php echo  $value3['TenDM']." - ".$value2['TenTL'] ?>
                                                                            </option>

                                                                            <?php }}}?>
                                                                            <?php foreach ($data1 as $value2 ) {
								foreach($data3 as $value3){
								if($value3['idDM']==$value2['idDM'] && $value2['idTL']!=$value['idTL']){
										?>
                                                                            <option
                                                                                value="<?php echo $value2['idTL'] ?>">
                                                                                <?php echo  $value3['TenDM']." - ".$value2['TenTL'] ?>
                                                                            </option>
                                                                            <?php }}}?>

                                                                        </select>
                                                                    </div>

                                                                    <textarea name="NoiDung" required class="ckeditor"
                                                                        id="ckeditor"><?php echo $value['NoiDung'] ?>    </textarea>

                                                                    <div class="form-group">
                                                                        <label for="filter">Trạng thái:</label>
                                                                        <select class="form-control" name="TrangThai">
                                                                            <option
                                                                                value="<?php echo $value['TrangThai'] ?>"
                                                                                selected>
                                                                                <?php if($value['TrangThai']==1) echo 'Hiện'; else echo 'Ẩn' ?>
                                                                            </option>
                                                                            <?php for ($i=1; $i < 3; $i++) { 
                            ?>
                                                                            <option value="<?php echo $i; ?>">
                                                                                <?php if($i==1) echo 'Hiện'; else echo 'Ẩn'; ?>
                                                                            </option>
                                                                            <?php }?>
                                                                        </select>
                                                                    </div>



                                                                    <button type="submit" name="sua"
                                                                        class="btn btn-default btn-primary">Sửa
                                                                        bài</button>


                                                                </form>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                                <a href="#" data-toggle="modal"
                                                    data-target="#delModal<?php echo $value['idBV'] ?>">
                                                    <i class="fas fa-trash-alt"
                                                        style="color: red;margin-left: 20px;"></i>
                                                </a>
                                                <div class="modal fade" id="delModal<?php echo $value['idBV'] ?>"
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
                                                            <div class="modal-body">Nhấn "Xóa" để xóa bài viết
                                                                <?php echo $value['TieuDe'] ?>.</div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button"
                                                                    data-dismiss="modal">Huỷ bỏ</button>
                                                                <a class="btn btn-primary"
                                                                    href="?controller=Admin&action=xoatintuc&id=<?php echo $value['idBV'] ?>">Xóa</a>
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
                                                    <h4 class="modal-title">Thêm bài viết</h4>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <form action="?controller=Admin&&action=themtt"
                                                        style="margin-bottom: 20px;" enctype="multipart/form-data"
                                                        method="post">
                                                        <div class="form-group">
                                                            <input id="ckfinder-input" type="hidden" name="hinhanh"
                                                                style="width:60%">
                                                            <img id="hinhanh1" src="./resources/img/images/avatar.jpg"
                                                                alt="" class="img-fluid"
                                                                style="width:300px; height:200px;">
                                                            <!-- <button id="ckfinder-popup-1" class="button-a button-a-background">Browse Server</button> -->
                                                            <input onclick="selectFileWithCKFinder1('ckfinder-input')"
                                                                type="button" name="btnChonFile" id="btnChonFile"
                                                                value="Chọn file" />

                                                        </div>

                                                        <div class="form-group">
                                                            <label for="tieude">Tiêu đề:</label>
                                                            <input type="text" class="form-control" name="TieuDe"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tieude">Tác giả:</label>
                                                            <input type="text" class="form-control" name="TacGia">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tomtat">Tóm tắt:</label>
                                                            <input type="text" class="form-control" name="TomTat"
                                                                required>
                                                        </div>

                                                        <!-- <input type="file"  id="file" class="inputfile" data-multiple-caption="{count} files selected"
						multiple /> -->
                                                        <!-- <input type="file" name="HinhAnh"> -->


                                                        <div class="form-group mt-2">
                                                            <label for="filter">Mục tin:</label>
                                                            <select class="form-control" name="TL" required>
                                                                <?php foreach ($theloaitt1 as $value2 ) {
								foreach($danhmuctt as $value3){
									if($value3['idDM']==$value2['idDM']){
									
												?>
                                                                <option value="<?php echo $value2['idTL'] ?>" selected>
                                                                    <?php echo $value3['TenDM']." - ".$value2['TenTL'] ?>
                                                                </option>
                                                                <?php }}}?>
                                                            </select>
                                                        </div>
                                                        <textarea name="NoiDung" class="ckeditor" id="ckeditor"
                                                            required></textarea>
                                                        <div class="form-group">
                                                            <label for="filter">Trạng thái:</label>
                                                            <select class="form-control" name="TrangThai">
                                                                <option value="0">Ẩn</option>
                                                                <option value="1" selected>Hiện</option>
                                                            </select>
                                                        </div>


                                                        <button type="submit" name="them1"
                                                            class="btn btn-default btn-primary">Đăng bài</button>
                                                    </form>
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

    </div>


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


    <script>
        function escapeHtml(unsafe) {
            return unsafe
                .replace(/&/g, "&amp;")
                .replace(/</g, "&lt;")
                .replace(/>/g, "&gt;")
                .replace(/"/g, "&quot;")
                .replace(/'/g, "&#039;");
        }

        function selectFileWithCKFinder(elementId, img) {
            CKFinder.popup({
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function (finder) {
                    finder.on('files:choose', function (evt) {
                        var file = evt.data.files.first();
                        var output = document.getElementById(elementId);
                        output.value = file.getUrl();
                        document.getElementById(img).src = output.value;


                    });

                    finder.on('file:choose:resizedImage', function (evt) {
                        var output = document.getElementById(elementId);
                        output.value = evt.data.resizedUrl;
                        document.getElementById(img).src = output.value;


                    });
                }
            });
        }

        function selectFileWithCKFinder1(elementId) {
            CKFinder.popup({
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function (finder) {
                    finder.on('files:choose', function (evt) {
                        var file = evt.data.files.first();
                        var output = document.getElementById(elementId);
                        output.value = file.getUrl();
                        document.getElementById("hinhanh1").src = output.value;


                    });

                    finder.on('file:choose:resizedImage', function (evt) {
                        var output = document.getElementById(elementId);
                        output.value = evt.data.resizedUrl;
                        document.getElementById("hinhanh1").src = output.value;


                    });
                }
            });
        }
    </script>

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