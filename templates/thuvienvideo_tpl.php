<?php 
			$d->reset();
			$sql_tungdanhmuc="select * from #_video where hienthi='1' order by stt";
			$d->query($sql_tungdanhmuc);	
			$result_hinhanh=$d->result_array();	
			
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=15;
			$maxP=5;
			$paging=paging_home($result_hinhanh , $url, $curPage, $maxR, $maxP);
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
			                <h2>Thư viên ảnh</h2>
			                <div class="block-blog1">
			                <?php for($i=0,$count_spnam=count($result_hinhanh);$i<$count_spnam;$i++) { ?>
                              <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
			                    <iframe class="video" width="100%" height="120" src="https://www.youtube.com/embed/<?php echo $result_hinhanh[$i]['url'] ?>" frameborder="1" allowfullscreen></iframe>
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
                                <?php for($i=0, $count=count($items); $i<$count; $i++){//thumb
                                ?>
                                  <div class="padding5 item-img-left col-md-6"> <a href="chi-tiet-anh/<?=$items[$i]["thumb"]?>-<?=$items[$i]["id"]?>.html"><img src="golhar/<?=_upload_thuvienanhcapcha.$items[$i]['photo']?>"><h5><?=$items[$i]["thumb"]?></h5></a> </div>
                                  <?php }?>
                                </div>
                            </div>
                  </div>
        
            </div>
           </div>
    </div>
 
    		<div class="  clear"></div>
            <div class=" container support">
                        	<div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12 text-center">
                            	 <div class="progress">
                                      <div class="block">
                                      	<h1>Hotline</h1>
                                        <h3 class="title_1">Bộ phận kinh doanh</h3>
                                        <span class=" fa-3x">(+84.8) 903610327</span>
                                        <h3 class="title_1">Bộ phận hỗ trợ kỹ thuật</h3>
                                        <span class="fa-3x">(+84.8) 903610327</span>
                                        
                                      </div>
                              </div>
                                
                            </div>
                            <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12">
                            	 <div class="progress">
                                      <div class="block">
                                      	 <h1>Suport online</h1>
                                         <h3 class="title_1"></h3>
                                        <div class="httt">
                                        <img src="img/index_32.png" width="49"><span class="httt1">Bộ phận kinh doanh</span>
                                        </div>
                                        <div class="httt">
                                        <img src="img/index_32.png" alt="" width="49"><span class="httt1">Bộ phận hỗ trợ kỹ thuật</span>
                                        </div>
                                        
                                      </div>
                              </div>                                
                            </div>
                            <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12">
                            	 <div class="progress">
                                      <div class="block block-lineket">
                                      	 <h1>Mạng xã hội</h1>
                                         
                                        <div class=" httt">
                                            <ul class="social-network fa-3x text-center">
                                                <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="httt">
                                            <select onchange="window.open(this.value,'_blank')" class="block-lineket" name="select">
                                              <option value="" selected="selected">Liên kết website</option>
                                              <option value="https://www.google.com.vn/">Bộ nông nghiệp</option>
                                              <option value="https://www.google.com.vn/">Đại học nông nghiệp</option>
                                            </select>
                                        </div>
                                        
                                      </div>                               
                            </div>                     

			        	</div>
    </div>
            </div>
  <!-- divider -->
			  
	  </section>	
	
	

