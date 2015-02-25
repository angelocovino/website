<?php session_start();
	/* CHECK IF SESSION HAS EXPIRED */
	if(isset($_SESSION['ac_last_activity']) && ((time()-$_SESSION['ac_last_activity']) > 1800)){ // 30min 60*30
		header("location: logout.php");
		exit(0);
	}
	$_SESSION['ac_last_activity']=time();
	@require_once("structure_top.php");
?>
	<section id="body" class="page_management">
		<article>
<?php
	$login=false;
	if(isset($_SESSION['aclogin'])){
		$login=true;
	}else if($_SERVER['REQUEST_METHOD']==='POST' &&
		isset($_POST['user']) && !empty($_POST['user']) &&
		isset($_POST['pass']) && !empty($_POST['pass']) &&
		$db->checkLogin($_POST['user'], $_POST['pass'])
	){
		$login=true;
		$_SESSION['aclogin']=sha1($_POST['user']."_".$_POST['pass']);
	}
	if($login==true){
		$entries = $db->getEntries();
?>
			<section>count: <?php echo count($entries); ?></section>
			<header>old articles</header>
			<p>
				<form name="management_article_old" id="management_article_old" action="management_article_old.php" method="post">
					<label for="article">Article</label><select name="article">
					<?php
						for($i=0;$i<count($entries);$i++){
							echo "<option value='".$entries[$i]['entry_id']."'>";
								echo "[".$entries[$i]['date_day']." ".$db->monthAssociation($entries[$i]['date_month'])." ".$entries[$i]['date_year']."] ".$entries[$i]['title'];
							echo "</option>";
						}
					?>
					</select>
					<label for="todo">Action</label><select name="todo">
						<option value="modify">Modify</option>
						<option value="delete">Delete</option>
					</select>
					<input type="submit" value="perform action" />
				</form>
			</p>
			<header>new article</header>
			<p>
				<form name="management_article_new" id="management_article_new" action="management_article_new.php" method="post">
					<label for="title">Title</label><input name="title" type="text" value="" /><br />
<?php
					date_default_timezone_set('Europe/London');
					$datetime = new DateTime();
					$day=intval($datetime->format('d'));
					$month=intval($datetime->format('m'));
					$year=intval($datetime->format('Y'));
?>
					<label for="day">Day</label><input name="day" type="text" value="<?php echo $day ?>" /><br />
					<label for="month">Month</label><input name="month" type="text" value="<?php echo $month; ?>" /><br />
					<label for="year">Year</label><input name="year" type="text" value="<?php echo $year; ?>" /><br />
					<label for="body">Body</label><textarea rows="10" name="body"></textarea>
					<input type="submit" value="add" />
				</form>
			</p>
			<header>insert</header>
			<p>
				<form method="post" action="management_queries.php">
					<input type="hidden" name="action" value="insert" />
					<label for="day">Query</label><textarea rows="5" name="query">INSERT INTO [table] VALUES([values])</textarea><br />
					<input type="submit" value="insert" />
				</form>
			</p>
			<header>update</header>
			<p>
				<form method="post" action="management_queries.php">
					<input type="hidden" name="action" value="update" />
					<label for="day">Query</label><textarea rows="5" name="query">UPDATE [table] SET [column=value]</textarea><br />
					<input type="submit" value="update" />
				</form>
			</p>
			<header>delete</header>
			<p>
				<form method="post" action="management_queries.php">
					<input type="hidden" name="action" value="delete" />
					<label for="day">Query</label><textarea rows="5" name="query">DELETE FROM [table] WHERE [condition]</textarea><br />
					<input type="submit" value="delete" />
				</form>
			</p>
			<header>other query</header>
			<p>
				<form method="post" action="management_queries.php">
					<input type="hidden" name="action" value="other" />
					<label for="day">Query</label><textarea rows="5" name="query"></textarea><br />
					<input type="submit" value="execute" />
				</form>
			</p>
			<!--
			<header>dump database</header>
			<p>
				<form method="post" action="mysqldump.php"><input type="submit" value="execute" /></form>
			</p>
			-->
			<header>logout</header>
			<p>
				<form method="post" action="logout.php"><input type="submit" value="logout" /></form>
			</p>
<?php
	}else{
		header("location: login.php?error=credentials");
	}
?>
		</article>
	</section>
<?php @require_once("structure_bottom.php"); ?>