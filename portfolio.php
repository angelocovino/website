<?php $pagina="portfolio"; @require_once("structure_top.php"); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#body article p a").append("<span class='img_arrow'>&nbsp;</span>");
			$("#body article p a").mouseenter(function(){
				$(this).find(".img_arrow").addClass("img_arrow_zero_opacity");
				$(this).find("img").addClass("img_noise");
			});
			$("#body article p a").mouseleave(function(){
				$(this).find(".img_arrow").removeClass("img_arrow_zero_opacity");
				$(this).find("img").removeClass("img_noise");
			});
		});
	</script>
	<section id="body" class="page_<?php echo $pagina; ?>">
		<article>
			<section>January 2015</section>
			<header>Salvatore Catapano Architects</header>
			<p>
				<span class="cv_skill">Role</span>Back-End &amp; Front-End Web Developer<br />
				<span class="cv_skill">Technique</span>HTML5, CSS3, SQL(MySQL), JQuery<br />
			</p>
			<p>
				<a target="_blank" href="//salvatorecatapanoarchitects.co.uk"><img src="imgs/sca.jpg" /></a>
			</p>
			<!--
			<br />
			<section>January 2015 - February 2015</section>
			<header>Angelo Covino</header>
			<p>
				<a target="_blank" href="//angelotm.altervista.org">
					<img src="imgs/angelocovino.jpg" />
				</a>
			</p>
			-->
		</article>
	</section>
<?php @require_once("structure_bottom.php"); ?>