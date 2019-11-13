
    <?php if($data10){?> 
            Tìm thấy <?= count($data10).' kết quả cho <strong>'.$_POST['noidung'].'<strong>'?>
            <?php } else { ?>
              <?=  'Không có kết quả cho <strong>'.$_POST['noidung'].'<strong>' ?>
            <?php }?>
    <div class="row">
<div class="col-xl-9 col-lg-8">
    <div class="blog-all-wrap mr-40">
       
    <div class="row">
        <?php if($data10){
            foreach($data10 as $value){?>

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
                                                <li><a href="#"><i class="fa fa-user"></i><?php echo $value['TaiKhoan'] ?></a></li>
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
                    <?php }}?>


                </div>
                <!-- <div class="pro-pagination-style text-center mt-25">
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
        </div> -->
    </div>
</div>
