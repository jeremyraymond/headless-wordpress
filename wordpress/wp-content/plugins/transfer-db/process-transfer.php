<?php 
echo "<!-- test1: " . $_POST['submit'] . "-->";
if(isset($_POST['submit'])) {
	echo "<!-- test2 -->";
	foreach($_POST as $name => $value) {
		if(!isset($value)) {
			echo "Transfer requires a " . ucwords(str_replace('_', '', $name));
		}
	}
}