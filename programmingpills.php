<?php $pagina="programmingpills"; @require_once("structure_top.php"); ?>
	<section id="body" class="page_<?php echo $pagina; ?>">
		<article>
			<header>Javascript</header>
			<p>JS can change images
				<code><pre>
var sth = document.getElementById('anImage');>
if(sth.src.match("on")){
	sth.src = "image_off.png";
}else{
	sth.src = "image_on.png";
}
				</pre></code>
			</p>
		</article>
	</section>
<?php @require_once("structure_bottom.php"); ?>