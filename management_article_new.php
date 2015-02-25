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
		isset($_POST['day']) && !empty($_POST['day']) &&
		isset($_POST['month']) && !empty($_POST['month']) &&
		isset($_POST['year']) && !empty($_POST['year']) &&
		isset($_POST['title']) && !empty($_POST['title']) &&
		isset($_POST['body']) && !empty($_POST['body'])
	){
		$day=intval($_POST['day']);
		$month=intval($_POST['month']);
		$year=intval($_POST['year']);
		$title=$_POST['title'];
		$title=$db->checkEntry($title);
		$body=$_POST['body'];
		$body=$db->checkEntry($body);

		$error="?affected=";
		if(isset($_POST['entry_id']) && !empty($_POST['entry_id'])){
			$update=$db->updateAnEntry($_POST['entry_id'], $day, $month, $year, $title, $body);
			$error.=$update;
			if($update<0){$error.="&error=update";}
		}else{
			$insert=$db->insertAnEntry($day, $month, $year, $title, $body);
			$error.=$insert;
			if($insert<0){$error.="&error=insert";}
		}
		header("location: management.php".$error);
		exit(0);
	}else{
		header("location: index.php");
		exit(0);
	}
@require_once("structure_bottom.php"); ?>