


<form action="#" method="post" name="frmLIST_PRODUCT" id="frmLIST_PRODUCT">
<table class="blue_table">
	<tr>	
		<th style="width:40%;">Tiêu đề </th> 
        <th style="width:40%;">Tiêu đề tiếng anh </th> 
		<th style="width:10%;">Sửa</th>
            <input name="ids" type="hidden" id="ids">
            <input name="mod" type="hidden" id="mod">
            <input name="strID" type="hidden" id="strID">
            <input name="txtLIST_ID" type="hidden" id="txtLIST_ID" value="<?=$_POST['txtLIST_ID']?>">
	</tr>
	<?php for($i=0, $count=count($items); $i<$count; $i++){?>
	<tr>
		
       
	    
      <td align="center" style="width:20%;">
	 <a href="index.php?com=tinloai2_1a&act=edit&id_list=<?=$items[$i]['id_list']?>&id_cat=<?=$items[$i]['id_cat']?>&id=<?=$items[$i]['id']?><?php if($_REQUEST['curPage']!='') echo'&curPage='. $_REQUEST['curPage'];?>" style="text-decoration:none;">
	  <?=$items[$i]['mota_vi']?> 
      </a>      
      </td>    
      <td align="center" style="width:20%;">
	 <a href="index.php?com=tinloai2_1a&act=edit&id_list=<?=$items[$i]['id_list']?>&id_cat=<?=$items[$i]['id_cat']?>&id=<?=$items[$i]['id']?><?php if($_REQUEST['curPage']!='') echo'&curPage='. $_REQUEST['curPage'];?>" style="text-decoration:none;">
	  <?=$items[$i]['mota_en']?> 
      </a>      
      </td> 
          
    
       
          
         
         
         
		<td style="width:5%;"><a href="index.php?com=tinloai2_1a&act=edit&id_danhmuc=<?=$items[$i]['id_danhmuc']?>&id_list=<?=$items[$i]['id_list']?>&id_cat=<?=$items[$i]['id_cat']?>&id_item=<?=$items[$i]['id_item']?>&id=<?=$items[$i]['id']?><?php if($_REQUEST['id_cat']!='') echo'&id_cat='. $_REQUEST['id_cat'];?><?php if($_REQUEST['curPage']!='') echo'&curPage='. $_REQUEST['curPage'];?>"><img src="media/images/edit.png" border="0" /></a></td>
		
	</tr>
	<?php	}?>
</table>
</form>
<div class="paging"><?=$paging['paging']?></div>