<?php /**
 * @name KernelWeb & CMS: CRON
 * @author ArrayZone
 * @package KernelWeb
 * @version 1.0
 * @copyright ArrayZone 2014
 * @license AZPL or later; see License.txt or http://arrayzone.com/license
 * @category core
 * 
 * This script will be executed some time (every 24 hours for example).
 * It will do some tasks like delete depecrated cache, etc...
 */

// Configuring server
error_reporting(E_ALL);
set_time_limit(-1);

// Load KernelWeb main core
include '../../KernelWeb/rel/main.php';

// Start loader time
ServerStatus::calcTime();

/*
 * CONFIGURATIONS 
 */
	// CACHE
	$dir_cache = kw::$app_dir . 'cache';
	$max_life_cache = 86400;
	
	
	
/*
 * HERE GOES THE CRON 
 */
	// CACHE
	// Delete depecreated cache (with more than 24 h)
	// If you wish, you can specify some directorys to not delete
	echo "Deleting cache in with more than : " . $dir_cache. "<br />\n";
	DirectoryManager::delete($dir_cache, false, true, true, $max_life_cache);



/*
 * END CRON
*/


// End test time
echo "\n\n<br /><br /><hr />";
ServerStatus::calcTime();
?>