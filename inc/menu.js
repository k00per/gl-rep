if(typeof(loc)=="undefined"||loc==""){var loc="";if(document.body&&document.body.innerHTML){var tt=document.body.innerHTML.toLowerCase();var last=tt.indexOf("menu_.js\"");if(last>0){var first=tt.lastIndexOf("\"",last);if(first>0&&first<last)loc=document.body.innerHTML.substr(first+1,last-first-1);}}}

var bd=0
document.write("<style type=\"text/css\">");
document.write("\n<!--\n");
document.write(".menu__menu {border-color:#000000;border-style:solid;border-width:"+bd+"px 0px "+bd+"px 0px;background-color:#2680bc;position:absolute;left:0px;top:0px;visibility:hidden;}");
document.write("a.menu__plain:link, a.menu__plain:visited{text-align:left;background-color:#2680bc;color:#ffffff;text-decoration:none;border-color:#000000;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:2px 0px 2px 0px;cursor:hand;display:block;font-size:14pt;font-family:Arial, Helvetica, sans-serif;font-weight:bold;}");
document.write("a.menu__plain:hover, a.menu__plain:active{background-color:#8cbcdb;color:#000000;text-decoration:none;border-color:#000000;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:2px 0px 2px 0px;cursor:hand;display:block;font-size:14pt;font-family:Arial, Helvetica, sans-serif;font-weight:bold;}");
document.write("\n-->\n");
document.write("</style>");

var fc=0x000000;
var bc=0x8cbcdb;
if(typeof(frames)=="undefined"){var frames=0;}


mainMenuItem("img/menu/menu__b1",".gif",39,130,"index.php?page=index","","",2,2,"menu__plain");
mainMenuItem("img/menu/menu__b2",".gif",39,130,"index.php?page=aboutus","","О нас",2,2,"menu__plain");
mainMenuItem("img/menu/menu__b3",".gif",39,130,"javascript:;","","История",1,2,"menu__plain");
mainMenuItem("img/menu/menu__b4",".gif",39,130,"index.php?page=events","","События",2,2,"menu__plain");
mainMenuItem("img/menu/menu__b5",".gif",39,130,"index.php?page=arhiv","","Архив",2,2,"menu__plain");
mainMenuItem("img/menu/menu__b6",".gif",39,130,"index.php?page=connect","","Связь",2,2,"menu__plain");


startSubmenu("img/menu/menu__b3","menu__menu",113);
submenuItem("Общества","index.php?page=historycom","","menu__plain");
submenuItem("Кубы","index.php?page=historycuba","","menu__plain");
endSubmenu("img/menu/menu__b3");

loc="";