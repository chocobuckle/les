<?php /*
			<!-- header -->
			<header class="header clear" role="banner">


					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
*/ ?>


<!-- CUSTOM -->


<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

    <head>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

    	<!-- Metas -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="HTML5 Template Bemax onepage themeforest" />
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta name="author" content="" />

		<!-- Title  -->
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<!-- Favicon -->
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">

				
	
		<?php wp_head(); ?>
		<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo esc_url( get_template_directory_uri() ); ?>',
			tests: {}
		});
		</script>

    </head>

	<body <?php body_class(); ?>>

    	<!-- =====================================
    	==== Start Loading -->

    	<div class="loading">
    		<div class="text-center middle">
    			<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    		</div>
    	</div>
        
    	<!-- End Loading ====
    	======================================= -->

       
    	<!-- =====================================
    	==== Start Navbar -->

		<nav class="navbar navbar-expand-lg">
			<div class="container">

            <!-- Logo -->
            <a class="logo" href="#">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="logo">          
			</a>
			

			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="icon-bar"><i class="fas fa-bars"></i></span>
			  </button>

			  <!-- navbar links -->
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				
				<?php html5blank_nav(); ?>
			    <!-- <ul class="navbar-nav ml-auto">
			      <li class="nav-item">
			        <a class="nav-link active" href="#" data-scroll-nav="0">Home</a>
			      </li>
			      <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="1">About</a>
                  </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="2">Portfolio</a>
			      </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="3">Services</a>
                  </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="4">Price</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="5">Blog</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="6">Contact</a>
			      </li>
			    </ul> -->
			  </div>
			</div>
		</nav>

    	<!-- End Navbar ====
			======================================= -->
			
			<script>
			
			$( document ).ready(function() {
				$('.navbar-nav li a').addClass('nav-link');
				$( ".navbar-nav li a:contains('Home')" ).addClass( "active");
				var lenghtMenu = $('.navbar-nav li a').length;
				for (i =0 ; i <= lenghtMenu ; i++) {
					$( ".navbar-nav li a:eq("+ i +")" ).attr("data-scroll-nav",i);
				}


				var HomePage = new Waypoint({
					element: document.getElementById('navbarSupportedContent'),
					handler: function() {
						$('.navbar-nav li a').removeClass("active");
						$( ".navbar-nav li a:contains('Home')" ).addClass( "active");
					}
				})

				var OurPeople = new Waypoint({
					element: document.getElementById('OurPeople'),
					handler: function() {
						console.log('OurPeople triggered');
					}
				})

				var ServicesAndSectors = new Waypoint({
					element: document.getElementById('ServicesAndSectors'),
					handler: function() {
						console.log('ServicesAndSectors triggered');
					}
				})

				var CurrentOpportunities = new Waypoint({
					element: document.getElementById('CurrentOpportunities'),
					handler: function() {
						console.log('CurrentOpportunities triggered');
					}
				})

				var  ContactUs = new Waypoint({
					element: document.getElementById('ContactUs'),
					handler: function() {
						console.log('ContactUs triggered');
					}
				})

			});
			
			</script>