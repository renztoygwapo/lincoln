<?php 
//Template Name: Gallery
get_header(); ?>
<div class="container">
	<img src="<?php bloginfo('template_url'); ?>/img/gallery-banner.jpg">
</div>

<div class="container">
	<div id="gallery" class="js-masonry" data-masonry-options='{ "itemSelector": ".grid-item", "isOriginLeft": false  }'>
		
		<div class="medium-6 columns nopadding grid-item">
			<div class="gallery-item">
				<div class="gallery-caption">
					<h1 class="heading">La tranquillité au cœur du Centre-Ville de Montréal</h1>

					<p>Situé sur une rue paisible du Centre-Ville de Montréal, notre édifice résidentiel est à proximité des institutions financières, universitaires et artistiques. Tout en étant un havre de paix dans un voisinage paisible, vous serez à deux pas des stations de métro (Guy-Concordia et Atwater), universités (Concordia et McGill), grands magasins, théâtres, musés, restaurants, lieux touristiques, etc. C’est l’endroit idéal pour qui veut joindre confort, travail, études et plaisir.</p>

					<div class="arrow-down"></div>
				</div>
			</div>
		</div>
		<div class="medium-6 columns nopadding grid-item" style="margin-top: 350px">
			<div class="gallery-item">
				<img src="<?php bloginfo('template_url'); ?>/img/img1.jpg">
			</div>
		</div>
		<div class="medium-6  columns nopadding grid-item">
			<div class="gallery-item">
				<img src="<?php bloginfo('template_url'); ?>/img/img2.jpg">
			</div>
		</div>

		<div class="medium-6 columns nopadding grid-item">
			<div class="gallery-item">
				<div class="gallery-caption">
					<p>A deux rues se trouve l’accès aux autoroutes qui encerclent la région métropolitaine et rejoignent l’aéroport Pierre–Elliot Trudeau ainsi que les voies rapides vers les Laurentides et les Cantons de l’Est.</p>
				</div>
			</div>
		</div>

		<div class="medium-12 columns nopadding grid-item">
			<div class="gallery-item">
				<img src="<?php bloginfo('template_url'); ?>/img/img3.jpg">
			</div>
		</div>

		<div class="medium-6 columns nopadding grid-item">
			<div class="gallery-item">
				<div class="gallery-caption">
					<p>Nous hébergeons une clientèle internationale de gens d’affaires, d’étudiants, de nouveaux arrivants et de professionnels relocalisés temporairement. Tous y apprécient le style de vie actif du Centre-ville de Montréal à deux pas de la quiétude de leur appartement.</p>
				</div>
			</div>
		</div>

		<div class="medium-6  columns nopadding grid-item">
			<div class="gallery-item">
				<img src="<?php bloginfo('template_url'); ?>/img/img4.jpg">
			</div>
		</div>

		<div class="medium-6  columns nopadding grid-item">
			<div class="gallery-item">
				<img src="<?php bloginfo('template_url'); ?>/img/img5.jpg">
			</div>
		</div>

		<div class="medium-6 columns nopadding grid-item">
			<div class="gallery-item">
				<div class="gallery-caption">
					<p>Que vous ayez besoin d’un appartement meublé pour un court séjour ou d’un appartement non-meublé pour une adresse permanente, le Château Lincoln reste l’alternative idéale pour une qualité de vie à votre mesure!</p>
				</div>
			</div>
		</div>

	</div>

	<div id="appartements-bottom">
		<div class="medium-6 columns">
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/appartement1.jpg"></a>
		</div>
		<div class="medium-6 columns">
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/appartement2.jpg"></a>
		</div>
	</div>
</div>
<?php get_footer(); ?>