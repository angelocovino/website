<?php $pagina="englishblog"; @require_once("structure_top.php");
	/*
		PAGER FUNCTION
		@page actual page
		@pages total number of pages
	*/
	function writePages($page, $pages){
		if($pages>1){
			echo "<article id='pager'>";
			echo "<header>- pages -</header><br />";
			for($i=1;$i<=$pages;$i++){
				echo "<a";
				if($i==$page){echo " class='active'";}
				echo " href='englishblog.php";
				if($i!=1){echo "?page=".$i."";}
				echo "'>".$i."</a>";
			}
			echo "</article>";
		}
	}
	$limitStart=0;
	$limitAmount=10;
	$conto=$db->getEntriesCount();
	$page = 1;
	$pages = ceil($conto/$limitAmount);
	if(isset($_GET['page']) && !empty($_GET['page'])){
		$page = intval($_GET['page']);
		$limitStart=$limitAmount*($page-1);
		if($limitStart>$conto){
			$limitStart=$conto-$limitAmount;
			if($limitStart<0){$limitStart=0;}
		}
	}
	$entries = $db->getEntries($limitStart, $limitAmount);
?>
	<section id="body" class="page_<?php echo $pagina; ?>">
		<?php for($i=0;$i<count($entries);$i++){ ?>
		<article>
			<section><?php echo $entries[$i]['date_day']." ".$db->monthAssociation($entries[$i]['date_month'])." ".$entries[$i]['date_year']; ?></section>
			<header><?php echo $entries[$i]['title']; ?></header>
			<p><?php echo $entries[$i]['entry_body']; ?></p>
		</article>
		<?php } ?>
		<?php writePages($page, $pages); ?>
	</section>
<?php @require_once("structure_bottom.php"); ?>