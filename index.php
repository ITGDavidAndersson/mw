<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
ModiWeb
</title>
<link rel="stylesheet" type="text/css" href="style/base.css">
<script src="scripts/js.js"></script>
</head>
<body>
<div id="all">
<div id="menu" class="symbols size3 menu"><div onclick="{if(document.getElementById('menu').children[1].style.maxHeight == '100vh') {
	closeSubmenus();
	document.getElementById('menu').children[1].style.maxHeight = '0vh';
} else {
	document.getElementById('menu').children[1].style.maxHeight = '100vh';
}
}"></div><div>
<div class="cat"><span onclick="openMenu(this);"></span><span><select id="mod">
<?php
	$list = scandir("blocks");
	$filter = [".", "..", "desktop.ini", "base"];
	$deletes = [];
	foreach($list as $k => $v) {
		foreach($filter as $f) {
			if($v == $f) {
				array_push($deletes, $k);
			}
		}
	}
	foreach($deletes as $v) {
		unset($list[$v]);
	}
	foreach($list as $v) {
		echo <<<OUT
<option value="$v">$v</option>
OUT;
	}
?>
</select><span onclick="addModule(obj('mod').value);"></span></span></div>
<div class="cat"><span onclick="openMenu(this);"></span><span><span></span><span></span><span></span></span></div>
<div></div>
</div>
</div>
<?php
/*

 text
 color palette
 wrench
 new document
 download
 upload
 copy
 cut
 paste
 edit
 dehaze
 delete
 plugin
 home
 photo
 language
 menu
 refresh
 search
 settings
 tune
 support
 database
 user
 spinner
 link
 heart
 heart broken
 warning
 notification
 plus
 minus
 cross
 checkmark
 checkbox
 checkbox checked
 radio
 radio checked
 font
 bold
 underline
 italic
 p left
 p center
 p right
 p justify
 code
 share
 facebook

*/
?>
<div id="content"></div>
</div>
</body>
</html>