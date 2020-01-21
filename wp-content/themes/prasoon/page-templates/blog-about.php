<?php
/**
 * Template Name: Blog About Us
 *
 * Displays the Blog About Us Page
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
										OUR VINEYARDS
									</H1>
									<img src="/wp-content/uploads/2017/08/About-Us.jpg" alt="Herrera Vineyards" style="width:100%">
								</div>
								<div class="row">
									<div class="col-md-6">
											<div>
											<h3>
												Our Winemaker
											</h3>
										</div>
										<img src="/wp-content/uploads/2017/08/Herrera-Vineyards-Kevin.jpg" alt="Herrera Vineyards Kevin" style="max-width:100%">
										<p style="text-align: right;">
											<i>KEVIN CHILDER</i>
										</p>
									</div>
									<div class="col-md-6">
										<br>
										<p>
											Kevin Childers’ interest in winemaking began through his experience in the fine dining industry. He developed a vast knowledge of wines, pairings and tastings. This led him to a profession in commercial wine sales where he was introduced to instructors
											involved from the Shelton-Badgett NC Center for Viticulture and Enology in Dobson, NC. Kevin enrolled in the program and quickly developed a passion for winemaking. Kevin shares in Herrera Vineyards’ vision to craft high end quality products
											that represent the Yadkin Valley Wine region with pride.
										</p>
										<p>
											We hope that you will join us in celebrating the talents that Kevin has brought to Herrera Vineyards.
										</p>
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