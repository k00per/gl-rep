<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<TABLE border="2" align="center" width="90%" cellpadding="0" cellspacing="0" bordercolor="000000">
<TBODY >
    <TR><td>
    <br>
<FORM ENCTYPE="multipart/form-data" ACTION="imageupload.php" METHOD="POST">
����: <INPUT TYPE="file" NAME="userfile1">
<INPUT TYPE="submit" VALUE="���������">
</FORM>
   </td>
   <td width="400">
   <br>
   <blockquote>

<?php


$userfile=$_POST['userfile1'];
$path = "./../userdata/";

$max_size = 1000000;

if (!isset($HTTP_POST_FILES['userfile'])) exit;

if (is_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'])) {

if ($HTTP_POST_FILES['userfile']['size']>$max_size) { echo "���� ������� �����!!<br>\n"; exit; }
if (($HTTP_POST_FILES['userfile']['type']=="image/gif") || ($HTTP_POST_FILES['userfile']['type']=="image/pjpeg") || ($HTTP_POST_FILES['userfile']['type']=="image/jpeg")) {

if (file_exists($path . $HTTP_POST_FILES['userfile']['name'])) { echo "���� � ����� ������ ��� ���������� �� �������!!! <br>\n"; exit; }

$res = copy($HTTP_POST_FILES['userfile']['tmp_name'], $path .
$HTTP_POST_FILES['userfile']['name']);
if (!$res) { echo "���� �� ��������<br>\n"; exit; }
   else { echo "���� ������ ��������<br>\n";
 }

echo "��� �����: userdata/".$HTTP_POST_FILES['userfile']['name']."<br>\n";
echo "������ �����: ".$HTTP_POST_FILES['userfile']['size']." bytes<br>\n";
echo "��� �����: ".$HTTP_POST_FILES['userfile']['type']."<br>\n";
} else { echo "�� ���������� ��� �����!!!<br>\n"; exit; }

}
?>
</blockquote>
  </td></tr>
  <tr><td width="100%" colspan="2">
  <blockquote>
  &nbsp;&nbsp;<center><h2>��� ��������� �� ������� �����:</h2></center><br>
<?php

 include "viewdirgr.php";

?>
 </blockquote>
 </td></tr>
 <br>
<a href="index.php">� �����������������</a>