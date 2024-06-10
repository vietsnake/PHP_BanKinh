<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thêm hãng sản xuất</title>
</head>

<body>
	<form name="frm_themhang" method="post" action="hangsx_them_luu.php" enctype="multipart/form-data">
<table width="328" border="1" align="center">
  <tbody>
    <tr>
      <td colspan="2" align="center">THÊM HÃNG SẢN XUẤT</td>
    </tr>
    <tr>
      <td width="65">Tên hãng</td>
      <td width="219"><input type="text" name="txt_tenhang"></td>
    </tr>
    <tr>
      <td>Xuất xứ</td>
      <td><input type="text" name="txt_xx"></td>
    </tr>
    <tr>
      <td>Logo</td>
      <td><input type="file" name="logo"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" ><input type="reset"></td>
    </tr>
  </tbody>
</table>
		</form>
</body>
</html>