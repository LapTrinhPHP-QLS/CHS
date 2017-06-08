
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng kí thành viên</title>
</head>
<?php
if (isset($_POST['reg']))
 {
  $ten=$pass=$mail=$sdt="";
  if($_POST['text']==null)
  {
    $ername="Vui lòng nhập tên đăng nhập";
  }
  else
  {
    $ten = $_POST['text'];
  }
  if($_POST['pass']!=$_POST['pass1'])
  {
    $erpass="Mật khẩu không trùng khớp";
  }
  else
  {
    if($_POST['pass']==null)
    {
       $erpass= "Bạn chưa nhập mật khẩu";
    }
    else
    {
      $pass = $_POST['pass'];
    }
    
  }
  if ($_POST['email']==null) {
    $ermail= "Bạn chưa nhập email";
  }
  else
  {
    $email=$_POST['email'];
  }
  if($_POST['sdt']==null)
                {
                    $ersdt="Bạn chưa nhập số điện thoại";
                }
                else
                {    
                     $sdt=$_POST["sdt"];
                     $pat='/^[0-9]+$/';
                     if(preg_match($pat,$sdt,$kq)){
                        $sdt1=$_POST["sdt"];
                     }
                     else
                     {
                        $ersdt="Bạn vừa nhập sai định dạng số điện thoại";
                     }
                }
  if($ten & $pass & $email & $sdt)
  {
    $sql=mysql_query("select * from thanhvien where ten='".$ten."'");
    if (mysql_fetch_row($sql)!="")
    {
          echo"<script> alert('Tên đăng nhập đã tồn tại')</script>";
    }
    else
    {
        $qr = "INSERT INTO thanhvien values(null,'$ten','$pass','$email','$sdt')";
        mysql_query($qr);
        echo"<script> alert('Đăng kí tài khoản thành công')</script>";
      }
  }
}
 ?>



<form action='' method='POST' role='form'>

    <center><table width="545" border="0">
    <p style="width:525px;height:20px;background-color:#039;color:#fff;padding:10px;font-family:arial;font-size:20px;">
        Đăng Kí Thành Viên
      </p>
        	<tr>
            	<td width="345">Tên tài khoản: </td>
                <td width="190"><input type="text" class='form-control' id='text' name ='text' placeholder='Nhập tên tài khoản'></td>
            </tr>
            
            <tr>
            	<td>Mật khẩu: </td>
                <td><input type="password" class='form-control' id='pass' name='pass' placeholder='Nhập mật khẩu'></td>
            </tr>
            
             
              <tr>
            	<td>Nhập lại mật khẩu: </td>
                <td><input type="password" class='form-control' id='pass1' name='pass1' placeholder='Nhập lại mật khẩu'></td>
            </tr>
            <tr>
            	<td>Email: </td>
                <td><input type="text" class='form-control' id='email' name='email' placeholder='Nhập địa chỉ email'></td>
            </tr>
           
             <tr>
            	<td>Số điện thoại: </td>
                <td><input type="sdt" class='form-control' id='email' name='sdt' placeholder='Nhập số điện thoại'></td>
            </tr>
            
            </table>
           </center>
 </div>

  

 <center> <input type='submit' class='btn btn-primary' id='reg' name='reg' value="Đăng kí">
  <button type='reset' class='btn btn-danger'>Làm mới</button></center>
</form></div></div>
</div>