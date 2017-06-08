<?php 
    session_start();
    if(isset($_SESSION['dangnhap']) && $_SESSION['quyen_truy_cap'] == 1){
		
?>

	

<div class="left">
    <?php
    if(isset($_GET['ac'])){
        $tam=$_GET['ac'];
    }else
    {
        $tam='';
    }if($tam=='them'){
        include('modules/quanlynguoidung/them.php');
    }if($tam=='sua'){
        include('modules/quanlynguoidung/sua.php');	
    }
    ?>
</div>
</hr>
<div class="right">

    <?php
include('modules/quanlynguoidung/lietke.php');
?>
</div>
<?php
	}else
	echo"Người dùng không được phép truy cập trang này!";
	?>