
<?php
     chdir("./../pagcon");
     $temp=$_POST['temp1'];
     $neww=$_POST['neww1'];
     file_exists($temp) or die("���� $temp �� ����������");
     is_file( $temp ) or die("$temp - ��� �� ����");
     is_readable( $temp ) or die("$temp ������ ������");
     is_writable( $temp ) or die("� $temp ������ ������");
     $fp = fopen( $temp, "w-" ) or die("�� ���� ������� $temp");
     fwrite( $fp, $neww);
     fclose( $fp );
     file_exists( $temp ) or die("������ ��������1");
     is_file( $temp ) or die("������ ��������2");
     is_readable( $temp ) or die("������ ��������3");
     is_writable( $temp ) or die("������ ��������4");
     $fp = fopen( $temp, "r" ) or die("������ ��������5");

   while ( ! feof( $fp ) )
    {
       $line[] = fgets( $fp, 1024 );
    }
   fclose($fp);
  echo $temp;
  echo "-���� ������!!!";

?>
<br>
<a href="index.php">� �����������������</a>