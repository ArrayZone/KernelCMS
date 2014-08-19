<?php
// loading menu data
$data = KWView::loadData('TopMenu');
$controller = kw::get('c'); // We will do a cache for each controller in this template
	// This is because we select here the selected menu (in the future it will be doit with javascript)

foreach ($data as $name=>$vals) {
	// Checking if this menu is selected
	// as you can see, this is loaded here and not in other controller.
	// One avantatge of this is the easily modification, remember, this will be load in cache in the future
	$addClass = (isset($vals['href']['cont']) and $vals['href']['cont'] == $controller) ? ' active' : '';
	
				// Name to show, data menu, classes 
	echo KWView::loadUrl($name, $vals, 'list-group-item' . $addClass);
}
