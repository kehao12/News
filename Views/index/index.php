<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hướng nghiệp Việt</title>
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
<?php include('component/header.php') ?>
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                 <img src="resources/index/images/slider1.jpg" class="img-fluid" alt="Los Angeles" width="100%" height="800px">
                </div>
                <!--   <div class="carousel-item">
                   <img src="resources/index/images/riam2_1920x673.jpg" class="img-fluid"  alt="Chicago" width="100%" height="800px">
                </div>
                <div class="carousel-item">
                    <img src="resources/index/images/ctxh.png" class="img-fluid"  alt="New York" width="100%" height="800px">
                </div>-->
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>


<div class="about-us pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <div class="section-title section-title-green mb-30">
                        <h2><span>Giới thiệu</span></h2>
                        <h2><span class="content_slide_title_big" style="color: #008000;">ĐÀO TẠO &amp; GIÁO DỤC<br></span>
                            <span class="content_slide_titlesmall" style="font-size: 12pt;">PHÁT TRIỂN KỸ NĂNG
                &amp; HƯỚNG NGHIỆP</span></h2>
            <p>Mục tạo và giáo dục của chúng tôi là chuyển biến nhân sự của doanh nghiệp trở thành
              nguồn tài nguyên quan trọng nhất bằng cách thay đổi ý thức và tư duy sao cho bản thân nhân
              viên tự mình suy nghĩ, tự đặt ra mục tiêu, tự hành động để tạo ra được sự tin tưởng lớn
              nhất…</p>
                    </div>
                
                    <div class="about-btn mt-45 mb-10">
                        <a class="default-btn" href="?controller=index&action=about">GIỚI THIỆU</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-img ">
                    <img src="./resources/index/images/img_slide_1@2x.jpg" alt="">
                   
                </div>
            </div>
        </div>
    </div>
</div>
<div class="course-area bg-img pt-20 pb-0" style="background-image:url(resources/index/images/bg2.png);">
    <div class="container">
        <div class="section-title mb-75">
            <h2 style="color:white;"> Đào tạo</h2>
            
        </div>
        <div class="course-slider-active nav-style-1 owl-carousel">
            <?php foreach($chuyende as $value){ ?>
            <div class="single-course">
                <div class="course-img">
                    <a href="?controller=index&action=chitiet&id=<?php echo $value['idBV'] ?>"><img class="animated" src="<?php echo $value['HinhAnh']?>" width="293px" height="274px" alt=""></a>
                  
                </div>
                <div class="course-content">
                    <h4 style="height: 50px; overflow: hidden;"><a href="?controller=index&action=chitiet&id=<?php echo $value['idBV'] ?>" style="height: 50px;"><?php echo $value['TieuDe']?></a></h4>
                    <p><?php $date=new DateTime($value['NgayTao']);  echo('Tháng '.date_format($date,"m").' '.date_format($date,"d").', '.date_format($date,"Y"));   ?></p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="?controller=index&action=chitiet&id=<?php echo $value['idBV'] ?>">Xem thêm</a>
                    </div>
                </div>
            </div>
        <?php }?>
          
        </div>
    </div>

</div>
<!-- -->
<!-- -->
<!-- -->
<!-- <div class="achievement-area pt-130 pb-115">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Our <span>Achievement</span></h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-one">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-1.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">890</h2>
                        <span>STUDENTS</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-two">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-2.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">670</h2>
                        <span>GRADUATE</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-three">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-3.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">160</h2>
                        <span>AWARD WINNING</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-four">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-4.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">200</h2>
                        <span>FACULTIES</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-slider-wrap mt-45">
            <div class="testimonial-text-slider">
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/testi-b1.jpg">
                    </div>
                   <div class="row no-gutters">
                       <div class="ml-auto col-lg-6 col-md-12">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                <div class="testi-info">
                                   <h5>AYESHA HOQUE</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                   <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/testi-b3.jpg">
                    </div>
                   <div class="row no-gutters">
                        <div class="ml-auto col-lg-6 col-md-12">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis</p>
                                <div class="testi-info">
                                   <h5>Tayeb Rayed</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/testi-b2.jpg">
                    </div>
                   <div class="row no-gutters">
                        <div class="ml-auto col-lg-6 col-md-12">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                <div class="testi-info">
                                   <h5>Robiul siddikee</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                        </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                   <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/testi-b2.jpg">
                    </div>
                    <div class="row no-gutters">
                       <div class="ml-auto col-lg-6 col-md-12">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                <div class="testi-info">
                                   <h5>Modhu Dada</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
            <div class="testimonial-image-slider">
                <div class="sin-testi-image">
                    <img src="assets/img/testimonial/testi-s2.jpg" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="assets/img/testimonial/testi-s1.jpg" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="assets/img/testimonial/testi-s3.jpg" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="assets/img/testimonial/testi-s3.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="testimonial-text-img">
            <img alt="" src="assets/img/icon-img/testi-text.png">
        </div>
    </div>
</div> -->
<!-- -->
<!-- -->
<!-- -->
<!-- <div class="register-area bg-img pt-130 pb-130" style="background-image:url(assets/img/bg/bg-2.jpg);">
    <div class="container">
        <div class="section-title-2 mb-75 white-text">
            <h2>Register <span>Now</span></h2>
            <p>Winter Admission Is Going On. We are announcing  Special discount for winter batch 2019.</p>
        </div>
        <div class="register-wrap">
            <div id="register-3" class="mouse-bg">
                <div class="winter-banner">
                    <img src="assets/img/banner/regi-1.png" alt="">
                    <div class="winter-content">
                        <span>WINTER </span>
                        <h3>2019</h3>
                        <span>ADMISSION </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-8">
                    <div class="register-form">
                        <h4>Get A free Registration</h4>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="name" placeholder="First Name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="name" placeholder="Last Name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="name" placeholder="Phone" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="name" placeholder="Email" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contact-form-style">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <button class="submit default-btn" type="submit">SUBMIT NOW</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="register-1" class="mouse-bg"></div>
    <div id="register-2" class="mouse-bg"></div>
</div> -->
<!-- -->
<!-- -->
<!-- -->
<!-- <div class="teacher-area pt-130 pb-100">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Best <span>Teacher</span></h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="custom-row">
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/teacher-1.jpg" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Robi Khan</h4>
                        <h5>Lecturer</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Fawd Khan</h4>
                            <h5>Lecturer</h5>
                            <p>Tempor incididunt magna aliqua.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/teacher-2.jpg" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Jui Khan</h4>
                        <h5>Lecturer</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Fawd Khan</h4>
                            <h5>Lecturer</h5>
                            <p>Tempor incididunt magna aliqua.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/teacher-3.jpg" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Fawd Khan</h4>
                        <h5>Lecturer</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Fawd Khan</h4>
                            <h5>Lecturer</h5>
                            <p>Tempor incididunt magna aliqua.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/teacher-4.jpg" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Fawd Khan</h4>
                        <h5>Lecturer</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Fawd Khan</h4>
                            <h5>Lecturer</h5>
                            <p>Tempor incididunt magna aliqua.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/teacher-5.jpg" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Jui Khan</h4>
                        <h5>Lecturer</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Fawd Khan</h4>
                            <h5>Lecturer</h5>
                            <p>Tempor incididunt magna aliqua.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- -->
<!-- -->
<!-- -->
 <div class="event-area bg-img default-overlay pt-20 pb-20" style="background-image:url(resources/index/images/bg4.jpg);">
    <div class="container">
        <div class="section-title mb-75">
            <h2><span>TUYỂN SINH MỚI NHẤT</span></h2>
            <p>Thông tin tuyển sinh đào tạo các ngành nghề khác</p>
        </div>
        <div class="event-active owl-carousel nav-style-1">
            <?php if($ts){
            foreach($ts as $value){
                ?>
            <div class="single-event event-white-bg">
                <div class="event-img">
                    <a href="?controller=index&action=chitiet&id=<?php echo $value['idBV'] ?>"><img src="<?php echo $value['HinhAnh']?>" height="245px;" alt=""></a>
                    <div class="event-date-wrap">
                        <span class="event-date"><?php $date=new DateTime($value['NgayTao']);  echo(date_format($date,"d"));   ?></span>
                        <span><?php $date=new DateTime($value['NgayTao']);  echo(date_format($date,"m"));   ?></span>
                    </div>
                </div>
                <div class="event-content">
                    <h3 style="height: 60px; overflow: hidden;"><a href="?controller=index&action=chitiet&id=<?php echo $value['idBV'] ?>"><?php echo $value['TieuDe']?></a></h3>
                    <p style="height: 70px; overflow: hidden;"><?php echo $value['TomTat']?></p>
                    <div class="event-meta-wrap">
                        <!-- <div class="event-meta">
                            <i class="fa fa-location-arrow"></i>
                            <span>Mascot Plaza ,Uttara</span>
                        </div>
                        <div class="event-meta">
                            <i class="fa fa-clock-o"></i>
                            <span>11:00 am</span>
                        </div> -->
                    </div>
                </div>
            </div>
        <?php }}?> 
            
        </div> 
    </div>
</div> 
<!-- -->
<!-- -->
<!-- -->





<!-- -->
<!-- -->
<!-- -->
<div class="blog-area pt-20 pb-20">
    <div class="container">
        <div class="section-title mb-75">
            <h2><span>Tin tức Tuyển Sinh các ngành nghề khác</span></h2>
            <p>Các tin tức mới nhất</p>
        </div>
        <div class="row">
            <?php if($bv){
                foreach($bv as $value){
            ?>
            <div class="col-lg-3 col-md-6">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href="?controller=index&action=chitiet&id=<?php echo $value['idBV'] ?>"><img src="<?php echo $value['HinhAnh'] ?>" height="197px;" alt=""></a>
                    </div>
                    <div class="blog-content-wrap">
                        <?php 
                            if($tl){
                            foreach($tl as $value1){
                            if($value1['idTL']==$value['idTL']){?>
                        <span><?php echo $value1['TenTL']?></span>
                    <?php }}} ?>
                        <div class="blog-content">
                            <h4 style="height: 50px; overflow: hidden;"><a href="?controller=index&action=chitiet&id=<?php echo $value['idBV'] ?>"><?php echo $value['TieuDe'] ?></a></h4>
                            <p style="height: 70px; overflow: hidden;"><?php echo $value['TomTat'] ?></p>
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> <?php echo $value['TaiKhoan'] ?></a></li>
                                    <li><a href="#"><?php echo 'Lượt xem: '.$value['SoLanXem'] ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-date">
                            <a href="#"><i class="fa fa-calendar-o"></i> <?php $date=new DateTime($value['NgayTao']);  echo('Tháng '.date_format($date,"m").' '.date_format($date,"d").', '.date_format($date,"Y"));   ?></a>
                        </div>
                    </div>
                </div>
            </div>
<?php }}?>

           
        </div>
    </div>
</div> 
<!-- -->
<!-- -->
<!-- -->
<?php include('component/footer.php') ?>
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