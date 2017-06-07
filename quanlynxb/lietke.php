
<style>
th{
	background:#999;	
	}
</style>
<?php
$sql= " SELECT * FROM nhaxb order by MaNXB  desc";
$run=mysql_query($sql);
?>
<table width="100%" border="1" align="center">
  <tr>
    <th width="9%" height="61">ID</th>
   
    <th width="20%">Tên Nhà Xuất Bản</th>
    <th width="15%">Số Điện Thoại</th>
    <th width="20%">Email</th>
    <th width="25%">Địa Chỉ</th>
   
    <th colspan="2">Quản lý</th>
  </tr>
<?php
$i=1;
while($dong=mysql_fetch_array($run)){
?>
  <tr>
    <td height="83"><?php echo $i;?></td>
 
    <td><?php echo $dong['TenNXB'];?></td>
     <td><?php echo $dong['SDT'];?></td>
      <td><?php echo $dong['Email'];?></td>
       <td><?php echo $dong['DiaChi'];?></td>
    
    <td width="11%"><a href="index.php?quanly=quanlynxb&ac=sua&id=<?php echo $dong['MaNXB']?>">Sửa</td>
    <td width="13%"><a href="modules/quanlynxb/xuly.php?id=<?php echo $dong['MaNXB'] ?>">Xóa</a></td>
  </tr>
<?php
$i++;
}
?>
</table>
