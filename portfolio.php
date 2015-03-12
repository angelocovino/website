<?php $pagina="portfolio"; @require_once("structure_top.php"); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".p_img a").append("<span class='img_arrow'>&nbsp;</span>");
			$(".p_img a").mouseenter(function(){
				$(this).find(".img_arrow").addClass("img_arrow_zero_opacity");
				$(this).find("img").addClass("img_noise");
			});
			$(".p_img a").mouseleave(function(){
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
				<span class="cv_skill">Role</span>Back-End &amp; Front-End WebDeveloper<br />
				<span class="cv_skill">Technique</span>HTML5, CSS3, SQL(MySQL), JQuery<br />
			</p>
			<p class="p_img">
				<a target="_blank" href="//salvatorecatapanoarchitects.co.uk"><img src="imgs/sca.jpg" /></a>
			</p>
			<br />
			
			<section>January 2015 - February 2015</section>
			<header>Angelo Covino</header>
			<p>
				<span class="cv_skill">Role</span>WebMaster<br />
				<span class="cv_skill">Git</span><a href="//github.com/angelocovino/website">angelocovino/website</a>
			</p>
			<p class="p_img">
				<a target="_blank" href="//angelotm.altervista.org">
					<img src="imgs/angelocovino2.jpg" />
				</a>
			</p>
			<br />
			
			<section>March 2015</section>
			<header>LIFE Residential Challenge</header>
			<p>
				<span class="cv_skill">The Challenge</span>Build a pure HTML/CSS one page site for a future development, without functional backend, no fixed style guide<br />
				<span class="cv_skill">Role</span>Front-End WebDeveloper<br />
				<span class="cv_skill">Technique</span>HTML5, CSS3
				<span class="cv_skill">Git</span><a href="//github.com/angelocovino/website/tree/master/portfolio_data/liferesidential">angelocovino/website</a>
			</p>
			<p class="p_img">
				<a target="_blank" href="portfolio_data/liferesidential/index.html">
					<img src="imgs/liferesidential.jpg" />
				</a>
			</p>
		</article>
	</section>
<?php @require_once("structure_bottom.php"); ?>