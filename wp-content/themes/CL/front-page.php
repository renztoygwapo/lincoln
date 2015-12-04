<?php get_header(); ?>

<div id="slider">

	<div class="owl-carousel">
    	<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide1.jpg"></div>
    	<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide1.jpg"></div>
	</div>

</div>


<div id="map-wrapper">
	<div id="map"></div>
	<div class="box-content">
		<h2 class="box-heading">Château Lincoln</h2>

		<p>Location d’appartements meublés (Bail Mensuel) et non-meublés (Bail Annuel) 1 ½ (Studio), 2 ½ (Alcôve), 3 ½ (1 Chambre à coucher), 4 ½ (2 Chambres à coucher)</p>
		<p>Situé au Centre-Ville de Montréal, entre les rues Sainte-Catherine, Sherbrooke, Atwater et Guy, notre immeuble est bien connu de la clientèle universitaire de Concordia et McGill ainsi que des professionnels du monde des affaires. Nos tarifs de location sont parmi les plus compétitifs à Montréal, compte-tenu de notre localisation, de la qualité de nos appartements et de notre service courtois.</p>
		<p>Bienvenue aux nouveaux arrivants à la recherche d’un premier pied-à-terre ou d’une adresse permanente au cœur de la ville de Montréal.</p>

		<a href="#" class="button">Commencez votre visite</a>
	</div>
</div>



<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
// The latitude and longitude of your business / place
var position = [27.1959739, 78.02423269999997];
 
function showGoogleMaps() {
 
    var latLng = new google.maps.LatLng(position[0], position[1]);
 
    var mapOptions = {
        zoom: 16, // initialize zoom level - the max value is 21
        streetViewControl: false, // hide the yellow Street View pegman
        scaleControl: true, // allow users to zoom the Google Map
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: latLng
    };
 
    map = new google.maps.Map(document.getElementById('map'),
        mapOptions);
 	
 	//var myIcon = new google.maps.MarkerImage("<?php bloginfo('template_url'); ?>/img/map-marker.png", null, null, null, new google.maps.Size(50,59));
 	var myIcon = new google.maps.MarkerImage("<?php bloginfo('template_url'); ?>/img/map-marker.png", new google.maps.Size(50, 59), null, new google.maps.Point(380, 60));
    // Show the default red marker at the location
    marker = new google.maps.Marker({
        position: latLng,
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP,
        icon: myIcon
    });
}
google.maps.event.addDomListener(window, 'load', showGoogleMaps);
</script>

<?php get_footer(); ?>