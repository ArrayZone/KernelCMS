<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			// loading tags head cached
			// If you wish no cache some metas you can move from head.php to here
			// and you can create one header for each subpage
			KWView::templatePart('head', 'template_offcanvas', 'head', 3600);
		?>
	</head>

	<body>
		<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<?php /*<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>*/ ?>
					<a class="navbar-brand" href="#">Kernel Web</a>
				</div>
				<?php /*<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>*/ ?><!-- /.nav-collapse -->
			</div><!-- /.container -->
		</div><!-- /.navbar -->

		<div class="container">

			<div class="row row-offcanvas row-offcanvas-right">

				<div class="col-xs-12 col-sm-9">
					<?php $this->showContent(); ?>
				</div><!--/span-->

				<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
					<div class="list-group">
						<?php
							// loading right menu (trhough cache with 1 hour lifetime)
							// The cache will be saved for each controller (and each language, but this last is auto)
							KWView::templatePart('rightMenu', 'template_offcanvas_' . kw::get('c'), 'menu_right', 3600);
						?>
					</div>
				</div><!--/span-->
			</div><!--/row-->

			<hr>

			<footer>
				<p>&copy; Company 2014</p>
			</footer>

		</div><!--/.container-->



		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="<?php echo app::$tdir; ?>js/jquery.min.js"></script>
		<script src="<?php echo app::$tdir; ?>js/bootstrap.min.js"></script>
		<script src="<?php echo app::$tdir; ?>offcanvas.js"></script>
	</body>
</html>
