<?php 
//Template Name: Appartements Muebles
get_header(); ?>

<?php while(have_posts()): the_post(); ?>
<div id="featured-image" style="background-image: url(<?php bloginfo('template_url') ?>/img/appartement1-featured.jpg); ">
	<div class="container"> 
		<h1 class="featured-title"><?php the_title(); ?></h1>
	</div>
</div>

<div class="section">
	<div class="wrapper">
		<dl id="appartements-accordion" class="accordion" data-accordion>
		  <dd class="accordion-navigation">
		    <a href="#panel1b">
			    <ul class="labels">
		    		<li class="fraction">1 ½</li>
		    		<li>Rénové - Régulier</li>
		    		<li>
		    			<div class="salon icon"></div><span>1</span>
		    			<div class="cuisine icon"></div><span>1</span>
		    			<div class="bath-tub icon"></div><span>1</span>
		    		</li>
		    	</ul>
		    	<div class="toggle"></div>
		    </a>
		    <div id="panel1b" class="content active">
		    	<div class="top-menu">
		    		<ul class="left">
		    			<li><a href="#"><i class="mail icon"></i> Prendre contact</a></li>
		    			<li><a href="#"><i class="arrow-down2 icon"></i> Télécharger la fiche</a></li>
		    		</ul>
		    		<ul class="right">
		    			<li class="active"><a href="#">Rénové</a></li>
		    			<li><a href="#">Régulier</a></li>
		    		</ul>
		    	</div>
		    	<div class="content-inner">
		    		<div class="medium-4 columns">
		    			<div class="details">
		    				<ul>
		    					<li>
		    						<label>Tarifs haute saison :</label>
		    						<h3>$1,800 - $2,100</h3>
		    					</li>
		    					<li>
		    						<label>Tarifs haute saison :</label>
		    						<h3>$1,800 - $2,100</h3>
		    					</li>
		    					<li>
		    						<label>Nombre de personnes :</label>
		    						<h3>1 à 2 personne(s)</h3>
		    					</li>
		    				</ul>
		    			</div>
		    		</div>
		    		<div class="medium-8 columns">
		    			<div class="owl-carousel accordion-carousel">
						  <div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide2.jpg"></div>
						  <div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide2.jpg"></div>
						</div>
						
		    		</div>

		    		<div class="clearfix"></div>

		    		<div class="additional-content">
			    		<div class="medium-8 columns">
			    			
		    				<h4>Inclus dans le prix du loyer :</h4>
		    				<ul>
		    					<li><p>Tous nos appartements meublés ont été récemment entièrement	rénovés : cuisine et salle de bains refaits de fond en comble avec	comptoirs de marbre, planchers de bois flottants, meubles neufs très modernes. Voyez notre galerie de photo pour un bref aperçu.</p></li>
		    					<li><p>Cuisine toute équipée : réfrigérateur et congélateur, cuisinière avec four électrique, four à micro-ondes, machine à café, vaisselle, coutellerie, verrerie, plats et ustensiles de cuisson et petits articles de cuisine.</p></li>
		    					<li><p>Télévision couleur à écran plat avec service de câble.</p></li>
		    					<li><p>Connection internet sans fil.</p></li>
		    					<li><p>Air conditionné</p></li>
		    					<li><p>Balcon avec vue panoramique sur le Mont-Royal ou le Fleuve St-Laurent.</p></li>
		    					<li><p>Service d’entretien ménager hebdomadaire : changement des draps et	serviettes, nettoyage complet de la salle de bain et des planchers.</p></li>
		    					<li><p>Accès à la salle d’exercice, aux saunas et à la piscine extérieure (en été).</p></li>
		    					<li><p>Salle de lavage avec laveuses et sécheuses électriques.</p></li>
		    					<li><p>Magasin d’aliments au rez-de-chaussée.</p></li>
		    				</ul>
			    			
			    		</div>
			    		<div class="medium-4 columns">
			    			<h4>Disponible sur demande :</h4>
			    			<ul>
			    				<li><p>Lit de bébé : aucun frais additionnel.</p></li>
			    				<li><p>Lit Pliant Additionnel pour enfants de moins de 14 ans : aucun frais	additionnel.</p></li>
			    				<li><p>Lit Pliant Additionnel pour personne	de 14 ans et plus : $100.00 par mois</p></li>
			    				<li><p>Stationnement intérieur : $150.00 par mois.</p></li>
			    			</ul>
			    		</div>
			    	</div>
		    	</div>
		    </div>
		  </dd>
		  <dd class="accordion-navigation">
		    <a href="#panel2b">
			    <ul class="labels">
		    		<li class="fraction">2 ½</li>
		    		<li>Rénové</li>
		    		<li>
		    			<div class="salon icon"></div><span>1</span>
		    			<div class="cuisine icon"></div><span>1</span>
		    			<div class="bath-tub icon"></div><span>1</span>
		    		</li>
		    	</ul>
		    	<div class="toggle"></div>
		    </a>
		    <div id="panel2b" class="content">
		    	<div class="top-menu">
		    		<ul class="left">
		    			<li><a href="#"><i class="mail icon"></i> Prendre contact</a></li>
		    			<li><a href="#"><i class="arrow-down2 icon"></i> Télécharger la fiche</a></li>
		    		</ul>
		    		<ul class="right">
		    			<li class="active"><a href="#">Rénové</a></li>
		    			<li><a href="#">Régulier</a></li>
		    		</ul>
		    	</div>
		    	<div class="content-inner">
		    		<div class="medium-4 columns">
		    			<div class="details">
		    				<ul>
		    					<li>
		    						<label>Tarifs haute saison :</label>
		    						<h3>$1,800 - $2,100</h3>
		    					</li>
		    					<li>
		    						<label>Tarifs haute saison :</label>
		    						<h3>$1,800 - $2,100</h3>
		    					</li>
		    					<li>
		    						<label>Nombre de personnes :</label>
		    						<h3>1 à 2 personne(s)</h3>
		    					</li>
		    				</ul>
		    			</div>
		    		</div>
		    		<div class="medium-8 columns">
		    			<div class="owl-carousel accordion-carousel">
						  <div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide2.jpg"></div>
						  <div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide2.jpg"></div>
						</div>
		    		</div>

		    		<div class="clearfix"></div>

		    		<div class="additional-content">
			    		<div class="medium-8 columns">
			    			
		    				<h4>Inclus dans le prix du loyer :</h4>
		    				<ul>
		    					<li><p>Tous nos appartements meublés ont été récemment entièrement	rénovés : cuisine et salle de bains refaits de fond en comble avec	comptoirs de marbre, planchers de bois flottants, meubles neufs très modernes. Voyez notre galerie de photo pour un bref aperçu.</p></li>
		    					<li><p>Cuisine toute équipée : réfrigérateur et congélateur, cuisinière avec four électrique, four à micro-ondes, machine à café, vaisselle, coutellerie, verrerie, plats et ustensiles de cuisson et petits articles de cuisine.</p></li>
		    					<li><p>Télévision couleur à écran plat avec service de câble.</p></li>
		    					<li><p>Connection internet sans fil.</p></li>
		    					<li><p>Air conditionné</p></li>
		    					<li><p>Balcon avec vue panoramique sur le Mont-Royal ou le Fleuve St-Laurent.</p></li>
		    					<li><p>Service d’entretien ménager hebdomadaire : changement des draps et	serviettes, nettoyage complet de la salle de bain et des planchers.</p></li>
		    					<li><p>Accès à la salle d’exercice, aux saunas et à la piscine extérieure (en été).</p></li>
		    					<li><p>Salle de lavage avec laveuses et sécheuses électriques.</p></li>
		    					<li><p>Magasin d’aliments au rez-de-chaussée.</p></li>
		    				</ul>
			    			
			    		</div>
			    		<div class="medium-4 columns">
			    			<h4>Disponible sur demande :</h4>
			    			<ul>
			    				<li><p>Lit de bébé : aucun frais additionnel.</p></li>
			    				<li><p>Lit Pliant Additionnel pour enfants de moins de 14 ans : aucun frais	additionnel.</p></li>
			    				<li><p>Lit Pliant Additionnel pour personne	de 14 ans et plus : $100.00 par mois</p></li>
			    				<li><p>Stationnement intérieur : $150.00 par mois.</p></li>
			    			</ul>
			    		</div>
			    	</div>
		    	</div>
		    </div>
		  </dd>
		  <dd class="accordion-navigation">
		    <a href="#panel3b">
			    <ul class="labels">
		    		<li class="fraction">3 ½</li>
		    		<li>Rénové</li>
		    		<li>
		    			<div class="salon icon"></div><span>1</span>
		    			<div class="cuisine icon"></div><span>1</span>
		    			<div class="bath-tub icon"></div><span>1</span>
		    		</li>
		    	</ul>
		    	<div class="toggle"></div>
		    </a>
		    <div id="panel3b" class="content">
		    	<div class="top-menu">
		    		<ul class="left">
		    			<li><a href="#"><i class="mail icon"></i> Prendre contact</a></li>
		    			<li><a href="#"><i class="arrow-down2 icon"></i> Télécharger la fiche</a></li>
		    		</ul>
		    		<ul class="right">
		    			<li class="active"><a href="#">Rénové</a></li>
		    			<li><a href="#">Régulier</a></li>
		    		</ul>
		    	</div>
		    	<div class="content-inner">
		    		<div class="medium-4 columns">
		    			<div class="details">
		    				<ul>
		    					<li>
		    						<label>Tarifs haute saison :</label>
		    						<h3>$1,800 - $2,100</h3>
		    					</li>
		    					<li>
		    						<label>Tarifs haute saison :</label>
		    						<h3>$1,800 - $2,100</h3>
		    					</li>
		    					<li>
		    						<label>Nombre de personnes :</label>
		    						<h3>1 à 2 personne(s)</h3>
		    					</li>
		    				</ul>
		    			</div>
		    		</div>
		    		<div class="medium-8 columns">
		    			<div class="owl-carousel accordion-carousel">
						  <div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide2.jpg"></div>
						  <div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide2.jpg"></div>
						</div>
		    		</div>

		    		<div class="clearfix"></div>

		    		<div class="additional-content">
			    		<div class="medium-8 columns">
			    			
		    				<h4>Inclus dans le prix du loyer :</h4>
		    				<ul>
		    					<li><p>Tous nos appartements meublés ont été récemment entièrement	rénovés : cuisine et salle de bains refaits de fond en comble avec	comptoirs de marbre, planchers de bois flottants, meubles neufs très modernes. Voyez notre galerie de photo pour un bref aperçu.</p></li>
		    					<li><p>Cuisine toute équipée : réfrigérateur et congélateur, cuisinière avec four électrique, four à micro-ondes, machine à café, vaisselle, coutellerie, verrerie, plats et ustensiles de cuisson et petits articles de cuisine.</p></li>
		    					<li><p>Télévision couleur à écran plat avec service de câble.</p></li>
		    					<li><p>Connection internet sans fil.</p></li>
		    					<li><p>Air conditionné</p></li>
		    					<li><p>Balcon avec vue panoramique sur le Mont-Royal ou le Fleuve St-Laurent.</p></li>
		    					<li><p>Service d’entretien ménager hebdomadaire : changement des draps et	serviettes, nettoyage complet de la salle de bain et des planchers.</p></li>
		    					<li><p>Accès à la salle d’exercice, aux saunas et à la piscine extérieure (en été).</p></li>
		    					<li><p>Salle de lavage avec laveuses et sécheuses électriques.</p></li>
		    					<li><p>Magasin d’aliments au rez-de-chaussée.</p></li>
		    				</ul>
			    			
			    		</div>
			    		<div class="medium-4 columns">
			    			<h4>Disponible sur demande :</h4>
			    			<ul>
			    				<li><p>Lit de bébé : aucun frais additionnel.</p></li>
			    				<li><p>Lit Pliant Additionnel pour enfants de moins de 14 ans : aucun frais	additionnel.</p></li>
			    				<li><p>Lit Pliant Additionnel pour personne	de 14 ans et plus : $100.00 par mois</p></li>
			    				<li><p>Stationnement intérieur : $150.00 par mois.</p></li>
			    			</ul>
			    		</div>
			    	</div>
		    	</div>
		    </div>
		  </dd>
		  <dd class="accordion-navigation">
		    <a href="#panel4b">
			    <ul class="labels">
		    		<li class="fraction">4 ½</li>
		    		<li>Rénové - Régulier</li>
		    		<li>
		    			<div class="salon icon"></div><span>1</span>
		    			<div class="cuisine icon"></div><span>1</span>
		    			<div class="bath-tub icon"></div><span>1</span>
		    		</li>
		    	</ul>
		    	<div class="toggle"></div>
		    </a>
		    <div id="panel4b" class="content">
		    	<div class="top-menu">
		    		<ul class="left">
		    			<li><a href="#"><i class="mail icon"></i> Prendre contact</a></li>
		    			<li><a href="#"><i class="arrow-down2 icon"></i> Télécharger la fiche</a></li>
		    		</ul>
		    		<ul class="right">
		    			<li class="active"><a href="#">Rénové</a></li>
		    			<li><a href="#">Régulier</a></li>
		    		</ul>
		    	</div>
		    	<div class="content-inner">
		    		<div class="medium-4 columns">
		    			<div class="details">
		    				<ul>
		    					<li>
		    						<label>Tarifs haute saison :</label>
		    						<h3>$1,800 - $2,100</h3>
		    					</li>
		    					<li>
		    						<label>Tarifs haute saison :</label>
		    						<h3>$1,800 - $2,100</h3>
		    					</li>
		    					<li>
		    						<label>Nombre de personnes :</label>
		    						<h3>1 à 2 personne(s)</h3>
		    					</li>
		    				</ul>
		    			</div>
		    		</div>
		    		<div class="medium-8 columns">
		    			<div class="owl-carousel accordion-carousel">
						  <div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide2.jpg"></div>
						  <div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide2.jpg"></div>
						</div>
		    		</div>

		    		<div class="clearfix"></div>

		    		<div class="additional-content">
			    		<div class="medium-8 columns">
			    			
		    				<h4>Inclus dans le prix du loyer :</h4>
		    				<ul>
		    					<li><p>Tous nos appartements meublés ont été récemment entièrement	rénovés : cuisine et salle de bains refaits de fond en comble avec	comptoirs de marbre, planchers de bois flottants, meubles neufs très modernes. Voyez notre galerie de photo pour un bref aperçu.</p></li>
		    					<li><p>Cuisine toute équipée : réfrigérateur et congélateur, cuisinière avec four électrique, four à micro-ondes, machine à café, vaisselle, coutellerie, verrerie, plats et ustensiles de cuisson et petits articles de cuisine.</p></li>
		    					<li><p>Télévision couleur à écran plat avec service de câble.</p></li>
		    					<li><p>Connection internet sans fil.</p></li>
		    					<li><p>Air conditionné</p></li>
		    					<li><p>Balcon avec vue panoramique sur le Mont-Royal ou le Fleuve St-Laurent.</p></li>
		    					<li><p>Service d’entretien ménager hebdomadaire : changement des draps et	serviettes, nettoyage complet de la salle de bain et des planchers.</p></li>
		    					<li><p>Accès à la salle d’exercice, aux saunas et à la piscine extérieure (en été).</p></li>
		    					<li><p>Salle de lavage avec laveuses et sécheuses électriques.</p></li>
		    					<li><p>Magasin d’aliments au rez-de-chaussée.</p></li>
		    				</ul>
			    			
			    		</div>
			    		<div class="medium-4 columns">
			    			<h4>Disponible sur demande :</h4>
			    			<ul>
			    				<li><p>Lit de bébé : aucun frais additionnel.</p></li>
			    				<li><p>Lit Pliant Additionnel pour enfants de moins de 14 ans : aucun frais	additionnel.</p></li>
			    				<li><p>Lit Pliant Additionnel pour personne	de 14 ans et plus : $100.00 par mois</p></li>
			    				<li><p>Stationnement intérieur : $150.00 par mois.</p></li>
			    			</ul>
			    		</div>
			    	</div>
		    	</div>
		    </div>
		  </dd>
		</dl>
	</div>
</div>

<?php endwhile; ?> 

<?php get_footer(); ?>