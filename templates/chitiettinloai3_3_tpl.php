<?php 
         
			$id =  addslashes($_GET['id']);
			
			$d->reset();
			$sql_tanglx="update  #_tinloai1_1 set luotxem=luotxem+1 where id='$id'";
			$d->query($sql_tanglx);
	
	
			$sql_detail="select * from #_tinloai1_1 where id='$id'";
			$d->query($sql_detail);	
			$result_detail=$d->fetch_array();	
			
			
			
			$sql_tinll="select * from #_tinloai1_1_list where hienthi =1 order by stt asc";
			$d->query($sql_tinll);	
			$result_tinll=$d->result_array();	
			
			
			$d->reset();
			$sql_tinlq="select * from #_tinloai1_1 where  id<>'$id' limit 0,5";
			$d->query($sql_tinlq);	
			$result_tinlq=$d->result_array();

?>

  <link href="news.css" rel="stylesheet">
 <div class="wrapper page-news">
        <div id="main">
			<div class="fshop-mainbox">
            
            
                <div class="row">
                        <div class="fshop-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Trang chủ</a></li>
                                <li class="active"><a href="tin-tuc.html">Tin tức</a></li>
                            </ol>
                        </div>
                </div>
                
                
                <div class="row">
                <div class="fns-menunews">
                    <span class="fns-mnnewsicon"><i class="glyphicon glyphicon-menu-hamburger"></i> DANH MỤC TIN</span>
                    <ul class="clearfix">
                        <li class="active"><a href="tin-tuc.html" title="">Tin mới</a></li>
                        <?php for($i=0,$count_tll=count($result_tinll);$i<$count_tll;$i++) { ?>    
                        <li><a href="tin-tuc-list/<?=$result_tinll[$i]['tenkhongdau']?>-<?=$result_tinll[$i]['id']?>.html" title=""><?=$result_tinll[$i]['ten_vi']?></a></li>
                        <?php } ?> 
                    </ul>
                </div>
            	</div>


				
                
                <div class="row fshop-newslist">
        <!--LEFT - MAIN-->
        <div class="fshop-news-colleft"> 
        <div class="row"> 
        <div class="fns-lnewsbox">                            
         
         
         				
                    <h1 class="fnews-detail-title"><?=$result_detail['ten_vi']?></h1>

                    <p class="fnews-detail-time"><?=$result_detail['ngaytao']?> - <span class="text-danger"> <?=$result_detail['luotxem']?> lượt xem</span></p>
                    
                    
                    
                    <ul class="fnews-detail-orthernews">
                    </ul>
                    
                    <!--DETAIL ORTHER NEWS-->
					<input type="hidden" value="huy">
                    <div class="fnews-detail-content">
                        <p style="text-align: justify;"><strong><?=$result_detail['mota_vi']?></strong></p>
								
						<?=$result_detail['noidung_vi']?>
                    </div>
                    <!--DETAIL CONTENT-->
                    
                    <!--DETAIL LIKE AND RATTING-->
                        <div class="fshop-cvd-itemqutam">
                            <strong>Có thể bạn quan tâm: </strong>
                                <?php for($i=0,$count_tlq=count($result_tinlq);$i<$count_tlq;$i++) { ?>
                                <a href="tin-tuc-detail/<?=$result_tinlq[$i]['tenkhongdau']?>-<?=$result_tinlq[$i]['id']?>.html" rel="tag" title="<?=$result_tinlq[$i]['ten_vi']?>">
                                   <?=$result_tinlq[$i]['ten_vi']?>
                                </a>
                                 <?php } ?> 
                        </div>
                                        <!--DETAIL TAG-->
                    
                    <!--DETAIL ADS BOTTOM-->
                        
                    
                
          
          
           </div> </div> </div>
        <!--RIGHT SITEBAR-->
        <div class="fshop-news-colright">
            <div class="row">		
                <div class="fshop-rnl-row clearfix">
                    <div class="fshop-rnl-col">
                        
                            
                           <?php for($i=0,$count_tll=count($result_tinll);$i<$count_tll;$i++) { 
						   						   
							$sql_tinll_c="select * from #_tinloai1_1 where hienthi =1 and id_list ='".$result_tinll[$i]["id"]."' order by id desc limit 0,7";
							//echo $sql_tinll_c;
							$d->query($sql_tinll_c);	
							$result_tinll_c=$d->result_array();	
						   ?>    
                          <div class="fshop-rnl-ctmore"> 
                          
                          <a href="tin-tuc-list/<?=$result_tinll[$i]['tenkhongdau']?>-<?=$result_tinll[$i]['id']?>.html" title="<?=$result_tinll[$i]['ten_vi']?>" class="fns-rnewstitle"><h3><?=$result_tinll[$i]['ten_vi']?></h3></a> 
                          <ul> 
                           <?php for($j=0,$count_tllc=count($result_tinll_c);$j<$count_tllc;$j++) { ?>  
                               <li class="clearfix"> <a href="tin-tuc-detail/<?=$result_tinll_c[$j]['tenkhongdau']?>-<?=$result_tinll_c[$j]['id']?>.html" title="<?=$result_tinll_c[$j]['ten_vi']?>"> <div class="fshop-rnl-ctmoreimg"> <img src="upload/tinloai1_1/<?=$result_tinll_c[$j]['thumb']?>" alt="<?=$result_tinll_c[$j]['ten_vi']?>"> </div> <div class="fshop-rnl-ctmoretitle"><?=$result_tinll_c[$j]['ten_vi']?> </div> </a> </li>  
						   <?php } ?> 
                          </ul> 
                          </div> 
                           <?php } ?> 
                          
                          
                             
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
			</div>
    </div>
 </div>
 