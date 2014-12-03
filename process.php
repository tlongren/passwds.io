<?php session_start(); ?>
<?php
$length = ($_GET['length']) ?$_GET['length'] : $_POST['length'];
$num = ($_GET['num']) ?$_GET['num'] : $_POST['num'];
if (!isset($length)) {
	$result = "notComplete";
}
else {
	$result = "good";
}
print "$result";
?>
