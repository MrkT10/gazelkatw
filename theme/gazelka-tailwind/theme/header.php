<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gazelka_Tailwind
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page">
	<div id="page">
		<div class="top-navbar-container bg-white border-b sticky top-0 z-50">
			
			<div class="mx-left px-6 w-full">
				<div class="flex items-center justify-between h-20 gap-12">
				
					<div class="flex-shrink-0">
						<a href="<?php echo home_url('/'); ?>">
							<img src="<?php echo gazelka_theme_logo_url(); ?>" alt="<?php bloginfo('name'); ?>" width="180" height="60" class="h-14 w-auto">
						</a>
					</div>

					<nav id="site-navigation" class="main-navigation group relative flex-1 flex justify-left">
						<?php
						wp_nav_menu( array(
							'theme_location'  => 'top-navbar',
							'menu_id'         => 'top-navbar',
							'container'       => 'div',
							'container_class' => 'primary-links',
							'menu_class' => 'top-navbar-menu flex items-center gap-x-10 text-base font-medium',
							'depth'           => 1,
						) );
						?>

						<!-- Megamenu -->
						 <div class="mega-menu absolute hidden group-hover:block left-0 right-0 top-full bg-white shadow-2xl z-50">
							<div class="max-w-7xl mx-auto px-8 py-12">
								<div class="grid grid-cols-12 gap-x-12 gap-y-10">
									<div class="col-span-8 grid grid-cols-4 gap-10 text-[15px]">
										<div class="space-y-3">
											<?php wp_nav_menu(['theme_location' => 'mega_col_1', 'container' => false, 'menu_class' => 'space-y-3']); ?>
										</div>
										<div class="space-y-3">
											<?php wp_nav_menu(['theme_location' => 'mega_col_2', 'container' => false, 'menu_class' => 'space-y-3']); ?>
										</div>
										<div class="space-y-3">
											<?php wp_nav_menu(['theme_location' => 'mega_col_3', 'container' => false, 'menu_class' => 'space-y-3']); ?>
										</div>
										<div class="space-y-3">
											<?php wp_nav_menu(['theme_location' => 'mega_col_4', 'container' => false, 'menu_class' => 'space-y-3']); ?>
										</div>
									</div>
									<div class="col-span-4 pl-8 border-l border-gray-100">
										<h3 class="font-semibold text-lg mb-4 text-gray-900">Kontakt</h3>
										
										<a href="tel:..." class="block text-2xl font-semibold text-blue-600 mb-1 hover:text-blue-700 transition">
											+48 530 070 206
										</a>
										<a href="tel:..." class="block text-blue-600 hover:text-blue-700 mb-6">Zadzwoń teraz</a>
										<a href="#" 
										class="block w-full bg-blue-600 hover:bg-blue-700 text-white text-center py-4 rounded-2xl font-semibold transition mb-8">
												<span>📅 </span>
												<span>Zapisz się na kurs</span>
										</a>
										<div class="flex gap-6 text-2xl">
											<a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-300 hover:border-blue-600 rounded-full text-gray-600 hover:text-blue-600 transition-all hover:bg-blue-50">
												<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" viewBox="0 0 24 48"><path d="M19.62,7.97 L24.002,7.97 L24.002,0.338 C23.246,0.234 20.646,0 17.618,0 C11.3,0 6.972,3.974 6.972,11.278 L6.972,18 L-1.13686838e-13,18 L-1.13686838e-13,26.532 L6.972,26.532 L6.972,48 L15.52,48 L15.52,26.534 L22.21,26.534 L23.272,18.002 L15.518,18.002 L15.518,12.124 C15.52,9.658 16.184,7.97 19.62,7.97 L19.62,7.97 Z"></path></svg>
											</a>
											<a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-300 hover:border-red-600 rounded-full text-gray-600 hover:text-red-600 transition-all hover:bg-red-50">
												<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" viewBox="0 0 48 48"><path d="M22.3631244,0 L25.6463982,0 L29.3675848,0.0150185236 C30.0401831,0.0213732347 30.5907943,0.029981788 31.084648,0.0414178627 L32.3394518,0.0800348774 L33.9071725,0.149439445 C36.4576836,0.261891986 38.2019796,0.67434003 39.7301618,1.26517359 C41.3242769,1.8651646 42.7777349,2.81240303 43.9780831,4.03143228 C45.206636,5.23178047 46.1443508,6.6757148 46.7538654,8.28851103 C47.344699,9.80790196 47.757147,11.5613554 47.8695995,14.1118665 L47.9288002,15.5956161 C47.9686469,16.7795567 47.9834699,17.9203033 47.9887763,20.2539995 L47.9912694,22.3631244 L47.9872336,27.453472 C47.9800689,29.645976 47.9630986,30.8303426 47.929544,31.9071527 L47.8938385,32.8924791 C47.8811197,33.206612 47.8668663,33.5345894 47.8509185,33.8976489 C47.7384659,36.4481599 47.3256517,38.192456 46.7351843,39.7210043 C45.4879504,42.9465968 42.9374394,45.4971078 39.7114807,46.7443418 C38.192456,47.3351753 36.4390025,47.7476234 33.8884915,47.8600759 L32.3846031,47.9223784 L30.9106056,47.9640568 C29.7504318,47.9874109 28.2538556,47.9973873 25.6372336,48 L20.2420889,47.9953532 C16.9973072,47.9829046 16.0594804,47.9463216 14.102709,47.8600759 C11.5518318,47.7476234 9.80790196,47.3351753 8.27935359,46.7443418 C6.68523842,46.1443508 5.23178047,45.1971123 4.03143228,43.9780831 C2.81240303,42.7777349 1.86553078,41.3338006 1.25601615,39.7210043 C0.665182589,38.2016134 0.252368367,36.4481599 0.139915826,33.8976489 L0.0847825977,32.5821746 L0.0495274621,31.498669 C0.016427431,30.2462608 0.00309898499,28.7180778 0,25.646391 L0.00479000684,20.2560817 C0.0124469626,18.3303279 0.029068891,17.2159891 0.0607643255,16.2185013 L0.091812554,15.3747972 L0.149439445,14.1023428 C0.261891986,11.5518318 0.67434003,9.80790196 1.26517359,8.27935359 C1.86553078,6.68523842 2.81240303,5.23178047 4.03143228,4.03143228 C5.23178047,2.80287941 6.6757148,1.8651646 8.28887721,1.25564998 C9.80790196,0.665182589 11.5613554,0.252368367 14.1118665,0.139915826 L15.4273408,0.0847825977 L16.5108464,0.0495274621 C17.7632545,0.016427431 19.2914376,0.00309898499 22.3631244,0 Z M27.6649595,4.36487777 L20.6020674,4.36409954 C18.4951158,4.37127677 17.3515124,4.38802811 16.3109121,4.42085461 L15.1753328,4.46334943 C14.9097346,4.47451424 14.6314337,4.48679538 14.3276141,4.50028968 C12.0901325,4.59928082 10.8255377,4.96504214 9.98125447,5.28421119 L9.87346877,5.32555195 C8.92709612,5.6748641 8.06609133,6.21035084 7.33283558,6.90366635 L7.1167337,7.11636752 C6.3773676,7.82148502 5.80359216,8.67588052 5.41685013,9.61522582 L5.23281856,10.0936255 C4.93824723,10.897602 4.61621569,12.0665303 4.50548736,14.0401473 L4.42234559,15.9836805 C4.37304584,17.3797263 4.354875,18.8055147 4.35120816,22.410891 L4.35691768,27.9591939 C4.37031727,30.9336882 4.40721749,31.8364502 4.49113224,33.7196296 C4.59406116,36.054393 4.98782815,37.3298316 5.31602833,38.1737749 C5.70063787,39.2144186 6.3101525,40.1521334 7.10721008,40.93051 C7.81199191,41.6611461 8.66666713,42.234194 9.60577934,42.6208754 L9.86394515,42.7216917 C10.6727242,43.0362169 11.8690431,43.4109588 14.0306236,43.5322327 L14.94341,43.574222 C15.2409447,43.5871062 15.5194759,43.5986196 15.7955815,43.6088903 L17.2239293,43.6503012 C17.8656584,43.6636095 18.6122843,43.672604 19.6058557,43.6783832 L23.3375922,43.6871318 L27.9371708,43.6808598 C29.6644847,43.6731329 30.6943979,43.6575233 31.6211563,43.6294536 L32.7187172,43.5896226 C33.0276361,43.5768781 33.3510464,43.5625876 33.7101059,43.5465878 C36.0452355,43.4436589 37.320308,43.0498919 38.1642513,42.7216917 C40.2554285,41.9151105 41.9151105,40.2554285 42.7216917,38.1642513 L42.8049017,37.9440945 C43.0994753,37.140118 43.4215324,35.9711898 43.532555,33.9975728 L43.6047641,32.3453177 L43.6495505,30.8500811 C43.6747332,29.6680629 43.6849491,28.1364765 43.6871421,25.3339566 L43.6831441,20.6019219 C43.6756678,18.4071287 43.657803,17.2577634 43.6222015,16.1812504 L43.5838942,15.1753189 C43.5727294,14.9097293 43.5604483,14.6314337 43.546954,14.3276141 C43.4479628,12.0897816 43.0822015,10.8255085 42.7630325,9.98125264 L42.7216917,9.87346877 C42.3720467,8.92709612 41.8365297,8.06609133 41.1432114,7.33256046 L40.93051,7.11636752 C40.2257281,6.3857314 39.3710529,5.81268347 38.4319407,5.42628411 L38.1737749,5.32555195 C37.3649959,5.01102677 36.1686769,4.63628487 34.0070964,4.51468869 L32.8567931,4.46258992 L31.5272472,4.41434274 C30.5789023,4.38684044 29.4985404,4.37191647 27.6649595,4.36487777 L27.6649595,4.36487777 Z M24.0047577,11.673808 C30.8127137,11.673808 36.3357074,17.1968017 36.3357074,24.0047577 C36.3357074,30.8127137 30.8127137,36.3357074 24.0047577,36.3357074 C17.1971679,36.3357074 11.673808,30.8127137 11.673808,24.0047577 C11.673808,17.1968017 17.1971679,11.673808 24.0047577,11.673808 Z M24.0047577,16.0059771 C19.5883406,16.0059771 16.0059771,19.5879745 16.0059771,24.0047577 C16.0059771,28.4215409 19.5883406,32.0035382 24.0047577,32.0035382 C28.4215409,32.0035382 32.0035382,28.4215409 32.0035382,24.0047577 C32.0035382,19.5879745 28.4215409,16.0059771 24.0047577,16.0059771 Z M36.8232459,8.30755827 C38.4133318,8.30755827 39.7023233,9.59618359 39.7023233,11.1862695 C39.7023233,12.7759891 38.4133318,14.0649807 36.8232459,14.0649807 C35.2335261,14.0649807 33.9445346,12.7759891 33.9445346,11.1862695 C33.9445346,9.59618359 35.2335261,8.30755827 36.8232459,8.30755827 Z"></path></svg>
											</a>
											<a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-300 hover:border-red-600 rounded-full text-gray-600 hover:text-red-600 transition-all hover:bg-red-50">
												<svg aria-hidden="true" class="e-font-icon-svg e-fab-youtube" width="15" height="15" fill="currentColor" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
											</a>
										</div>
									</div>
								</div>

							</div>
						</div>
					</nav>

					<div class="flex items-center gap-4 flex-shrink-0">
						<a href="#" 
						class="flex items-center gap-2 px-6 py-3.5 border border-gray-300 hover:border-gray-400 rounded-2xl text-sm font-medium text-gray-700 hover:text-gray-900 transition-all">
							<span>📅 </span>
							<span>Umów jazdy doszkalające</span>
						</a>
						<a href="#" class="group flex items-center gap-3 bg-blue-500 hover:bg-blue-700 text-white px-8 py-3.5 rounded-2xl font-semibold text-sm transition-all duration-300" >
							Zapisz się na kurs
							<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 group-hover:translate-x-1 transition-transform ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
								<path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7-7 7" />
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>

	<div id="content">
