<?php get_header(); ?>
	<div class="subpages_header"><h2 class="subpage_header_title"><?php the_title(); ?></h2></div>
		<div class="background_header_subpages"></div>
<div class="container">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="col-sm-12 col-xs-12">

        <?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
