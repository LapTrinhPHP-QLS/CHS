<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<?php
      $sql="select * from admin where id_user=$_GET[id]";
	  $query=mysql_query($sql);
	  $dong=mysql_fetch_array($query);
?>
<style>
th{
	background:#CCC;
	}
	table{
		
		background-color: rgba(154, 193, 166, 1);
	}
</style>


<table width="638" height="528" border="1" align="center" cellpadding="0px" cellspacing="0">
  <tr>
    <th colspan="2" scope="row"><h1>Thông Tin Người Sử Dụng</h1></th>
  </tr>
   <tr>
    <td height="155" scope="row">&nbsp;<i class="fa fa-camera-retro" style="font-size:24px"></i>&nbsp;&nbsp;<strong>Ảnh đại diện</strong></td>
    <td width="483" align="center"><img src="admincp/modules/quanlynguoidung/uploads/<?php echo $dong['avatar']?>" width="250" height="220"></td>
  </tr>
  <tr>
    <td width="149" height="59" scope="row">&nbsp;<i class="fa fa-info-circle" style="font-size:24px"></i>&nbsp;&nbsp;<strong>Số thứ tự</strong></td>
    <td><div align="center"><?php echo $dong['id_user']; ?></div></td><strong></strong>
  </tr>
  <tr>
    <td width="149" height="49" scope="row">&nbsp;<i class="fa fa-paw" style="font-size:24px"></i>&nbsp;&nbsp;<strong>Họ tên </strong></td>
    <td><div align="center"><?php echo $dong['hoten'];?></div></td>
  </tr>
  <tr>
    <td height="56" scope="row">&nbsp;<i class="fa fa-phone" style="font-size:24px"> </i>&nbsp;&nbsp;<strong>Số điện thoại </strong></td>
    <td><div align="center">0<?php echo $dong['sdt'];?></div></td>
  </tr>
 
  <tr>
    <td width="149" height="54" scope="row">&nbsp;<i class="fa fa-registered" style="font-size:24px"></i>&nbsp;&nbsp;<strong>Tên truy cập</strong></td>
    <td> <div align="center"><?php echo $dong['username']; ?></div>
  </tr>
  
    
   
</table>

