<?php get_header(); ?>

<div id="slider">

	<div class="owl-carousel home-carousel">
    	<div class="item" style="background-image :url(<?php bloginfo('template_url'); ?>/img/slide1.jpg)"></div>
    	<div class="item" style="background-image :url(<?php bloginfo('template_url'); ?>/img/slide1.jpg)"></div>
	</div>

</div>


<div id="map-wrapper">
    <div class="container">
        <div class="box">
        	<div class="box-content">
        		<h1 class="box-heading">Château Lincoln</h1>

        		<p>Location d’appartements meublés (Bail Mensuel) et non-meublés (Bail Annuel). 1 ½ (Studio), 2 ½ (Alcôve), 3 ½ (1 Chambre à coucher), 4 ½ (2 Chambres à coucher).</p>

        		<p>Situé au Centre-Ville de Montréal, entre les rues Sainte-Catherine, Sherbrooke, Atwater et Guy, notre immeuble est bien connu de la clientèle universitaire de Concordia et McGill ainsi que des professionnels du monde des affaires. Nos tarifs de location sont parmi les plus compétitifs à Montréal, compte-tenu de notre localisation, de la qualité de nos appartements et de notre service courtois.</p>
        		<p>Bienvenue aux nouveaux arrivants à la recherche d’un premier pied-à-terre ou d’une adresse permanente au cœur de la ville de Montréal.</p>

        		<a href="<?php echo home_url(); ?>/galerie-photos" class="button">Commencez votre visite</a>
        	</div>
        </div>
    </div>
    <div id="map"></div>
</div>



<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
// The latitude and longitude of your business / place
var position = [27.1959739, 78.02423269999997];
 
function showGoogleMaps() {
    

    // Create an array of styles.
  var styles = [
      {
        "featureType": "administrative",
        "stylers": [
          { "visibility": "off" }
        ]
      },{
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
          { "color": "#f6f5eb" }
        ]
      },{
        "featureType": "poi",
        "elementType": "labels",
        "stylers": [
          { "visibility": "off" }
        ]
      },{
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
          { "color": "#ede9cf" }
        ]
      },{
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
          { "visibility": "simplified" },
          { "color": "#ffffff" }
        ]
      },{
        "featureType": "road",
        "elementType": "labels.text",
        "stylers": [
          { "visibility": "simplified" },
          { "color": "#5e646e" }
        ]
      },{
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
          { "color": "#9fa4ad" }
        ]
      },{
        "featureType": "transit.station",
        "elementType": "labels.text",
        "stylers": [
          { "visibility": "simplified" },
          { "color": "#9fa4ad" }
        ]
      },{
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
          { "color": "#9fa4ad" }
        ]
      },{
      }
    ];

    var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});

    var latLng = new google.maps.LatLng(position[0], position[1]);
 
    var mapOptions = {
        zoom: 16, // initialize zoom level - the max value is 21
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: latLng,
        zoomControl: false,
        scaleControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true,
        mapTypeControl: false
    };
 
    map = new google.maps.Map(document.getElementById('map'),
        mapOptions);
 	
 	  if(jQuery(window).width() > 641 && jQuery(window).width() < 767){
      var myIcon = new google.maps.MarkerImage("<?php bloginfo('template_url'); ?>/img/map-marker.png", new google.maps.Size(50, 59), null, new google.maps.Point(50, 40));
    }
    else if(jQuery(window).width() < 641){
      var myIcon = new google.maps.MarkerImage("<?php bloginfo('template_url'); ?>/img/map-marker.png", new google.maps.Size(50, 59), null, new google.maps.Point(14, 40));
    }else{
      var myIcon = new google.maps.MarkerImage("<?php bloginfo('template_url'); ?>/img/map-marker.png", new google.maps.Size(50, 59), null, new google.maps.Point(380, 60));
    }
    
    // Show the default red marker at the location
    marker = new google.maps.Marker({
        position: latLng,
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP,
        icon: myIcon
    });

    //Associate the styled map with the MapTypeId and set it to display.
      map.mapTypes.set('map_style', styledMap);
      map.setMapTypeId('map_style');
}
google.maps.event.addDomListener(window, 'load', showGoogleMaps);
</script>

<?php get_footer(); ?>