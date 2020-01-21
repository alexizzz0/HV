<?php
    header("Content-type: text/css; charset: UTF-8");
    require_once( ABSPATH .'/wp-load.php' );
?>


html, body {        
    font-size: <?php echo get_theme_mod( 'body_font_size' ); ?>px !important;
    font-family: <?php echo get_theme_mod( 'body_font_family' ); ?> !important;
}

h1,h2,h3,h4,h5,h6{
    font-family: <?php echo get_theme_mod( 'heading_font_family' ); ?> !important;   
}

h1{
    font-size: <?php echo get_theme_mod( 'h1_font_size' ); ?>px !important;
    font-weight:900;
}

h2{
    font-size: <?php echo get_theme_mod( 'h2_font_size' ); ?>px !important;
    font-weight:900;
}

h3{
    font-size: <?php echo get_theme_mod( 'h3_font_size' ); ?>px !important;
}

h4{
    font-size: <?php echo get_theme_mod( 'h4_font_size' ); ?>px !important;
}

h5{
    font-size: <?php echo get_theme_mod( 'h5_font_size' ); ?>px !important;
}

h6{
    font-size: <?php echo get_theme_mod( 'h6_font_size' ); ?>px !important;
}

a{
   color: <?php echo get_theme_mod( 'link_color' ); ?> !important; 
}

a:hover{
   color: <?php echo get_theme_mod( 'link_hover_color' ); ?> !important; 
}

#pre-loader{
    background: url("<?php echo esc_url(get_theme_mod( 'preloader_image' )); ?>") no-repeat !important;
}

#content-page .scroll-fix a#brand {
    background-image: url("<?php echo esc_url(get_theme_mod( 'theme_logo' )); ?>");
    background-size: contain;
    background-repeat: no-repeat;
    width:100px;
    margin-left: 7px;
    position: absolute;
    top: 22px;
}

button.trans:hover, button.trans:focus, button.trans:active{
    background: <?php echo get_theme_mod( 'trans_buttonhover_bg_color' ); ?> !important;    
    color: <?php echo get_theme_mod( 'trans_buttonhover_text_color' ); ?> !important;    
}

<?php 
    if('' != get_theme_mod( 'trans_buttonhover_bg_color' )) {
        ?> button.trans:hover, button.trans:focus, button.trans:active{ border: 1px solid <?php echo get_theme_mod( 'trans_buttonhover_bg_color' ); ?> !important;}
        <?php
    }
?>

#blog ul.post-categories li a{
	color: <?php echo get_theme_mod( 'blog_cat_text_color' ); ?> !important;		
}

#contact form input[type="submit"]{    
	background: <?php echo get_theme_mod( 'cf7_btn_bg_color' ); ?>;
    color: <?php echo get_theme_mod( 'cf7_btn_txt_color' ); ?>;
}

#contact .social-icons i{
	border: 1px solid <?php echo get_theme_mod( 'si_bg_color' ); ?> !important;
}

#contact .social-icons .s-icon a{
	color: <?php echo get_theme_mod( 'si_bg_color' ); ?> !important;
}

#contact .social-icons i:hover{
	background: <?php echo get_theme_mod( 'si_hover_bg_color' ); ?> !important;
    border: 1px solid <?php echo get_theme_mod( 'si_hover_bg_color' ); ?> !important;
	color: <?php echo get_theme_mod( 'si_hover_color' ); ?> !important;	
}

.footer{
	background: <?php echo get_theme_mod( 'footer_bg_color' ); ?>;
}


.footer p{
	color: <?php echo get_theme_mod( 'footer_txt_color' ); ?>;
}

<?php 
    if('no'===get_theme_mod( 'pr_sticky_menu' )){
        ?> .scroll-fix{ display:none !important;}           
        <?php
    }
?>

<?php 
    if(!empty(get_theme_mod( 'blog_post_title_text_color' ))) {
        ?> #blog .heading h2 a{color: <?php echo get_theme_mod( 'blog_post_title_text_color' ); ?> !important; }
        <?php
    }
?>

#portfolio .isotope #filter li a{
    color: #555 !important;
}

#portfolio .isotope #filter li.selected a, #portfolio .isotope #filter li a:hover{
    color: <?php echo get_theme_mod( 'link_hover_color' ); ?> !important;   
}

.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus{
    background: <?php echo get_theme_mod( 'link_color' ); ?> !important; 
}

.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus{
    background: <?php echo get_theme_mod( 'dd_menu_bg_hover_color' ); ?> !important; 
}

aside .widget li a:hover{
    color: <?php echo get_theme_mod( 'link_hover_color' ); ?> !important;      
}

#comments input[type="submit"]{
    background: <?php echo get_theme_mod( 'link_color' ); ?> !important; 
    border: 1px solid <?php echo get_theme_mod( 'link_color' ); ?> !important;
}

<?php 
    if(!empty(get_theme_mod( 'blog_post_title_text_color' ))) {
        ?> #blog .heading h4 a{color: <?php echo get_theme_mod( 'blog_post_title_text_color' ); ?> !important; }
        <?php
    }
?>

.carousel-control, .carousel-control:hover{
    color: #fff !important;
}