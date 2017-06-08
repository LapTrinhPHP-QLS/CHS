
<?php
$sql=" select * from nhaxb where MaNXB='$_GET[MaNXB]'";
$run=mysql_query($sql);
$dong=mysql_fetch_array($run);
?>
<style>
th{
	background:#999;
	}
	
}
	

</style>
<form action="modules/quanlynxb/xuly.php?id=<?php echo $dong['MaNXB']?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <th height="43" colspan="2" align="center">Sửa Nhà Xuất Bản</th>
  </tr>
  <tr>
    <td height="59">Tên Nhà Xuất Bản</td>
    <td><input type="text" name="TenNXB" value="<?php echo $dong['TenNXB']?>"></td>
  </tr>
  <tr>
    <td height="59">Số Điện Thoại</td>
    <td><input type="text" name="SDT" value="<?php echo $dong['SDT']?>"></td>
  </tr>
  <tr>
    <td height="59">Email</td>
    <td><input type="text" name="Email" value="<?php echo $dong['Email']?>"></td>
  </tr>
  <tr>
    <td height="59">Địa Chỉ</td>
    <td><input type="text" name="DiaChi" value="<?php echo $dong['DiaChi']?>"></td>
  </tr>
  <tr>
    <td height="57" colspan="2" align="center">
      
        <input type="submit" name="sua" id="sua" value="Sửa">
      
    </td>
  </tr>
</table>
</form>
