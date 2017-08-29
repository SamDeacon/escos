<?php
/**
 * Template Name: Contact Page Template
 */
?>
<style>
   #map {
    height: 455px;
    width: 100%;
   }
   @media screen and (max-width: 768px) {
     #map {
      height: 70vw;
      min-height: 250px;
    }
   }
</style>
<div id="map"></div>
<?php $url = get_template_directory().'/assets/images/markerpng.png'; ?>
<?php $str = str_replace('\\', '/', $url); ?>
<script>
  function initMap() {
    var uluru = {lat: 52.2400861, lng: -3.154029};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 11,
      center: uluru,
      styles: [
    {
        "featureType": "administrative.locality",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative.locality",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative.locality",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ffffff"
            },
            {
                "weight": "0.75"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ded7c6"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ded7c6"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": 100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": 700
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#c3a866"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    }
]
    });
    // var mapMarker = 'https://s26.postimg.org/hiocbo35l/markerpng.png';
    var mapMarker = 'https://s26.postimg.org/g8qiwm9dl/marker55.png';

    var marker = new google.maps.Marker({
      position: uluru,
      icon: mapMarker,
      map: map
    });
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6DVdOa1s6oxcyEd9F_Rj-jrLvMOdAxdk&callback=initMap">
</script>
<div class="container intro-para colour-heading contact-page">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  <?php endwhile; ?>
</div>
<div class="contact-form-section">
    <div class="container intro-para colour-heading">
      <h3>Please use the contact details above, or feel free to fill in the form below. We'll get back to you ASAP.</h3>
      <br>
      <?php echo do_shortcode('[contact-form-7 id="56" title="Contact form 1"]'); ?>

    </div>

</div>
