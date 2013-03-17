<?php
if (getOption('zpB_homepage')) {
	$isHomePage = true;
	include ('home.php');
} else {
	$isGallery = true;
	include ('gallery.php');
}
?>