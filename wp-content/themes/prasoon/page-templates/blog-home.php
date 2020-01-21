<?php
/**
 * Template Name: Blog Home
 *
 * Displays the Blog Home Page
 * @package Prasoon
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
			if(!is_front_page()){
				?>
					<div class="page-title">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<h1 class="entry-title"><?php single_post_title(); ?></h1>
									<div class="bread-crumb">
										<div id="crumbs"><a href="<?php echo home_url(); ?>"><?php _e('Home','prasoon') ?></a> &raquo; <span class="current"><?php _e('Blog','prasoon') ?></span></div>
									</div>
								</div>
							</div>
						</div>	
					</div>			
				<?php
			}

		?>
		<a name="linktotop"></a>
		<div class="content-inner">
			<div id="blog-section">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-8">
							<div class="row wow fadeInUp">
								<img src="/wp-content/uploads/2017/08/tasting-room-vintage.jpg" alt="Herrera Vineyards" style="max-width:100%">
								<h1>
									<a name="headline1">WELCOME</a>
								</h1>
								<p>
									Herrera Vineyards is family owned and operated, nestled quietly in the small town of Dobson, NC in the foothills of the Blue Ridge Mountains. With more than 140 acres of property, our estate offers a little of everything. Sprawling vineyards, rolling rivers, immaculate tasting room and a pristine landscaped façade provide the ultimate relaxation experience. Herrera Vineyards prides itself on the tradition of cultivating, harvesting and producing premium wines from fruit grown exclusively on Herrera properties. With a wide variety of dry, semi sweets and sweets, we provide award winners that cater to every wine connoisseur’s preferences. Influenced by culture and heritage, Herrera Vineyards introduced the first bottled Red Sangria from the Yadkin Valley in 2012 with much acclaim. 2013 will bring forward new selections from this specialty line as we continue to develop our signature Sangria in both red and white varieties. It is our pleasure to invite you to join us for tastings, tours and tradition. We await your arrival at our home away from home.
								</p>
								<q>Binevenidos a nuestra familia</q>
							</div>
							<div class="row AS-section wow fadeInUp">
								<div class="col-md-4">
									<a href="/wines/">
										<img src="/wp-content/uploads/2017/09/Chalk-Boards-welcome.png" alt="Herrera Vineyards" style="max-width:100%">
									</a>
									<p>
										At Herrera Vineyards we want to make sure your experience here is a memorerable one. We have a unique perspective on wineries in this are. The Yadkin Valley Vineyards are all gorgeous in their own way. At Herrera Vineyards we want to stand out to make your experience unique.
									</p>
								</div>
								<div class="col-md-4">
									<a href="/wp-content/uploads/2017/09/2017-Herrera-Menu-2.pdf" target="_blank">
										<img src="/wp-content/uploads/2017/09/Chalk-Boards-Menu.png" alt="Herrera Vineyards" style="max-width:100%">
									</a>
									<p>
										We have a great variety of American and Mexican inspired dishes that are sure to leave you wanting to sample a little bit of eveything.
									</p>
									<p>
										Our menu has some staple dishes that are sure to please everyone. For our more adventurous types we have a seasonal menu within our regular menu.
									</p>
								</div>
								<div class="col-md-4">
									<a href="/contact-us/">
										<img src="/wp-content/uploads/2017/09/Chalk-Boards-services.png" alt="Herrera Vineyards" style="max-width:100%">
									</a>
									<p>
										When it comes to fun we aim to please. This is our time to shine. Better yet this is our time to make you shine. Reserve a time for your special occation or event by giving us a call. We will make sure to make your time a memorale one not just for you but for everyone in your party for years to come.
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
