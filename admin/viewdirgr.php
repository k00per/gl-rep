<?

function PrintTree()
{

$d=@opendir("./../userdata");
if(!$d) return;
while(($e=readdir($d))!==false) {
// Игнорируем элементы .. и .
if($e=='.'||$e=='..') continue;

if(@is_dir($e)||$e=='Thumbs.db' ) continue;

 echo '<img src="./../userdata/';
 echo $e;
 echo '" height="100" width="100" border="2">';
 echo '<br>';
 echo "$e\n";

 echo '<hr size="1" color="#000000" >';

flush();
}
closedir($d);
}

echo "<pre>";


chdir("./../userdata");
PrintTree();
echo "</pre>";
?>