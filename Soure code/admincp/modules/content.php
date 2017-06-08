<div class="content">
       <?php
	   if(isset($_GET['quanly'])){
		   $tam=$_GET['quanly'];
	   }else{
		   $tam='';	   
	   }if($tam=='quanlyloaisach'){
		   include('modules/quanlyloaisach/main.php');
	   }if($tam=='quanlychitietsach'){
		   include('modules/quanlychitietsach/main.php');
	   }if($tam=='quanlynguoidung'){
		   include('modules/quanlynguoidung/main.php');
	   }
	   if($tam=='quanlynxb'){
		   include('modules/quanlynxb/main.php');
	   }
	   if($tam=='quanlytacgia'){
		   include('modules/quanlytacgia/main.php');
	   }
	   ?>     
       
<br />
<div class="clear"></div>