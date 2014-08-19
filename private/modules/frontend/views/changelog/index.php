<h1><?php echo kw::t('Changelog', 'changelog'); ?></h1>
<p><?php echo kw::t('Changelog.txt located in KernelWeb directory', 'changelog'); ?>:</p>

<hr />

<pre><?php
	include kw::$dir . 'changelog.txt';
?>
</pre>
