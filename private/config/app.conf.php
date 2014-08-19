<?php
class app {
	static $template = 'kernelweb';
	static $dir; // It contain the absolute HTTP URL to PUBLIC (auto generated)
	static $tdir; // it contain the absolute HTTP URL to THE CURRENT TEMPLATE (auto generated)
	static $others = array();
	
	/* CACHE
	 * You can disable this to disable all cache. DO IT ONLY FOR TEST (by default is true)
	 * IF you would an application without cache delete or rename the "cache" extension in kernel web
	 * and then do tests in all pages to disable fully
	 */
	static $cache = false; 
	
}

app::$dir = kw::$config['url_base'] . 'public/';
app::$tdir = app::$dir . 'templates/'.app::$template.'/'; 