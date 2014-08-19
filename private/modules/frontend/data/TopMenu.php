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
	kw::t('Documentation', 'generic')=>array(
			'href'=>array(
					'cont'=>'documentation',
					'act'=>'index'
			)
	),
	kw::t('Downloads', 'generic')=>array(
		'href'=>array(
		'cont'=>'downloads',
		'act'=>'index'
		)
	),
	kw::t('Changelog', 'generic')=>array(
		'href'=>array(
		'cont'=>'changelog',
		'act'=>'index'
		)
	),
	kw::t('Contact', 'generic')=>array(
		'href'=>array(
			'cont'=>'contact',
			'act'=>'index'
		)
	),
		
) 
?>