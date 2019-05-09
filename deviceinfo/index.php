<?php
	header('Content-Type: application/x-apple-aspen-config');
	header('Content-Disposition: attachment; filename="SignedVerifyExample.mobileconfig"');
	header('Content-Transfer-Encoding: binary');
	readfile('SignedVerifyExample.mobileconfig');
?>
