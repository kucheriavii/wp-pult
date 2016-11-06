<?php get_header();?>
	<section id="about" class="s-about bg-light">
		<div class="section-header">	
			<h2><?php echo get_cat_name(2); ?></h2>
			<div class="s-descr-wrap">
				<div class="s-descr"><?php echo category_description(2); ?></div>
			</div>
		</div>
		<div class="section-content">
			<div class="container">
				<div class="row">
					<?php 
						if (have_posts()) : query_posts('p=4');	
						while (have_posts()):the_post();
					?>
					<div class="col-md-4 col-md-push-4">
						<h3>Photo</h3>
						<div class="person animation-1">
							<?php if (has_post_thumbnail()) : ?>
							<a class="popup" href="<?php 
								echo wp_get_attachment_image_src( get_post_thumbnail_id(),'large' )[0];
							 ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
								<?php endif; ?>
						</div>
					</div>

					<div class="col-md-4 col-md-pull-4 animation-2">
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>
					 <?php endwhile; endif; wp_reset_query();?>
					 
					
					<div class="col-md-4 animation-3 personal-last-block">
					<?php 
						if (have_posts()) : query_posts('p=7');	
						while (have_posts()):the_post();
					?>
						<h2 class="personal-header"><?php the_title(); ?></h2>
						<?php the_content(); ?>
					<?php endwhile; endif; wp_reset_query();?>
						<div class="social-wrap">
							<ul>
							<?php 
								if (have_posts()) : query_posts('cat=3');	
								while (have_posts()):the_post();
							?>
								<li><a href=<?php echo get_post_meta($post->ID,"url-link",true); ?> target="_blank"><i class="fa <?php echo get_post_meta($post->ID,"style",true); ?>"></i></a></li>
							<?php endwhile; endif; wp_reset_query();?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="resume" class="s-resume">
		<div class="section-header">	
			<h2>Resume</h2>
			<div class="s-descr-wrap">
				<div class="s-descr">My knowleges and achivments</div>
			</div>
		</div>
		<div class="section-content">
			<div class="container">
				<div class="row">
					<div class="resume-container">
						<div class="col-md-6 col-sm-6 left">
							<h3>Work</h3>
							<div class="resume-icon">
								<i class="icon-basic-case"></i>
							</div>

							<div class="resume-item">
								<div class="year">2008-2016</div>
								<div class="resume-description">OOO Funy Ganny <strong>Programmer</strong></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim architecto, deleniti sapiente tenetur amet. Doloremque minus suscipit, consequuntur distinctio, impedit nisi, in voluptates unde iure obcaecati magni dignissimos deserunt. Molestiae.</p>
							</div>
							<div class="resume-item">
								<div class="year">2008-2016</div>
								<div class="resume-description">OOO Funy Ganny <strong>Programmer</strong></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim architecto, deleniti sapiente tenetur amet. Doloremque minus suscipit, consequuntur distinctio, impedit nisi, in voluptates unde iure obcaecati magni dignissimos deserunt. Molestiae.</p>
							</div>
							<div class="resume-item">
								<div class="year">2008-2016</div>
								<div class="resume-description">OOO Funy Ganny <strong>Programmer</strong></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim architecto, deleniti sapiente tenetur amet. Doloremque minus suscipit, consequuntur distinctio, impedit nisi, in voluptates unde iure obcaecati magni dignissimos deserunt. Molestiae.</p>
							</div>
						</div>

						<div class="col-md-6 col-sm-6 right">
							<h3>Styding</h3>
							<div class="resume-icon">
								<i class="icon-basic-book-pen"></i>
							</div>

							<div class="resume-item">
								<div class="year">2008-2016</div>
								<div class="resume-description">OOO Funy Ganny <strong>Programmer</strong></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim architecto, deleniti sapiente tenetur amet. Doloremque minus suscipit, consequuntur distinctio, impedit nisi, in voluptates unde iure obcaecati magni dignissimos deserunt. Molestiae.</p>
							</div>
							<div class="resume-item">
								<div class="year">2008-2016</div>
								<div class="resume-description">OOO Funy Ganny <strong>Programmer</strong></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim architecto, deleniti sapiente tenetur amet. Doloremque minus suscipit, consequuntur distinctio, impedit nisi, in voluptates unde iure obcaecati magni dignissimos deserunt. Molestiae.</p>
							</div>
							<div class="resume-item">
								<div class="year">2008-2016</div>
								<div class="resume-description">OOO Funy Ganny <strong>Programmer</strong></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim architecto, deleniti sapiente tenetur amet. Doloremque minus suscipit, consequuntur distinctio, impedit nisi, in voluptates unde iure obcaecati magni dignissimos deserunt. Molestiae.</p>
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="portfolio" class="s-portfolio bg-dark">
		<div class="section-header">	
			<h2>My portfolio</h2>
			<div class="s-descr-wrap">
				<div class="s-descr">My portfolio</div>
			</div>
		</div>
		<div class="section-content">
			<div class="container">
				<div class="row">
					<div class="filter_div controls">
						<ul>
							<li class="active filter" data-filter="all">All</li>
							<li class="filter" data-filter=".category-1">Sites</li>
							<li class="filter" data-filter=".category-2">Identica</li>
							<li class="filter" data-filter=".category-3">Logo</li>
						</ul> 
					</div>

					<div id="portfolio_grid">

						<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category-1 category-2 category-3" data-myorder="1">
							<img src="img/portfolio-images/1.jpg" alt="img">
							<div class="port-item-cont">
								<h3>Work header</h3>
								<p>Work description</p>
								<a href="#" class="popup-content">Look at!</a>
							</div>

							<div class="hidden">
								
								<div class="port-descr">
									
									<h3>Work header</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam voluptate iure fuga ad sequi voluptatum dicta non beatae illo, tenetur optio quae esse omnis? Sint animi recusandae, et nulla sunt.</p>
									<img src="img/portfolio-images/1.jpg" alt="img">
								</div>

							</div>

						</div>
						
						<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category-2" data-myorder="2">
							<img src="img/portfolio-images/2.jpg" alt="img">
							<div class="port-item-cont">
								<h3>Work header</h3>
								<p>Work description</p>
								<a href="#" class="popup-content">Look at!</a>
							</div>

							<div class="hidden">
								
								<div class="port-descr">
									
									<h3>Work header</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam voluptate iure fuga ad sequi voluptatum dicta non beatae illo, tenetur optio quae esse omnis? Sint animi recusandae, et nulla sunt.</p>
									<img src="img/portfolio-images/1.jpg" alt="img">
								</div>

							</div>

						</div>
						
						<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category-2" data-myorder="2">
							<img src="img/portfolio-images/3.jpg" alt="img">
							<div class="port-item-cont">
								<h3>Work header</h3>
								<p>Work description</p>
								<a href="#" class="popup-content">Look at!</a>
							</div>

							<div class="hidden">
								
								<div class="port-descr">
									
									<h3>Work header</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam voluptate iure fuga ad sequi voluptatum dicta non beatae illo, tenetur optio quae esse omnis? Sint animi recusandae, et nulla sunt.</p>
									<img src="img/portfolio-images/1.jpg" alt="img">
								</div>

							</div>

						</div>
						
						<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category-3" data-myorder="3">
							<img src="img/portfolio-images/4.jpg" alt="img">
							<div class="port-item-cont">
								<h3>Work header</h3>
								<p>Work description</p>
								<a href="#" class="popup-content">Look at!</a>
							</div>

							<div class="hidden">
								
								<div class="port-descr">
									
									<h3>Work header</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam voluptate iure fuga ad sequi voluptatum dicta non beatae illo, tenetur optio quae esse omnis? Sint animi recusandae, et nulla sunt.</p>
									<img src="img/portfolio-images/1.jpg" alt="img">
								</div>

							</div>

						</div>
						
						<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category-3" data-myorder="3">
							<img src="img/portfolio-images/5.jpg" alt="img">
							<div class="port-item-cont">
								<h3>Work header</h3>
								<p>Work description</p>
								<a href="#" class="popup-content">Look at!</a>
							</div>

							<div class="hidden">
								
								<div class="port-descr">
									
									<h3>Work header</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam voluptate iure fuga ad sequi voluptatum dicta non beatae illo, tenetur optio quae esse omnis? Sint animi recusandae, et nulla sunt.</p>
									<img src="img/portfolio-images/1.jpg" alt="img">
								</div>

							</div>

						</div>
						
						<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category-2" data-myorder="2">
							<img src="img/portfolio-images/6.jpg" alt="img">
							<div class="port-item-cont">
								<h3>Work header</h3>
								<p>Work description</p>
								<a href="#" class="popup-content">Look at!</a>
							</div>

							<div class="hidden">
								
								<div class="port-descr">
									
									<h3>Work header</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam voluptate iure fuga ad sequi voluptatum dicta non beatae illo, tenetur optio quae esse omnis? Sint animi recusandae, et nulla sunt.</p>
									<img src="img/portfolio-images/1.jpg" alt="img">
								</div>

							</div>

						</div>
						
						<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category-1" data-myorder="1">
							<img src="img/portfolio-images/2.jpg" alt="img">
							<div class="port-item-cont">
								<h3>Work header</h3>
								<p>Work description</p>
								<a href="#" class="popup-content">Look at!</a>
							</div>

							<div class="hidden">
								
								<div class="port-descr">
									
									<h3>Work header</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam voluptate iure fuga ad sequi voluptatum dicta non beatae illo, tenetur optio quae esse omnis? Sint animi recusandae, et nulla sunt.</p>
									<img src="img/portfolio-images/1.jpg" alt="img">
								</div>

							</div>

						</div>
						
						<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category-3" data-myorder="3">
							<img src="img/portfolio-images/4.jpg" alt="img">
							<div class="port-item-cont">
								<h3>Work header</h3>
								<p>Work description</p>
								<a href="#" class="popup-content">Look at!</a>
							</div>

							<div class="hidden">
								
								<div class="port-descr">
									
									<h3>Work header</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam voluptate iure fuga ad sequi voluptatum dicta non beatae illo, tenetur optio quae esse omnis? Sint animi recusandae, et nulla sunt.</p>
									<img src="img/portfolio-images/1.jpg" alt="img">
								</div>

							</div>

						</div>
						
						
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="contacts" class="s-contacts bg-light">
		<div class="section-header">	
			<h2>My contacts</h2>
			<div class="s-descr-wrap">
				<div class="s-descr">Contact me!</div>
			</div>
		</div>
		<div class="section-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						
						<div class="contact-box">
							<div class="contact_icon icon-basic-geolocalize-05"></div>
							<h3>Adress</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem reprehenderit dicta mollitia id labore veniam. Dolorem qui animi aut ex?</p>
						</div>	

						<div class="contact-box">
							<div class="contact_icon icon-basic-smartphone"></div>
							<h3>Phone</h3>
							<p>+380333333333</p>
						</div>

						<div class="contact-box">
							<div class="contact_icon icon-basic-webpage"></div>
							<h3>Site</h3>
							<p><a href="http://www.google.com" target="_blank">http://www.google.com</a></p>
						</div>

					</div>


					<div class="col-md-6 col-sm-6 col-xs-12">
						<form method="POST" action="https://formspree.io/kucheriavii@gmail.com" class="main-form" novalidate target="_blank">

							<label class="form-group">
								<span="color_element">*</span> Your name
								<input type="text" name="name" placeholder="Your name" data-validation-required-message="Enter your name" required="">
								<span class="help-block text-danger"></span>
							</label>

							<label class="form-group">
								<span="color_element">*</span> Your e-mail
								<input type="email" name="email" placeholder="Your e-mail" data-validation-required-message="Enter your e-mail" required="">
								<span class="help-block text-danger"></span>
							</label>

							<label class="form-group">
								Your website
								<textarea name="message" placeholder="Your message" data-validation-required-message="Enter your message" required></textarea>
								<span class="help-block text-danger"></span>
							</label>

							<button>Send</button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_footer(); ?>
	