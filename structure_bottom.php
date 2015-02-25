	<footer name="footer" id="footerone" data-ng-controller="footerCtrl">
		<article>
			<footer-entry-name data-ng-repeat="contact in contacts" info="contact"></footer-entry-name>
			<br />
			<footer-entry data-ng-repeat="personals in data.personal" info="personals"></footer-entry>
		</article>
		<article>
			<a class="a_img" target="_blank" href="//github.com/angelocovino">
				<img src="imgs/github3.png" alt="git hub" />
				<img src="imgs/github2.png" alt="git hub on" />
			</a>
			<a class="a_img" target="_blank" href="//it.linkedin.com/in/angelocovino">
				<img src="imgs/linkedin3.png" alt="linkedin" />
				<img src="imgs/linkedin2.png" alt="linkedin on" />
			</a>
			<a class="a_img" target="_blank" href="//twitter.com/angelocovino90">
				<img src="imgs/twitter3.png" alt="twitter" />
				<img src="imgs/twitter2.png" alt="twitter on" />
			</a>
		</article>
		<article>
			<footer-entry data-ng-repeat="entry in data.group1" info="entry"></footer-entry>
			<br />
			<footer-entry data-ng-repeat="entry in data.pills" info="entry"></footer-entry>
			<br />
			<footer-entry data-ng-repeat="entry in data.group2" info="entry"></footer-entry>
		</article>
		<section id="footer_margin">
			Copyright &copy; 2015 - Angelo Covino<br />
			<br />
			HandMade with <img src="imgs/heart.jpg"> in London<br />
			using only Notepad++
		</section>
	</footer>
</body>
</html>