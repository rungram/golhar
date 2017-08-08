<?php 
		$id =	addslashes($_GET['id']);
		$d->reset();
		$sql_tungdanhmuc="select * from #_product where hienthi =1 and id_list='$id'	order by stt asc ";
		$d->query($sql_tungdanhmuc);	
		$result_spnam=$d->result_array(); 
		
		$d->reset();
		$sql_laycat="select * from #_product_cat where hienthi =1 and id='$id'";
		$d->query($sql_laycat); 
		$result_cat=$d->fetch_array();	
		
		$d->reset();
		$sql_laylist="select * from #_product_list where hienthi =1 and id='".$id."'";
		$d->query($sql_laylist);	
		$result_laylist=$d->fetch_array();	
		
			
		$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
		$url=getCurrentPageURL();
		$maxR=5;
		$maxP=5;
		$paging=paging_home($result_spnam , $url, $curPage, $maxR, $maxP);
		$result_spnam=$paging['source'];
		
		$total_sp = count($result_spnam);
?>
<section id="content">
	<!-- end divider -->
	
	<div class="row">
	<div class="col-lg-12">
		<div class=" container content">
		<div class="col-lg-9">
			<div class="news">
			<h2 ><?php echo $result_laylist["ten_vi"]?></h2>
			<div class="col-lg-12 listnews">
				<?php for($i=0,$count_tl=count($result_spnam);$i<$count_tl;$i++)
				{ 
				?>
				<div class="row">
				<h4><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html">
					<?=$result_spnam[$i]["ten_vi"]?>
					</a>
				</h4>
				<a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html">
					<img class="img-responsive pull-left" alt="" src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["photo"]; else echo $result_spnam[$i]["photo"] ?>">
				</a>
				<p>
					<?=$result_spnam[$i]["mota_vi"]?>
				</p>
				<div> <i class="fa fa-fast-forward" aria-hidden="true">
					<a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html">Chi tiết</a> </i> </div>
				</div>
				<?php 
				}
				?>
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
				<?php for($i=0, $count=count($items); $i<$count; $i++){?>
				<div class="padding5 item-img-left col-md-6"> <a href="chi-tiet-anh/<?=$items[$i]["thumb"]?>-<?=$items[$i]["id"]?>.html"><img src="golhar/<?=_upload_thuvienanhcapcha.$items[$i]['photo']?>"></a> </div>
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
