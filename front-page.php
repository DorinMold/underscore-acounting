<?php
/*
 * FRONT PAGE
 * 
 */

get_header();
?>

		<div id="primary" class="content-area">
			<main id="main" class="site-main">

				<?php
				if ( have_posts() ) :
					?>

					<div id="div-main-header">
						<header>
						<!--	<h1 class="page-title screen-reader-text"><?php //single_post_title();?></h1> -->
							<h1 class="page-title screen-reader-text">With me acounting can be a piece of cake</h1>
						</header>
					</div>
									
					<?php

					/* Start the Loop */
				while ( have_posts() ) :
						the_post();
						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;

					?>

			</main><!-- #main -->
		</div><!-- #primary -->

		
		<section id="section-words">
			<div class="container">
				<div class="row">
						<div class="col-md-6 rules-results">
							<div class="sign"> </div>
								<h2> Rules </h2>
								<br/>
								<p>I play by the rules when following and understanding the current Australian regulations. This also means that I can help you find the best tax and accounting solutions to the present economic climate.</p>
								<p>It is important to know the rules of the game and to play fair, staying all the time on the safe side. This means you can focus on your business not spending precious time dealing with government authorities on matters like taxes, work regulations and superannuation.</p>
						</div>
						<div class="col-md-6 rules-results">
							<div class="sign"> </div>
							<h2> Results </h2>
							<br/>
							<p>The completion of an accounting period is not a result. The true effect is in achieving excellence in your day-to-day financial activities that will create savings in time, managerial efforts and of course, money.</p>
							<p> Getting good results is what matters most. It brings satisfaction for my clients and for me as well. It is always my best business card.  
						</div>
					</div>
			</div>	
		</section>
		<!-- <div id="intermediateone"> </div>	
		<section class="py-2 profess-services">
				<h1> I provide the Accounting services you need </h1>
		</section> -->
				
		<div class="container-fluid main-thumbnails text-center">
		<h2>My bundle of services</h2>
		<p class="lead">particular to every client</p>
		<p class="lead">&nbsp;</p>
		<div class="row text-center">
			
			<div class="col-sm-12 col-md-4 ">
				<div class="">
					<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x" style="color: rgba(76, 174, 80, 0.7)"></i> <i class="fa fa-address-book fa-stack-1x fa-inverse"></i>
						</span>
					<div class="caption">
						<h3>Start-ups</h3>
						<p>Booze pokies damper aussie rules footy throw-down holden gyno. We're going cleanskin bazza bushranger smokes sunnies</p>

					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="">
					<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x" style="color: rgba(221, 60, 67, 0.7)"></i> <i class="fa fa-calculator fa-stack-1x fa-inverse"></i>
						</span>
					<div class="caption">
						<h3>Accounting</h3>
						<p>When it's about sticking to accounting principles and regulations, you can leave it with me as I know what I'm doing</p>

					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="">
					<span class="fa-stack fa-4x"> <i class="fa fa-circle fa-stack-2x" style="color: rgba(41, 128, 185, 0.7)"></i> 
						<i class="fa fa fa-repeat fa-stack-1x fa-inverse"></i>
						</span>
					<div class="caption">
						<h3>Payroll</h3>
						<p>In case you need me to process your payroll, weekly, fortnightly or monthly</p> I can confidently do it in a timely and correct manner

					</div>
				</div>
			</div>
		</div>
	</div>

		<section id="sect-cater">
				<h2>I gladly cater for:</h2>
				<br/>
				<ul id="trades-list">
					<li><i class="fa fa-stethoscope"></i>&nbsp; <span> Medical practioners </span></li>
					<li><i class="fa fa-wrench"></i> &nbsp; <span>Trades people</span></li>
					<li><i class="fa fa-money"></i> &nbsp; <span> Investors (shares, properties) </span></li>
				</ul>
		</section>
		<section id="sect-cards"> 
			<div id="subsection-cards">
				<div class="row">
					<!-- <div class="div-cards offset-xs-2 col-xs-10 offset-sm-2 col-sm-8  offset-md-1 col-md-4"> -->
					<div class="div-cards offset-xs-2 col-xs-10  offset-sm-2 col-sm-8  offset-md-0 col-md-3">
						<div class="face-card"> 
							<div class="accounting-icon"> <img src="<?php echo get_template_directory_uri() ?>/assets/plane.png"> </div>
							<!--  sau in loc de get_template_directory_uri mai sus bloginfo('template_directory'); -->
							<h5> Business incorporation:</h5> 
							<br/>
							<p> * advice on type of business structure</p>
							<p> * preparation of all necessary paperwork (constitution, trust deed or partnership contract)</p>
							<p> * submission of legal forms to ABR and ATO concerning your ABN and GST registrations</p>
							<p> * registration for BAS purposes: PAYG withheld, fuel rebate, income tax </p>
						</div>
						<div class="shadow-card">
							<p class="text-justify"> Starting a business can be quite challanging but it doesn't have to be stressful. If you are ready to go, starting your business in Australia doesn’t have to be a long and arduous task.</p>
							<h5>Our Promise:</h5>  
							<br/>
							<p> * keep things simple and straightforward</p>
							<p> * keep you informed</p>
							<p> * be there for you</p>
							<p> * keep everything under control</p>
							<br/>
							<button class="btn btn-warning"> See More -> </button>
						</div>	
					</div>
					<!-- <div class="div-cards offset-xs-1 col-xs-10 offset-sm-2 col-sm-8 col-md-4"> -->
					<div class="div-cards offset-xs-1 col-xs-10 offset-sm-2 col-sm-8 offset-md-0 col-md-3">	 
						<div class="face-card"> 
							<div class="accounting-icon"> <img src="<?php echo get_template_directory_uri() ?>/assets/inventory.png"> </div>
							<!--  sau in loc de get_template_directory_uri mai sus bloginfo('template_directory'); -->
							<h5> Bookkeeping, accounting and taxation records</h5> 
							<br/>
							<p> * we can provide reliable and correct coding of your business transactions (payments, purchases and sales)</p>
							<p> * we can tailor your accounting software to suit your needs</p>
							<p> * we can review your transactions periodically to give you extra peace of mind</p>
						</div>
						<div class="shadow-card">
							<p class="text-justify"> Depending on your accounting acumen and confidence, we can provide full or partial bookkeeping and accounting services</p>
							<h5>Our Promise</h5>  
							<br/>
							<p> * keep things simple and straightforward</p>
							<p> * keep you informed</p>
							<p> * keep everything under control</p>
							<p> * keep everything under control</p>
							<br/>
							<br/>
							<button class="btn btn-warning"> See More -> </button>
						</div>
					</div>

					<div class="div-cards offset-xs-2 col-xs-10  offset-sm-2 col-sm-8  offset-md-0 col-md-3">
						<div class="face-card"> 
							<div class="accounting-icon"> <img src="<?php echo get_template_directory_uri() ?>/assets/plane.png"> </div>
							<!--  sau in loc de get_template_directory_uri mai sus bloginfo('template_directory'); -->
							<h5> Business incorporation:</h5> 
							<br/>
							<p> * advice on type of business structure</p>
							<p> * preparation of all necessary paperwork (constitution, trust deed or partnership contract)</p>
							<p> * submission of legal forms to ABR and ATO concerning your ABN and GST registrations</p>
							<p> * registration for BAS purposes: PAYG withheld, fuel rebate, income tax </p>
						</div>
						<div class="shadow-card">
							<p class="text-justify"> Starting a business can be quite challanging but it doesn't have to be stressful. If you are ready to go, starting your business in Australia doesn’t have to be a long and arduous task.</p>
							<h5>Our Promise:</h5>  
							<br/>
							<p> * keep things simple and straightforward</p>
							<p> * keep you informed</p>
							<p> * be there for you</p>
							<p> * keep everything under control</p>
							<br/>
							<button class="btn btn-warning"> See More -> </button>
						</div>	
					</div>
				</div>
			</div>
			<!--	<div id="subsection-cards">
				<div class="row">
						<div class="div-cards offset-xs-2 col-xs-10 offset-sm-2 col-sm-8 offset-md-1 col-md-4">
							<div class="face-card"> 
								<div class="accounting-icon"> <img src="<?php echo get_template_directory_uri() ?>/assets/plane.png"> </div>
								<!--  sau in loc de get_template_directory_uri mai sus bloginfo('template_directory'); -->
							<!--	<h5> Business incorporation:</h5> 
								<br/>
								<p> * advice on type of business structure</p>
								<p> * preparation of all necessary paperwork (constitution, trust deed or partnership contract)</p>
								<p> * submission of legal forms to ABR and ATO concerning your ABN and GST registrations</p>
								<p> * registration for BAS purposes: PAYG withheld, fuel rebate, income tax </p>
							</div>
							<div class="shadow-card">
								<p class="text-justify"> Starting a business can be quite challanging but it doesn't have to be stressful. If you are ready to go, starting your business in Australia doesn’t have to be a long and arduous task.</p>
								<h5>Our Promise:</h5>  
								<br/>
								<p> * keep things simple and straightforward</p>
								<p> * keep you informed</p>
								<p> * be there for you</p>
								<p> * keep everything under control</p>
								<br/>
								<button class="btn btn-warning"> See More -> </button>
							</div>
					</div>
					<div class="div-cards offset-xs-1 col-xs-10 offset-sm-2 col-sm-8 offset-md-2 col-md-4">  
						<div class="face-card"> 
							<div class="accounting-icon"> <img src="<?php // echo get_template_directory_uri() ?>/assets/inventory.PNG"> </div>
							<!--  sau in loc de get_template_directory_uri mai sus bloginfo('template_directory'); -->
					<!--		<h5> Bookkeeping, accounting and taxation records</h5> 
							<br/>
							<p> * we can provide reliable and correct coding of your business transactions (payments, purchases and sales)</p>
							<p> * we can tailor your accounting software to suit your needs</p>
							<p> * we can review your transactions periodically to give you extra peace of mind</p>
							<p> * we can prepare your lodgements: BAS, Tax returns; we can help you make the best decisions</p>
						</div>
						<div class="shadow-card">
							<p class="text-justify"> Depending on your accounting acumen and confidence, we can provide full or partial bookkeeping and accounting services</p>
							<h5>Our Promise</h5>  
							<br/>
							<p> * keep things simple and straightforward</p>
							<p> * keep you informed</p>
							<p> * keep everything under control</p>
							<p> * keep everything under control</p>
							<br/>
							<br/>
							<button class="btn btn-warning"> See More -> </button>
						</div>
					</div>
				</div>
			</div> -->
	   </section>
	   
	   <section id="sect-presentation"> 
		    <br/>
		    <div class="container-fluid">
			   <div class="row">
			    <div class="col-md-8">
					<h2> What I can <span class="text-success"> offer </span>  <span class="text-warning display-5"> YOU </span> </h2>	
					<p>If you're a business owner looking for more than just financial statements and tax returns from your 	   accountant, welcome to L Machado Accounting. Based in Maylands in Perth I am specialised in helping business owners run their professional affairs smoothly. 
					</p>
					<p>I can offer you all the usual accounting and tax compliance services, however my ultimate goal is supporting you thrive. I am not your average accountant who just keeps the score but my real mission is to help you grow your 	revenue, your profit and your business value. I shall help you slash the time and cost associated 
					with bookkeeping and GST compliance so together we can spend more time working ON your business and your priorities. 
					</p>
				</div>	
				<div class="col-md-4 block-big">
					<div class="p-3 block-text-1">
					   15 years of accounting experience working in a CPA Practice where I was fully appreciated for my work 
					</div>
					<br/>
					<div class="p-3 block-text-2">
					    Passionate about my work and passionate about people. I love interacting with people and helping them when needed
					</div>
					<span class="btn btn-success button col-md-10 offset-md-1 text-light mt-5">Share your experience</span>
				</div>
			  </div>
			</div>
		</section>
		

		<section id="sect-four-items"> 
			<h3> <span class="principlesProf">Principles of my profession </span></h3>
			<div id="subsection-four-items">
				<div class="fromLeft"><span>Confidence</span></div>
				<div class="fromLeft" ><span>Reliability</span></div>
				<div class="fromRight"><span>Trust</span></div>
				<div class="fromRight"><span>Ethics</span></div>
			</div>
			<div id="subsect-socials"> 
				<span>
					<a href='//publicaccountants.org.au/ipa-program?gclid=Cj0KCQjwu-HoBRD5ARIsAPIPendYzHfDZDSpKVJC4s14CCi-a4RZTkLcwgzo8PZJ0Rnqx8TIB06MG58aAmhnEALw_wcB'><img src="<?php echo get_template_directory_uri() ?>/assets/IPA_Logo.png"></a>
				</span>
				<span>
					<a href='//facebook.com'> <i class="fa fa-facebook-f"></i> </a>
				</span>
				<span>
					<a href='//facebook.com'> <i class="fa fa-facebook-f"></i> </a>
				</span>
			</div>
       </section>
	<!-- <div class="page-sidebar">
	<div id="div-search"> You can search through the site here </div> -->
<!-- <?php
//get_sidebar(); 
?> -->
	</div>
<?php get_footer(); ?>

<!-- <div id="dynamic-overlay" class="text-center px-5">
			<h1> Welsome to my site....I hope you'll find <i>something suitable </i> for <u>your interest </u> here </h1>
</div> -->