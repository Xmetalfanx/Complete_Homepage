<?php
	if (!class_exists('ThemesMethods')){
		class ThemesMethods {
			public function navigation($items_array,$class){
				$nav =' <ul class="'.$class.'">';
				
				foreach ( $items_array as $item) {
					$nav.='<li><a href="'.$item['url'].'">'.$item['text'].'</a></li>';
					}
					
				#nav.='</ul>';
				
				return $nav;
			}
		}
	}

$dtm = new ThemesMethods;
?>