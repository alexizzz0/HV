<?php
/**
 * Template Name: Blog Cabin
 *
 * Displays the Blog Cabin Page
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
										HERRERA VINEYARDS CABIN
									</H1>
									<div class="AS-center">
										<button class="AS-button" onclick="plusDivs(-1)">❮ Prev</button>
  										<button class="AS-button demo" onclick="currentDiv(1)">1</button> 
  										<button class="AS-button demo" onclick="currentDiv(2)">2</button> 
  										<button class="AS-button demo" onclick="currentDiv(3)">3</button>
										<button class="AS-button demo" onclick="currentDiv(4)">4</button>
										<button class="AS-button demo" onclick="currentDiv(5)">5</button>
										<button class="AS-button demo" onclick="currentDiv(6)">6</button>
										<button class="AS-button demo" onclick="currentDiv(7)">7</button>
										<button class="AS-button" onclick="plusDivs(1)">Next ❯</button>
									</div>
									<div class="AS-content AS-section" style="max-width:780px">
  										<img class="ASSlides AS-animate-fading" src="/wp-content/uploads/2017/09/ExteriorRear-1024x682.jpg" style="width:100%">
  										<img class="ASSlides AS-animate-fading" src="/wp-content/uploads/2017/09/ExteriorAngle1-1024x682.jpg" style="width:100%">
  										<img class="ASSlides AS-animate-fading" src="/wp-content/uploads/2017/09/Exterior-1024x682.jpg" style="width:100%">
										<img class="ASSlides AS-animate-fading" src="/wp-content/uploads/2017/09/UpstairsBedroom-1024x682.jpg" style="width:100%">
										<img class="ASSlides AS-animate-fading" src="/wp-content/uploads/2017/09/MasterBedroom-1024x682.jpg" style="width:100%">
										<img class="ASSlides AS-animate-fading" src="/wp-content/uploads/2017/09/LivingRoomOverhead-1024x682.jpg" style="width:100%">
										<img class="ASSlides AS-animate-fading" src="/wp-content/uploads/2017/09/LivingRoom1-1024x682.jpg" style="width:100%">
									</div>
									
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("ASSlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" AS-red", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " AS-red";
}
</script>


								</div>
								<div class="row AS-section">
									<div class="col-md-12 AS-center">
										<p>
											To inquire about booking, Please Call <a href="tel:1-336-374-6337">336-374-6337</a> or Email us at <a href="mailto:hv@herreravineyards.com?Subject=Cabin%20Rental" target="_top">hv@herreravineyards.com</a>.
										</p>
										<p>
											Rate per night $195.00 (Rates are subject to change)
										</p>
									</div>
								</div>
								<div class="row AS-section">
									<div class="col-md-2">
										2 BEDROOMS
									</div>
									<div class="col-md-10">
										<div>
											1 QUEEN BED FULLY FURNISHED ( DIRECT TV & APPLE TV)
										</div>
										<div>
											1 TWIN BED WITH PULL OUT TRUNDLE (DIRECT TV & SMART TV)
										</div>
									</div>
								</div>
								<div class="row AS-section">
									<div class="col-md-2">
										2 BATHROOMS
									</div>
									<div class="col-md-10">
										<div>
											BOTH BATHROOMS COME WITH FULL SIZE TUB AND SHOWER, 
										</div>
										<div>
											STAINLESS FIXTURES & GRANITE COUNTERTOPS
										</div>
									</div>
								</div>
								<div class="row AS-section">
									<div class="col-md-2">
										KITCHEN
									</div>
									<div class="col-md-10">
										<div>
											ALL STAINLESS STEEL APPLIANCES, GRANITE COUNTERTOPS 
										</div>
										<div>
											FULLY FURNISHED WITH DISHES, SILVERWARE, BLENDER,
										</div>
										<div>
											COFFEE POT AND POTS AND PANS.
										</div>
									</div>
								</div>
								<div class="row AS-section">
									<div class="col-md-2">
										<div>
											LIVING ROOM DINING ROOM COMBINATION
										</div>
									</div>
									<div class="col-md-10">
										<div>
											TV WITH DIRECT TV AND SMART TV, RECLINING SOFA,
										</div>
										<div>
											2 OVER-SIZED CHAIRS, COFFEE TABLE, END TABLE,
										</div>
										<div>
											5 PIECE DINETTE SET, ELECTRIC FIRE LOGS
										</div>
										<div>
											2 EXTRA AIR MATTRESSES
										</div>
										<div>
											BOARD GAMES AVAILABLE
										</div>
									</div>
								</div>
								<div class="row AS-section">
									<div class="col-md-2">
										OUTDOORS
									</div>
									<div class="col-md-10">
										<div>
											FULL LENGTH BACK PORCH
										</div>
										<div>
											4-6 PERSON HOT TUB AND PATIO FURNITURE
										</div>
									</div>
								</div>
								<div class="row AS-section">
									<div class="col-md-2">
										PETS
									</div>
									<div class="col-md-10">
										<div>
											FULL LENGTH BACK PORCH
										</div>
										<div>
											DOG FRIENDLY. THERE IS A $50.00 PER PET FEE
										</div>
										<div>
											ADDITIONAL CHARGES WILL BE INCURRED IF THERE ARE CLEANLINESS OR OTHER PET RELATED ISSUES AFTER CHECKOUT.
										</div>
									</div>
								</div>
								<div class="row AS-section">
									<div class="col-md-2">
										FISHING & WILDLIFE
									</div>
									<div class="col-md-10">
										<div>
											*WE HAVE A POND AVAILABLE FOR FISHING.
										</div>
										<div>
											WE DO ASK IF ANY FISH ARE CAUGHT,
										</div>
										<div>
											PLEASE RESPECT OUR CATCH AND RELEASE POLICY.
										</div>
										<div>
											*ROAMING WILDLIFE
										</div>
									</div>
								</div>
								<div class="row AS-section">
									<div class="col-md-2">
										SECURITY
									</div>
									<div class="col-md-10">
										<div>
											*AFTER HOUR SECURITY GATED GROUNDS
										</div>
										<div>
											FOR YOUR SAFETY & SECURITY.
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