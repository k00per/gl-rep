<?

function PrintTree()
{

$d=@opendir("./../pagcon");
if(!$d) return;
while(($e=readdir($d))!==false) {
// Игнорируем элементы .. и .
if($e=='.'||$e=='..') continue;

if(@is_dir($e)||$e=='Thumbs.db' ) continue;


 echo '<br>';
 echo "$e\n";

flush();
}
closedir($d);
}

echo "<pre>";


chdir("./../pagcon");
PrintTree();
echo "</pre>";
?>
<br>
<a href="index.php">В администраторскую</a>