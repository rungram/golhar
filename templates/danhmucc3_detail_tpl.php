
   
    <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    

    <link rel="shortcut icon" href="/favicon.ico">
    <link href="css/cssv3.css" rel="stylesheet"/>

    <link href="css/productcatev3.css" rel="stylesheet"/>

    <meta name="adx:sections" content="Điện thoại" />

    <meta name="adx:objects" content="1" />

    <meta name="adx:authors" content="" />


    

   	

<?php 
            $id =  addslashes($_GET['id']);
			$d->reset();
			$sql_tungdanhmuc="select * from #_product where hienthi =1 and id_item='$id'  order by stt asc ";
			//die($sql_tungdanhmuc);
			$d->query($sql_tungdanhmuc);	
			$result_spnam=$d->result_array();	
			
			$d->reset();
			$sql_item="select * from #_product_item where hienthi =1 and id='$id'";
			$d->query($sql_item);	
			$result_item=$d->fetch_array();	
			
			$d->reset();
			$sql_laylist="select * from #_product_list where hienthi =1 and id='".$result_item['id_list']."'";
			$d->query($sql_laylist);	
			$result_laylist=$d->fetch_array();	
			
			$d->reset();
			$sql_laycat="select * from #_product_cat where hienthi =1 and id='".$result_item['id_cat']."'";
			$d->query($sql_laycat);	
			$result_cat=$d->fetch_array();	
			
						
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=30;
			$maxP=5;
			$paging=paging_home($result_spnam , $url, $curPage, $maxR, $maxP);
			$result_spnam=$paging['source'];
            
			
			$total_sp = count($result_spnam);
        ?>


	<!-- start header -->
	<header>
	    <div id="hdbanner" class="container">
     		<div class="col-md-6 text-center  ">
            	<div class="row" style="margin-left:35%">
                    <a class="logo" href="index.html"><img src="img/logo.png" alt="" /></a>
                </div>
                <div class="row"><span class="hotline fa-2x"><i class="fa fa-phone"></i> 084 399 123</span></div>
			</div>
		<div class="col-md-6 mar-left">
							<div class="col-md-12 text-center">
								<ul class="list-lang">
									<li><a href="">
										<img src="img/vi.png"></a></li>
        
									<li><a href="../en/index.html"><img src="img/en.png"></a></li>
    
								</ul>
								</div>
								<div class="col-md-12 padding0 block-search">   
	
                                    <div class="input-group">
                                      <input class="form-control" placeholder="Tìm Kiếm" type="text">
                                      <span class="input-group-btn">
                                        <button class="form-control" type="button"><i class="fa fa-search"></i></button>
                                      </span>
                                    </div>
   
    
    
								</div>
 
							
        
		</div>
            </div>	
			
        <div class="navbar navbar-default navbar-static-top">
	 	



            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li ><a href="index.html">Trang chủ</a></li>

            			<li class="dropdown">
							<a href="gioi-thieu.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">TQ Cty<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="gioi-thieu.html">Tầm nhìn, sứ mệnh và giá trị cốt lõi</a></li>
                                <li><a href="gioi-thieu.html">Mục tiêu phát triển</a></li>
                                <li><a href="gioi-thieu.html">Hình thành và phát triển</a></li>
								
                            </ul>				
						
						</li>
                        <li class="dropdown">
							<a href="tin-tuc.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Tin tức <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="tin-tuc.html">Tin tức và sự kiện</a></li>
                                <li><a href="tin-tuc.html">Hoạt động đoàn thể</a></li>
                                <li><a href="tin-tuc.html">Bảng giá phân bón</a></li>
								
                            </ul>			
						
						</li>
                        <li class="dropdown active">
                            <a href="san-pham.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Sản phẩm <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="san-pham.html">Phân N-P-K</a></li>
                                <li><a href="san-pham.html">Phân Hữu Cơ</a></li>
								<li class="dropdown-submenu">
									<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">Phân Trung Vi Lượng</a>
									<ul class="dropdown-menu">
										<li><a href="san-pham.html">Phân Trung Vi Lượng Bón Lá</a></li>
										<li><a href="san-pham.html">Phân Trung Vi Lượng Bón Cây</a></li>
										<li><a href="san-pham.html">Phân Trung Vi Lượng Bón Trái</a></li>

									</ul>	
								</li>
                                <li><a href="san-pham.html">Phân Bón Lá</a></li>
                            </ul>
                        </li>
                        <li><a href="gia-tri.html">Giá trị</a></li>
                        <li><a href="vh-cty.html">VHCty </a></li>
                        <li class="dropdown"><a href="thu-vien.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Thư viện <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu">
                                <li><a href="thu-vien.html">Hình ảnh hoạt động</a></li>
                                <li><a href="thu-vien.html">Văn bản liên quan</a></li>
								<li><a href="thu-vien.html">Hướng dẫn kỹ thuật </a></li>
                            </ul>
						</li>
                        <li><a href="lien-he.html">Liên hệ </a></li>
                        <li><a href="ho-tro.html">Hỗ trợ </a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	
<section id="content">

		  
			  <!-- end divider -->
  <div class="row">
			    
		<div class="col-lg-12">
             <div class=" container content">
			     <div class="col-lg-9">
                        <div class="product">
			              <div class="col-md-12 col-sm-12 ">
			                <h2 >Sản phẩm</h2>
			                <div class="block-blog1">
                              <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"><a href="#" class="view-img"></a><a href="#" class="view-img"><img src="img/1.jpg" alt=""></a><a href="#">
		                        <h2>phân N-P-K</h2>
			                      </a> </div>
		                      </div>
			                  <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"> <a href="#" class="view-img"> <img src="img/2.jpg" alt=""> </a> <a href="#">
		                        <h2>phân Hữu Cơ</h2>
			                      </a> </div>
		                      </div>
			                  <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"> <a href="#" class="view-img"> <img src="img/3.jpg" alt=""> </a> <a href="#">
		                        <h2>phân Trung vi lượng</h2>
			                      </a> </div>
		                      </div>
			                  <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"> <a href="#" class="view-img"> <img src="img/Anh caphe.PNG" alt=""> </a> <a href="#">
		                        <h2>phân Bón lá</h2>
			                      </a> </div>
		                      </div>
			                  <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"> <a href="#" class="view-img"> <img src="img/1.jpg" alt="Thiết bị ngành nước tinh khiết"> </a> <a href="#">
		                        <h2>phân Hữu Cơ</h2>
			                      </a> </div>
		                      </div>
			                  <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"> <a href="#" class="view-img"> <img src="img/2.jpg" alt="Vật liệu lọc"> </a> <a href="">
		                        <h2>phân Bón lá</h2>
			                      </a> </div>
		                      </div>
			                  <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"> <a href="#" class="view-img"> <img src="img/Anh caphe.PNG" alt="Màng lọc"> </a> <a href="#">
		                        <h2>phân Hữu Cơ</h2>
			                      </a> </div>
		                      </div>
			                  <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"> <a href="#" class="view-img"> <img src="img/20150319101024-ngo-bien-doi-gen.jpg" alt="Hóa chất"> </a> <a href="#">
		                        <h2>phân Trung vi lượng</h2>
			                      </a> </div>
		                      </div>
			                  <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"> <a href="#" class="view-img"> <img src="img/_hieu-qua-mo-hinh.jpg" alt="#"> </a> <a href="#">
		                        <h2>phân Bón lá</h2>
			                      </a> </div>
		                      </div>
			                  <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"><a href="#" class="view-img"></a><a href="#" class="view-img"><img src="img/1.jpg" alt=""></a><a href="#">
		                        <h2>phân N-P-K</h2>
			                      </a> </div>
		                      </div>
			                  <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"> <a href="#" class="view-img"> <img src="img/1.jpg" alt="#"> </a> <a href="#">
		                        <h2>phân Hữu Cơ</h2>
			                      </a> </div>
		                      </div>
			                  <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"> <a href="#" class="view-img"> <img src="img/2.jpg" alt="Vật liệu lọc"> </a> <a href="">
		                        <h2>phân Bón lá</h2>
			                      </a> </div>
		                      </div>
			                  <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"> <a href="#" class="view-img"> <img src="img/Anh caphe.PNG" alt="#"> </a> <a href="#">
		                        <h2>phân Hữu Cơ</h2>
			                      </a> </div>
		                      </div>
			                  <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"> <a href="#" class="view-img"> <img src="img/20150319101024-ngo-bien-doi-gen.jpg" alt="#"> </a> <a href="#">
		                        <h2>phân Trung vi lượng</h2>
			                      </a> </div>
		                      </div>
			                  <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"> <a href="#" class="view-img"> <img src="img/_hieu-qua-mo-hinh.jpg" alt="#"> </a> <a href="#">
		                        <h2>phân Bón lá</h2>
			                      </a> </div>
		                      </div>
		                    </div>
			                <div class="phantrang">
                            <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a href="#">2</a></li><li class="PagedList-skipToNext"><a href="#" rel="next">»</a></li></ul></div>
                            
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
	
	
	<footer>
	<div class="container">
		<div class="row">
        	<div class="col-sm-2 col-lg-2">
				<div class="row text-center ">
                    <a class="logo" href="index.html"><img src="img/logo.png" alt="" / width="189"></a>
                </div>
				
			</div>
			<div class="col-sm-5 col-lg-5">
				<div class="widget">
					<h4>Công Ty TNHH Phân Bón Golhar - Golhar Co.,ltd</h4>
					<address>
					
					 Địa chỉ:       Lô H6-H7-H8, Đường số 05, KCN Đức Hòa III- Hồng Đạt - Xã Đức Lập Hạ - Huyện Đức Hoà - Long An</address>
					<p>
						<i class="icon-phone"></i>Điện thoại: 0839873229  -   Fax : 0839873679 <br>
						<i class="icon-envelope-alt"></i>Email: info@golhar.com -  Website: www/golhar.com
					</p> 
				</div>
			</div>
			
			<div class="col-sm-5 col-lg-5">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.3607126147504!2d106.4471653141733!3d10.936101192213297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310b2bcd97e85c5b%3A0x7c97f2944d051501!2zS2h1IGPDtG5nIG5naGnhu4dwIMSQ4bupYyBIw7JhIDM!5e0!3m2!1svi!2s!4v1483522920870" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; 2015 All right reserved. <a href="#/"></a> </span>
                             <!-- 
                                All links in the footer should remain intact. 
                                Licenseing information is available at: http://bootstraptaste.com/license/
                                You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Sailor
                            -->
						
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li>View: <span class="fa-2x">1025</span></li>
						<li>Online:<span class="fa-2x">100</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>

