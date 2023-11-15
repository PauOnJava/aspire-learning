<?
$aff = $_REQUEST['aff'];
if($aff == 1)
header("Location: affiliate-signup.php?affuni=1");
else if($aff ==2)
header("Location: affiliate-signup.php?affcomp=1");
?>