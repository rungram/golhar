<?php 
			$ngonngu = (!empty($_COOKIE['ngonngu']))?$_COOKIE['ngonngu']:'vn';
        ?>
<?php
if($ngonngu == 'vn')
{
    $id =  addslashes($_GET['id']);
    $d->reset();
    $sql_tungdanhmuc="select * from #_product where hienthi =1 and id_cat='$id' and ( hienngonngu =3 or hienngonngu =1)  order by stt asc ";
    $d->query($sql_tungdanhmuc);
    $result_spnam=$d->result_array();
    	
    $d->reset();
    $sql_laycat="select * from #_product_cat where hienthi =1 and id='$id'";
    $d->query($sql_laycat);
    $result_cat=$d->fetch_array();
    	
    $d->reset();
    $sql_laylist="select * from #_product_list where hienthi =1 and id='".$result_cat['id_list']."'";
    $d->query($sql_laylist);
    $result_laylist=$d->fetch_array();
    	
    
    $curPage = isset($_GET['p']) ? $_GET['p'] : 1;
    $url=getCurrentPageURL();
    $maxR=15;
    $maxP=5;
    $paging=paging_home($result_spnam , $url, $curPage, $maxR, $maxP);
    $result_spnam=$paging['source'];
    
    	
    $total_sp = count($result_spnam);
?>

	<!-- start header -->
	
<section id="content">

		  
			  <!-- end divider -->
  <div class="row">
			    
		<div class="col-lg-12">
             <div class=" container content">
			     <div class="col-lg-9">
                        <div class="product">
			              <div class="col-md-12 col-sm-12 ">
			                <h2>Sản phẩm</h2>
			                <div class="block-blog1">
			                <?php for($i=0,$count_spnam=count($result_spnam);$i<$count_spnam;$i++) { ?>
			                
                              <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" class="view-img"></a>
			                    <a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" class="view-img"><img src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["photo"]; else echo $result_spnam[$i]["photo"] ?>" alt=""></a><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html">
		                        <h2><?=$result_spnam[$i]["ten_vi"]?></h2>
			                      </a> </div>
		                      </div>
			                <?php }?>
		                    </div>
			                <div class="phantrang">
                            <div class="pagination-container">
                            <ul class="pagination">
                            <?=$paging['paging']?>
                            </ul>
                            </div>
		                  </div>
		                </div>
                     </div>   
                    		
            </div>
            <div class="col-lg-3">
                 <div class="box">
                        	<h1>Video</h1>
                         	<div class=" boxed">
                            	<?php 
                                   global $d, $item;
                                   $sql = "select * from #_video where hienthi='1' order by stt";
                                   $d->query($sql);
                                   $items = $d->result_array();
                                ?>
                                <?php for($i=0, $count=count($items); $i<$count; $i++){?>
                                  <iframe class="video" width="100%" height="120" src="https://www.youtube.com/embed/<?php echo $items[$i]['url'] ?>" frameborder="1" allowfullscreen></iframe>
                                <?php }?>
                            </div>
                  </div>
                  <div class="box">
                        	<h1>Thư viện</h1>
                         	<div class=" boxed">
                            	<div class="content-img">
                            	   <?php 
                                   global $d, $item;
                                   $sql = "select * from #_thuvienanhcapcha where hienthi='1' order by stt";
                                   $d->query($sql);
                                   $items = $d->result_array();
                                ?>
                                <?php for($i=0, $count=count($items); $i<$count; $i++){?>
                                  <div class="padding5 item-img-left col-md-6"> <a href="chi-tiet-anh/<?=$items[$i]["thumb"]?>-<?=$items[$i]["id"]?>.html"><img src="golhar/<?=_upload_thuvienanhcapcha.$items[$i]['photo']?>"></a> </div>
                                  <?php }?>
                                </div>
                            
                            </div>
                  </div>
        
            </div>
           </div>
    </div>
 
    		<div class="  clear"></div>
            </div>
  <!-- divider -->
			  
	  </section>	
<?php 
}
else 
{
    $id =  addslashes($_GET['id']);
    $d->reset();
    $sql_tungdanhmuc="select * from #_product where hienthi =1 and id_cat='$id' and ( hienngonngu =3 or hienngonngu =2)  order by stt asc ";
    $d->query($sql_tungdanhmuc);
    $result_spnam=$d->result_array();
     
    $d->reset();
    $sql_laycat="select * from #_product_cat where hienthi =1 and id='$id'";
    $d->query($sql_laycat);
    $result_cat=$d->fetch_array();
     
    $d->reset();
    $sql_laylist="select * from #_product_list where hienthi =1 and id='".$result_cat['id_list']."'";
    $d->query($sql_laylist);
    $result_laylist=$d->fetch_array();
     
    
    $curPage = isset($_GET['p']) ? $_GET['p'] : 1;
    $url=getCurrentPageURL();
    $maxR=15;
    $maxP=5;
    $paging=paging_home($result_spnam , $url, $curPage, $maxR, $maxP);
    $result_spnam=$paging['source'];
    
     
    $total_sp = count($result_spnam);
?> 
<section id="content">

		  
			  <!-- end divider -->
  <div class="row">
			    
		<div class="col-lg-12">
             <div class=" container content">
			     <div class="col-lg-9">
                        <div class="product">
			              <div class="col-md-12 col-sm-12 ">
			                <h2>Products</h2>
			                <div class="block-blog1">
			                <?php for($i=0,$count_spnam=count($result_spnam);$i<$count_spnam;$i++) { ?>
			                
                              <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" class="view-img"></a>
			                    <a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" class="view-img"><img src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["photo"]; else echo $result_spnam[$i]["photo"] ?>" alt=""></a><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html">
		                        <h2><?=$result_spnam[$i]["ten_en"]?></h2>
			                      </a> </div>
		                      </div>
			                <?php }?>
		                    </div>
			                <div class="phantrang">
                            <div class="pagination-container">
                            <ul class="pagination">
                            <?=$paging['paging']?>
                            </ul>
                            </div>
		                  </div>
		                </div>
                     </div>   
                    		
            </div>
            <div class="col-lg-3">
                 <div class="box">
                        	<h1>Video</h1>
                         	<div class=" boxed">
                            	<?php 
                                   global $d, $item;
                                   $sql = "select * from #_video where hienthi='1' order by stt";
                                   $d->query($sql);
                                   $items = $d->result_array();
                                ?>
                                <?php for($i=0, $count=count($items); $i<$count; $i++){?>
                                  <iframe class="video" width="100%" height="120" src="https://www.youtube.com/embed/<?php echo $items[$i]['url'] ?>" frameborder="1" allowfullscreen></iframe>
                                <?php }?>
                            </div>
                  </div>
                  <div class="box">
                        	<h1>Library</h1>
                         	<div class=" boxed">
                            	<div class="content-img">
                            	   <?php 
                                   global $d, $item;
                                   $sql = "select * from #_thuvienanhcapcha where hienthi='1' order by stt";
                                   $d->query($sql);
                                   $items = $d->result_array();
                                ?>
                                <?php for($i=0, $count=count($items); $i<$count; $i++){?>
                                  <div class="padding5 item-img-left col-md-6"> <a href="chi-tiet-anh/<?=$items[$i]["thumb"]?>-<?=$items[$i]["id"]?>.html"><img src="golhar/<?=_upload_thuvienanhcapcha.$items[$i]['photo']?>"></a> </div>
                                  <?php }?>
                                </div>
                            
                            </div>
                  </div>
        
            </div>
           </div>
    </div>
 
    		<div class="  clear"></div>
            </div>
  <!-- divider -->
			  
	  </section>	
<?php
}
?>	