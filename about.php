<?php $pagina="about"; @require_once("structure_top.php"); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			if($("body").width() < 800){
				$("#body header").first().after($("#body section"));
			}
			$(window).resize(function(){
				if($("body").width() < 800){
					$("#body header").first().after($("#body section"));
				}
			});
		});
	</script>
	<section id="body" class="page_<?php echo $pagina; ?>">
		<article>
			<section>
				<?php
				$date1 = '2014-12-21 15:00:00';
				$date2 = @date("Y-m-d H:i:s");
				$seconds_diff = @strtotime($date2) - @strtotime($date1);
				$days = floor($seconds_diff/3600/24);
				echo $days;
				?> days spent in London
			</section>
			<header>Angelo Covino</header>
			<p>
				<img src="imgs/angeloBN.jpg" style="margin:0 0 10px 20px; width:50%; float:right;" />
				Born in Naples (Italy), I've studied Computer Science in Naples but I've not finished it yet, because I felt the needing of something else. So I've arrived in London in December 2014 to start a awesome experience.<br />
				<br />
				Born with a genuine passion in what I do, I've started when i was just 10 years old with HTML4 thanks to a stranger. I still remember how proud I was when I saw my first 'Hello World!'. I know that is the moment I realized it was my real passion.<br />So that's been my first approach to the programming world, and it's still the same.<br />
				I often realize WebSites and Applications just for personal pleasure. It is pretty normal for me spend my free time developing something on my personal computer.<br />
				<br />
				<span class="relevant_text">I'm currently studying english</span> at Westminster Kingsway College in Victoria and <span class="relevant_text">I'm also working as Freelance Web Developer</span><br />
				I wrote, and I am still writing, something about my lessons on this site.<br />
				<br />
				Here you can find my <span class="relevant_text"><a href="cv">Curriculum Vitae</a></span> and <span class="relevant_text"><a href="codingexamples">examples of coding</a></span><br />
				<br />
				If you have a project tell me about it, <span class="relevant_text tocontacts">contact me!</span><br />
				<br />
				<img src="imgs/napoli.jpg" alt="Napoli, Italy" />
			</p>
			<!--
			<header>Cinema, Movies &amp; Actors</header>
			<p>
				First of all I'm a very big fan of Quentin Tarantino.<br />
				My favourite movie is &#39;Reservoir Dogs&#39; but i really love also &#39;Sunshine&#39;.<br />
				Other movies that i like are:
			</p>
			<ul class="list_marked_right">
				<li>Pulp Fiction</li>
				<li>The Gladiator</li>
				<li>Donnie Darko</li>
				<li>La Haine</li>
				<li>American History X</li>
				<li>Inglorious Bastards</li>
				<li>Silent Hill</li>
				<li>Dogville</li>
			</ul>
			<p>Talking about actors I'm a fan of:</p>
			<ul class="list_marked_right">
				<li>Scarlet Johansonn</li>
				<li>Brad Pitt</li>
				<li>Nicole Kidman</li>
				<li>Johnny Depp</li>
			</ul>
			<p>Italians:</p>
			<ul class="list_marked_right">
				<li>Totò</li>
				<li>Eduardo, Peppino &amp; Titina De Filippo</li>
				<li>Troisi</li>
			</ul>
			<header>Music &amp; Singers</header>
			<p>I love a lot of music sang in my native dialect.</p>
			<ul class="list_marked_right">
				<li>Almamegretta</li>
				<li>Pino Daniele</li>
				<li>Daniele Silvestri</li>
				<li>Clementino</li>
				<li>Rocco Hunt</li>
				<li>Amy Winehouse</li>
				<li>Subsonica</li>
				<li>99 Posse</li>
				<li>Chiara</li>
			</ul>
			<p>
				<img src="imgs/460245_10150603515675741_1381846124_o1.jpg" alt="Amy Winehouse" />
			</p>
			-->
		</article>
	</section>
<?php @require_once("structure_bottom.php"); ?>