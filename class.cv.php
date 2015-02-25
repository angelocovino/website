<?php
class curriculmVitae {
	private $cv;
	private $template;
	private $sectionLast;
	private $templateSection;
	private $templateEntry;
	
	public function __construct(){
		$this->cv = array();
		$this->template = array();
		$this->templateSection = -1;
		$this->templateEntry = -1;
		$this->sectionLast = "";
	}
	/* TEMPLATE */
	public function templateAdd($id, $str){ $this->template[$id] = $str; }
	public function templateUse($idTemplate, $values){
		if($idTemplate<0){$template="%s<br />";}
		else{$template = $this->template[$idTemplate];}
		return vsprintf($template, $values);
	}
	public function templateSetEntry($id){ $this->templateEntry=$id; }
	public function templateSetSection($id){ $this->templateSection=$id; }
	
	public function sectionAdd($str){ $this->cv[$str]=array(); $this->sectionLast=$str; }
	public function entryAdd($section, $template, $entry){ $this->cv[$section][]=array("template" => $template, "values" => $entry); }
	public function entryAddLastSection($template, $entry){ $this->entryAdd($this->sectionLast, $template, $entry); }
	public function entryAddAuto($entry){ $this->entryAddLastSection($this->templateEntry, $entry); }
	public function entryAddBlankRow(){ $this->entryAddLastSection(-1, ""); }
	public function printCV(){
		foreach($this->cv as $sectionName => $sectionValues):
			echo $this->templateUse($this->templateSection, array($sectionName));
			echo "<p>";
			foreach($sectionValues as $entryId => $entry):
				echo $this->templateUse($entry["template"], $entry["values"]);
			endforeach;
			echo "</p>";
		endforeach;
	}
}
?>