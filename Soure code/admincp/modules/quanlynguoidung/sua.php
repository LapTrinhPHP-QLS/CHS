
<?php
     $sql="select * from admin where id_user='$_GET[id_user]'";
	 $run=mysql_query($sql);
	 $dong= mysql_fetch_array($run);
?>

<form action="modules/quanlynguoidung/xuly.php?id_user=<?php echo $dong['id_user']?>" method="post" enctype="multipart/form-data">
<table width="100%" height="338" border="1">
  <tr>
    <th colspan="2" align="center">Sửa chi tiết người sử dụng</th>
  </tr>
  <tr>
    <td>Ảnh đại diện</td>
    <td><input style="font-size:20px" type="file" name="avatar" value="<?php echo $dong['avatar']?>"></td>
  </tr>
  <tr>
    <td>Họ tên</td>
    <td><input style="font-size:20px" type="text" name="hoten" value="<?php echo $dong['hoten']?>"></td>
  </tr>
  <tr>
    <td>Mật khẩu</td>
    <td><input style="font-size:20px" type="password" name="password" value="<?php echo $dong['password']?>"></td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td><input style="font-size:20px" type="email" name="email" value="<?php echo $dong['email']?>"></td>
  </tr>
  <tr>
    <td>Số điện thoại</td>
    <td><input size="13" style="font-size:20px" type="text" name="sdt" value="<?php echo $dong['sdt']?>"></td>
  </tr>
  <tr>
    <td>ID</td>
    <td><input style="font-size:20px" readonly="readonly" type="number" name="newid" value="<?php echo $dong['id_user']?>"></td>
  </tr>
  <tr>
  
    <td>Tên truy cập</td>
    <td><input  style="font-size:20px"  type="text" name="username" value="<?php echo $dong['username']?>"></td>
  </tr>
  
 
 
  <tr>
    <td colspan="2" align="center"> 
      <button name="sua" value="Sửa" style="background-color:#CCC; font-size:24px; font-family:'Times New Roman', Times, serif ">Sửa</button>
     
      </td>
  </tr>
</table>
</form>
