<?php
$fil = "blocks/".$_GET["q"]."/".$_GET["q"].".php";
if(file_exists($fil)) {
	echo(file_get_contents($fil));
} else {
	echo("ERROR: Modulen existerar inte");
}
?>