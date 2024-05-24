
<?php
     chdir("./../pagcon");
     $temp=$_POST['temp1'];
     $neww=$_POST['neww1'];
     file_exists($temp) or die("Файл $temp не существует");
     is_file( $temp ) or die("$temp - это не файл");
     is_readable( $temp ) or die("$temp нельзя читать");
     is_writable( $temp ) or die("В $temp нельзя писать");
     $fp = fopen( $temp, "w-" ) or die("Не могу открыть $temp");
     fwrite( $fp, $neww);
     fclose( $fp );
     file_exists( $temp ) or die("ОШИБКА СЦЕНАРИЯ1");
     is_file( $temp ) or die("ОШИБКА СЦЕНАРИЯ2");
     is_readable( $temp ) or die("ОШИБКА СЦЕНАРИЯ3");
     is_writable( $temp ) or die("ОШИБКА СЦЕНАРИЯ4");
     $fp = fopen( $temp, "r" ) or die("ОШИБКА СЦЕНАРИЯ5");

   while ( ! feof( $fp ) )
    {
       $line[] = fgets( $fp, 1024 );
    }
   fclose($fp);
  echo $temp;
  echo "-файл изменён!!!";

?>
<br>
<a href="index.php">В администраторскую</a>