sign
<?php
if($_POST['sign']=="con"){
include($lang."/php/inc.php/connect.inc.php");
}else if($_POST['sign']=="sub"){
include($lang."/php/inc.php/subscribe.inc.php");
}
?>