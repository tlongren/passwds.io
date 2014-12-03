<?php session_start(); ?>
<?php
include_once dirname(__FILE__) . '/pwgen.class.php';
function decodeHint($hint) {
  $result = str_rot13($hint);
  return $result;
}

$length = ($_GET['length']) ?$_GET['length'] : $_POST['length'];
$num = ($_GET['num']) ?$_GET['num'] : $_POST['num'];

if (!isset($num)) {
  $num=1;
}
$pwgen = new PWGen();
$setLen = $pwgen->setLength($length);
$result = array();
if ($num > 1) {
  for ($i = 1; $i <= $num; $i++) {
    $password = $pwgen->generate();
    $result[] = $password;
  }
}
else {
  $password = $pwgen->generate();
  $result[] = $password;
}
if (count($result) == 1) {
  print "<h2>Your Password:</h2><br /><p>" . $result[0] . "</p>";
}
else {
  print "<h2>Your Passwords:</h2><br /><p>";
  foreach ($result as $r) {
    print $r . '<br />';
  }
  print "</p>";
}
//print "<h2>Your Passwords:</h2><p>$result</p>";
?>