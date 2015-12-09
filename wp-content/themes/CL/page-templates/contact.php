<?php 
//Template Name: Contact
get_header(); ?>


<div id="contact-map-wrapper">
  <div id="map"></div>
  <div class="container">
    <div id="subway"></div>
  </div>
</div>
<div class="tab show-for-small-only text-center">
  <ul class="tabs">
    <li class="active"><a href="#plan">Plan</a></li>
    <li><a href="#metro">Métro</a></li>
  </ul>
</div>

<div class="container">
    <div class="box grey">
    	<div class="box-content">
    		<h1 class="box-heading">Nous contacter</h1>
        <?php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
    	</div>
    </div>
    <div class="row">
      <div class="medium-6 columns end">
        <div class="entry-content">
          <div class="row">
            <div class="medium-7 columns">
              <p><strong>1950 Avenue Lincoln, Suite 100 <br> 
              Montréal, QC H3H 2N8</strong></p>

              <p>Lundi au Vendredi : 9h - 17h <br> 
              Samedi au Dimanche : 11h - 17h</p>

              <p>Nos bureaux sont situés au rez-de-chaussé de l’édifice</p>
              
              <p>Tél :   514 931-7271 <br>
              Fax :  514 931-7272</p>
            </div>
            <div class="medium-5 columns hide-for-small-only">
              <ul class="tabs">
                <li class="active"><a href="#plan">Plan</a></li>
                <li><a href="#metro">Métro</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
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
 	
  
  if(jQuery(window).width() > 641 && jQuery(window).width() < 1025){
      var myIcon = new google.maps.MarkerImage("<?php bloginfo('template_url'); ?>/img/map-marker.png", new google.maps.Size(50, 59), null, new google.maps.Point(200, -50));
  }
  else if(jQuery(window).width() < 641){
    var myIcon = new google.maps.MarkerImage("<?php bloginfo('template_url'); ?>/img/map-marker.png", new google.maps.Size(50, 59), null, new google.maps.Point(14, 0));
  }else{
    var myIcon = new google.maps.MarkerImage("<?php bloginfo('template_url'); ?>/img/map-marker.png", new google.maps.Size(50, 59), null, new google.maps.Point(380, -50));
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