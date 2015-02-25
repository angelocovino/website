<?php
	@require_once("class.db.php");
	$db = new database();
?>
<!DOCTYPE html>
<html lang="en" data-ng-app="angelocovinoApp">
<head>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="author" content="Angelo Covino">
	<meta name="description" content="Angelo Covino Web Developer, Software Developer">
	<!--
	<meta name="copyright" content="Copyright 2015 Angelo Covino" />
	<meta name="distribution" content="global" />
	-->
	<meta name="keywords" content="Angelo, Covino, Angelo Covino, angelotm">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="2 days" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- OPEN GRAPH META TAGS -->
	<meta property="og:title" content="Angelo Covino" />
	<meta property="og:url" content="//angelotm.altervista.org" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="//angelotm.altervista.org/imgs/ico48x48.ico" />
	<!-- TITLE -->
	<title>Angelo Covino</title>
	<!-- LINKS -->
	<link rel="shortcut icon" type="image/x-icon" href="imgs/ico.ico" />
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900|Josefin+Sans:600,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/html5reset-1.6.1.css" />
	<link rel="stylesheet" type="text/css" href="css/style.php">
	<!-- SCRIPTS -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.9/angular.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="structure/ac_entries.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			/* HEADER */
			$('#header header').data('size','big');
			$(window).scroll(function(){
				if($(document).scrollTop() > 0){
					$("#totop").slideDown(); /* SCROLL TO TOP */
					if($('#header header').data('size') == 'big'){
						$('#header header').data('size','small');
						$('#header header').stop()
						.slideUp()
						.animate({'opacity':'0'},{queue:false},400);
						$('#mini_logo').fadeIn();
					}
				}else{
					$("#totop").slideUp(); /* SCROLL TO TOP */
					if($('#header header').data('size') == 'small'){
						$('#header header').data('size','big');
						$('#header header').stop()
						.slideDown()
						.animate({'opacity':'1'},{queue:false},400);
						$('#mini_logo').fadeOut();
					}
				}
				if($(document).scrollTop() >= $(document).height()-$("#footerone").height()-65){
					$("#tocontacts").addClass("menu_active");
				}else{
					$("#tocontacts").removeClass("menu_active");
				}
			});
			
			/* TO TOP */
			$("#totop").click(function(){
				$('html, body').animate({scrollTop : 0},800);
				return false;
			});
			
			/* TO CONTACTS / BOTTOM */
			function toContacts(){
				var alt=$(document).height()-$("#footerone").height()-65;
				//-$(window).height()
				//$("#body").css("padding-top").replace(/[^-\d\.]/g, '')
				$('html, body').animate({scrollTop : ""+alt },800);
				return false;
			};
			$("#tocontacts, .tocontacts").click(function(){ toContacts(); });
			
			/* KEYBOARD CATCHER */
			$(document).keyup(function(e) {
				// if(e.keyCode == 13){} // enter
				if(e.keyCode == 27){ // esc
					$("#hidden_exit").click();
				}
			});
			
			/* HIDDEN CONTACTS */
			$("[name='email']").click(function(){ hiddenContacts(this); });
			$("[name='address']").click(function(){ hiddenContacts(this); });
			$("[name='mobilephone']").click(function(){ hiddenContacts(this); });
			$("#hidden_exit").click(function(){ hiddenContacts(this); });
			function hiddenContacts(that){
				if($("#hidden").is(":visible")){
					$("#hidden").fadeOut();
					$("#darkness").fadeOut();
					return false;
				}
				$("#hidden p").fadeOut(0); // first hide all
				var which = $(that).attr("name"); // get the name attribute
				// check name attribute is not empty, if it's not there is something to show
				if(typeof which !== typeof undefined && which !== false){
					$("#hidden p[id='hidden_"+which+"']").fadeIn(0);
					var alt = $("#hidden p[id='hidden_"+which+"']").parent().height();
					var largh = $("#hidden p[id='hidden_"+which+"']").parent().width();
					$("#hidden p[id='hidden_"+which+"']").parent().css({"margin-left":"-"+((largh/2)+25)+"px"});
					$("#hidden p[id='hidden_"+which+"']").parent().css({"margin-top":"-"+((alt/2)+15)+"px"});
					$("#hidden").fadeIn();
					$("#darkness").fadeIn();
				}
			}
		});
	</script>
</head>
<body>
	<section id="totop">to top</section>
	<section id="darkness">&nbsp;</section>
	<section id="hidden">
		<section id="hidden_exit"><img src="imgs/exit.jpg" alt="close" /></section>
		<p id="hidden_email"><span>EMAIL</span><br />
			<a href="mailto:angelo_covino@hotmail.com">angelo_covino@hotmail.com</a>
		</p>
		<p id="hidden_address"><span>ADDRESS</span><br />
			6 Ostade Road, SW2 2BA<br />Brixton, London
		</p>
		<p id="hidden_mobilephone"><span>MOBILE PHONE</span><br />
			+44 07765343055
		</p>
	</section>
	<section id="header">
		<header>
			<span class="title_quotes">_ </span>
			ANGELO COVINO
			<span class="title_quotes"> _</span>
		</header>
		<nav data-ng-controller="navCtrl">
			<!--
			<section id="mini_logo"><img style="width:20px;" src="imgs/sun.png" />AC</section>
			-->
			<nav-entry data-ng-repeat="entry in data" info="entry" page="<?php echo $pagina; ?>"></nav-entry><a id="tocontacts">info</a>
		</nav>
	</section>