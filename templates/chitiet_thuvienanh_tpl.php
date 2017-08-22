<?php 
			$id =	addslashes($_GET['id']);
		$d->reset();
		$sql_tungdanhmuc="select * from #_thuvienanh where hienthi = 1 and thumb='$id'	order by stt asc ";
		$d->query($sql_tungdanhmuc);	
		$result_hinhanh=$d->result_array(); 
		
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
		$paging=paging_home($result_hinhanh , $url, $curPage, $maxR, $maxP);
		$result_spnam=$paging['source'];
			
		
		$total_sp = count($result_spnam);
		$ngonngu = (!empty($_COOKIE['ngonngu']))?$_COOKIE['ngonngu']:'vn';
		?>
<?php
if($ngonngu == 'vn')
{ 
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
				<div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12	padding10">
					<div class="item-service"><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_hinhanh[$i]['id']?>.html" class="view-img"></a> <a target="_blank" href="upload/thuvienanh/<?php if($result_hinhanh[$i]["tc_big"]==1) echo $result_hinhanh[$i]["photo"]; else echo $result_hinhanh[$i]["photo"] ?>" class="view-img"><img src="upload/thuvienanh/<?php if($result_hinhanh[$i]["tc_big"]==1) echo $result_hinhanh[$i]["photo"]; else echo $result_hinhanh[$i]["photo"] ?>" alt=""></a></div>
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
				<div class="padding5 item-img-left col-md-6"> <a href="chi-tiet-anh/<?=$items[$i]["thumb"]?>-<?=$items[$i]["id"]?>.html"><img src="golhar/<?=_upload_thuvienanhcapcha.$items[$i]['photo']?>">
					<h5>
					<?=$items[$i]["thumb"]?>
					</h5>
					</a> </div>
				<?php }?>
				</div>
			</div>
			</div>
		</div>
		</div>
	</div>
	<div class="	clear"></div>
	</div>
	<!-- divider -->
	</section>
<?php 
}
else 
{
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
				<h2>Library pictures</h2>
				<div class="block-blog1">
				<?php for($i=0,$count_spnam=count($result_hinhanh);$i<$count_spnam;$i++) { ?>
				<div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12	padding10">
					<div class="item-service"><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_hinhanh[$i]['id']?>.html" class="view-img"></a> <a target="_blank" href="upload/thuvienanh/<?php if($result_hinhanh[$i]["tc_big"]==1) echo $result_hinhanh[$i]["photo"]; else echo $result_hinhanh[$i]["photo"] ?>" class="view-img"><img src="upload/thuvienanh/<?php if($result_hinhanh[$i]["tc_big"]==1) echo $result_hinhanh[$i]["photo"]; else echo $result_hinhanh[$i]["photo"] ?>" alt=""></a></div>
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
				<?php for($i=0, $count=count($items); $i<$count; $i++){//thumb
								?>
				<div class="padding5 item-img-left col-md-6"> <a href="chi-tiet-anh/<?=$items[$i]["thumb"]?>-<?=$items[$i]["id"]?>.html"><img src="golhar/<?=_upload_thuvienanhcapcha.$items[$i]['photo']?>">
					<h5>
					<?=$items[$i]["thumb"]?>
					</h5>
					</a> </div>
				<?php }?>
				</div>
			</div>
			</div>
		</div>
		</div>
	</div>
	<div class="	clear"></div>
	</div>
	<!-- divider -->
	</section>
<?php
}
?>	