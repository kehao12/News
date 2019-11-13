
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">Admin</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Tìm kiếm..." aria-label="Search"
                aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <!-- <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </li> -->
        <!-- <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </li> -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <!-- <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a> -->
                <!-- <div class="dropdown-divider"></div> -->
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ChangInfoModal">Đổi mật khẩu</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Thoát</a>
            </div>
        </li>
    </ul>
    <div class="modal fade" id="ChangInfoModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Đổi mật khẩu</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="?controller=Admin&&action=changePass" id="change"
                    style="margin-bottom: 20px;" method="post">
                 
                    <!-- <div class="form-group">
                <label for="tieude">Tên quản trị viên:</label>
                <input type="text" class="form-control" name="tenqtv" value="<?php echo $value['TenNV'] ?>">
            </div>
            <div class="form-group">
                <label for="tieude">Địa chỉ quản trị viên:</label>
                <input type="text" class="form-control" name="diachi" value="<?php echo $value['DiaChi'] ?>">
            </div>
            
            <div class="form-group">
                <label for="filter">Quyền:</label>
                <select class="form-control" name="quyen" value="<?php echo $value['Quyen'] ?>" >
                    <option [value]="1">Quản trị</option>
                    <option [value]="0">Đăng bài</option>
                    
                </select>
            </div>
            

            <div class="form-group">
                <label for="filter">Trạng thái:</label>
                <select class="form-control" name="trangthai">
                    <option value="1" selected>Hoạt động</option>
                    <option value="0">Ngắt hoạt động</option>
                </select>
            </div> -->
                    <div class="form-group">
                        <label for="tieude">Nhập lại mật khẩu cũ:</label>
                        <input type="password" class="form-control" name="matkhau" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="tieude">Mật khẩu mới:</label>
                        <input type="password" class="form-control" name="matkhaumoi" required>
                    </div>
                    <div class="form-group">
                        <label for="tieude">Xác nhận mật khẩu mới:</label>
                        <input type="password" class="form-control" name="comfirm" required>
                    </div>

                    <button type="submit" name="sua" class="btn btn-default btn-primary">Đổi mật khẩu</button>
                
                </form>
            </div>

         

        </div>
    </div>
</div>
</nav>

