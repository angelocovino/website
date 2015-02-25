<?php @require_once("structure_top.php"); ?>
	<section id="body" class="page_codingexamples">
		<article>
			<section>examples of coding</section>
			<header>JQuery</header>
			<p>
				Contacts in footer section of this site have got a jquery-based system to be showed.
				<code><pre>
$(document).ready(function(){
	/* HIDDEN CONTACTS */
	$("[name='email']").click(function(){ hiddenContacts(this); });
	$("[name='address']").click(function(){ hiddenContacts(this); });
	$("[name='mobilephone']").click(function(){ hiddenContacts(this); });
	$("#hidden_exit").click(function(){ hiddenContacts(this); });
	function hiddenContacts(that){
		if($("#hidden").is(":visible")){
			$("#hidden").fadeOut();
			$("#darkness").fadeOut();
			return false;
		}
		
		$("#hidden p").fadeOut(0); // first hide all
		var which = $(that).attr("name"); // get the name attribute
		// check name attribute is not empty, if it's not there is something to show
		if(typeof which !== typeof undefined && which !== false){
			$("#hidden p[id='hidden_"+which+"']").fadeIn(0);
			var alt = $("#hidden p[id='hidden_"+which+"']").parent().height();
			var largh = $("#hidden p[id='hidden_"+which+"']").parent().width();
			$("#hidden p[id='hidden_"+which+"']").parent()
				.css({"margin-left":"-"+((largh/2)+25)+"px"});
			$("#hidden p[id='hidden_"+which+"']").parent()
				.css({"margin-top":"-"+((alt/2)+15)+"px"});
			$("#hidden").fadeIn();
			$("#darkness").fadeIn();
		}
	}
	/* KEYBOARD CATCHER */
	$(document).keyup(function(e) {
		if(e.keyCode == 27){ // esc
			$("#hidden_exit").click();
		}
	});
});
				</pre></code>
			</p>
			<header>AngularJS</header>
			<p>
				1 | I've implemented an example of AngularJS on the footer. View is the following.
				<code><pre>
&lthtml data-ng-app="angelocovinoApp"&gt;
	...
	&ltfooter data-ng-controller="footerCtrl"&gt;
		...
		&ltarticle&gt;
			&ltfooter-entry data-ng-repeat="entry in data.group1" info="entry"&gt;&lt/footer-entry&gt;
			&ltbr /&gt;
			&ltfooter-entry data-ng-repeat="entry in data.pills" info="entry"&gt;&lt/footer-entry&gt;
			&ltbr /&gt;
			&ltfooter-entry data-ng-repeat="entry in data.group2" info="entry"&gt;&lt/footer-entry&gt;
		&lt/article&gt;
		...
	&lt/footer&gt;
	...
&lt/html&gt;
				</pre></code>
			</p>
			<p>
				2 | Controller.
				<code><pre>
angular
	.module("angelocovinoApp",[])
	.directive("footerEntry", function($compile){
		var customTemplate='...';
		return {
			scope: {info: "="},
			restrict: 'E',
			template: customTemplate
		};
	})
	.controller("footerCtrl", ["$scope", "$http", function footerCtrl($scope, $http){
		$scope.data = {};
		$scope.url = 'structure/footer_entries.php';
		$scope.fetchData = function() {
			$http
				.get($scope.url)
				.success(function(data, status, headers, config){
					$scope.data = data;
				})
				.error(function(data, status, headers, config){
				});
		}
		
		$scope.fetchData();
	}]);
				</pre></code>
			</p>
			<p>
				3 | Model 'footer_entries.php'.
				<code><pre>
&lt;?php
	$footer_entries = array(
		"personal" => array(
			array("html" => "curriculum vitae", "href" => "cv"),
			array("html" => "examples of coding", "href" => "codingexamples")
		),
		"pills" => array(
			array("html" => "english pills", "href" => "englishpills"),
			array("html" => "programming pills", "href" => "programmingpills")
		),
		"group1" => array(
			array("html" => "napoli, my land", "href" => "napoli")
		),
		"group2" => array(
			array("html" => "management", "href" => "login")
		)
	);
	echo json_encode($footer_entries);
?&gt;
				</pre></code>
			</p>
			<header>PHP</header>
			<p>
				1 | The page navigation's part in the home is automatically generated thanks to these lines.
				<code><pre>
/*
	PAGER FUNCTION
	@page actual page
	@pages total number of pages
*/
function writePages($page, $pages){
	if($pages > 1){
		echo "&lt;article id='pager'&gt;";
		echo "&lt;header&gt;- pages -&lt;/header&gt;&lt;br /&gt;";
		for($i=1; $i&lt;=$pages; $i++){
			echo "&lt;a";
			if($i == $page){echo " class='active'";}
			echo " href='index.php";
			if($i != 1){echo "?page=".$i."";}
			echo "'&gt;".$i."&lt;/a&gt;";
		}
		echo "&lt;/article&gt;";
	}
}

	$limitStart = 0;
	$limitAmount = 10;
	$conto = $db-&gt;getEntriesCount();
	$page = 1;
	$pages = ceil($conto / $limitAmount);
	if(isset($_GET['page']) && !empty($_GET['page'])){
		$page = intval($_GET['page']);
		$limitStart = $limitAmount*($page-1);
		if($limitStart &gt; $conto){
			$limitStart = $conto-$limitAmount;
			if($limitStart &lt; 0){$limitStart = 0;}
		}
	}
	$entries = $db->getEntries($limitStart, $limitAmount);
				</pre></code>
			</p>
			<p>
				2 | The database connection of this site is made by me using PHP classes (Object Oriented Programming).
				<code><pre>
class database {
	/* DATABASE PARAMETERS */
	private $dbHost;
	private $dbUser;
	private $dbPwd;
	private $dbConn;
	private $dbConnActive = false;
	...
	/* CONNECTION AND DISCONNECTION */
	public function connect(){
		if(!($this->isConnected())){
			$this->dbConn = @mysql_connect($this->dbHost, $this->dbUser, $this->dbPwd);
			if($this->dbConn){
				$this->dbConnActive = true;
				if(mysql_select_db($this->dbNome)){return true;}
			}
		}
		return false;
	}
	public function isConnected(){return $this->dbConnActive;}
	...
	public function getNumRows($result){return (mysql_num_rows($result));}
	public function getNumFields($result){return (mysql_num_fields($result));}
	...
	public function getEntries(){
		$this->executeQuery("SELECT * FROM {$this->tb_entries} ".$this->orderby);
		for($i=0;$i<$this->getNumRowsStored();$i++){
			$entries[$i] = $this->fetchAssocStored();
		}
		return ($entries);
	}
}
				</pre></code>
			</p>
			<header>sql</header>
			<p>
				The development of the databases is made by me thanks to my knowledge indeed I have done an exam at university called 'Databases'.<br />
				The following code has been written for the MySQL databases that I use on this site.
				<code><pre>
CREATE TABLE entries (
	id INT(5) PRIMARY KEY auto_increment, # unique identifier
	date_day INT(2), # day [1 ... 31]
	date_month INT(2), # month [1 ... 12]
	date_year INT(4), # year [e.g. 2015]
	title VARCHAR(100), # title of the post/article
	body VARCHAR(5000) # body of the post/article
);
				</pre></code>
			</p>
		</article>
	</section>
<?php @require_once("structure_bottom.php"); ?>