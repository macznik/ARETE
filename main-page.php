<?php /* Template Name: Strona Główna ARETE */ ?>

<?php get_header(); ?>

<div class="main">
	<img class="image_main" src="<?php the_field('main_picture');?>" />
	<h2 class="header_main_image"><?php the_field('header_text');?></h2>
	<p class="under_text_main_page"><?php the_field('under_text_image');?></p>
</div>
<div class="main_background"></div>
<div class="container">
	<div class="col-md-12 col-xs-12 col-sm-12">
		<div class="col-md-4 col-xs-12 col-sm-12">
			<div class="border_image">
				<img class="border_img" src="<?php the_field('img_about');?>" />
				<img class="under_photo" src="" />
			</div>
		</div>
		<div class="col-md-8 col-xs-12 col-sm-12">
			<h3 class="about_header_main_page">Kancelaria rachunkowa</h3>
			<h3 class="about_header_main_page_under">Arete</h3>
			<p class="about_text"><?php the_field('about_main_page');?></p>
			<div class="about_full">
				<div class="about_best">
					<i class="fa fa-user" aria-hidden="true"></i>
					<p class="one">Doświadczona</p>
					<p class="two">kadra</p>
				</div>
				<div class="about_best">
					<i class="fa fa-balance-scale" aria-hidden="true"></i>
					<p class="one">Jakość i</p>
					<p class="two">zaufanie</p>
				</div>
				<div class="about_best">
					<i class="fa fa-clock-o" aria-hidden="true"></i>
					<p class="one">Na</p><br/>
					<p class="two">Czas</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="full_break">
	<div style="background:url('<?php echo get_template_directory_uri();?>/img/woman.jpg'); background-size: cover;width:100%;height: 450px; background-repeat: no-repeat;background-position: center;" class="lady_marketin"></div>
	<div class="background_black">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="tags_g">
						<div id="carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
					    			<h2 class="slider_header_about"> PROBA</h2>
					    			<p class="slider_text_about">
					    				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel arcu sem. Nulla accumsan, diam vel convallis sagittis, mi odio sagittis ante, eu vestibulum tellus arcu quis erat. In tempus, neque id egestas convallis, felis tortor dignissim ligula, ac lacinia odio odio at odio. Curabitur congue ornare efficitur. Nunc sed quam varius, lacinia lectus eu, iaculis dolor. 
					    			</p>
					    		</div>
					    		<div class="item">
					    			<h2 class="slider_header_about">PRÓBA 2</h2>
					    			<p class="slider_text_about">
					    				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel arcu sem. Nulla accumsan, diam vel convallis sagittis, mi odio sagittis ante, eu vestibulum tellus arcu quis erat. In tempus, neque id egestas convallis, felis tortor dignissim ligula, ac lacinia odio odio at odio. Curabitur congue ornare efficitur. Nunc sed quam varius, lacinia lectus eu, iaculis dolor. 
					    			</p>
					    		</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="full_break">
	<div class="container">
		<div class="col-md-12 col-xs-12 col-sm-12">
			<h2 class="zapytanie_ofertowe">złóż zapytanie ofertowe</h2>
			<div class="linia"></div>
			<p class="form_ularz">Wypełnij formularz
			<?php echo do_shortcode('[contact-form-7 id="40" title="MAIN PAGE"]');?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
