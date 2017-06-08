<style>
th{
	background-color:#999;
}
</style>


<?php
      $sql_chitietsach="select * from Sach where MaSach=$_GET[id]";
	  $query_chitietsach=mysql_query($sql_chitietsach);
	  $dong_chitietsach=mysql_fetch_array($query_chitietsach);
?>
<table width="450" border="1" style="border-collapse:collapse">
  <tr>
    <th height="46" colspan="2" align="center">Chi Tiết Sách</th>
  </tr>
  <tr>
    <td rowspan="7"><img src="admincp/modules/quanlychitietsach/uploads/<?php echo $dong_chitietsach['HinhAnh'] ?>" width="200" height="300" /></td>
     <td>Tên Sách:<?php echo $dong_chitietsach['TenSach'] ?></td>
     </tr>
     <?php
      $sql="select * from Sach,LoaiSach where LoaiSach.MaLoaiSach=Sach.MaLoaiSach && MaSach=$_GET[id]";
	  $query=mysql_query($sql);
	  $dong=mysql_fetch_array($query);
?>
     <tr>
    <td>Tên Nhà Xuất Bản:<?php echo $dong['TenNXB'] ?></td>
  </tr>
  <tr>
       <td>Kích Thước:<?php echo $dong_chitietsach['KichThuoc'] ?></td>
  </tr>
  <tr>
    <td>Số Trang:<?php echo $dong_chitietsach['SoTrang'] ?></td>
  </tr>
  <tr>
    <td >Loại Bìa:<?php echo $dong_chitietsach['LoaiBia'] ?> </td>
  </tr>
  <tr>
    <td >Tác Giả:<?php echo $dong_chitietsach['TenTacGia'] ?></td>
  </tr>
  <tr>
    <td style="color:#F30">Giá :<?php echo $dong_chitietsach['DonGia']?>.000 VND</td>
  </tr>
  <tr>
    <th colspan="2" align="center">Giới Thiệu Sách</th>
  </tr>
  <tr>
    <td colspan="2"><?php echo $dong_chitietsach['MoTa']?></td>
  </tr>
</table>
