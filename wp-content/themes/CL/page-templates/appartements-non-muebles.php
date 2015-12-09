<?php 
//Template Name: Appartements Non Muebles
get_header(); ?>

<?php while(have_posts()): the_post(); ?>
<div id="featured-image" style="background-image: url(<?php bloginfo('template_url') ?>/img/appartement2-featured.jpg); ">
	<div class="container"> 
		<h1 class="featured-title"><?php the_title(); ?></h1>
	</div>
</div>

<div class="section">
	<div class="wrapper">
		<dl id="appartements-accordion" class="accordion" data-accordion>
		  	<dd class="accordion-navigation">
			    <a href="#panel1">
				    <ul class="labels">
			    		<li class="fraction">1 ½</li>
			    		<li>Rénové <span>-</span> Régulier</li>
			    		<li>
			    			<div class="salon icon"></div><span>1</span>
			    			<div class="cuisine icon"></div><span>1</span>
			    			<div class="bath-tub icon"></div><span>1</span>
			    		</li>
			    	</ul>
			    	<div class="toggle"></div>
			    </a>
			    <div id="panel1" class="content active">
			    	<div class="show-for-small-only icons">
			    		<div class="salon icon"></div><span>1</span>
		    			<div class="cuisine icon"></div><span>1</span>
		    			<div class="bath-tub icon"></div><span>1</span>
			    	</div>
			    	<div class="top-menu">
			    		<ul class="left">
			    			<li><a href="#contact"><i class="mail icon"></i> <span>Prendre contact</span></a></li>
			    			<!-- <li><a href="#"><i class="arrow-down2 icon"></i> <span>Télécharger la fiche</span></a></li> -->
			    		</ul>
			    		<ul class="right" data-tab>
			    			<li class="active"><a href="#tab1">Rénové</a></li>
			    			<li><a href="#tab2">Régulier</a></li>
			    		</ul>
			    	</div>
			    	<div class="content-inner">
			    		<div class="medium-4 columns">
			    			<div class="details">
			    				<ul>
			    					<li>
			    						<label>Tarifs au mois :</label>
			    						<h3>$795 - $895</h3>
			    					</li>
			    					<li>
			    						<label>Nombre de personnes :</label>
			    						<h3>1 à 2 personne(s)</h3>
			    					</li>
			    					<li>
			    						<label>Bail :</label>
			    						<h3>1 an</h3>
			    					</li>
			    				</ul>
			    			</div>
			    		</div>
			    		<div class="medium-8 columns">
			    			<div class="tabs-content">
							  	<div class="content active" id="tab1">
							  		<div class="owl-carousel accordion-carousel">
								  		<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide3.jpg"></div>
								  		<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide3.jpg"></div>
									</div>
							  	</div>
							  	<div class="content" id="tab2">
							    	<div class="owl-carousel accordion-carousel">
								  		<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide3.jpg"></div>
								  		<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide3.jpg"></div>
									</div>
							  	</div>
							</div>
						</div>
			    			

			    		<div class="clearfix"></div>

			    		<div class="additional-content">
			    			<div class="large-12 columns">
			    				<div class="large-12 columns">
			    				<h4>Inclus dans le loyer :</h4>
			    			</div>
			    			</div>

				    		<div class="medium-4 columns">
			    				<ul>
			    					<li><p>Électricité</p></li>
			    					<li><p>Eau chaude</p></li>
			    					<li><p>Cuisinière et four électriques</p></li>
			    					<li><p>Saunas</p></li>
			    					<li><p>Magasin d’aliments au <br> rez-de-chaussée</p></li>
			    				</ul>
				    		</div>

				    		<div class="medium-4 columns">
			    				<ul>
			    					<li><p>Chauffage</p></li>
			    					<li><p>Taxes d’eau</p></li>
			    					<li><p>Service Internet de base sans-fil</p></li>
			    					<li><p>Piscine extérieure (en été)</p></li>
			    					<li><p>Stationnement Intérieur : <br> Bail d’un (1) an : $160.00 <br> par mois</p></li>
			    				</ul>
				    		</div>

				    		<div class="medium-4 columns">
			    				<ul>
			    					<li><p>Air Climatisé</p></li>
			    					<li><p>Réfrigérateur</p></li>
			    					<li><p>Salle d’exercice</p></li>
			    					<li><p>Salle de lavage avec laveuses et <br> sécheuses électriques</p></li>
			    				</ul>
				    		</div>
				    	</div>
			    	</div>
			    </div>
		  	</dd>
		  	<dd class="accordion-navigation">
			    <a href="#panel2">
				    <ul class="labels">
			    		<li class="fraction">2 ½</li>
			    		<li>Rénové <span>-</span> Régulier</li>
			    		<li>
			    			<div class="salon icon"></div><span>1</span>
			    			<div class="cuisine icon"></div><span>1</span>
			    			<div class="bath-tub icon"></div><span>1</span>
			    		</li>
			    	</ul>
			    	<div class="toggle"></div>
			    </a>
			    <div id="panel2" class="content">
			    	<div class="show-for-small-only icons">
			    		<div class="salon icon"></div><span>1</span>
		    			<div class="cuisine icon"></div><span>1</span>
		    			<div class="bath-tub icon"></div><span>1</span>
			    	</div>
			    	<div class="top-menu">
			    		<ul class="left">
			    			<li><a href="#contact"><i class="mail icon"></i> <span>Prendre contact</span></a></li>
			    			<!-- <li><a href="#"><i class="arrow-down2 icon"></i> <span>Télécharger la fiche</span></a></li> -->
			    		</ul>
			    		<ul class="right" data-tab>
			    			<li class="active"><a href="#tab3">Rénové</a></li>
			    			<li><a href="#tab4">Régulier</a></li>
			    		</ul>
			    	</div>
			    	<div class="content-inner">
			    		<div class="medium-4 columns">
			    			<div class="details">
			    				<ul>
			    					<li>
			    						<label>Tarifs au mois :</label>
			    						<h3>$795 - $895</h3>
			    					</li>
			    					<li>
			    						<label>Nombre de personnes :</label>
			    						<h3>1 à 2 personne(s)</h3>
			    					</li>
			    					<li>
			    						<label>Bail :</label>
			    						<h3>1 an</h3>
			    					</li>
			    				</ul>
			    			</div>
			    		</div>
			    		<div class="medium-8 columns">
			    			<div class="tabs-content">
							  	<div class="content active" id="tab3">
							  		<div class="owl-carousel accordion-carousel">
								  		<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide3.jpg"></div>
								  		<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide3.jpg"></div>
									</div>
							  	</div>
							  	<div class="content" id="tab4">
							    	<div class="owl-carousel accordion-carousel">
								  		<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide3.jpg"></div>
								  		<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide3.jpg"></div>
									</div>
							  	</div>
							</div>
			    		</div>

			    		<div class="clearfix"></div>

			    		<div class="additional-content">

			    			<div class="large-12 columns">
			    				<h4>Inclus dans le loyer :</h4>
			    			</div>

				    		<div class="medium-4 columns">
			    				<ul>
			    					<li><p>Électricité</p></li>
			    					<li><p>Eau chaude</p></li>
			    					<li><p>Cuisinière et four électriques</p></li>
			    					<li><p>Saunas</p></li>
			    					<li><p>Magasin d’aliments au <br> rez-de-chaussée</p></li>
			    				</ul>
				    		</div>

				    		<div class="medium-4 columns">
			    				<ul>
			    					<li><p>Chauffage</p></li>
			    					<li><p>Taxes d’eau</p></li>
			    					<li><p>Service Internet de base sans-fil</p></li>
			    					<li><p>Piscine extérieure (en été)</p></li>
			    					<li><p>Stationnement Intérieur : <br> Bail d’un (1) an : $160.00 <br> par mois</p></li>
			    				</ul>
				    		</div>

				    		<div class="medium-4 columns">
			    				<ul>
			    					<li><p>Air Climatisé</p></li>
			    					<li><p>Réfrigérateur</p></li>
			    					<li><p>Salle d’exercice</p></li>
			    					<li><p>Salle de lavage avec laveuses et <br> sécheuses électriques</p></li>
			    				</ul>
				    		</div>
				    	</div>
			    	</div>
			    </div>
		  	</dd>
		  	<dd class="accordion-navigation">
			    <a href="#panel3">
				    <ul class="labels">
			    		<li class="fraction">3 ½</li>
			    		<li>Rénové <span>-</span> Régulier</li>
			    		<li>
			    			<div class="chambre icon"></div><span>1</span>
			    			<div class="salon icon"></div><span>1</span>
			    			<div class="cuisine icon"></div><span>1</span>
			    			<div class="bath-tub icon"></div><span>1</span>
			    		</li>
			    	</ul>
			    	<div class="toggle"></div>
			    </a>
			    <div id="panel3" class="content">
			    	<div class="show-for-small-only icons">
			    		<div class="chambre icon"></div><span>1</span>
			    		<div class="salon icon"></div><span>1</span>
		    			<div class="cuisine icon"></div><span>1</span>
		    			<div class="bath-tub icon"></div><span>1</span>
			    	</div>
			    	<div class="top-menu">
			    		<ul class="left">
			    			<li><a href="#contact"><i class="mail icon"></i> <span>Prendre contact</span></a></li>
			    			<!-- <li><a href="#"><i class="arrow-down2 icon"></i> <span>Télécharger la fiche</span></a></li> -->
			    		</ul>
			    		<ul class="right" data-tab>
			    			<li class="active"><a href="#tab5">Rénové</a></li>
			    			<li><a href="#tab6">Régulier</a></li>
			    		</ul>
			    	</div>
			    	<div class="content-inner">
			    		<div class="medium-4 columns">
			    			<div class="details">
			    				<ul>
			    					<li>
			    						<label>Tarifs au mois :</label>
			    						<h3>$795 - $895</h3>
			    					</li>
			    					<li>
			    						<label>Nombre de personnes :</label>
			    						<h3>1 à 2 personne(s)</h3>
			    					</li>
			    					<li>
			    						<label>Bail :</label>
			    						<h3>1 an</h3>
			    					</li>
			    				</ul>
			    			</div>
			    		</div>
			    		<div class="medium-8 columns">
			    			<div class="tabs-content">
							  	<div class="content active" id="tab5">
							  		<div class="owl-carousel accordion-carousel">
								  		<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide3.jpg"></div>
								  		<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide3.jpg"></div>
									</div>
							  	</div>
							  	<div class="content" id="tab6">
							    	<div class="owl-carousel accordion-carousel">
								  		<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide3.jpg"></div>
								  		<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide3.jpg"></div>
									</div>
							  	</div>
							</div>
			    		</div>

			    		<div class="clearfix"></div>

			    		<div class="additional-content">

			    			<div class="large-12 columns">
			    				<h4>Inclus dans le loyer :</h4>
			    			</div>

				    		<div class="medium-4 columns">
			    				<ul>
			    					<li><p>Électricité</p></li>
			    					<li><p>Eau chaude</p></li>
			    					<li><p>Cuisinière et four électriques</p></li>
			    					<li><p>Saunas</p></li>
			    					<li><p>Magasin d’aliments au <br> rez-de-chaussée</p></li>
			    				</ul>
				    		</div>

				    		<div class="medium-4 columns">
			    				<ul>
			    					<li><p>Chauffage</p></li>
			    					<li><p>Taxes d’eau</p></li>
			    					<li><p>Service Internet de base sans-fil</p></li>
			    					<li><p>Piscine extérieure (en été)</p></li>
			    					<li><p>Stationnement Intérieur : <br> Bail d’un (1) an : $160.00 <br> par mois</p></li>
			    				</ul>
				    		</div>

				    		<div class="medium-4 columns">
			    				<ul>
			    					<li><p>Air Climatisé</p></li>
			    					<li><p>Réfrigérateur</p></li>
			    					<li><p>Salle d’exercice</p></li>
			    					<li><p>Salle de lavage avec laveuses et <br> sécheuses électriques</p></li>
			    				</ul>
				    		</div>
				    	</div>
			    	</div>
			    </div>
		  	</dd>
		  	<dd class="accordion-navigation">
			    <a href="#panel4">
				    <ul class="labels">
			    		<li class="fraction">4 ½</li>
			    		<li>Rénové <span>-</span> Régulier</li>
			    		<li>
			    			<div class="chambre icon"></div><span>2</span>
			    			<div class="salon icon"></div><span>1</span>
			    			<div class="cuisine icon"></div><span>1</span>
			    			<div class="bath-tub icon"></div><span>1</span>
			    		</li>
			    	</ul>
			    	<div class="toggle"></div>
			    </a>
			    <div id="panel4" class="content">
			    	<div class="show-for-small-only icons">
			    		<div class="chambre icon"></div><span>2</span>
			    		<div class="salon icon"></div><span>1</span>
		    			<div class="cuisine icon"></div><span>1</span>
		    			<div class="bath-tub icon"></div><span>1</span>
			    	</div>
			    	<div class="top-menu">
			    		<ul class="left">
			    			<li><a href="#contact"><i class="mail icon"></i> <span>Prendre contact</span></a></li>
			    			<!-- <li><a href="#"><i class="arrow-down2 icon"></i> <span>Télécharger la fiche</span></a></li> -->
			    		</ul>
			    		<ul class="right" data-tab>
			    			<li class="active"><a href="#tab7">Rénové</a></li>
			    			<li><a href="#tab8">Régulier</a></li>
			    		</ul>
			    	</div>
			    	<div class="content-inner">
			    		<div class="medium-4 columns">
			    			<div class="details">
			    				<ul>
			    					<li>
			    						<label>Tarifs au mois :</label>
			    						<h3>$795 - $895</h3>
			    					</li>
			    					<li>
			    						<label>Nombre de personnes :</label>
			    						<h3>1 à 2 personne(s)</h3>
			    					</li>
			    					<li>
			    						<label>Bail :</label>
			    						<h3>1 an</h3>
			    					</li>
			    				</ul>
			    			</div>
			    		</div>
			    		<div class="medium-8 columns">
			    			<div class="tabs-content">
							  	<div class="content active" id="tab7">
							  		<div class="owl-carousel accordion-carousel">
								  		<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide3.jpg"></div>
								  		<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide3.jpg"></div>
									</div>
							  	</div>
							  	<div class="content" id="tab8">
							    	<div class="owl-carousel accordion-carousel">
								  		<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide3.jpg"></div>
								  		<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide3.jpg"></div>
									</div>
							  	</div>
							</div>
			    		</div>

			    		<div class="clearfix"></div>

			    		<div class="additional-content">

			    			<div class="large-12 columns">
			    				<h4>Inclus dans le loyer :</h4>
			    			</div>

				    		<div class="medium-4 columns">
			    				<ul>
			    					<li><p>Électricité</p></li>
			    					<li><p>Eau chaude</p></li>
			    					<li><p>Cuisinière et four électriques</p></li>
			    					<li><p>Saunas</p></li>
			    					<li><p>Magasin d’aliments au <br> rez-de-chaussée</p></li>
			    				</ul>
				    		</div>

				    		<div class="medium-4 columns">
			    				<ul>
			    					<li><p>Chauffage</p></li>
			    					<li><p>Taxes d’eau</p></li>
			    					<li><p>Service Internet de base sans-fil</p></li>
			    					<li><p>Piscine extérieure (en été)</p></li>
			    					<li><p>Stationnement Intérieur : <br> Bail d’un (1) an : $160.00 <br> par mois</p></li>
			    				</ul>
				    		</div>

				    		<div class="medium-4 columns">
			    				<ul>
			    					<li><p>Air Climatisé</p></li>
			    					<li><p>Réfrigérateur</p></li>
			    					<li><p>Salle d’exercice</p></li>
			    					<li><p>Salle de lavage avec laveuses et <br> sécheuses électriques</p></li>
			    				</ul>
				    		</div>
				    	</div>
			    	</div>
			    </div>
		  	</dd>
		</dl>
	</div>
</div>


<div id="contact">
	<div class="wrapper">
		<div class="large-12 columns">
			<div class="section-title">Formulaire de location</div>
			<div class="intro">
				<p>Veuillez compléter le formulaire ci-joint et l’envoyer, nous confirmerons la disponibilité et le tarif par courriel dès que possible.</p>
			</div>
		</div>
		<?php echo do_shortcode('[gravityform id="3" title="false" description="false"]'); ?>
	</div>
</div>
<div class="container">
	<div id="appartements-bottom">
		<div class="medium-6 columns">
			<div class="item">
				<a href="<?php echo home_url(); ?>/galerie-photos/"><img src="<?php bloginfo('template_url'); ?>/img/appartement3.jpg"></a>
			</div>
		</div>
		<div class="medium-6 columns">
			<div class="item">
				<a href="<?php echo home_url(); ?>/appartements-muebles/"><img src="<?php bloginfo('template_url'); ?>/img/appartement1.jpg"></a>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?> 

<?php get_footer(); ?>