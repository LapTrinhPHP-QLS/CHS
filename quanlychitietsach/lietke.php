
<?php
$sql="select * from sach inner join loaisach on  loaisach.MaLoaiSach=sach.MaLoaiSach inner join tacgia on tacgia.MaTacGia=sach.MaTacGia inner join nhaxb on nhaxb.MaNXB=sach.MaNXB ";
$run=mysql_query($sql);
?>

<style>
th{
	background:#999	
	}
</style>
<table width="100%" border="1">
  <tr>
    <th colspan="14">Danh Sách Sách</th>
  </tr>
  <tr>
    <td><em><strong>ID</strong></em></td>
    <td><em><strong>Tên Sách </strong></em></td>
    <td><em><strong>Thể Loại</strong></em></td>
    <td><em><strong>Tác Giả</strong></em></td>
    <td><em><strong>Nhà Xuất Bản</strong></em></td>
    <td><em><strong>Hình Ảnh</strong></em></td>
    <td><em><strong>Mô Tả</strong></em></td>
     <td><em><strong>Số Trang</strong></em></td>
    <td><em><strong>Kích Thước</strong></em></td>
    <td><em><strong>Loại Bìa</strong></em></td>
    <td><em><strong>Đơn Giá</strong></em></td>
    <td><em><strong>Số Lượng Tồn</strong></em></td>
    <td colspan="2"><em><strong>Quản lý</strong></em></td>
  </tr>
  <?php
  $i=1;
 while ($dong=mysql_fetch_array($run)){
  ?>
  <tr>
     <td height="117"><?php echo $i ?></td>
    <td><?php echo $dong['TenSach']; ?></td>
    
    <td><?php echo $dong_loaisach['TenLoaiSach']; ?></td>
   
    <td><?php echo $dong_tacgia['TenTacGia']; ?></td>
   
    <td><?php echo $dong_nhaxuatban['TenNXB']; ?></td>
    <td><img src="modules/quanlychitietsach/uploads/<?php echo $dong['HinhAnh']?>" width="60" height="60"></td>
    <td><?php echo $dong['MoTa']; ?></td>
    <td><?php echo $dong['SoTrang']; ?></td>
    <td><?php echo $dong['KichThuoc']; ?></td>
    <td><?php echo $dong['LoaiBia']; ?></td>
    <td><?php echo $dong['DonGia']; ?>.000 VNĐ</td>
    <td><?php echo $dong['SoLuongTon']; ?></td>
    
    <td><a href="index.php?quanly=quanlychitietsach&ac=sua&id=<?php echo $dong['MaSach']?>">Sửa</td>
    <td align="center"><a href="modules/quanlychitietsach/xuly.php?id=<?php echo $dong['MaSach'] ?>">Xoá</a></td>
  </tr>
  <?php
$i++;
  }
  ?>
</table>
