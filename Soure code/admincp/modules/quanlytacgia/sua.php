
<?php
$sql=" select * from tacgia where MaTacGia='$_GET[id]'";
$run=mysql_query($sql);
$dong=mysql_fetch_array($run);
?>
<style>
th{
	background:#999;
	}
	
}
	

</style>
<form action="modules/quanlytacgia/xuly.php?id=<?php echo $dong['MaTacGia']?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <th height="43" colspan="2" align="center">Sửa Tác Giả</th>
  </tr>
  <tr>
    <td height="59">Tên Tác Giả</td>
    <td><input type="text" name="TenTacGia" value="<?php echo $dong['TenTacGia']?>"></td>
  </tr>
  <tr>
    <td height="59">Địa Chỉ</td>
    <td><input type="text" name="DiaChi" value="<?php echo $dong['DiaChi']?>"></td>
  </tr>
  <tr>
    <td height="59">Số Điện Thoại</td>
    <td><input type="text" name="SDT" value="<?php echo $dong['SDT']?>"></td>
  </tr>
  
  <tr>
    <td height="57" colspan="2" align="center">
      
        <input type="submit" name="sua" id="sua" value="Sửa">
      
    </td>
  </tr>
</table>
</form>
