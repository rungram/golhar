<?php
	$d->reset();
	$sql_list ="select *	from #_product_list order by stt asc limit 0,10";
	$d->query($sql_list);
	$list =$d->result_array();
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
				$sql_cat ="select *	from #_product_cat where id_list='".$list[$i]["id"]."' order by stt asc";
				$d->query($sql_cat);
				$cat =$d->result_array();
				$child = 'class="dropdown"';
				$taga	= '<i class="fa fa-angle-down"></i>';
				$href = '#';
				$toggle ='dropdown';
				if(count($cat)<1)
				{
					$href = $list[$i]["ten_en"].'-list/'.$list[$i]["tenkhongdau"].'-'.$list[$i]["id"].'.html';	
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
					<li <?php echo $child1;?>> <a href="<?php echo $list[$i]["ten_en"]?>-cat/<?=$cat[$j]["tenkhongdau"]?>-<?=$cat[$j]["id"]?>.html">
						<?=$cat[$j]["ten_vi"]?>
					</a> </li>
					<?php } else if(1>2) {?>
					<li class="dropdown-submenu"> <a href="<?php echo $list[$i]["ten_en"]?>-cat/<?=$cat[$j]["tenkhongdau"]?>-<?=$cat[$j]["id"]?>.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown"><?=$cat[$j]["ten_vi"]?></a>
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
					<li <?php echo $child1;?>> <a href="<?php echo $list[$i]["ten_en"]?>-cat/<?=$cat[$j]["tenkhongdau"]?>-<?=$cat[$j]["id"]?>.html">
						<?=$cat[$j]["ten_vi"]?>
					</a> </li>
					<?php }?>
					
				<?php }?>
				</ul>
			</li>
			<?php }?>
			<li	class=""><a style="text-transform: uppercase;" href="lien-he.html">Liên hệ</a></li>
          </ul>
        </div>
      </div>
    </div>