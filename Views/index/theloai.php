<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tin tức</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="resources/index/index1/images/logo-e1541672296379.png">
    
    <!-- CSS
       ============================================ -->

       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="assets/css/bootstrap.min.css">

       <!-- Icon Font CSS -->
       <link rel="stylesheet" href="assets/css/icons.min.css">

       <!-- Plugins CSS -->
       <link rel="stylesheet" href="assets/css/plugins.css">

       <!-- Main Style CSS -->
       <link rel="stylesheet" href="assets/css/style.css">

       <!-- Modernizer JS -->
       <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
   </head>

   <body>
    <?php include('component/header.php')?>

    <div class="event-area pt-60 pb-130">
        <div class="container">

         <?php if(isset($data10)){ 
         include('search.php');}
         else{?>
         <div class="row">

            <div class="col-xl-9 col-lg-8">
                <div class="blog-all-wrap mr-40">
                    <div class="row">
                        <?php if($rs1){
                        foreach($rs1 as $value){?>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="single-blog mb-30">
                                <div class="blog-img">
                                    <a href="?controller=index&action=chitiet&id=<?php echo $value['idBV'] ?>"><img src="<?php echo $value['HinhAnh']?>"  height="197px;" alt=""></a>
                                </div>
                                <div class="blog-content-wrap">
                                    <?php if($tl){
                                    foreach($tl as $value1){
                                    if($value['idTL']==$value1['idTL']){?>
                                    <span><?php echo $value1['TenTL']?></span>
                                    <?php }}}?>
                                    <div class="blog-content">
                                        <h4 style="height: 50px; overflow: hidden;"><a href="?controller=index&action=chitiet&id=<?php echo $value['idBV'] ?>"><?php echo $value['TieuDe']?></a></h4>
                                        <p style="height: 70px; overflow: hidden;"><?php echo $value['TomTat']?></p>
                                        <div class="blog-meta">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-user"></i>Apparel</a></li>
                                                <li><a href="#"><i class="fa fa-comments-o"></i> 10</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="blog-date">
                                        <a href="#"><i class="fa fa-calendar-o"></i> <?php $date=new DateTime($value['NgayTao']);  echo('Tháng '.date_format($date,"m").' '.date_format($date,"d").', '.date_format($date,"Y"));   ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }} else { echo 'Chưa có bài viết cho mục này';}?>

                        

                    </div>
                    <div class="pro-pagination-style text-center mt-25">
                        <ul>
                           <?php if ($current_page > 1 && $total_page > 1){?>
                           <li><a class="prev" href="?controller=index&action=tintuc&page=<?php echo ($current_page-1) ?>"><i class="fa fa-angle-double-left"></i></a></li>
                           <?php } ?>
                           <?php for($i=1; $i<=$total_page;$i++){
                           if ($i == $current_page){
                           ?>
                           <li><a class="active" href="?controller=index&action=tintuc&page=<?php echo $i?>"><?php echo $i?></a></li>
                           <?php } else {?>
                           <li><a href="?controller=index&action=tintuc&page=<?php echo $i?>"><?php echo $i?></a></li>
                           <?php }}?>
                           <?php if ($total_page > 1){?>
                           <li><a class="next" href="?controller=index&action=tintuc&page=<?php echo ($current_page-1) ?>"><i class="fa fa-angle-double-right"></i></a></li>
                           <?php }?>
                       </ul>
                   </div>
               </div>
           </div>
           <?php }?>
           <div class="col-xl-3 col-lg-4">
            <div class="sidebar-style">
                <div class="sidebar-search mb-40">
                    <div class="sidebar-title mb-40">
                        <h4>Tìm kiếm</h4>
                    </div>
                    <form method="post">
                        <input type="text" name="noidung" placeholder="Tìm bài viết">
                        <button type="submit" name="search"><i class="fa fa-search"></i></button>
                    </form>
                </div>

                <div class="sidebar-recent-post mb-35">
                    <div class="sidebar-title mb-40">
                        <h4>Bài viết gần đây</h4>
                    </div>
                    <div class="recent-post-wrap">
                        <?php if($tinnoibat){
                        foreach($tinnoibat as $value){?>
                        <div class="single-recent-post">
                            <div class="recent-post-img">
                                <a href="?controller=index&action=chitiet&id=<?php echo $value['idBV'] ?>"><img src="<?= $value['HinhAnh'] ?>" alt=""></a>
                            </div>
                            <div class="recent-post-content">
                                <h5><a href="?controller=index&action=chitiet&id=<?php echo $value['idBV'] ?>"><?= $value['TieuDe'] ?></a></h5>

                                <?php if($tl){
                                foreach($tl as $value1){
                                if($value['idTL']==$value1['idTL']){?>
                                <span><?php echo $value1['TenTL']?></span>
                                <?php }}}?>

                                <p style="height: 40px; overflow: hidden;"><?= $value['TomTat'] ?></p>
                            </div>
                        </div>
                        <?php }}?>
                        
                    </div>
                </div>
                <div class="sidebar-category mb-40">
                    <div class="sidebar-title mb-40">
                        <h4>Danh mục</h4>
                    </div>
                    <div class="category-list">
                        <ul>
                            <?php if($tl){
                            foreach($tl as $value){
                            foreach($dmtl as $dmtl1){
                            if($value['idDM']==$dmtl1['idDM']){?>
                            <li><a href="?controller=index&action=bvtl&id=<?= $value['idTL']?>"><?= $value['TenTL']?>  
                                <?php foreach($dem as $value1){
                                if($value1['idTL']==$value['idTL']){  ?>
                              <span><?= $value1['total'] ?></span>
                          <?php } ?>
                          <?php }?></a></li>

                            <?php }}}}?>
                        </div>
                    </div>
                    <div class="sidebar-recent-course-wrap mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>Tin nổi bật</h4>
                        </div>
                        <div class="sidebar-recent-course">
                            <?php if($tinnoibat){
                            foreach($tinnoibat as $value){?>
                            <div class="sin-sidebar-recent-course">
                                <div class="sidebar-recent-course-img">
                                    <a href="?controller=index&action=chitiet&id=<?= $value['idBV']?>"><img src="<?= $value['HinhAnh']?>" alt=""></a>
                                </div>
                                <div class="sidebar-recent-course-content">
                                    <h4><a href="?controller=index&action=chitiet&id=<?= $value['idBV']?>"><?= $value['TieuDe']?></a></h4>
                                    <ul>
                                        <li><?php $date=new DateTime($value['NgayTao']);  echo('Tháng '.date_format($date,"m").' '.date_format($date,"d").', '.date_format($date,"Y"));   ?></li>
                                        <!--    <li class="duration-color"><?= $value['TaiKhoan']?></li> -->
                                    </ul>
                                    <p style="height: 40px; overflow: hidden;"><?= $value['TomTat']?></p>
                                </div>
                            </div>
  <?php }}?>

                        </div>
                      
                    </div>
               <!--      <div class="sidebar-tag-wrap">
                        <div class="sidebar-title mb-40">
                            <h4>Tag</h4>
                        </div>
                        <div class="sidebar-tag">
                            <ul>
                                <li><a href="#">Loremsite</a></li>
                                <li><a href="#">Loreipsum</a></li>
                                <li><a href="#">Dolar</a></li>
                                <li><a href="#">Site ament dollar</a></li>
                                <li><a href="#">Loremsite</a></li>
                                <li><a href="#">Dummy Text</a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('component/footer.php')?>













<!-- JS
    ============================================ -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>
    <!-- Ajax Mail -->
    <script src="assets/js/ajax-mail.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>



</body>

</html>