<?php
	$d->reset();
	$sql_list ="select *	from #_product_list order by stt asc limit 0,5";
	$d->query($sql_list);
	$list =$d->result_array();
	
	$d->reset();
	$sql_tin_l ="select * from #_tinloai1_1_list order by stt asc limit 0,3";
	$d->query($sql_tin_l);
	$tin_l=$d->result_array();
	
	$d->reset();
	$sql_slider = "select ten,photo,link from #_slideshow order by stt asc";
	$d->query($sql_slider);
	$result_slider=$d->result_array();
	
	$d->reset();
	$sql_slider = "select * from #_tinloai2_1a limit 1";
	$d->query($sql_slider);
	$result_gioithieu=$d->fetch_array();
	$gioithieu = $result_gioithieu['ten_vi'];
	$gioithieuen = $result_gioithieu['ten_en'];
	
	$ngonngu = (!empty($_COOKIE['ngonngu']))?$_COOKIE['ngonngu']:'vn';
?>
<?php
if($ngonngu == 'vn')
{ 
?>
<script language="javascript"> 
	function doEnter(evt){
	// IE	// Netscape/Firefox/Opera
	var key;
	if(evt.keyCode == 13 || evt.which == 13){
	onSearch(evt);
	}
	}
	function onSearch(evt) {
	var keyword = document.getElementById("keyword").value;
	if(keyword=='')
	alert('Bạn chưa nhập tên!');
	else{
	//var encoded = Base64.encode(keyword);
	location.href = "index.php?com=tim-kiem&keyword="+keyword;
	loadPage(document.location);	
	}
	}	
</script>

<header>
	<div id="hdbanner" class="container">
		<div class="col-md-6	mar-hd1 text-center ">
			<div class="row"> <a class="logo" href="index.html"><img src="img/logo.png" alt="" /></a> </div>
		</div>
		<div class="col-md-6 mar-left">
			<div class="col-md-12 text-center"> </div>
			<div class="col-lg-12 col-md-12 col-xs-12 padding0 block-search">
			<div class="input-group pull-left">
				<form class="fs-fsearch" id="">
				<div class="input-group">
					<input	id="keyword" class="form-control" placeholder="Tìm Kiếm" type="text">
					<span class="input-group-btn">
					<button class="form-control" type="button" onClick="onSearch(event,'keyword');"><i class="fa fa-search"></i></button>
					</span> </div>
				</form>
			</div>
			<div class="lang-vn pull-right">
			     <a onclick="ngonngu('vn')" > 
			         <img src="img/vi.png">
		         </a>
		         <a onclick="ngonngu('en')" > 
		             <img src="img/en.png">
	             </a> 
             </div>
			</div>
		</div>
		<div class="marquee" style="width:100%">
		<div >
			<marquee direction="right" behavior="alternate" style="width:100%;" >
			<?=$gioithieu?>
			</marquee>
		</div>
		</div>
	</div>
	<?php include _template."layout/menu_top.php"; ?>
</header>
<!-- end header -->
<script language="javascript"> 
function ngonngu(val){
	document.cookie = "ngonngu="+val+"; path=/";
	location.reload();
}
</script>
<section id="featured" class="container">
<!-- start slider -->
<!-- start slider -->
<div class="container">
  <!-- Slider -->
  <div id="main-slider" class="main-slider flexslider">
    <ul class="slides">
      <?php  for($i=0,$count_result_slider=count($result_slider);$i<$count_result_slider;$i++){ ?>
        <li><img src="<?= _upload_slideshow_l.$result_slider[$i]['photo'] ?>"/></li>	
    <?php } ?>	
    </ul>
  </div>
  <!-- end slider -->
</div>
</section>
<?php 
}
else 
{
?>
<script language="javascript"> 
	function doEnter(evt){
	// IE	// Netscape/Firefox/Opera
	var key;
	if(evt.keyCode == 13 || evt.which == 13){
	onSearch(evt);
	}
	}
	function onSearch(evt) {
	var keyword = document.getElementById("keyword").value;
	if(keyword=='')
	alert('Bạn chưa nhập tên!');
	else{
	//var encoded = Base64.encode(keyword);
	location.href = "index.php?com=tim-kiem&keyword="+keyword;
	loadPage(document.location);	
	}
	}	
</script>

<header>
	<div id="hdbanner" class="container">
		<div class="col-md-6	mar-hd1 text-center ">
			<div class="row"> <a class="logo" href="index.html"><img src="img/logo.png" alt="" /></a> </div>
		</div>
		<div class="col-md-6 mar-left">
			<div class="col-md-12 text-center"> </div>
			<div class="col-lg-12 col-md-12 col-xs-12 padding0 block-search">
			<div class="input-group pull-left">
				<form class="fs-fsearch" id="">
				<div class="input-group">
					<input	id="keyword" class="form-control" placeholder="Search" type="text">
					<span class="input-group-btn">
					<button class="form-control" type="button" onClick="onSearch(event,'keyword');"><i class="fa fa-search"></i></button>
					</span> </div>
				</form>
			</div>
			<div class="lang-vn pull-right">
			     <a onclick="ngonngu('vn')"> 
			         <img src="img/vi.png">
		         </a>
		         <a onclick="ngonngu('en')"> 
		             <img src="img/en.png">
		             </a> 
             </div>
			</div>
		</div>
		<div class="marquee" style="width:100%">
		<div >
			<marquee direction="right" behavior="alternate" style="width:100%;" >
			<?=$gioithieuen?>
			</marquee>
		</div>
		</div>
	</div>
	<?php include _template."layout/menu_top.php"; ?>
</header>
<!-- end header -->
<script language="javascript"> 
function ngonngu(val){
	document.cookie = "ngonngu="+val+"; path=/";
	location.reload();
}
</script>
<section id="featured" class="container">
<!-- start slider -->
<!-- start slider -->
<div class="container">
  <!-- Slider -->
  <div id="main-slider" class="main-slider flexslider">
    <ul class="slides">
      <?php  for($i=0,$count_result_slider=count($result_slider);$i<$count_result_slider;$i++){ ?>
        <li><img src="<?= _upload_slideshow_l.$result_slider[$i]['photo'] ?>"/></li>	
    <?php } ?>	
    </ul>
  </div>
  <!-- end slider -->
</div>
</section>
<?php
}
?>
