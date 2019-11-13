
<ul class="sidebar navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="?controller=Admin&&action=index">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            <?php 	$dk=$model->getAllData('loaiquyen');
            foreach($dk as $value){
                if($_SESSION['quyen']==$value['id']){
                    if($value['qlqtv']==1){
                        echo 
                        ' <li class="nav-item">
                             <a class="nav-link" href="?controller=Admin&&action=qlqtv">
                            <i class="fas fa-fw fa-table"></i>
                            <span>Quản lý quản trị viên</span></a>
                        </li>';
                    }
                    if($value['qlbv']){
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="?controller=Admin&&action=qltt">
                                <i class="fas fa-fw fa-table"></i>
                                <span>Quản lý tin tức</span></a>
                        </li>
                       ';
                    }
                    if($value['qlbl']==1){
                        echo '<li class="nav-item">
                        <a class="nav-link" href="?controller=Admin&&action=qlbl">
                            <i class="fas fa-fw fa-table"></i>
                            <span>Quản lý bình luận</span></a>
                    </li>';
                    }
                    if($value['qltl']==1){
                        echo ' <li class="nav-item">
                        <a class="nav-link" href="?controller=Admin&&action=qltl">
                            <i class="fas fa-fw fa-table"></i>
                            <span>Quản lý thể loại</span></a>
                    </li>';
                    }
                    if($value['qlloaiquyen']==1){
                        echo '  <li class="nav-item">
                        <a class="nav-link" href="?controller=Admin&&action=qlloaiquyen">
                            <i class="fas fa-fw fa-table"></i>
                            <span>Quản lý loại quyền</span></a>
                    </li>';
                    }
                    if($value['thongke']==1){
                        echo ' <li class="nav-item">
                        <a class="nav-link" href="?controller=Admin&&action=thongke">
                            <i class="fas fa-fw fa-table"></i>
                            <span>Thống kê</span></a>
                    </li>';
                    }
            }
            ?>
               
                <!-- <li class="nav-item">
                    <a class="nav-link" href="?controller=Admin&&action=qldm">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Quản lý mục tin tức</span></a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="?controller=Admin&&action=qlmail">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Quản lý Email</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=Admin&&action=qlkh">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Quản lý khách hàng</span></a>
                </li> -->
                
               
                
<?php }?>
               
<!-- <li class="nav-item">
                    <a class="nav-link" href="?controller=Admin&&action=qlmh">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Quản lý môn học</span></a>
                </li> -->
          
              
                <!-- <li class="nav-item">
                    <a class="nav-link" href="?controller=Admin&&action=bctk">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Báo cáo thống kê</span></a>
                </li> -->
               

                   
            </ul>
           