<?php
/* CONTENT OF EACH ARRAY
 * 'TextMenu'=>array(
 * 		mod = module,
 *		cont = controller,
 * 		act = action,
 * 		target = type of target in href,
 * 		href = direct HREF (this is ignored if are "cont" or "act"
 * )
 * 
 * EMPTY show index
 */
return array(
	kw::t('Home', 'generic')=> array(
		'href'=>array(
			'cont'=>'index',
			'act'=>'index'
		)
	),
	kw::t('Contact', 'generic')=>array(
		'href'=>array(
			'cont'=>'contact',
			'act'=>'index'
		)
	),
	'ArrayZone.com'=>array(
		'target'=>'_blank',
		'href'=>'http://arrayzone.com'
	),
	'KernelWeb Webpage'=>array(
		'target'=>'_blank',
		'href'=>'http://kernel.arrayzone.com'
	),
		
) 
?>