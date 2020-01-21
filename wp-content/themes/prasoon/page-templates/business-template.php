<?php
/**
 * Template Name: Business Template
 *
 * Displays the Business Template of the theme.
 * @package Prasoon
 */

get_header();
?>
<section id="services-1" style="background:#ffffff;">
	<div class="section-inner">
		<div class="container">
			<div class="services-section">
				<div class="row">
					<div class="title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
						<div class="col-md-12">
							<h3>HERRERA VINEYARDS WINES</h3>
							<p class="hv-red-text">LOVE | LIFE | FAMILY | FRIENDS</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="content">
						<div class="col-md-3 col-sm-6">
							<div class="services-style2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
								<div>
									<img src="/wp-content/uploads/2017/09/Chalk-Boards-Dry.png" alt="HERRERA VINEYARDS DRY" width="100%" height="auto">
								</div>
								<div class="heading">
									<h4>Dry</h4>
								</div>
								<div class="descr">
									<p>Earthy Hearty Full to Medium Body with fruity notes that pair perfectly with a great steak dinner.</p>
								</div>

								<div class="read-more">
									<a href="/wine/dry/"><button style="border:0;" type="button" class="btn btn-default black">Learn More</button></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="services-style2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
								<div>
									<img src="/wp-content/uploads/2017/09/Chalk-Boards-Semi-Dry.png" alt="HERRERA VINEYARDS DRY" width="100%" height="auto">
								</div>
								<div class="heading">
									<h4>Semi-Dry</h4>
								</div>
								<div class="descr">
									<p>Light Fruity and slightly sweet makes a perfect after dinner wine or a gat pair for a seafood meal.</p>
								</div>

								<div class="read-more">
									<a href="/wine/semi-dry/"><button style="border:0;" type="button" class="btn btn-default black">Learn More</button></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="services-style2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
								<div>
									<img src="/wp-content/uploads/2017/09/Chalk-Boards-Semi-Sweet.png" alt="HERRERA VINEYARDS DRY" width="100%" height="auto">
								</div>
								<div class="heading">
									<h4>Semi-Sweet</h4>
								</div>
								<div class="descr">
									<p>A variety of flavors ranging from fruity to spicy; we have a great selection of semi-sweet wines for an after dinner drink.</p>
								</div>

								<div class="read-more">
									<a href="/wine/semi-sweet/"><button style="border:0;" type="button" class="btn btn-default black">Learn More</button></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="services-style2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
								<div>
									<img src="/wp-content/uploads/2017/09/Chalk-Boards-Sweet.png" alt="HERRERA VINEYARDS DRY" width="100%" height="auto">
								</div>
								<div class="heading">
									<h4>Sweet</h4>
								</div>
								<div class="descr">
									<p>Our time to shine is with our sweet wines. We have some of the most delicious sweet wines influenced from all over the globe.</p>
								</div>

								<div class="read-more">
									<a href="/wine/sweet/"><button style="border:0;" type="button" class="btn btn-default black">Learn More</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
if ( is_active_sidebar( 'business-sidebar' ) ) {
	dynamic_sidebar( 'business-sidebar' );
}

get_footer();

?>
