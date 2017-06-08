
<?php
$sql=" select * from LoaiSach where MaLoaiSach='$_GET[MaLoaiSach]'";
$run=mysql_query($sql);
$dong=mysql_fetch_array($run);
?>
<style>
th{
	background:#999;
	}
	
}
	

</style>
<form action="modules/quanlyloaisach/xuly.php?id=<?php echo $dong['MaLoaiSach']?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <th height="43" colspan="2" align="center">Sửa Loại Sách</th>
  </tr>
  <tr>
    <td height="59">Tên Loại Sách</td>
    <td><input type="text" name="TenLoaiSach" value="<?php echo $dong['TenLoaiSach']?>"></td>
  </tr>
  
  <tr>
    <td height="57" colspan="2" align="center">
      
        <input type="submit" name="sua" id="sua" value="Sửa">
      
    </td>
  </tr>
</table>
</form>
