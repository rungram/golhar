<?php  
// 	if(!defined('_source')) die("Error");
// 	$d->setTable('gioithieu');
// 	$d->select("noidung_$lang,mota_$lang,link");
// 	if($d->num_rows()>0){
// 		$row = $d->fetch_array();
// 		$noidung_about= $row["noidung_$lang"];
// 		$noidung_mota= $row["mota_$lang"];
// 		$noidung_link= $row['link'];
// 	}
		
			
// 	$d->reset();
// 	$sql_tin_foo ="select *  from #_tinloai1_3 order by stt asc limit 0,9";
// 	$d->query($sql_tin_foo);
// 	$result_tinll_c=$d->result_array();
	
	
// 	$d->reset();
// 	$sql_contact = "select noidung_$lang from #_lienhe ";
// 	$d->query($sql_contact);
// 	$company_contact = $d->fetch_array();
	if( $_SERVER['REQUEST_METHOD'] == 'POST' )
	{
		global $d;
		$data['ten'] = $_POST['ten'];
		$data['email'] = $_POST['email'];
		$data['dienthoai'] = $_POST['dienthoai'];
		$data['diachi'] = $_POST['diachi'];
		$data['noidung'] = $_POST['noidung'];
		$d->setTable('lienhe');
		$d->insert($data);
	}
?>
<section id="content">

		  
			  <!-- end divider -->
  <div class="row">
			    
		<div class="col-lg-12">
             <div class=" container contact-form">
			  <div class=" col-lg-9 " style="padding-top:5px">
  
<script language="javascript" src="admin/media/scripts/my_script.js"></script>
<script language="javascript">
function js_submit(){
	if(isEmpty(document.getElementById('ten'), "Please enter a name.")){
		document.getElementById('ten').focus();
		return false;
	}
	if(isEmpty(document.getElementById('dienthoai'), "Please enter a dien thoai.")){
		document.getElementById('dienthoai').focus();
		return false;
	}
	/*if(isEmpty(document.getElementById('diachi'), "Vui lòng nhập địa chỉ")){
		document.getElementById('diachi').focus();
		return false;
	}*/
	if(!check_email(document.frm.email.value)){
		alert("Email is invalid");
		document.frm.email.focus();
		return false;
	}
		
	if(isEmpty(document.getElementById('noidung'), "Please enter content.")){
		document.getElementById('noidung').focus();
		return false;
	}
	
	document.frm.submit();
}
</script>


 

<div class=" padding5 col-md-12 col-sm-12 col-xsm-12  col-xs-12 section-left">
	<div class="col-md-7">
    <h3><span><span>Liên hệ qua email</span></span></h3>
    <div class="content-lienhe">
    
<div class="col-md-10 col-sm-10 ">

      <div class="contact-form">
                    <form method="post" name="frm" action="lien-he.html">
                        <ul id="form-inner">
                            <li>
                                <label for="name">Họ tên (<span>*</span>)</label>
                                <input required placeholder="Họ tên" class="maxchar" id="ten" name="ten" type="text">
                                <div class="clearb"></div>
                            </li>
                            <li>
                                <label for="email">Email (<span>*</span>)</label>
                                <input required placeholder="Email" class="maxchar" id="email" name="email" type="email">
                                <div class="clearb"></div>
                            </li>
                            <li>
                                <label for="email">Điện thoại (<span>*</span>)</label>
                                <input required placeholder="Điện thoại " class="maxchar" id="dienthoai" name="dienthoai" type="email">
                                <div class="clearb"></div>
                            </li>
                            <li>
                            	<label for="email">Địa chỉ: (<span>*</span>)</label>
                               <input required class="maxchar" placeholder="Địa chỉ" id="diachi" name="diachi" type="text">
                                <div class="clearb"></div>
                            </li>
                            <li>
                                <label for="message">Nội dung (<span>*</span>)</label>
                                <textarea required placeholder="Nội dung" class="maxchar textarea textarea-contact" rows="3" id="noidung" name="noidung"></textarea>
                            </li>
                            <li>
                            <label for="message">&nbsp;</label>
                            	<input onclick="js_submit()" class="button button-gui-email" value=" Gửi " type="button">
                               <!-- <input type="reset" class="button button-gui"  value="Hủy">-->
                            </li>
                        </ul>
                    </form>
          		</div>
          </div>      
             <div class="clearb"></div>
       <div class="ggmaps1">
              	
                
             
              </div>      
      <div class="clearb"></div>
    </div>
  </div>
    <div class="col-md-5">
    <h3><span><span>CÔNG TY TNHH PHÂN BÓN GOLHAR</span></span></h3>
    <div class="content-lienhe">
    <div>
      <div>
        <address>
          Trụ sở chính: B219 KCN Thái Hòa, Xã Đức Lập Hạ, Huyện Đức Hòa, Tỉnh Long An
          </address>
        <p> Điện thoại: 08. 6675 9988  -   Fax:  <br>
          Email: info@golhar.com.vn -  Website: www.golhar.com.vn </p>
      </div>
      
      <div>
        <address>
          VPĐD: G79 KDC Thới An 1, Đường Lê Thị Riêng, Phường Thới An, Quận 12, TP HCM
          </address>
        <p> Điện thoại: 08. 6675 9988  -   Fax:  </p>
      </div>
    </div>
    <p>&nbsp;</p>
   </div></div>

        	<!--end block-->
        </div>
        <div class=" content-lienhe">
        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.3607126147504!2d106.4471653141733!3d10.936101192213297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310b2bcd97e85c5b%3A0x7c97f2944d051501!2zS2h1IGPDtG5nIG5naGnhu4dwIMSQ4bupYyBIw7JhIDM!5e0!3m2!1svi!2s!4v1483522920870" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
           <div class="hr-style1"></div>
 
    		<div class="  clear"></div>
            </div>
            </div>
		  <!-- divider -->
			  
	  </section>