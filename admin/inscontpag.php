<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<center>
 <h2>Выберите название файла из этого списка и поместите его в поле "Имя файла"</h2>
<br>
 <?php
 include "viewdir.php";
 ?>

<hr size="2" width="85%" color="#000000">

<form action="inscontpag.php" method="post">
Имя файла:<input type="text" name="filename1" size=15>
<br>
<input type="submit" name="set" value="Просмотреть">
&nbsp
<input type="Reset" value="Очистить">
</form>

 <hr size="2" width="85%" color="#000000">
<?php
  //$dir=
  $filename=$_POST['filename1'];
  chdir("./../pagcon");
  if (isset($filename)) {
  $fp = fopen($filename,"r");
  $content = fread($fp,filesize($filename));
  ?>
<form>
 <textarea cols=100 rows=30 name="neww22" wrap="physical">
  <?php
   print($content);
  ?>
 </textarea>
</form>
  <?php
  fclose($fp);
 // print($content);
  };

?>

<hr size="2" width="85%" color="#000000">
<br>
<a href="index.php">В администраторскую</a>