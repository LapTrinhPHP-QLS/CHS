<style>
table{
	background-color: rgba(154, 193, 166, 1);
	
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<form action="modules/quanlynguoidung/xuly.php" method="post" enctype="multipart/form-data">
  <table width="100%" border="1">
    <tr>
      <th height="45" colspan="2" color:#000;background:#999; align="center">Thêm người sử dụng</th>
    </tr>
    <tr>
      <td width="35%" height="57">&nbsp;<i class="fa fa-info-circle" style="font-size:24px"></i>&nbsp;&nbsp;Số thứ tự</td>
      <td width="65%"><input type="number" name="newid" placeholder="Nhập số thứ tự !." required="required" size="30" /></td>
    </tr>
    <tr>
      <td height="57">&nbsp;<i class="fa fa-paw" style="font-size:24px"></i>&nbsp;&nbsp;Họ tên</td>
      <td><input name="hoten" type="text" required="required"  placeholder="Nhập họ tên của bạn !." size="30"  /></td>
    </tr>
    <tr>
      <td height="57">&nbsp;<i class="fa fa-envelope" style="font-size:24px"></i>&nbsp;&nbsp; E-mail</td>
    <td><input type="email" name="email" placeholder="Nhập email của bạn" required="required" size="30"></i></td>
    </tr>
    <tr>
      <td height="68">&nbsp;<i class="fa fa-phone" style="font-size:24px"> </i>&nbsp;&nbsp;Số điện thoại</td>
      <td><input type="number" name="sdt" placeholder="Nhập số điện thoại của bạn !." required="required" size="30" /></td>
    </tr>
    <tr>
      <td height="74">&nbsp;<i class="fa fa-user" style="font-size:24px"></i>&nbsp;&nbsp;Tên truy cập</td>
      <td><input type="text" name="username" placeholder="Nhập tên truy cập của bạn" required="required" size="30" /></td>
    </tr>
    <tr>
      <td height="62">&nbsp;<i class="fa fa-exclamation-triangle" style="font-size:24px"></i>&nbsp;&nbsp;Mật khẩu</td>
      <td><input type="password" name="password" placeholder="Nhập mật khẩu của bạn !." required="required" size="30" /></td>
    </tr>
    <tr>
      <td height="65">&nbsp;<i class="fa fa-camera-retro" style="font-size:24px"></i>&nbsp;&nbsp;Ảnh đại diện</td>
      <td><input type="file" name="avatar" /></td>
    </tr>
    <tr>
      <td>Quyền truy cập</td>
      <td><select required  name="quyen_truy_cap" >
        <option value="">-- --</option>
        <option value="0">Thành viên</option>
        <option value="1">Quản trị</option>
      </select></td>
    </tr>
    <tr>
      <td height="73" colspan="2" align="center"> <br />
        <button name="them" value="Thêm" style="background-color:#CCC; font-size:24px; font-family:'Times New Roman', Times, serif">Thêm</button>
      </td>
    </tr>
  </table>
</form>


