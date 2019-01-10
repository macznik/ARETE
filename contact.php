<?php /* Template Name: Contact ARETE */ ?>
<?php get_header(); ?>
<?php $imagelink = 'http://arete.em-com.pl/wp-content/uploads/2018/01/city.jpg' ?>
	<div class="subpages_header"><h2 class="subpage_header_title"><?php the_title(); ?></h2></div>
	<div class="background_header_subpages"></div>

<div class="full_contact">
	<?php echo do_shortcode('[wpgmza id="1"]');?>
</div>
<div class="contact_page_doit">
	<h2>Skontaktuj się z nami</h2>
</div>
<div class="container">
	<div class="col-md-6 col-xs-12 col-sm-12">
		<?php echo do_shortcode('[contact-form-7 id="43" title="KONTAKT"]');?>
	</div>
	<div class="col-md-6 col-xs-12 col-sm-12">
		<?php the_field('kontakt');?>
	</div>
</div>



<?php get_footer(); ?>
