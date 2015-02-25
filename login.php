<?php session_start();
	if(!isset($_GET['error']) && isset($_SESSION['aclogin'])){
		header("location: management.php");
		exit(0);
	}
	@require_once("structure_top.php");
?>
		<section id="body" class="page_management">
			<article>
				<header>management area</header>
				<p>This area is just for the webmaster.
<?php
	if(isset($_GET['error'])){
		switch($_GET['error']){
			case 'credentials':
				echo "<br /><span class='color_red'>Error. Wrong username and/or password.</span><br />";
			break;
		}
	}
?>
					<form name="management_login" id="management_login" action="management.php" method="post">
						<label for="user">name</label><input name="user" type="text" value="" /><br />
						<label for="pass">pass</label><input name="pass" type="password" value="" />
						<input type="submit" value="login" />
					</form>
				</p>
			</article>
		</section>
<?php
	@require_once("structure_bottom.php");
?>