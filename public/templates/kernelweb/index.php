<!DOCTYPE html>
<html>
<head>  
   <!-- COMPATIBILIY AND RESPONSIVE -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php InternetExplorer::metas(); ?>
   <!-- METAS DATA -->	
   <meta charset="utf-8" />
   <title>Kernel Web CMS</title>
   <meta name="generator" content="kernelweb">
   <meta name="author" content="ArrayZone.com">
   <link href="<?php echo app::$tdir; ?>css/style.css" rel="stylesheet" />
	
</head>
<body>
	<?php InternetExplorer::warning(); ?>
   <header>
	<div>
		<figure id="banner">
			<a href=""><img src="<?php echo app::$tdir; ?>images/logo.png" alt="Kernel Web" /></a>
		</figure>
		<nav><?php
			// loading right menu (trhough cache with 1 hour lifetime)
			// The cache will be saved for each controller (and each language, but this last is auto)
			KWView::templatePart('topMenu', 'templates/kernelweb/' . kw::get('c'), '_menu_top', 3600);
		?></nav>
		
		<?php /*<form class="buscador">
			<input type="text" placeholder="Escribe algo aqu&iacute;..." name="buscador" />
		</form>*/ ?>
		<div class="flags"><?php
			showChangeLanguage(kw::$config['languages'],app::$dir.'img/flags/');
		?></div>
	</div>
   </header>
   
   <section id="content">
		<div>
			<aside id="menu_left">
			<section class="enlaces">
				<h2><?php echo kw::t('Links', 'generic'); ?></h2>
				<div>
					<?php KWView::templatePart('leftMenu', 'template/kernelweb/' . kw::get('c'), '_menu_left', 3600); ?>
				</div>
			</section>
			<?php /*<section class="enlaces">
					<h2>Mi Cuenta</h2>
					<form method="post" class="table">
						<div>
								<div>Usuario</div>
								<div><input type="text" name="username" /></div>
						</div><div>
								<div>Contrase&ntilde;a</div>
								<div><input type="password" name="password" /></div>
						</div>
						<input type="submit" name="login" value="Conectar" />
					</form>
				</section>
	
				
	
				<section class="novedades">
					<h2>Novedades</h2>
					<div>
						<article>
								<h3>Noticia</h3>
								<a href="">Ver m&aacute;s</a>
						</article>
						<article>
								<h3>Noticia</h3>
								<a href="">Ver m&aacute;s</a>
						</article>
						<article>
								<h3>Noticia</h3>
								<a href="">Ver m&aacute;s</a>
						</article>
					</div>
				</section>
			*/ ?>
			</aside>
   
			<main><?php // Loading content
				$this->showContent(); 
			?></main>   
		</div>
	</section>

	<?php KWView::templatePart('footer', 'template/kernelweb/' . kw::get('c'), '_footer', 3600); ?>
</body>

</html> 