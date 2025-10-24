<?php
if ($_SESSION['leveluser']=='Doutor') {
	include "menu_top_doutor.php";
}
elseif ($_SESSION['leveluser']=='Admin') {
	include "menu_top_admin.php";
}
else {
	include "menu_top_staff.php";
}
?>