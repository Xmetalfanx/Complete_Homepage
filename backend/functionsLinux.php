<?php 
	include("class-theme-method.php");
	
	function do_main_nav() {
	global $dtm;
	
	$class = "main_nav";
	
	$item_array = array {
						array('text' => 'Software','url' => 'softwareIndex.php');
						array('text' => 'PC Maintenance','url' => 'softwareIndex.php');
						array('text' => 'PC FAQs','url' => 'softwareIndex.php');
						array('text' => 'Optimizations/Tweaks','url' => 'softwareIndex.php');
						array('text' => 'Security','url' => 'softwareIndex.php');
						array('text' => 'PDF Guides','url' => 'softwareIndex.php');
						}
	return $dtm->navigation($items_array,$class);
	}
	
	function do_html_title($page_title){
		$title = "Xmetal's Linux Section - " $page_title;
		return title;
	}    
?>	
					
						
					
