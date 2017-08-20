<?php 
	$d->reset();
	$sql_tin_foo ="select *  from #_tinloai1_3 order by stt asc limit 1";
	$d->query($sql_tin_foo);
	$tin_foo=$d->result_array();
	$id = $tin_foo[0]["id"];
	
	$d->reset();
	$sql_tanglx="update  #_tinloai1_3 set luotxem=luotxem+1 where id='$id'";
	$d->query($sql_tanglx);	
	
	$ngonngu = (!empty($_COOKIE['ngonngu']))?$_COOKIE['ngonngu']:'vn';
?>
<?php
if($ngonngu == 'vn')
{ 
?> 
<footer class="container">
  <div class="container">
    <div class="row">
    <?=$tin_foo[0]["noidung_vi"]?>
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
            <li>View: <span class="fa-2x"><?=$tin_foo[0]["luotxem"]?></span></li>
            <li>Online:<span class="fa-2x"><?php echo $count_user_online; ?></span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php 
}
else 
{
?>    
<footer class="container">
  <div class="container">
    <div class="row">
    <?=$tin_foo[0]["noidung_en"]?>
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
            <li>View: <span class="fa-2x"><?=$tin_foo[0]["luotxem"]?></span></li>
            <li>Online:<span class="fa-2x"><?php echo $count_user_online; ?></span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php
}
?>