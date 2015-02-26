<?php
	$footer_entries = array(
		/*
		"contacts" => array(
			array("html" => "email", "name" => "email")
			,array("html" => "address", "name" => "address")
			,array("html" => "mobile phone", "name" => "mobilephone")
		),
		*/
		"personal" => array(
			array("html" => "curriculum vitae", "href" => "cv")
			,array("html" => "examples of coding", "href" => "codingexamples")
		),
		"pills" => array(
			array("html" => "english blog", "href" => "englishblog")
			,array("html" => "english pills", "href" => "englishpills")
			//,array("html" => "programming pills", "href" => "programmingpills")
		),
		"group1" => array(
			array("html" => "naples, my land", "href" => "naples")
		),
		"group2" => array(
			array("html" => "management", "href" => "login")
		)
	);
	echo json_encode($footer_entries);
?>