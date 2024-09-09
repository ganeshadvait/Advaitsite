<?php
/* 
 * Home Page Template
 * Template Name: Homepage Template
 */
// Include the header.php file
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js">
		<link rel="stylesheet" href="https://use.typekit.net/lsf5xpv.css">
		<script>document.documentElement.className="js";</script>
	<script src="https://unpkg.com/@studio-freight/lenis@1.0.33/dist/lenis.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link rel="stylesheet" href="https://use.typekit.net/lsf5xpv.css">
	<script>document.documentElement.className="js";</script>

    <?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>
		<section class="scrollsmoother-container"> 
<section class="hero-section">
	<div class="framer-9txkez" data-framer-name="Left Top" name="Left Top"></div>
	<div class="framer-1yx07rl" data-framer-name="Bottom right" name="Bottom right"></div>
	<div id="brxe-a52da4-two" data-script-id="a52da4-two" class="brxe-bubble-two  bc-features-011__bubble-two bc-bubbles__bubble--1-two bc-bubbles__bubble-two"></div>
<?php 
	get_header();
	?>
	<div class="Hero-inside">
		<div id="brxe-a52da4" data-script-id="a52da4" class="brxe-bubble bc-features-011__bubble bc-bubbles__bubble--1 bc-bubbles__bubble"></div>
		<div class="Middle-Frame">
			<div class="width-50">
				
			
			<h2 class="tittle-phrase cursor-scale-two">
			 The next-gen marketing with AI is here
			</h2>
			<p class="hero-para">
				Transforming Marketing with AI & ML. Empowering Healthcare, Pharma and Real Estate Sectors with Next-Gen Marketing Technology
			</p>
			<div class="buttons-container">
					<a class="HOVER btn-primary">
		<span></span>
		<text>Get in touch</text>
	</a>
					<a class="HOVER-two btn-secondary">
		<span></span>
		<text>Browse services</text>
	</a>
			</div>
				<div class="hero-image image-cursor">
					<img src="https://assets-global.website-files.com/6335a9f2335aca113b3d232a/6335cdbb700eee229d82045b_home-hero-interface-large-darkweb-webflow-ecommerce-template-p-1080.png" alt="">
				</div>
		</div>
			</div>
	</div>
</section>
			 <section  class="scroll-container">
				 <div class="width-50">
					  <h2 class="second-title " data-splitting data-effect2>Services</h2>
					 <p class="second-para">
				Your digital transformation ally, driving you towards unprecedented success.
			</p>
				 </div>
<div class="cards-container">
	<?php 
	for($i = 1; $i <= 4; $i++){
		if($i == 1){
			echo '<div class="card-items block">
			<div class="card-item-container">
			<div class="inner-container-left">
			<h3 class="card-title "> Digital Marketing</h3>
			<p class="card-para">Maximizing ROI through targeted customer acquisition and realization. Leveraging AI and ML for unparalleled success in performance marketing.</p>
			 <span class="arrow-button" > 	<a class="gtn-btn">Get in touch	</a>
				<span class="material-symbols-outlined">
arrow_forward
</span> </span>
			</div>
			<div class="inner-container right"><img src="https://assets-global.website-files.com/6335a9f2335aca113b3d232a/6335f47c4f0cd6cc5e1cbad8_smartest-editor-card-image-darkweb-webflow-ecommerce-template.png" alt=""> </div>
			</div>
			</div>';  // Added missing semicolon
		} elseif ($i == 2){
			echo '<div class="card-items">
			<div class="card-item-container">
			<div class="inner-container-left">
			<h3 class="card-title "> Advanced CRM & ERP Solutions</h3>
			<p class="card-para">Specializing in bespoke CRM and ERP solutions, we prioritize customer centricity to elevate your customers lifetime value (LTV) to new heights.</p>
			 <span class="arrow-button" > 	<a class="gtn-btn">Get in touch	</a>
				<span class="material-symbols-outlined">
arrow_forward
</span> </span>
			</div>
			<div class="inner-container right"><img src="https://assets-global.website-files.com/6335a9f2335aca113b3d232a/6335f47c4f0cd6cc5e1cbad8_smartest-editor-card-image-darkweb-webflow-ecommerce-template.png" alt=""> </div>
			</div>
			</div>';
		}elseif($i == 3){
			echo '<div class="card-items">
			<div class="card-item-container">
			<div class="inner-container-left">
			<h3 class="card-title "> Content Marketing</h3>
			<p class="card-para">We create captivating, nurturing content using AI, ML, ChatGPT, and advanced SEO tools, driven by measurable results for your success.</p>
			 <span class="arrow-button" > 	<a class="gtn-btn">Get in touch	</a>
				<span class="material-symbols-outlined">
arrow_forward
</span> </span>
			</div>
			<div class="inner-container right"><img src="https://assets-global.website-files.com/6335a9f2335aca113b3d232a/6335f47c4f0cd6cc5e1cbad8_smartest-editor-card-image-darkweb-webflow-ecommerce-template.png" alt=""> </div>
			</div>
			</div>';
		} else {
			echo '<div class="card-items last-one">
			<div class="card-item-container">
			<div class="inner-container-left">
			<h3 class="card-title "> Web & App Development</h3>
			<p class="card-para">Results-driven web development services fuelled by cutting-edge research, crafting unparalleled customer engagement platforms and invaluable digital assets.</p>
			 <span class="arrow-button" > 	<a class="gtn-btn">Get in touch	</a>
				<span class="material-symbols-outlined">
arrow_forward
</span> </span>
			</div>
			<div class="inner-container right"><img src="https://assets-global.website-files.com/6335a9f2335aca113b3d232a/6335f47c4f0cd6cc5e1cbad8_smartest-editor-card-image-darkweb-webflow-ecommerce-template.png" alt=""> </div>
			</div>
			</div>';
		}
	}
?>


			</div>
			</section>
			<section class="Section-four">
				<div id="box1">
					
				
				<div class="middle-boxes cursor-scale-two" >				
				<div class="section-heading margin-bottom-16-mobile-12 purple-light-1"><h2 class="boxh2 text-color-black max-width-640-tablet-520-mobile-320"><span class="text-color-purple-dark">Innovation and Expertise</span> at the Heart of Everything We Do</h2><p class=" card-para text-color-black-opacity-60 max-width-360">At our core, we blend innovation and expertise to fuel every project, striving to pioneer digital solutions that redefine success.</p></div>
					</div>
					<div class="items-boxes cursor-scale-two section-heading">
					<div class="icon-div">
						
					</div>
					<h2 class="boxh2 text-color-black max-width-640-tablet-520-mobile-320">Innovation and Expertise at the Heart of Everything We Do</h2>
					<p class=" card-para text-color-black-opacity-60 max-width-360">At our core, we blend innovation and expertise to fuel every project, striving to pioneer digital solutions that redefine success.</p>
				</div>
				</div>
			</section>
			<section class="third-section">
				<div class="wrap">
				<div class="content content--sticky content--grid bg-1">
					<img class="content__img content__img--large content__img--left" src="" />
					<h2 class="content__title"><i>The</i> Algorithm</h2>
					<p class="content__text content__text--left text-meta">The algorithm's workings are shrouded in complexity, and its decision-making processes are inscrutable to the general populace.</p>
				</div>
				<div class="content content--sticky content--grid bg-2">
					<img class="content__img content__img--large content__img--left" src="" />
					<h2 class="content__title"><i>The</i> Dogma</h2>
					<p class="content__text content__text--left text-meta">The digital gospel etched into the very code of the algorithmic society, served as the bedrock of the cognitive regime.</p>
				</div>
				<div class="content content--sticky content--grid bg-3">
					<img class="content__img content__img--large content__img--left" src="" />
					<h2 class="content__title"><i>The</i> Architects</h2>
					<p class="content__text content__text--left text-meta">The elusive entities, lacking human form, operate in the shadows, skillfully shaping societal norms through the complex interplay of algorithms and Dogmas.</p>
				</div>
				<div class="content content--sticky content--grid bg-4">
					<img class="content__img content__img--large content__img--left" src="" />
					<h2 class="content__title"><i>The</i> Wasteland</h2>
					<p class="content__text content__text--left text-meta">This overlooked realm, a consequence of algorithmic judgments, is a haunting landscape filled with the echoes of untold stories and uncharted thoughts.</p>
				</div>
				<div class="content content--sticky content--grid bg-5">
					<img class="content__img content__img--large content__img--left" src="" />
					<h2 class="content__title"><i>The</i> Narrative</h2>
					<p class="content__text content__text--left text-meta">"The Narrative" unfolds as the omnipresent thread weaving through the fabric of the algorithmic society.</p>
				</div>
				<div class="content content--sticky content--grid bg-6">
					<img class="content__img content__img--large content__img--left" src="" />
					<h2 class="content__title"><i>The</i> Opulence</h2>
					<p class="content__text content__text--left text-meta">"The Opulence" epitomizes the cognitive elite's wealth in the algorithmic society, where opulent thoughts and experiences shape the societal narrative.</p>
				</div>
			</div>
			</section>
<div id="main-content">


		

</div>
</section>
<?php
get_footer(); // Include the footer.php file
?>
