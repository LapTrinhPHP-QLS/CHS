
<style>
th{
	background:#999;	
	}
</style>
<?php
$sql= " SELECT * FROM tacgia order by MaTacGia  desc";
$run=mysql_query($sql);
?>
<table width="100%" border="1" align="center">
  <tr>
    <th width="9%" height="61">ID</th>
   
    <th width="25%">Tên Tác Giả</th>
    <th width="25%">Địa Chỉ</th>
    <th width="20%">Số Điện Thoại</th>
    
   
    <th colspan="2">Quản lý</th>
  </tr>
<?php
$i=1;
while($dong=mysql_fetch_array($run)){
?>
  <tr>
    <td height="83"><?php echo $i;?></td>
 
    <td><?php echo $dong['TenTacGia'];?></td>
    <td><?php echo $dong['DiaChi'];?></td>
    <td><?php echo $dong['SDT'];?></td>
    
    <td width="11%"><a href="index.php?quanly=quanlytacgia&ac=sua&id=<?php echo $dong['MaTacGia']?>">Sửa</td>
    <td width="13%"><a href="modules/quanlytacgia/xuly.php?id=<?php echo $dong['MaTacGia'] ?>">Xóa</a></td>
  </tr>
<?php
$i++;
}
?>
</table>
