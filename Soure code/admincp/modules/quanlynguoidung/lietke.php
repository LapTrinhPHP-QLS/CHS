
<?php
$sql="select * from admin order by id_user  desc";
$run=mysql_query($sql);
?>
<style>
th{
	background:#CCC;
	
	}
</style>
<table width="100%" border="1" align="center">
  <tr>
    <th colspan="10">Bảng danh sách người dùng</th>
  </tr>
  <tr>
    <td><em><strong>Số thứ tự</strong></em></td>
   
    <td><em><strong>Họ tên </strong></em></td>
     <td><em><strong>E-mail </strong></em></td>
    <td><em><strong>Số điện thoại </strong></em></td>
    <td><em><strong>Ảnh đại diện</strong></em></td>
    <td><em><strong>Tên truy cập</strong></em></td>     
    
    <td colspan="2"><em><strong>Quản lý</strong></em></td>
  </tr>
  <?php
 
  while ($dong=mysql_fetch_array($run)){
  ?>
  <tr>
    <td><?php echo $dong['id_user']; ?></td>
    
    <td><?php echo $dong['hoten'];?></td>
     <td><?php echo $dong['email'];?></td>
    <td>0<?php echo $dong['sdt'];?></td>
    <td><img src="modules/quanlynguoidung/uploads/<?php echo $dong['avatar']?>" width="120" height="60"></td>
    <td align="center"> <?php echo $dong['username']; ?>
   </td>
   
   
    <td><a href="index.php?quanly=quanlynguoidung&ac=sua&id_user=<?php echo $dong['id_user']?>">Sửa</a></td>
    <td align="center"><a href="modules/quanlynguoidung/xuly.php?id_user=<?php echo $dong['id_user'] ?>">Xoá</a></td>
  </tr>
  <?php
	
  }
  ?>
</table>
