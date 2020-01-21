<?php
/**
 * Template Name: Blog Events
 *
 * Displays the Blog Events Page
 * @package Prasoon
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="content-inner">
				<div id="blog-section">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="row">
									<div>
										<h2>
											NEWS & EVENTS
										</h2>
										<img src="/wp-content/uploads/2017/09/herrera-vineyards-calendar.jpg" alt="Herrera Vineyards" style="width:100%">
									</div>
									<?php 
										$id=162; 
										$post = get_post($id); 
										$content = apply_filters('the_content', $post->post_content); 
										echo $content;  
									?>		
								</div>
							</div>
							<div class="col-md-4">
								<?php get_sidebar('main-sidebar'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main>
	</div>


	<?php

get_footer();