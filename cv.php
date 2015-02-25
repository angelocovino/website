<?php $pagina="cv"; @require_once("structure_top.php");

	@require_once("class.cv2.php");
	$cv = new curriculmVitae();
	$cv->templateAdd(0, "<header>%s</header>");
	$cv->templateAdd(1, "<span class='cv_skill'>%s</span>%s<br />");
	$cv->templateSetSection(0);
	$cv->templateSetEntry(1);
	
	$cv->sectionAdd("personal information");
	$cv->entryAddAuto(array("Nationality", "Italian"));
	$cv->entryAddAuto(array("Date of Birth", "6 July 1990"));
	$cv->entryAddAuto(array("Place of Birth", "Naples, Italy"));
	
	$cv->sectionAdd("languages");
	$cv->entryAddAuto(array("Italian", "Mother tongue"));
	$cv->entryAddAuto(array("English", "Intermediate"));
	
	$cv->sectionAdd("education");
	$cv->entryAddAuto(array("ESOL, English Course - Level Intermediate", "January 2015 - April 2015"));
	$cv->entryAddLastSection(-1, array("Westminster Kingsway College, London, UK"));
	$cv->entryAddBlankRow();
	$cv->entryAddAuto(array("Master Degree - Computer Science", "2009 - to date"));
	$cv->entryAddLastSection(-1, array("University of Naples 'Federico II', Naples, Italy"));
	$cv->entryAddBlankRow();
	$cv->entryAddAuto(array("High School Degree - Quantity Surveyor", "2003 - 2009"));
	$cv->entryAddLastSection(-1, array("Technical Institute 'Giovanni Porzio', Naples, Italy"));
	
	$cv->sectionAdd("technical skills");
	$cv->entryAddAuto(array("OS", "Microsoft Windows, Linux Kernel (Ubuntu)"));
	$cv->entryAddAuto(array("Office", "Word, Excel, PowerPoint, Access, Outlook, One Note, Publisher"));
	$cv->entryAddBlankRow();
	$cv->entryAddAuto(array("Programming", "C, C++, C#, Java, Batch, Bash"));
	$cv->entryAddAuto(array("Framework", "XNA Game Studio C#")); //, Unreal Engine UDK
	$cv->entryAddAuto(array("IDE", "Visual Studio, CodeBlock, NetBeans"));
	$cv->entryAddAuto(array("Data Structure", "List, Tree, BinaryTree, BinarySearchTree (AVL, Red&amp;Black), Graph (Adjacency list/matrix)"));
	$cv->entryAddBlankRow();
	$cv->entryAddAuto(array("Web", "HTML5 (<a target='_blank' href='http://www.w3.org/TR/xhtml1/'>XHTML standard</a>), XML, <a target='_blank' href='http://ogp.me'>OGP</a>, CSS3, ASP.NET C#, PHP, JavaScript, JQuery<!--, AJAX-->, JSON, <a target='_blank' href='http://www.w3.org/TR/WCAG20/'>WCAG</a> knowledge, SEO knowledge"));
	$cv->entryAddAuto(array("Framework Web", "AngularJS (MVC, MVW, MVVM)"));
	$cv->entryAddAuto(array("RDBMS", "MySQL, MySQL Workbench, Microsoft SQL Server, Oracle Database"));
	$cv->entryAddAuto(array("Server", "Apache, IIS"));
	$cv->entryAddAuto(array("Browser", "Mozilla Firefox, Internet Explorer, Google Chrome, Google Chromium, Netscape Navigator, Opera"));
	$cv->entryAddBlankRow();
	$cv->entryAddAuto(array("General", "RegExp"));
	$cv->entryAddAuto(array("Version Control System", "Git"));
	$cv->entryAddAuto(array("UML Diagram", "Star UML"));
	$cv->entryAddAuto(array("Graphic", "Photoshop CS6 and previous"));
	$cv->entryAddAuto(array("Electronic", "PSpice analog circuit and digital logic simulation"));
	//$cv->entryAddAuto(array(3, "ECMAScript", "JavaScript, JScript, JQuery"));
	
	$cv->sectionAdd("other skills");
	$cv->entryAddAuto(array("Electronic &amp; Programming", "Arduino"));
	$cv->entryAddAuto(array("Electrician", "General knowledge"));
	$cv->entryAddAuto(array("Quantity Surveyor", "Autocad, Archicad"));
	$cv->entryAddAuto(array("Computer assembly", "Hardware components"));
	$cv->entryAddAuto(array("HI-FI", "Home, Car"));
	
	$cv->sectionAdd("experience");
	$cv->entryAddAuto(array("Portfolio", "<a href='portfolio'>Click here</a><br />"));
	$cv->entryAddAuto(array("Repetitions in C Programming", "February 2014 - April 2014"));
	$cv->entryAddLastSection(-1, array("Computer Science University Students"));
	$cv->entryAddBlankRow();
	$cv->entryAddLastSection(-1, array("A lot experience in development with HTML, PHP, JQuery, CSS and MySQL"));
	
	$cv->sectionAdd("objectives, qualities &amp; hobbies");
	$cv->entryAddLastSection(-1, array("Self-motivated, I have got a genuine passion in development."));
	$cv->entryAddLastSection(-1, array("I would like to gain further experience within a challenging and stimulating environment."));
	$cv->entryAddBlankRow();
	$cv->entryAddLastSection(-1, array("Polite, confident, analytical, adaptable, quick learner."));
	$cv->entryAddLastSection(-1, array("In my free time I enjoy learning new programming languages."));
	
	//$cv->sectionAdd("availability");
	//$cv->entryAddLastSection(-1, array("Available immediately."));
?>
	<section id="body" class="page_<?php echo $pagina; ?>"> 
		<article>
			<?php $cv->printCV(); ?>
		</article>
	</section>
<?php @require_once("structure_bottom.php"); ?>