<?php session_start();
	/* CHECK IF SESSION HAS EXPIRED */
	if(isset($_SESSION['ac_last_activity']) && ((time()-$_SESSION['ac_last_activity']) > 1800)){ // 30min 60*30
		header("location: logout.php");
		exit(0);
	}
	$_SESSION['ac_last_activity']=time();
	@require_once("structure_top.php");
	if(
		isset($_SESSION['aclogin']) &&
		($_SERVER['REQUEST_METHOD']==='POST') && 
		isset($_POST['article']) && !empty($_POST['article']) &&
		isset($_POST['todo']) && !empty($_POST['todo'])
	){
		$entry_id=$_POST['article'];
		$action=$_POST['todo'];
		if(strcasecmp($action, "modify")==0){
			$entry=$db->getAnEntry($entry_id);
			$day=$entry['date_day'];
			$month=$entry['date_month'];
			$year=$entry['date_year'];
			$title=$entry['title'];
			$body=$entry['entry_body'];
			$title=$db->checkEntryReverse($title);
			$body=$db->checkEntryReverse($body);
?>
	<section id="body" class="page_management">
		<article>
			<header>old article</header>
			<p>
				<form name="management_article_new" id="management_article_new" action="management_article_new.php" method="post">
					<input name="entry_id" type="hidden" value="<?php echo $entry_id; ?>" />
					<label for="title">Title</label><input name="title" type="text" value="<?php  echo $title; ?>" /><br />
					<label for="day">Day</label><input name="day" type="text" value="<?php echo $day; ?>" /><br />
					<label for="month">Month</label><input name="month" type="text" value="<?php echo $month; ?>" /><br />
					<label for="year">Year</label><input name="year" type="text" value="<?php echo $year; ?>" /><br />
					<label for="body">Body</label><textarea rows="10" name="body"><?php echo $body; ?></textarea>
					<input type="submit" value="modify" />
				</form>
			</p>
			<header>logout</header>
			<p>
				<form method="post" action="logout.php"><input type="submit" value="logout" /></form>
			</p>
		</article>
	</section>
<?php
		}else if(strcasecmp($action, "delete")==0){
			$delete=$db->deleteAnEntry($entry_id);
			$error="?affected=".$delete;
			if($delete<0){$error.="&error=delete";}
			header("location: management.php".$error);
			exit(0);
		}
	}else{
		header("location: index.php");
		exit(0);
	}
	@require_once("structure_bottom.php"); ?>