<?php
	$footer_entries = array(
		array("html" => "home", "href" => "index"),
		array("html" => "about", "href" => "about"),
		array("html" => "portfolio", "href" => "portfolio")
	);
	echo json_encode($footer_entries);
?>