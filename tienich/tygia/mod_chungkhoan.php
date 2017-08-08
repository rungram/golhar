
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
       <title>Page Title</title>
       <link rel="stylesheet" href="style.css" type="text/css" media="screen" charset="utf-8"/>
        <meta name="google-site-verification" content="YIHqM1iFvR0FyvkCaPRYYeR0_VQBoggGw9wk-aSnDqw" />
       <script language="javascript" type="text/javascript" src="http://www.thienduongweb.com/home/js/jquery.js.php"></script>
     <script type="text/javascript">
        $(document).ready(function() {
            $('a.tab').click(function(){
                $('.active').removeClass('active');
                $(this).addClass('active');
                $('.content').slideUp();
                var content_show = $(this).attr('title');
                $('#'+ content_show).slideDown();
                
            });
        });
     </script>
</head>

<body>
    <div id="tabbed_nav" class="tabbed_nav">
       <div class="tabbed_area">
            <img src="http://vnexpress.net/User/ck/Images/ck3.jpg"/>
			<ul class="tabs">
		      	<li><a href="#" id='featured' class="active tab">HOSE</a></li>
                <li><a href="#" id='news' class="tab">HNX</a></li>
            </ul></div>
 <div id="featured" class="content">
     <ul>  
                <li>
				<table width="286px" border="0">
                     <tr valign="center">
                     <td rowspan="2" width="56" align="center">
                     Mã chứng khoán
                     </td>
                     <td rowspan="2" width="50" align="center">
                     TC
                     </td>
                     <td colspan="2" width="107" align="center">
                     Khớp lệnh
                     </td>
                    <td rowspan="2" align="center">
                     +/-
                     </td>
                     </tr>
                     <tr valign="center" >
                     <td align="center" width="48">
                     Giá
                     </td>
                     <td align="center" width="53">
                     KL
                     </td>
                     </tr>
		 		<table>
				</li>  
			  <li>
			    <iframe id="ifrmContent" name="ifrmContent" src="http://vnexpress.net/User/ck/hcms/HCMStockSmall.asp" noresize="" border="false" width="294px" frameborder="0" height="191px" scrolling="no"></iframe>
			  </li>
</ul>  
        
</div>
        <div id="news" class="content">
            <ul>  
                <li>
				<table width="286px" border="0">
			 <tr valign="center">
			 <td rowspan="2" width="56" align="center">
			 Mã chứng khoán
			 </td>
			 <td rowspan="2" width="50" align="center">
			 TC
			 </td>
			 <td colspan="2" width="107" align="center">
			 Khớp lệnh
			 </td>
			<td rowspan="2" align="center">
			 +/-
			 </td>
			 </tr>
			 <tr valign="center" >
			 <td align="center" width="48">
			 Giá
			 </td>
			 <td align="center" width="53">
			 KL
			 </td>
			 </tr>
		 <table>
				</li>  
                <li>
                  <iframe src="http://vnexpress.net/User/ck/hns/HNStockSmall.asp" noresize="" border="false" width="294px" frameborder="0" height="191px" scrolling="no"></iframe>
                </li>
</ul> 
        
        </div>
        <div id="popular" class="content">
            <ul id="nav">
               <li><a href="#">Home</a></li>
               <li><a href="#">About</a></li>
               <li><a href="#">Clients</a></li>
               <li><a href="#">Contact Us</a></li>
            </ul>
        
        </div>


    
    </div><!--End tabbed_nav-->
                

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17352228-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  window.onload=function(){
  window.document.getElementById("loading").style.display = 'none';}
</script>


</body>

</html>