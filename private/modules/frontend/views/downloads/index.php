<h1><?php echo kw::t('Downloads', 'generic'); ?></h1>
<?php 
echo '<p>' , kw::t('This section is in beta, so is unorganized.', 'downloads') , '</p>';
echo '<p>' , kw::t('You can found a small installation manual named "info.txt" in the root of zip.', 'downloads') , '</p>';
?>
<hr />

<div><b>A = Alpha</b></div>
<?php 
	$data = KWView::loadData('versions');
?>
<div>
	<table border="1" style="margin:0 auto">
		<tr>
			<th>Version</th>
			<th>Download</th>
		</tr>
		<?php foreach ($data as $ver=>$links) {
			echo '<tr><td>'.$ver.'</td>' ,
				'<td>';
				if (!empty($links)) {
					$t = 0;
					foreach ($links as $name=>$url) {
						// Links separator
						if ($t==0) ++$t;
						else echo ' | ';
						
						// Show url
						if ($url == '') $url = app::$dir . 'downloads/versions/' . $ver .'.zip'; 
						echo '<a href="'.$url .'" target="_blank">'.$name.'</a>';
						
					}
					// NOTHING:
				} else echo '-';
			
			echo '</td></tr>';
		} ?>
	</table>
</div>