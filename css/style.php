<?php header("Content-type: text/css"); ?>
body {background:black;}
::selection{color:black; background:rgba(213, 198, 160, 1);}
::-moz-selection{color:black; background:rgba(213, 198, 160, 1);} /* Code for Firefox */
audio{display:inline-block; width:100%;}

/* PAGE CURRICULUM */
.page_cv a,
.page_cv a:link,
.page_cv a:active,
.page_cv a:visited {text-decoration:underline; color:rgba(139, 125, 87, 1);}
.page_cv a:hover {color:white;}

/* PAGE PORTFOLIO */
.page_portfolio .p_img a {position:relative; display:block;}
.img_arrow {
	position:absolute;
	z-index:150;
	top:50%;
	margin-top:-15px;
	left:50%;
	margin-left:-15px;
	width:30px;
	height:30px;
	opacity:0;
	border-radius:50%;
	background:url('../imgs/icona2.jpg') center center no-repeat black;
	border:2px solid rgba(139, 125, 87, 1);
	text-align:center;
	font-family:'Lato';
	font-size:20px;
	transition:opacity 0.5s ease;
}
.img_arrow_zero_opacity {opacity:1;}
.page_portfolio .p_img a img {
	position:relative;
	z-index:100;
	margin:0px 0px !important;
	padding:0px 0px !important;
	transition:opacity 0.5s ease;
	opacity:1;
}
.img_noise { opacity:0.2 !important; }

/* GENERAL */
.tocontacts { cursor:pointer; }
p a,
p a:link,
p a:active,
p a:visited { text-decoration:none; color:rgba(139, 125, 87, 1); }
p a:hover { text-decoration:underline; }
.relevant_text {color:rgba(139, 125, 87, 1); font-weight:500;}
.color_red {color:rgba(255, 0, 0, 1);}
.cv_skill {
	font-family:'Lato';
	font-weight:900;
	font-size:10px;
	letter-spacing:1px;
	text-transform:uppercase;
	color:rgba(139, 125, 87, 0.5);
}
.cv_skill:after {
	padding:0px 2px;
	color:inherit;
	content:' | ';
}
.tabulation {display:inline-block; padding-left:40px;}
ul.list_marked_right {margin:0px 0px 10px 10px;}
ul.list_marked_right,
ul.list_marked_right li {font-weight:300; list-style-type:none;}
.list_marked_right li:before {content:'# '; color:rgba(139, 125, 87, 1);}
code {
	padding:0px 10px;
	display:block;
	overflow-y:hidden; overflow-x:auto;
	-webkit-overflow-scrolling:touch;
}

/* HEADER */
#header {
	position:fixed;
	z-index:200;
	top:0;
	left:0;
	width:100%;
	text-align:center;
	background:url('../imgs/3_1.png') center center repeat transparent;
	box-shadow:0px 10px 8px black;
	border-top:2px solid rgba(139, 125, 87, 0.4);
	font-family:'Josefin Sans';
}
#header:after {
	content:'';
	position:absolute;
	bottom:0;
	left:0;
	width:100%;
	height:2px;
	background:rgba(139, 125, 87, 0.4);
}
#header header {
	text-align:center;
	padding:5px 0px 0px 0px;
	background:rgba(0, 0, 0, 0);
	color:rgba(255, 255, 255, 1);
	text-shadow:5px 5px 5px black;
	text-transform:uppercase;
	font-family:inherit;
	font-size:3em;
	font-weight:700;
}
@media screen and (max-width:840px){
	#header {/*position:relative;*/}
	#header header {font-size:2.5em;}
	#mini_logo{display:none !important;}
	#header nav a,
	#header nav a:link,
	#header nav a:active,
	#header nav a:visited,
	#header nav a:hover {
		display:block !important;
		border:0px solid rgb(220, 220, 220) !important;
		padding-left:0px !important;
		padding-right:0px !important;
	}
	
	#body {padding-top:170px !important;}
	#body article:not(#pager) {border-style:solid;border-width:2px;border-color:139, 125, 87, 0.4);}
	#body article section,
	#body article:not(#pager) header {
		float:none !important;
		display:block !important;
		text-align:left !important;
	}
	#body article table td,
	#body article table th {
		padding:2px 4px;
		border:0px solid white;
		border-left:1px solid rgba(139, 125, 87, 0.4) !important;
	}
	#body article table th {
		font-weight:bold;
		text-transform:uppercase;
		border-bottom:1px solid rgba(139, 125, 87, 0.4) !important;
	}
	#body article table td {
		border-bottom:1px solid rgba(139, 125, 87, 0.4) !important;
	}
	#body article table tr:last-child td {
		border-bottom:0px solid rgba(139, 125, 87, 0.4) !important;
	}
	
	#footerone {
		min-height:calc(100% - 150px) !important;
		color:rgba(139, 125, 87, 0.7) !important;
	}
	#footerone article {
		float:none !important;
		margin:0 auto !important;
		width:calc(100% - 20px) !important;
		border-top:2px rgba(139, 125, 87, 0.4) solid;
		padding-top:20px !important;
	}
	#footerone article:nth-child(1) {
		border:0px !important;
		padding-top:0px !important;
	}
	#footer_margin {
		width:calc(100% - 20px) !important;
		margin:0 auto;
		margin-bottom:20px;
	}
}
@media screen and (max-width:500px){
	#body { padding-top:155px !important; }
	#header header { font-size:1.5em; }
	.title_quotes { display:none; }
	#footerone { color:rgba(139, 125, 87, 0.8) !important; }
}
#header nav {
	position:relative;
	clear:both;
	max-width:780px;
	margin:0 auto;
	font-family:inherit;
}
#mini_logo{
	display:none;
	position:absolute;
	left:10px;
	bottom:4px;
	color:white;
	text-shadow:3px 3px 1px black;
	font-family:inherit;
	font-size:1.5em;
	font-weight:700;
}
#header nav a,
#header nav a:link,
#header nav a:active,
#header nav a:visited,
#header nav a:hover {
	text-shadow:3px 3px 2px black;
	text-transform:uppercase;
	position:relative;
	display:inline-block;
	height:calc(100% - 75px);
	
	font-family:inherit;
	font-size:1em;
	font-weight:700;
	letter-spacing:1px;
	
	padding:5px 10px 7px 10px;
	margin:0px 2px;
	border-bottom:2px solid transparent;
	transition:border 0.5s ease, color 0.5s ease;
	color:rgba(181, 167, 130, 1);
}
#header nav a:hover {
	border-color:rgba(213, 198, 160, 1);
	color:rgba(213, 198, 160, 1);
}
#header nav a.menu_active {
	border-color:white !important;
	color:white !important;
}

/* BODY and PORTFOLIO*/
#body {
	position:relative;
	margin:0 auto;
	padding-top:105px;
	max-width:800px;
	height:auto;
	background:transparent;
	
	box-sizing:border-box;
	border-style:solid;
	border-color:transparent;
	border-left-width:10px;
	border-right-width:10px;
	
	color:white;
	text-align:justify;
	
	line-height:15px;
	font-family:'Lato';
	font-size:12px;
	font-weight:400;
	overflow:hidden;
}

/* ARTICLE: HEADER & SECTION */
#body article:not(#pager){
	margin-bottom:20px;
	border-width:2px;
	font:inherit;
}
#body article:not(#pager),
#body article:not(#pager) header,
#body article:not(#pager) section {
	border-style:inherit;
	border-color:rgba(139, 125, 87, 0.4);
	padding:5px 10px;
}
#body article:not(#pager) header,
#body article:not(#pager) section {
	border-bottom-width:2px;
	display:inline-block;
	text-align:right;
	margin:0px 0px 5px 0px;
	text-transform:uppercase;
	color:rgba(139, 125, 87, 1);
	font:inherit;
	font-weight:900;
}
#body article section {float:right;}
.page_englishblog article:not(#pager):hover,
.page_englishblog article:not(#pager):hover header,
.page_englishblog article:not(#pager):hover section{border-color:rgba(139, 125, 87, 1) !important;}

#body article p {
	padding:5px 10px;
	color:white;
	margin:0px 0px 5px 0px;
	font:inherit;
	font-weight:300;
}
#body article img {max-width:100%; margin-top:5px;}

/* ARTICLE: TABLE */
#body article table {
	margin:5px 10px;
	width:calc(100% - 20px);
	border:0px solid white;
	
	font:inherit;
	font-weight:300;
}
#body article table td,
#body article table th {
	padding:2px 4px;
	font:inherit;
	border:inherit;
	border-left:1px solid rgba(139, 125, 87, 0.4);
	border-bottom:1px solid rgba(139, 125, 87, 0.4);
}
#body article table th {font-weight:400; text-transform:uppercase;}
#body article table tr:last-child td {border-bottom:0px solid rgba(139, 125, 87, 0.4);}

/* FORM */
#body form {
	margin:0px 10px;
	font:inherit;
	width:calc(100% - 20px);
}
#body form label {
	display:inline-block;
	font:inherit;
	padding:5px 10px;
	width:calc(25% - 20px);
	text-align:right;
}
#body form textarea{margin-top:5px; resize:vertical;}
#body form input[type=text],
#body form select,
#body form textarea,
#body form input[type=password] {
	width:calc(75% - 10px);
	padding:2px 5px;
	color:white;
	font:11px 'Lato';
	background:rgba(139, 125, 87, 0.4);
}
#body form input[type=submit] {
	width:100%;
	margin-top:10px;
	padding:5px 0px;
	color:white;
	font:10px 'Lato';
	text-transform:uppercase;
	font-weight:bold;
	border-top:2px solid rgba(139, 125, 87, 0.4);
	border-bottom:2px solid rgba(139, 125, 87, 0.4);
	background:transparent;
}

#pager {
	text-align:center;
	text-transform:uppercase;
	font:inherit;
	font-size:11px;
	font-weight:900;
	padding-bottom:20px;
	margin-bottom:20px;
	border-style:solid;
	border-color:rgba(139, 125, 87, 0.4);
	border-bottom-width:2px;
}
#pager a {
	display:inline-block;
	margin:0px 2px;
	width:20px;
	transition:border 0.5s ease;
	border-style:inherit;
	border-color:transparent;
	border-width:0px;
	border-bottom-width:2px;
	color:rgba(139, 125, 87, 0.4);
	transition:border 0.5s ease, width 0.5s ease;
}
/*
#pager a:not(.active):hover:before {content:'- ';}
#pager a:not(.active):hover:after {content:' -';}
*/
#pager a:not(.active):hover {width:30px;}
#pager a:not(.active):hover,
#pager a.active {border-color:rgba(181, 167, 130, 1); color:rgba(181, 167, 130, 1);}
#pager header {display:inline-block; color:rgba(181, 167, 130, 1);}

/* FOOTER */
#footerone {
	max-width:780px;
	margin:0 auto;
	min-height:calc(100% - 65px);
	font:inherit;
	font:11px 'Lato';
	font-weight:900;
	text-transform:uppercase;
	color:rgba(139, 125, 87, 0.6);
}
#footerone article {
	width:33.33%;
	font:inherit;
	float:left;
	text-align:center;
	padding:0px 0px 20px 0px;
}
#footerone article a,
#footerone article a:link,
#footerone article a:active,
#footerone article a:visited {
	color:inherit;
	padding:0px 5px;
	transition:color 0.5s ease;
}
#footerone article a:not(.a_img):hover:before {content:'- ';}
#footerone article a:not(.a_img):hover:after {content:' -';}
#footerone article a:hover {
	color:rgba(213, 198, 160, 1);
}
.a_img {
	position:relative;
	display:inline-block;
	width:25px;
	height:25px;
	padding:0px 0px !important;
	margin:0px 2px !important;
	border:0px !important;
}
.a_img:hover {
	cursor:pointer;
}
.a_img img {
	position:absolute;
	border-radius:50%;
	top:0;
	left:0;
	width:100%;
	height:auto;
}
.a_img img:first-child {opacity:1; transition:opacity 0.5s ease;}
.a_img img:last-child {opacity:0; transition:opacity 0.5s ease;}
.a_img:hover img:first-child {opacity:0; transition:opacity 0.5s ease;}
.a_img:hover img:last-child {opacity:1; transition:opacity 0.5s ease;}
#footer_margin {
	clear:both;
	width:100%;
	padding:20px 0px 20px 0px;
	border-style:solid;
	border-top-width:2px;
	border-color:rgba(139, 125, 87, 0.4);
	text-align:center;
}

#hidden {
	display:none;
	position:fixed;
	z-index:110;
	top:50%;
	left:50%;
	height:auto;
	padding:10px 20px;
	border-style:solid;
	border-width:2px;
	border-color:rgba(139, 125, 87, 0.4);
	max-width:80%;
	background:black;
	text-shadow:5px 5px 10px black;
	font-family:'Lato';
}
@media screen and (max-width:840px){
	#hidden p {
		font:17px 'Changa One' !important;
	}
	#hidden p span {
		font:19px 'Changa One' !important;
	}
}
#hidden p {
	font-size:13px;
	font-weight:300;
	color:rgba(181, 167, 130, 1);
}
#hidden a:not(:hover){
	color:rgba(181, 167, 130, 1);
	text-decoration:none;
}
#hidden a:hover {
	color:rgba(181, 167, 130, 1);
	text-decoration:underline;
}
#hidden p span {
	display:inline-block;
	margin-bottom:2px;
	text-transform:uppercase;
	font-size:13px;
	font-weight:900;
	color:rgba(139, 125, 87, 0.4);
}
#hidden_exit {
	position:absolute;
	width:15px;
	height:15px;
	right:-8px;
	top:-8px;
	background:transparent;
}
#hidden_exit img {
	width:100%;
	cursor:pointer;
}
#darkness {
	position:fixed;
	display:none;
	z-index:105;
	left:0;
	top:0;
	background:url('../imgs/broken-noise.png') center center repeat black;
	font:0.1px Arial;
	opacity:0.7;
	width:100%;
	height:100%;
}
@media screen and (min-width:840px){
	#totop {
		display:none !important;
	}
}
#totop {
	position:fixed;
	z-index:150;
	display:none;
	left:50%;
	margin-left:-42px;
	bottom:0;
	border-style:solid;
	border-width:2px;
	border-bottom-width:0px;
	border-color:rgba(139, 125, 87, 0.4);
	color:rgba(139, 125, 87, 0.4);
	background:black;
	
	text-transform:uppercase;
	text-align:center;
	
	font-family:'Lato';
	font-weight:900;
	font-size:10px;
	
	padding:5px 10px;
	width:60px;
	height:auto;
}
#totop:hover{
	/*
	transform:rotate(360deg);
	transition-duration:0.4s;
	*/
	cursor:pointer;
}

/* HEART SHAPE CSS3 - DELETED */
#heart {
	display:inline-block;
	position:relative;
	width:10px;
	height:auto;
}
#heart:before, #heart:after{
	background:rgba(139, 125, 87, 1);
	border-radius:50% 50% 0 0;
	content:"";
	height:9px;
	width:5px;
	left:5px;
	position:absolute;
	top:2px;
	transform:rotate(-45deg);
	-webkit-transform:rotate(-45deg);
	transform-origin:0 100%;
	-webkit-transform-origin:0 100%;
}
#heart:after{
	left:0;
	transform:rotate(45deg);
	-webkit-transform:rotate(45deg);
	transform-origin:100% 100%;
	-webkit-transform-origin:100% 100%
}