
<style>
th{
	background:#999;	
	}
</style>
<?php
$sql= " SELECT * FROM LoaiSach order by MaLoaiSach  desc";
$run=mysql_query($sql);
?>
<table width="100%" border="1" align="center">
  <tr>
    <th width="9%" height="61">ID</th>
   
    <th width="45%">Tên loại sách</th>
   
    <th colspan="2">Quản lý</th>
  </tr>
<?php
$i=1;
while($dong=mysql_fetch_array($run)){
?>
  <tr>
    <td height="83"><?php echo $i;?></td>
 
    <td><?php echo $dong['TenLoaiSach'];?></td>
    
    <td width="11%"><a href="index.php?quanly=quanlyloaisach&ac=sua&id=<?php echo $dong['MaLoaiSach']?>">Sửa</td>
    <td width="13%"><a href="modules/quanlyloaisach/xuly.php?id=<?php echo $dong['MaLoaiSach'] ?>">Xóa</a></td>
  </tr>
<?php
$i++;
}
?>
</table>
