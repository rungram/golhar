<?php 
         
			$d->reset();
			$sql_tinl="select * from #_tinloai1_1 where hienthi =1 order by id desc";
			$d->query($sql_tinl);	
			$result_tinl=$d->result_array();		
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=10;
			$maxP=5;
			$paging=paging_home($result_tinl , $url, $curPage, $maxR, $maxP);
			$result_tinl=$paging['source'];
			
			
			$sql_tinll="select * from #_tinloai1_1_list where hienthi =1 order by stt asc";
			$d->query($sql_tinll);	
			$result_tinll=$d->result_array();	

?>

<section id="content">

		  
			  <!-- end divider -->
  <div class="row">
			    
		<div class="col-lg-12">
             <div class=" container content">
			     <div class="col-lg-9">
                        <div class="news">
                        <h2 >Tin tức</h2>
                        <div class="col-lg-12 listnews">
                           <div class="row">
                             <h4>Những dịch bệnh hại cần chú ý trong tuần (từ 12-19/12).</h4>
                                                <img class="img-responsive pull-left" alt="" src="img/2.jpg">
                                                <p>
                                                     Bọ nhảy, sâu xanh, sâu khoang gây hại có chiều hướng gia tăng trên rau, mức độ nhẹ đến trung bình. Tiếp tục theo dõi, xác định địa điểm châu chấu đẻ trứng để kịp thời tổ chức, thực hiện phòng chống.
                                                </p>
                                                <div><i class="fa fa-fast-forward" aria-hidden="true"><a href="chi-tiet.html">Chi tiết</a></i></div>                           
                           </div>
                           <div class="row">
                             <h4>Những dịch bệnh hại cần chú ý trong tuần (từ 12-19/12).</h4>
                                                <img class="img-responsive pull-left" alt="" src="img/2.jpg">
                                                <p>
                                                     Bọ nhảy, sâu xanh, sâu khoang gây hại có chiều hướng gia tăng trên rau, mức độ nhẹ đến trung bình. Tiếp tục theo dõi, xác định địa điểm châu chấu đẻ trứng để kịp thời tổ chức, thực hiện phòng chống.
                                                </p>
                                                <div><i class="fa fa-fast-forward" aria-hidden="true"><a href="chi-tiet.html">Chi tiết</a></i></div>                           
                           </div>
                           <div class="row">
                             <h4>Những dịch bệnh hại cần chú ý trong tuần (từ 12-19/12).</h4>
                                                <img class="img-responsive pull-left" alt="" src="img/2.jpg">
                                                <p>
                                                     Bọ nhảy, sâu xanh, sâu khoang gây hại có chiều hướng gia tăng trên rau, mức độ nhẹ đến trung bình. Tiếp tục theo dõi, xác định địa điểm châu chấu đẻ trứng để kịp thời tổ chức, thực hiện phòng chống.
                                                </p> 
                                                <div><i class="fa fa-fast-forward" aria-hidden="true"><a href="chi-tiet.html">Chi tiết</a></i></div>                          
                           </div>
                           <div class="row">
                             <h4>Những dịch bệnh hại cần chú ý trong tuần (từ 12-19/12).</h4>
                                                <img class="img-responsive pull-left" alt="" src="img/2.jpg">
                                                <p>
                                                     Bọ nhảy, sâu xanh, sâu khoang gây hại có chiều hướng gia tăng trên rau, mức độ nhẹ đến trung bình. Tiếp tục theo dõi, xác định địa điểm châu chấu đẻ trứng để kịp thời tổ chức, thực hiện phòng chống.
                                                </p> 
                                                <div><i class="fa fa-fast-forward" aria-hidden="true"><a href="chi-tiet.html">Chi tiết</a></i></div>                          
                           </div>
                           <div class="row">
                             <h4>Những dịch bệnh hại cần chú ý trong tuần (từ 12-19/12).</h4>
                                                <img class="img-responsive pull-left" alt="" src="img/2.jpg">
                                                <p>
                                                     Bọ nhảy, sâu xanh, sâu khoang gây hại có chiều hướng gia tăng trên rau, mức độ nhẹ đến trung bình. Tiếp tục theo dõi, xác định địa điểm châu chấu đẻ trứng để kịp thời tổ chức, thực hiện phòng chống.
                                                </p>
                                                <div><i class="fa fa-fast-forward" aria-hidden="true"><a href="chi-tiet.html">Chi tiết</a></i></div>
						   </div> 

                           <div class="no-bottom">
                                <h4>Những dịch bệnh hại cần chú ý trong tuần (từ 12-19/12).</h4>
                                                <img class="img-responsive pull-left" alt="" src="img/0678509327614520.jpg">
                                                <p>
                                                Bọ nhảy, sâu xanh, sâu khoang gây hại có chiều hướng gia tăng trên rau, mức độ nhẹ đến trung bình. Tiếp tục theo dõi, xác định địa điểm châu chấu đẻ trứng để kịp thời tổ chức, thực hiện phòng chống.
                                                </p>
                                                <div><i class="fa fa-fast-forward" aria-hidden="true"><a href="chi-tiet.html">Chi tiết</a></i></div>                           
                           </div>
                           
                        </div>                        
                      </div>
                        
                    		
            </div>
            <div class="col-lg-3">
                 <div class="box">
                        	<h1>Video</h1>
                         	<div class=" boxed">
                            	<a href="#" class="video"> <img src="img/images.png" alt=" "></a>
                                <a href="#" class="video"> <img src="img/images.png" alt=" "></a>
                            </div>
                  </div>
                  <div class="box">
                        	<h1>Thư viện</h1>
                         	<div class=" boxed">
                            	<div class="content-img">
                                  <div class="padding5 item-img-left col-md-6"> <a href="#"><img src="img/95017730881.jpg"></a> </div>
                                  <div class="padding5 item-img-left col-md-6"> <a href="#"><img src="img/95017730880.jpg"></a> </div>
                                  <div class="padding5 item-img-left col-md-6"> <a href="#"><img src="img/1633088327.png"></a> </div>
                                  <div class="padding5 item-img-left col-md-6"> <a href="#"><img src="img/80572517181.png"></a> </div>
                                  <div class="padding5 item-img-left col-md-6"> <a href="#"><img src="img/1561031705.jpg"></a> </div>
                                  <div class="padding5 item-img-left col-md-6"> <a href="#"><img src="img/90377741090.jpg"></a> </div>
                                  <div class="padding5 item-img-left col-md-6"> <a href="#"><img src="img/69198311360.jpg"></a> </div>
                                  <div class="padding5 item-img-left col-md-6"> <a href="#"><img src="img/4834146575.jpg"></a> </div>
                                  <div class="padding5 item-img-left col-md-6"> <a href="#"><img src="img/38458851070.jpg"></a> </div>
                                  <div class="padding5 item-img-left col-md-6"><a href="#"><img src="img/38458851071.jpg"></a></div>
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
	