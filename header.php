<!DOCTYPE html>
<html class="html" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/imgs/favicon.png" />

    <title>Mafisa Academy</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Heebo:100%7COpen+Sans:300,400,400i,600,700,800">
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/bootsnav/css/bootsnav.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/alien-icon/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/owl.carousel2/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/switchery/switchery.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/alien.css">
    <!-- endinject -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
    <style>
        .flip-container {
	perspective: 1000px;
}
	/* flip the pane when hovered */
	.flip-container:hover .flipper, .flip-container.hover .flipper {
		transform: rotateY(180deg);
	}

.flip-container, .front, .back {
	width: 350px;
	height: auto;
	margin:5px;
}

/* flip speed goes here */
.flipper {
	transition: 0.6s;
	transform-style: preserve-3d;

	position: relative;
}

/* hide back of pane during swap */
.front, .back {
	backface-visibility: hidden;

	position: absolute;
	top: 0;
	left: 0;
}

/* front pane, placed above back */
.front {
	z-index: 2;
	/* for firefox 31 */
	transform: rotateY(0deg);
}

/* back, initially hidden pane */
.back {
	transform: rotateY(180deg);
}
    </style>
</head>
<body>

    <!--header start-->
    <header>
        <!-- Start Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-fixed bootsnav">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">
            

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url()?>"><img src="<?php echo get_template_directory_uri() ?>/assets/imgs/logo.png" class="logo logo-scrolled" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
				<?php wp_nav_menu( array('menu' => 'Top Menu', 'container' => false, 'menu_class'=> 'nav navbar-nav navbar-right','menu_id' => '')); ?>
                  
                </div><!-- /.navbar-collapse -->
            </div>

         
        </nav>
        <!-- End Navigation -->
        <div class="clearfix"></div>
		<?php wp_head()?>
    </header>
    <!--header end-->
	
    <!--slider start-->
    <div class="swiper-container js-FullHeight">
        <div class="swiper-wrapper">
		<?php $args = array(
                            'post_type' => 'sliders',
                            'posts_per_page' => -1,
                            'order' => 'DESC',
                            'orderby' => 'menu_order',
                            'tax_query' => array(
                                array(
                                'taxonomy' => 'sliders-category',
                                'field'    => 'slug',
                                'terms'    => 'active',
                                ),
                            ),
                            );
                            $sliders = new WP_Query( $args ); 
                            
							while ($sliders->have_posts()) : $sliders->the_post();
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'full');
							?>
            <section class="swiper-slide ImageBackground ImageBackground--overlay ImageBackground--overlay--gradient-" data-overlay="3" data-scheme="light" data-swiper-autoplay="200" style="height:85% !important;margin-bottom:-80px !important">
			
								<div class="ImageBackground__holder">
									<img src="<?php echo $image[0]?>" alt="<?php the_title()?>">
								</div>
								<div class="container u-vCenter">
									<div class="row ">
										<div class="col-md-12 text-center text-white" data-animate="fadeInUp">
											<h1 class="text-uppercase u-FontSize75 u-xs-FontSize40 u-MarginTop0 u-MarginBottom5 u-LetterSpacing4 u-Weight700"><?php the_title()?></h1>
											<p class="text-lg text-uppercase text-white u-MarginBottom15"><?php the_content()?></p>
											<div class="u-MarginTop50 u-MarginBottom15">
												<a href="#" class="btn btn-primary u-MarginRight10">View our work</a>
												<a href="#" class="btn btn-white btn-white--transparent">Learn about Us</a>
											</div>
										</div>
									</div>
								</div>
						
            </section>
			<?php endwhile;?>
						
        </div>
        <!-- Add Arrows -->
        <div class="swiper-control swiper-button-next"></div>
        <div class="swiper-control swiper-button-prev"></div>
    </div>
    <!--slider end-->
