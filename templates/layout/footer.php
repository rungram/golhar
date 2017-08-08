<?php 
	$d->reset();
	$sql_tin_foo ="select *  from #_tinloai1_3 order by stt asc limit 0,9";
	$d->query($sql_tin_foo);
	$tin_foo=$d->result_array();
?>

<footer class="container">
  <div class="container">
    <div class="row">
      <div class="col-sm-2 col-lg-2">
        <div class="row text-center "> <a class="logo" href="index.html"><img src="img/logo.png" alt="" / width="189"></a> </div>
      </div>
      <div class="col-sm-5 col-lg-5">
        <div class="widget">
          <h4>CÔNG TY TNHH PHÂN BÓN GOLHAR</h4>
          <address>
          Trụ sở chính: B219 KCN Thái Hòa, Xã Đức Lập Hạ, Huyện Đức Hòa, Tỉnh Long An
          </address>
          <p> <i class="icon-phone"></i>Điện thoại: 08 6675.9988 - Fax: <br>
            <i class="icon-envelope-alt"></i>Email: info@golhar.com.vn -  Website: www.golhar.com.vn </p>
        </div>
      </div>
      <div class="col-sm-5 col-lg-5">
        <h4>VĂN PHÒNG ĐẠI DIỆN</h4>
        <p> <i class="icon-phone"></i>VPĐD: G79 KDC Thới An 1, Đường Lê Thị Riêng, Phường Thới An, Quận 12, TP HCM </p>
        <p> <i class="icon-phone"></i>Điện thoại: 08 6675.9988 - Fax: <br>
          <i class="icon-envelope-alt"></i>Email: info@golhar.com.vn -  Website: www.golhar.com.vn </p>
      </div>
    </div>
  </div>
  <div id="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="copyright">
            <p> <span>&copy; 2017 All right reserved. <a href="#/"></a> </span>
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
            <li>View: <span class="fa-2x"><?php echo (1000+$count_user_online*2); ?></span></li>
            <li>Online:<span class="fa-2x"><?php echo $count_user_online; ?></span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
