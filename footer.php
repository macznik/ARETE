<div class="myfooter">
	<div class="arrow">
		<a href="#up"><div class="up"><i class="fa fa-arrow-up" aria-hidden="true"></i></div></a>
	</div>
	<div class="menu_bottom">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'nav navbar-nav navbar-right',
            'walker' => new emcom_walker_nav_menu,
            'fallback_cb' => false,
            'depth' => 2
            )); ?>
        </div>
	</div>
	<div class="container">
		<div class="footer_bottom_zapytanie">
			<div class="col-md-5 col-xs-12 col-sm-12">
				<a href="#zapytanie" class="link_zapytanie hvr-sweep-to-top">
					<div class="box_bottom">
						<i class="fa fa-comments" aria-hidden="true"></i>
						<p class="chat">ZŁÓŻ ZAPYTANIE OFERTOWE</p>
					</div>
				</a>
			</div>
			<div class="col-md-2 disappear">
				 <img class='logo_main bottom_l' src="http://arete.em-com.pl/wp-content/uploads/2018/01/logo2.png" />
			</div>
			<div class="col-md-5 col-xs-12 col-sm-12">
				<div class="call_kancelaria">
					<p class="call_header">Kontakt Kancelaria</p>
					<a href="tel:+48<?php the_field('phone_top','options');?>" class="phone_bottom"><?php the_field('phone_top','options');?></a>
				</div>
			</div>
		</div>
		<div class="footer_bottom_zapytanie">
			<div class="col-md-4 col-xs-12 col-sm-12">
				<h2 class="about_bottom_header">O nas</h2>
				<p class="about_bottom_text">Jesteśmy Kancelarią Podatkową</p>
				<a href="o-kancelarii" class="about_bottom_button hvr-sweep-to-top">Więcej</a>	
			</div>
			<div class="col-md-4 col-xs-12 col-sm-12">
				<h2 class="about_bottom_header">Nasze usługi</h2>
				<a href="uslugi" class="footer_bottom_links">Księgi handlowe</a>
				<a href="uslugi" class="footer_bottom_links">Księgi przychodów/rozchodów</a>
				<a href="uslugi" class="footer_bottom_links">Rejestr VAT</a>
				<a href="uslugi" class="footer_bottom_links">Doradztwo podatkowe</a>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-12">
				<h2 class="about_bottom_header">Zielona Góra</h2>
				<p class="about_bottom_text">ul. Krakusa 12</p>
				<p class="about_bottom_text">65-001 Zielona Góra</p>
				<p class="about_bottom_text">  <a href="tel:+48<?php the_field('phone_top','options');?>" class="footer_bottom_links">Tel: <?php the_field('phone_top','options');?></a></p>
			</div>
		</div>
	</div>
</div>
<div class="copyright">
	<div class="container">
		<div class="left-copyright">
			<p class="copyright-text">Copyright &#169; by Arete - Kancelaria Rachunkowa</p>
		</div>
		<div class="right-copyright">
			<p class="made-text">Realizacja <a href="http://em-com.pl" rel="nofollow" target="_blank" alt="eM-COM - Web Solutions" title="eM-COM - Web Solutions">
				<img class="realizacja-img" src="http://em-com.pl/wp-content/themes/em-com/img/grey-logo.png" /></a>
			</p>
		</div>
	</div>
</div>
<?php wp_footer(); ?>

<script>
	jQuery("#up").on('click', function(event){     
    event.preventDefault();
    jQuery('html,body').animate({scrollTop:jQuery(this.hash).offset().top}, 1000);
});
</script>
</body></html>
