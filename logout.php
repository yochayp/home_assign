<?php

$header ="location: index".$_SESSION['num'].".html";

$_SESSION = array();

session_destroy();
 
header($header);
exit;
?>