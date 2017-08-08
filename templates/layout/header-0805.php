<?php
	$d->reset();
	$sql_list ="select *	from #_product_list order by stt asc limit 0,5";
	$d->query($sql_list);
	$list =$d->result_array();
	
	$d->reset();
	$sql_tin_l ="select *	from #_tinloai1_1_list order by stt asc limit 0,3";
	$d->query($sql_tin_l);
	$tin_l=$d->result_array();
?>
<script language="javascript"> 
		function doEnter(evt){
	// IE		 // Netscape/Firefox/Opera
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
	<div class="col-md-6	mar-hd1 text-center	">
		<div class="row"> <a class="logo" href="index.html"><img src="img/logo.png" alt="" /></a> </div>
		<div class="row">&nbsp</div>
	</div>
	<div class="col-md-6 mar-left">
		<div class="col-md-12 text-center">
		<ul class="list-lang">
			<li><a href="../index.html"> <img src="img/vi.png"></a></li>
		</ul>
		</div>
		<div class="col-md-12 padding0 block-search">
		<form class="fs-fsearch" id="">
			<div class="input-group">
			<input	id="keyword" class="form-control" placeholder="Tìm Kiếm" type="text">
			<span class="input-group-btn">
			<button class="form-control" type="button" onClick="onSearch(event,'keyword');"><i class="fa fa-search"></i></button>
			</span> </div>
		</form>
		</div>
		
	</div>
	</div>
	<?php include _template."layout/menu_top.php"; ?>
</header>
<!-- end header -->
<section id="featured" class="bg">
	<!-- start slider -->
	<!-- start slider -->
	<div class="">
	<!-- Slider -->
	<div id="main-slider" class="main-slider flexslider">
		<ul class="slides">
		<li> <img src="img/slides/flexslider/2.jpg" alt="" />
		</li>
		<li> <img src="img/slides/flexslider/3.jpg" alt="" />
		</li>
		<li> <img src="img/slides/flexslider/4.jpg" alt="" /></li>
		<li> <img src="img/slides/flexslider/1.jpg" alt="" />
			<!--<div class="flex-caption">
					<h3></h3> 
			<p></p> 
			<a href="#" class="btn btn-theme"></a>
				</div>-->
		</li>
		
		</ul>
	</div>
	<!-- end slider -->
	</div>
</section>
