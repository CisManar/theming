
	<?php print render($page['page_top']); ?>
<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
						<?php if ($main_menu): ?>
							<h1 id="site-name">
								<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
							</h1>
						<?php endif; ?>
			 		<span id="site-slogan"><?php print $site_slogan; ?></span>
						<!--	<a href="index.html"><h1><span>Com</span>pany</h1></a> -->
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
						<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('nav', 'nav-tabs'),'role'=>'tablist'))); ?>
						<!--
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.html" class="active">Home</a></li>
								<li role="presentation"><a href="about.html">About Us</a></li>
								<li role="presentation"><a href="services.html">Services</a></li>								
								<li role="presentation"><a href="portfolio.html">Portfolio</a></li>
								<li role="presentation"><a href="blog.html">Blog</a></li>
								<li role="presentation"><a href="contact.html">Contact</a></li>						
							</ul>
						-->
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	<section id="main-slider" class="no-margin">
	<?php print render($page['main-slider']); ?>
    </section>
	<!--/#main-slider-->
	<?php //print render($page['content']); ?>
	<?php print render($page['our-features']); ?>

	<div class="about">
		<div class="container">
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
				<?php print render($page['half-left']); ?>
			</div>
			
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
				<?php print render($page['half-right']); ?>
			</div>
		</div>
	</div>
	
	<div class="lates">
		<div class="container">
			<div class="text-center">
				<h2>Lates News</h2>
			</div>
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<?php print render($page['latest-col1']); ?>
			</div>
			
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<?php print render($page['latest-col2']); ?>
			</div>
			
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">	
				<?php print render($page['latest-col3']); ?>
			</div>
		</div>
	</div>
	
	<section id="partner">
        <div class="container">
		<?php print render($page['partners']); ?>

      
        </div><!--/.container-->
	</section><!--/#partner-->
	
	<?php print render($page['contact-info']); ?>


	
	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<?php print render($page['social-icons']); ?>

					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
					<?php print render($page['copyright']); ?>


					</div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Company
                    -->
				</div>						
			</div>
			
			<div class="pull-right">
				<a href="<?php print $front_page; ?>" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>		
		</div>
	</footer>

