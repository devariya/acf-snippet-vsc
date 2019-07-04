<?php if ( get_field('+{1:field_name}') ) :
    $location = get_field('+{1:field_name}');
    $coordinates = isset( $location['coordinates'] ) ? $location['coordinates'] : $location ; ?>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
        google.maps.event.addDomListener(window, 'load', function() {
            var map = new google.maps.Map(document.getElementById('map-canvas'), {
                zoom: 16,
                center: new google.maps.LatLng(<?php echo $coordinates; ?>),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false
            });

            new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $coordinates; ?>),
                map: map
            });
        });
    </script>

    <style>
    #map-canvas img {
        max-width: inherit;
    }
    </style>

    <div id="map-canvas" style="width:+{2:500px};height:+{3:300px};"></div>

<?php endif; ?>
