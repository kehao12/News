<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <?php if($data){
               foreach($data as $value){?>
    <title><?php echo $value['TieuDe']?></title>
<?php }}?>
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
<div class="event-area pt-130">
    <div class="container">
        <div class="row">
               <?php if($data){
               foreach($data as $value){?>
            <div class="col-xl-9 col-lg-8">
                <div class="blog-details-wrap mr-40">
                    <div class="blog-details-top">
                        <img src="<?php echo $value['HinhAnh']?>" alt="">
                        <div class="blog-details-content-wrap">
                            <div class="b-details-meta-wrap">
                                <div class="b-details-meta">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> <?php $date=new DateTime($value['NgayTao']);  echo('Tháng '.date_format($date,"m").' '.date_format($date,"d").', '.date_format($date,"Y"));   ?></li>
                                        <li><i class="fa fa-user"></i> <?= $value['TaiKhoan']?></li>
                                        
                                    </ul>
                                </div>
                               <?php if($tl){
                                    foreach($tl as $value1){
                                    if($value['idTL']==$value1['idTL']){?>
                                    <span><?php echo $value1['TenTL']?></span>
                                    <?php }}}?>
                            </div>
                           <h1 style="padding-top:10px;"><?= $value['TieuDe']?></h1> 
                          <?= $value['NoiDung']?>
                            <div class="blog-share-tags">
                                <div class="blog-share">
                                    <div class="blog-btn">
                                        <a href="#"><i class="fa fa-share-alt"></i></a>
                                    </div>
                                    <div class="blog-social">
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <!-- <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> -->
                                            <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                               <!--  <div class="blog-tag">
                                    <ul>
                                        <li><a href="#">Loremsite</a></li>
                                        <li><a href="#">Loreipsum</a></li>
                                        <li><a href="#">Dolar</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
              
                    <div class="related-course pt-30">
                        <div class="related-title mb-45">
                            <h3>Tin liên quan</h3>
                           <!--  <p>Hempor incididunt ut labore et dolore mm, itation ullamco laboris <br>nisi ut aliquip. </p> -->
                        </div>
                        <div class="related-slider-active related-blog-slide pb-80">
                            <?php if($data1){ 
                                foreach($data1 as $value){?>
                            <div class="single-blog">
                                <div class="blog-img">
                                    <a href="?controller=index&action=chitiet&id=<?= $value['idBV']?>"><img src="<?php echo $value['HinhAnh'] ?>" height="202px;" alt=""></a>
                                </div>
                                <div class="blog-content-wrap">
                                   <?php if($tl){
                                    foreach($tl as $value1){
                                    if($value['idTL']==$value1['idTL']){?>
                                    <span><?php echo $value1['TenTL']?></span>
                                    <?php }}}?>
                                    <div class="blog-content">
                                        <h4 style="height: 50px; overflow: hidden;"><a href="?controller=index&action=chitiet&id=<?= $value['idBV']?>"><?= $value['TieuDe']?></a></h4>
                                        <p style="height: 46px; overflow: hidden;"><?php echo $value['TomTat']?></p>
                                        <div class="blog-meta">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-user"></i><?php echo $value['TaiKhoan']?></a></li>
                                                <li><a href="#"><?php echo 'Lượt xem: '.$value['SoLanXem'] ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="blog-date">
                                        <a href="#"><i class="fa fa-calendar-o"></i> <?php $date=new DateTime($value['NgayTao']);  echo('Tháng '.date_format($date,"m").' '.date_format($date,"d").', '.date_format($date,"Y"));   ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php }}?>
                         
                        </div>
                    </div>
                    <div class="blog-comment">
                        <div class="blog-comment-btn mb-80 commrnt-toggle">
                            <a href="#">Xem bình luận</a>
                        </div>
                        <div class="blog-comment-content-wrap">
                            <h4>Bình luận</h4>
                            <?php if($data3){
                 foreach($data3 as $value3){
          if($value3['idBV']==$idBV){?>

                            <div class="single-blog-comment" style="margin-top:20px;">
                                <div class="blog-comment-img">
                                    <img src="./resources/img/images/avatar.jpg" alt="">
                                </div>
                                <div class="blog-comment-content">
                                    <h5><?= $value3['HoTen']?></h5>
                                    <p><?= $value3['NoiDung']?></p>
                                
                                </div>
                            </div>
                            <?php }}}?>
                        </div>
                    </div>
                    <div class="leave-comment-area">
                        <h3>Đăng bình luận</h3>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="leave-form">
                                        <input placeholder="Họ tên" name="HoTen" id="HoTen" type="text"  required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="leave-form">
                                        <input placeholder="Email" type="email" name="Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="leave-form leave-btn">
                                        <textarea placeholder="Bình luận" name="NoiDung" id="NoiDung"></textarea>
                                        <input type="button" onclick="validateForm()" value="Đăng bình luận">
                                       
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php }}?>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-style">
                    <!-- <div class="sidebar-search mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>Tìm kiếm</h4>
                        </div>
                        <form>
                            <input type="text" placeholder="Tìm kiếm">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div> -->
              
                    <div class="sidebar-recent-post mb-35">
                        <div class="sidebar-title mb-40">
                            <h4>Tin tức liên quan</h4>
                        </div>

                        <div class="recent-post-wrap">
                             <?php if($data1){ 
                                foreach($data1 as $value){
                                 foreach($data as $value1){
                                    if($value1['idTL']==$value['idTL']){?>
                            <div class="single-recent-post">
                                <div class="recent-post-img">
                                   <a href="?controller=index&action=chitiet&id=<?= $value['idBV']?>"><img src="<?= $value['HinhAnh']?>" alt=""></a>
                                </div>
                                <div class="recent-post-content">
                                    <h5><a href="?controller=index&action=chitiet&id=<?= $value['idBV']?>"><?= $value['TieuDe']?></a></h5>
                                     <?php if($tl){
                                    foreach($tl as $value1){
                                    if($value['idTL']==$value1['idTL']){?>
                                    <span><?php echo $value1['TenTL']?></span>
                                    <?php }}}?>
                                     <p style="height: 40px; overflow: hidden;"><?= $value['TomTat']?></p>
                                </div>
                            </div>
                        <?php }}}}?>
                            
                        </div>
                    </div>
                    <div class="sidebar-category mb-40">
                        <div class="sidebar-title mb-40">
                            <h4></h4>
                        </div>
                        <div class="category-list">
                            <ul>
                                <?php if($tl){
                                foreach($tl as $value){
                                if($value['idDM']==12){?>
                                <li><a href="?controller=index&action=bvtl&id=<?= $value['idTL']?>"><?= $value['TenTL']?> <span>01</span></a></li>
                           
                            <?php }}}?>
                            </ul>
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
                  <!--   </div>
                    <div class="sidebar-tag-wrap">
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

<script>

function validateForm()
{
    // Bước 1: Lấy giá trị của username và password
 
    var HoTen = $("input[name='HoTen']").val();
	var NoiDung = $("#NoiDung").val();
    var Email = $("input[name='Email']").val();
    var filter = /(?!.*\.{2})^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
 
    // Bước 2: Kiểm tra dữ liệu hợp lệ hay không
    if (HoTen == ''){
        alert('Bạn chưa nhập họ tên');
    }
    else if (Email == '')
    {
        alert('Bạn chưa nhập Email');
    }
    else if (!filter.test(Email))
    {
        console.log(filter.test(Email.value));
        alert('Địa chỉ Email chưa hợp lệ');
    
    }
    
    else if (NoiDung == '')
    {
        alert('Bạn chưa nhập nội dung');
    }
    else {
        
        var HoTen = $("input[name='HoTen']").val();
	var NoiDung = $("#NoiDung").val();
	// var date=nowdate();
	var gui=1;
	var d = new Date();
    var html='';

  $.ajax({
	type: 'post',
	url: '?controller=index&action=chitiet&id=<?php echo $idBV ?>',
   data: {HoTen: HoTen, NoiDung: NoiDung,gui: gui},
   success: function () {
	 
		html += `  <div class="single-blog-comment" style="margin-top:20px;">
                                <div class="blog-comment-img">
                                    <img src="./resources/img/images/avatar.jpg" alt="">
                                </div>
                                <div class="blog-comment-content">
                                    <h5>${HoTen}</h5>
                                    <p>${NoiDung}</p>
                                
                                </div>
                            </div>`;
						
										
	  $('.blog-comment-content-wrap').append(html);
      $("input[name='HoTen']").val("");
      $("input[name='Email']").val("");
      $("#NoiDung").val("");
	  
	}
}
  )

    }
}


function comment(){
	var HoTen = $("input[name='HoTen']").val();
	var NoiDung = $("#NoiDung").val();
	// var date=nowdate();
	var gui=1;
	var d = new Date();
    var html='';

  $.ajax({
	type: 'post',
	url: '?controller=index&action=chitiet&id=<?php echo $idBV ?>',
   data: {HoTen: HoTen, NoiDung: NoiDung,gui: gui},
   success: function () {
	 
		html += `  <div class="single-blog-comment" style="margin-top:20px;">
                                <div class="blog-comment-img">
                                    <img src="./resources/img/images/avatar.jpg" alt="">
                                </div>
                                <div class="blog-comment-content">
                                    <h5>${HoTen}</h5>
                                    <p>${NoiDung}</p>
                                
                                </div>
                            </div>`;
						
										
	  $('.blog-comment-content-wrap').append(html);
      $("input[name='HoTen']").val(" ");
      $("#NoiDung").val("");
	  
	}
}
  )

}
</script>


</body>

</html>