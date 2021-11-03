<?php
session_start();
//it will print name from our sessiondata.php file because we never destroy or unset the session that's why
echo $_SESSION['name'];
//or else you can print entire session using print_r
print_r $_SESSION;
?>
