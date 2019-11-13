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
                        Thông kê
                        <a href="./Models/script.php">
                        <button class="btn btn-info btn-sm float-right" >Cập
                            nhật
                        </button>
                    </a>
                        
                    </div>

                    <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Chọn:</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="soluong">
                                <option value="5">5</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Chọn:</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="time">
                                <option value="day">Trong ngày</option>
                                <option value="week">Trong tuần</option>
                                <option value="month">Trong tháng</option>
                                <option value="year">Trong năm</option>
                                <option value="alltime">Tất cả thời gian</option>
                            </select>
                        </div>

                        <input type="submit" name="thongke">
                        </form>

                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tiêu đề</th>

                                        <th>Ngày tạo</th>
                                        <th>Thể loại</th>
                                        <th>Lượt xem</th>
                                        <th>Trạng thái</th>
                                    
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
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php 
                                    $j=1; 
                                if(isset($tk)){
                                foreach ($tk as $value ) {
                                    
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

                                        <td><?php echo $value[$time];?></td>
                                        <td><?php if($value['TrangThai']==1) echo "Hiện"; else echo "Ẩn"; ?></td>
                                      
                                    </tr>
                                    <?php }}?>



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

            window.setTimeout(function () {
                $(".alert").fadeTo(1000, 0).slideUp(1000, function () {
                    $(this).remove(); <
                    ? php unset($_SESSION['success']);
                    unset($_SESSION['fail']); ? >
                });
            }, 5000);

        });
    </script>

</body>

</html>