<?php
	$d->reset();
	$sql_list ="select *	from #_product_list where hienthi = 1 order by stt asc limit 0,10";
	$d->query($sql_list);
	$list =$d->result_array();
	$ngonngu = (!empty($_COOKIE['ngonngu']))?$_COOKIE['ngonngu']:'vn';
?>
<?php
if($ngonngu == 'vn')
{ 
?>


<div class="navbar navbar-default navbar-static-top container">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="navbar-collapse collapse ">
          <ul class="nav navbar-nav">
          	<li	><a href="index.html">TRANG CHỦ</a></li>
            <?php for($i=0,$count_l=count($list);$i<$count_l;$i++){
				$d->reset();
				$sql_cat ="select *	from #_product_cat where id_list='".$list[$i]["id"]."' and hienthi = 1 order by stt asc";
				$d->query($sql_cat);
				$cat =$d->result_array();
				$child = 'class="dropdown"';
				$taga	= '<i class="fa fa-angle-down"></i>';
				$href = '#';
				$toggle ='dropdown';
				if(count($cat)<1)
				{
					$href = $list[$i]["ten_cn"].'-list/'.$list[$i]["tenkhongdau"].'-'.$list[$i]["id"].'.html';	
					$child = "";
					$taga = "";
					$toggle = '';
				}
				?>
			<li <?php echo $child;?>> <a href="<?php echo $href;?>" class="dropdown-toggle " data-toggle="<?php echo $toggle;?>" data-hover="dropdown" data-delay="0" style="text-transform: uppercase;" data-close-others="false">
				<?=$list[$i]["ten_vi"]?>
				<?php echo $taga;?></a>
				<ul class="dropdown-menu">
				<?php for($j=0,$count_c=count($cat);$j<$count_c;$j++){
					$d->reset();
					$sql_item ="select * from #_product where id_list='".$list[$i]["id"]."' and id_cat='".$cat[$j]["id"]."' order by stt asc";
					$d->query($sql_item);
					$item =$d->result_array();
					$child1 = 'class="dropdown-submenu"';
					$child2 = '<em class="arr-mb-mn"></em>';
					if(count($item)<1)
					{
						$child1 = "";
						$child2 = "";
						//}
					 ?>
					<li <?php echo $child1;?>> <a href="<?php echo $list[$i]["ten_cn"]?>-cat/<?=$cat[$j]["tenkhongdau"]?>-<?=$cat[$j]["id"]?>.html">
						<?=$cat[$j]["ten_vi"]?>
					</a> </li>
					<?php } else if(1>2) {?>
					<li class="dropdown-submenu"> <a href="<?php echo $list[$i]["ten_cn"]?>-cat/<?=$cat[$j]["tenkhongdau"]?>-<?=$cat[$j]["id"]?>.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown"><?=$cat[$j]["ten_vi"]?></a>
						<ul class="dropdown-menu">
						<?php for($k=0,$count_item=count($item);$k<$count_item;$k++){ ?>
							<li><a href="chi-tiet-san-pham/<?=$item[$k]["tenkhongdau"]?>-<?=$item[$k]["id"]?>.html"><?=$item[$k]["ten_vi"]?></a></li>
						<?php }?>
						</ul>
					</li>
					<?php } else {
						$child1 = "";
						$child2 = "";
					 ?>
					<li <?php echo $child1;?>> <a href="<?php echo $list[$i]["ten_cn"]?>-cat/<?=$cat[$j]["tenkhongdau"]?>-<?=$cat[$j]["id"]?>.html">
						<?=$cat[$j]["ten_vi"]?>
					</a> </li>
					<?php }?>
					
				<?php }?>
				</ul>
			</li>
			<?php }?>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" style="text-transform: uppercase;" data-close-others="false">Thư viện<i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                						     	<li>
						<a href="thu-vien-cat/van-ban-11.html">VĂN BẢN</a>
					</li>
											     	<li>
						<a href="chi-tiet-album-anh.html">ẢNH</a>
					</li>
											     	<li>
						<a href="thu-vien-video.html">VIDEO CLIP</a>
					</li>
					                            </ul>				
			
			</li>
			<li	class=""><a style="text-transform: uppercase;" href="lien-he.html">Liên hệ</a></li>
          </ul>
        </div>
      </div>
    </div>
<?php 
}
else 
{
?>    
<div class="navbar navbar-default navbar-static-top container">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="navbar-collapse collapse ">
          <ul class="nav navbar-nav">
          	<li	><a href="index.html">HOME</a></li>
            <?php for($i=0,$count_l=count($list);$i<$count_l;$i++){
				$d->reset();
				$sql_cat ="select *	from #_product_cat where id_list='".$list[$i]["id"]."' and hienthi = 1 order by stt asc";
				$d->query($sql_cat);
				$cat =$d->result_array();
				$child = 'class="dropdown"';
				$taga	= '<i class="fa fa-angle-down"></i>';
				$href = '#';
				$toggle ='dropdown';
				if(count($cat)<1)
				{
					$href = $list[$i]["ten_cn"].'-list/'.$list[$i]["tenkhongdau"].'-'.$list[$i]["id"].'.html';	
					$child = "";
					$taga = "";
					$toggle = '';
				}
				?>
			<li <?php echo $child;?>> <a href="<?php echo $href;?>" class="dropdown-toggle " data-toggle="<?php echo $toggle;?>" data-hover="dropdown" data-delay="0" style="text-transform: uppercase;" data-close-others="false">
				<?=$list[$i]["ten_en"]?>
				<?php echo $taga;?></a>
				<ul class="dropdown-menu">
				<?php for($j=0,$count_c=count($cat);$j<$count_c;$j++){
					$d->reset();
					$sql_item ="select * from #_product where id_list='".$list[$i]["id"]."' and id_cat='".$cat[$j]["id"]."' order by stt asc";
					$d->query($sql_item);
					$item =$d->result_array();
					$child1 = 'class="dropdown-submenu"';
					$child2 = '<em class="arr-mb-mn"></em>';
					if(count($item)<1)
					{
						$child1 = "";
						$child2 = "";
						//}
					 ?>
					<li <?php echo $child1;?>> <a href="<?php echo $list[$i]["ten_cn"]?>-cat/<?=$cat[$j]["tenkhongdau"]?>-<?=$cat[$j]["id"]?>.html">
						<?=$cat[$j]["ten_en"]?>
					</a> </li>
					<?php } else if(1>2) {?>
					<li class="dropdown-submenu"> <a href="<?php echo $list[$i]["ten_cn"]?>-cat/<?=$cat[$j]["tenkhongdau"]?>-<?=$cat[$j]["id"]?>.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown"><?=$cat[$j]["ten_vi"]?></a>
						<ul class="dropdown-menu">
						<?php for($k=0,$count_item=count($item);$k<$count_item;$k++){ ?>
							<li><a href="chi-tiet-san-pham/<?=$item[$k]["tenkhongdau"]?>-<?=$item[$k]["id"]?>.html"><?=$item[$k]["ten_vi"]?></a></li>
						<?php }?>
						</ul>
					</li>
					<?php } else {
						$child1 = "";
						$child2 = "";
					 ?>
					<li <?php echo $child1;?>> <a href="<?php echo $list[$i]["ten_cn"]?>-cat/<?=$cat[$j]["tenkhongdau"]?>-<?=$cat[$j]["id"]?>.html">
						<?=$cat[$j]["ten_en"]?>
					</a> </li>
					<?php }?>
					
				<?php }?>
				</ul>
			</li>
			<?php }?>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" style="text-transform: uppercase;" data-close-others="false">LIBRARY<i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                						     	<li>
						<a href="thu-vien-cat/van-ban-11.html">DOCUMENT</a>
					</li>
											     	<li>
						<a href="chi-tiet-album-anh.html">PICTURE</a>
					</li>
											     	<li>
						<a href="thu-vien-video.html">VIDEO CLIP</a>
					</li>
					                            </ul>				
			
			</li>
			<li	class=""><a style="text-transform: uppercase;" href="lien-he.html">CONTACT US</a></li>
          </ul>
        </div>
      </div>
    </div>
<?php
}
?>