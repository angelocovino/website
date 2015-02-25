<?php session_start();
	/* DATABASE */
	@require_once("class.db.php");
	$db = new database();
	/* CHECK IF SESSION HAS EXPIRED */
	if(isset($_SESSION['ac_last_activity']) && ((time()-$_SESSION['ac_last_activity']) > 1800)){ // 30min 60*30
		header("location: logout.php");
		exit(0);
	}
	$_SESSION['ac_last_activity']=time();
	if(
		isset($_SESSION['aclogin']) &&
		($_SERVER['REQUEST_METHOD']==='POST') && 
		isset($_POST['query']) && !empty($_POST['query'])
	){
		$query=$_POST['query'];
		$caso=$_POST['action'];
		$error="?affected=";
		if(strcasecmp($caso,'insert')==0){
			$db->executeQuery($query);
			$insert=$db->affectedRows();
			$error.=$insert;
			if($insert<0){$error.="&error=q_insert";}
		}else if(strcasecmp($caso,'update')==0){
			$db->executeQuery($query);
			$update=$db->affectedRows();
			$error.=$update;
			if($update<0){$error.="&error=q_update";}
		}else if(strcasecmp($caso,'delete')==0){
			$db->executeQuery($query);
			$delete=$db->affectedRows();
			$error.=$delete;
			if($delete<0){$error.="&error=q_delete";}
		}else if(strcasecmp($caso,'other')==0){
			$db->executeQuery($query);
			$other=$db->affectedRows();
			$error.=$other;
			if($other<0){$error.="&error=q_other";}
		}
		header("location: management.php".$error);
		exit(0);
	}else{
		header("location: index.php");
		exit(0);
	}
?>