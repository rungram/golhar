<?php
	
	$d->reset();
	$sql_qc_slide ="select *  from #_banner order by stt asc limit 0,2";
	$d->query($sql_qc_slide);
	$qc_slide=$d->result_array();
	//==
	$d->reset();
	$sql_laylq="select * from #_tinloai2_1a where hienthi =1 order by id asc limit 0,6";
	$d->query($sql_laylq);
	$result_gt=$d->result_array();
	
	//==
// 	$tg=date('Y-m-d H:i:s');
// 	$tgout=900;
// 	$tgnew=$tg - $tgout;
// 	$ipaddress = '';
// 	if (isset($_SERVER['HTTP_CLIENT_IP']))
// 		$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
// 	else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
// 		$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
// 	else if(isset($_SERVER['HTTP_X_FORWARDED']))
// 		$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
// 	else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
// 		$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
// 	else if(isset($_SERVER['HTTP_FORWARDED']))
// 		$ipaddress = $_SERVER['HTTP_FORWARDED'];
// 	else if(isset($_SERVER['REMOTE_ADDR']))
// 		$ipaddress = $_SERVER['REMOTE_ADDR'];
// 	else
// 		$ipaddress = 'UNKNOWN';
// 	$local = $_SERVER['PHP_SELF'];
// 		$sql_insert = "INSERT INTO #_useronline (Tgtmp, Ip, Local) VALUES ('$tg', '$ipaddress', '$local')";
// 		$d->query($sql_insert);
// 		$next30 = strtotime( '-900 seconds' );
// 		$tgnew =  date('Y-m-d H:i:s',$next30 );
// 		$d->reset();
// 		$sql_delete = "DELETE FROM #_useronline WHERE Tgtmp < '$tgnew'";
// 		$d->query($sql_delete);
// 		$d->reset();
// 		$result_detail="select DISTINCT ip from #_useronline where Local='$local'";
// 		$d->query($result_detail);
// 		$result_detail=$d->fetch_array();
// 		$useronline = count($result_detail);
	$ngonngu = (!empty($_COOKIE['ngonngu']))?$_COOKIE['ngonngu']:'vn';
?>
<?php
if($ngonngu == 'vn')
{ 
?> 
  
  <section id="content">
    <!-- end divider -->
    <div class="row">
      <div class="container bg-f">
        <div class="three">
          <div class="col-md-12 col-sm-12 ">
          <!--<h2 class="title_index">Sản phẩm tiêu biểu</h2>-->
          <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10 text-center style_line1">
            <div class="item-service"><a href="danh-muc-cat/phan-npk-1.html" ></a><a href="danh-muc-cat/phan-npk-1.html" class="img"><img src="img/sp.png" alt="Sản phẩm"></a><a href="danh-muc-cat/phan-npk-1.html">
              <h2>Sản phẩm</h2>
              </a> </div>
          </div>
          <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10 text-center style_line2">
            <div class="item-service"> <a href="tin-tuc-cat/tin-tuc-va-su-kien-3.html"  class="img"> <img src="img/news_header3.png" alt="Tin tức"> </a> <a href="tin-tuc-cat/tin-tuc-va-su-kien-3.html">
              <h2>Tin tức</h2>
              </a> </div>
          </div>
          <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10 text-center style_line3">
            <div class="item-service"> <a href="lien-he.html"  class="img" > <img src="img/contact-us-header_03.png" alt="Liên hệ"> </a> <a href="lien-he.html">
              <h2>Liên hệ</h2>
              </a> </div>
          </div>
        </div>
        </div>
        <div style="clear:both"></div>
        <div class="info">
          <div class="container">
          <div class="col-lg-7">
            <h2 class="title_index" style="margin-bottom: 0px !important;">Giới thiệu</h2>
            <?php
				  $d->reset();
				  $sql_laycat="select * from #_product_cat where hienthi =1 and noibat = 1 ORDER BY id asc limit 1 ";
				  $d->query($sql_laycat);	
				  $result_cat=$d->fetch_array();
				  $id_list = $result_cat["id_list"];
				  $d->reset();
				  $sql_laylist="select * from #_product_list where hienthi =1 and id='$id_list'";
				  $d->query($sql_laylist);
				  $result_list=$d->fetch_array();
				  $str = $result_cat["mota_vi"];
				  if(strlen ($str) > 700)
				  {
					  $str = substr ($str, 0, 700);
					  $str = substr ($str, 0, strrpos ($str, ' ')).'...';
				  }

				  ?>
            <div class="caption"> <?php echo $result_gt[0]["mota_vi"]?> </div>
          </div>
          <div class="col-lg-5">
          <?php 
               global $d, $item;
               $sql = "select * from #_video where hienthi='1' order by stt desc limit 1";
               $d->query($sql);
               $items = $d->result_array();
            ?>
            <?php for($i=0, $count=count($items); $i<$count; $i++){?>
              <iframe class="video" width="80%" height="350px" src="https://www.youtube.com/embed/<?php echo $items[$i]['url'] ?>" frameborder="1" allowfullscreen></iframe>
            <?php }?>
          </div>
        </div>
          
          
          
          <div class="hr-style1"></div>
        </div>
        <div class="product bg-x">
          <div class=" container">
          <h1>Sản phẩm tiêu biểu</h1>
          <div class="block-blog1">
          <?php
          $d->reset();
          $sql_cat ="select *	from #_product_cat where noibat = 1 and hienthi = 1 order by stt asc limit 4";
          $d->query($sql_cat);
          $cat =$d->result_array();
          for($j=0,$count_c=count($cat);$j<$count_c;$j++){
           $id_list = $cat[$j]["id_list"];
           $id_cat  = $cat[$j]["id"];
		   $d->reset();
		   $sql_laylist="select * from #_product_list where hienthi =1 and id='$id_list'";
		   $d->query($sql_laylist);
		   $result_list=$d->fetch_array();
           $url = $result_list["ten_cn"].'-cat/'.$cat[$j]["tenkhongdau"].'-'.$cat[$j]["id"].'.html';
           $d->reset();
           $sql_tungdanhmuc="select * from #_product where hienthi =1 and id_cat='$id_cat'  order by stt desc limit 1";
           $d->query($sql_tungdanhmuc);
           $result_spnam=$d->result_array();
          ?>
            <div class=" col-md-3 col-sm-3 col-xsm-6 col-xs-12  padding10">
              <div class="item-service"> <a href="<?=$url?>" class="view-img"> <img src="upload/sanpham/<?php if($result_spnam[0]["tc_big"]==1) echo $result_spnam[0]["photo"]; else echo $result_spnam[0]["photo"] ?>" alt="<?=$cat[$j]["ten_en"]?>"> </a> <a href="<?=$url?>">
                <h2><?=$cat[$j]["ten_vi"]?></h2>
                </a> </div>
            </div>
          <?php
          } 
          ?>
          </div>
        </div>
        </div>
        <div style="clear:both"></div>
        
      </div>
    </div>
    <!-- divider -->
  </section>
<?php 
}
else 
{
?>  
<section id="content">
    <!-- end divider -->
    <div class="row">
      <div class="container bg-f">
        <div class="three">
          <div class="col-md-12 col-sm-12 ">
          <!--<h2 class="title_index">Sản phẩm tiêu biểu</h2>-->
          <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10 text-center style_line1">
            <div class="item-service"><a href="danh-muc-cat/phan-npk-1.html" ></a><a href="danh-muc-cat/phan-npk-1.html" class="img"><img src="img/sp.png" alt="Sản phẩm"></a><a href="danh-muc-cat/phan-npk-1.html">
              <h2>Product</h2>
              </a> </div>
          </div>
          <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10 text-center style_line2">
            <div class="item-service"> <a href="tin-tuc-cat/tin-tuc-va-su-kien-3.html"  class="img"> <img src="img/news_header3.png" alt="Tin tức"> </a> <a href="tin-tuc-cat/tin-tuc-va-su-kien-3.html">
              <h2>News</h2>
              </a> </div>
          </div>
          <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10 text-center style_line3">
            <div class="item-service"> <a href="lien-he.html"  class="img" > <img src="img/contact-us-header_03.png" alt="Liên hệ"> </a> <a href="lien-he.html">
              <h2>CONTACT US</h2>
              </a> </div>
          </div>
        </div>
        </div>
        <div style="clear:both"></div>
        <div class="info">
          <div class="container">
          <div class="col-lg-7">
            <h2 class="title_index" style="margin-bottom: 0px !important;">About us</h2>
            <?php
				  $d->reset();
				  $sql_laycat="select * from #_product_cat where hienthi =1 and noibat = 1 ORDER BY id asc limit 1 ";
				  $d->query($sql_laycat);	
				  $result_cat=$d->fetch_array();
				  $id_list = $result_cat["id_list"];
				  $d->reset();
				  $sql_laylist="select * from #_product_list where hienthi =1 and id='$id_list'";
				  $d->query($sql_laylist);
				  $result_list=$d->fetch_array();
				  $str = $result_cat["mota_vi"];
				  if(strlen ($str) > 700)
				  {
					  $str = substr ($str, 0, 700);
					  $str = substr ($str, 0, strrpos ($str, ' ')).'...';
				  }

				  ?>
            <div class="caption"> <?php echo $result_gt[0]["mota_en"]?> </div>
          </div>
          <div class="col-lg-5">
          <?php 
               global $d, $item;
               $sql = "select * from #_video where hienthi='1' order by stt desc limit 1";
               $d->query($sql);
               $items = $d->result_array();
            ?>
            <?php for($i=0, $count=count($items); $i<$count; $i++){?>
              <iframe class="video" width="80%" height="350px" src="https://www.youtube.com/embed/<?php echo $items[$i]['url'] ?>" frameborder="1" allowfullscreen></iframe>
            <?php }?>
          </div>
        </div>
          
          
          
          <div class="hr-style1"></div>
        </div>
        <div class="product bg-x">
          <div class=" container">
          <h1>Typical product</h1>
          <div class="block-blog1">
          <?php
          $d->reset();
          $sql_cat ="select *	from #_product_cat where noibat = 1 and hienthi = 1 order by stt asc limit 4";
          $d->query($sql_cat);
          $cat =$d->result_array();
          for($j=0,$count_c=count($cat);$j<$count_c;$j++){
           $id_list = $cat[$j]["id_list"];
           $id_cat  = $cat[$j]["id"];
		   $d->reset();
		   $sql_laylist="select * from #_product_list where hienthi =1 and id='$id_list'";
		   $d->query($sql_laylist);
		   $result_list=$d->fetch_array();
           $url = $result_list["ten_cn"].'-cat/'.$cat[$j]["tenkhongdau"].'-'.$cat[$j]["id"].'.html';
           $d->reset();
           $sql_tungdanhmuc="select * from #_product where hienthi =1 and id_cat='$id_cat'  order by stt desc limit 1";
           $d->query($sql_tungdanhmuc);
           $result_spnam=$d->result_array();
          ?>
            <div class=" col-md-3 col-sm-3 col-xsm-6 col-xs-12  padding10">
              <div class="item-service"> <a href="<?=$url?>" class="view-img"> <img src="upload/sanpham/<?php if($result_spnam[0]["tc_big"]==1) echo $result_spnam[0]["photo"]; else echo $result_spnam[0]["photo"] ?>" alt="<?=$cat[$j]["ten_en"]?>"> </a> <a href="<?=$url?>">
                <h2><?=$cat[$j]["ten_en"]?></h2>
                </a> </div>
            </div>
          <?php
          } 
          ?>
          </div>
        </div>
        </div>
        <div style="clear:both"></div>
        
      </div>
    </div>
    <!-- divider -->
  </section> 
<?php
}
?>