<?php
/**
 * Template Name: Blog Contact Us
 *
 * Displays the Blog Contact Us Page
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
									<H1>
										CONTACT US
									</H1>
									<img src="/wp-content/uploads/2017/08/tasting-room-vintage.jpg" alt="Herrera Vineyards" style="width:100%; margin-bottom: 15px;">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3211.2978673875996!2d-80.70284368379139!3d36.40198798003254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88522f6ac546d967%3A0x7ef97f4e3f5509c8!2sHerrera+Vineyards!5e0!3m2!1sen!2sus!4v1504646509837" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<?php
												$id=143;
												$post = get_post($id);
												$content = apply_filters('the_content', $post->post_content);
												echo $content;
											?>
										</div>
									</div>
									<div class="col-md-6">
										<div class="content">
											<div>
												<h4>
													Contact Information
												</h4>
												<p>
													<strong>Address: 231 Vineyard Ln. Dobson, NC 27017</strong>
												</p>
												<p>
													<strong>Phone: <a href="tel:1-336-374-6337">(336) 374-6337</a></strong>
												</p>
												<p>
													<strong>Email: <a href="mailto:hv@herreravineyards.com?Subject=Contact%20Me" target="_top">hv@herreravineyards.com</a></strong>
												</p>
											</div>
											<div>
												<h4>
													Tasting Room & Restaurant Hours
												</h4>
												<div>
													<table style="width:100%">
														<tr>
															<th>Day</th>
															<th>Open</th>
															<th>Close</th>
														</tr>
														<tr>
															<td>Monday</td>
															<td>Closed</td>
															<td></td>
														</tr>
														<tr>
															<td>Tuesday</td>
															<td>Closed</td>
															<td></td>
														</tr>
														<tr>
															<td>Wednesday</td>
															<td>Closed</td>
															<td></td>
														</tr>
														<tr>
															<td>Thursday</td>
															<td>11:00am</td>
															<td>8:00pm</td>
														</tr>
														<tr>
															<td>Friday</td>
															<td>11:00am</td>
															<td>9:00pm</td>
														</tr>
														<tr>
															<td>Saturday</td>
															<td>11:00am</td>
															<td>9:00pm</td>
														</tr>
														<tr>
															<td>Sunday</td>
															<td>11:00am</td>
															<td>3:00pm</td>
														</tr>
													</table>
													<p>
														*Sunday Brunch Available
													</p>
												</div>
												<div>
													<h4>
														Services
													</h4>
													<p>
														Weddings | Parties | Corporate | Social | Tastings | Tours
													</p>
												</div>
											</div>
										</div>
									</div>
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
