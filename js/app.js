(() => {
  // resources/js/app.js
  (function($) {
    function initMap($el) {
      var $markers = $el.find(".marker");
      var mapArgs = {
        zoom: $el.data("zoom") || 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map($el[0], mapArgs);
      map.markers = [];
      $markers.each(function() {
        initMarker($(this), map);
      });
      centerMap(map);
      return map;
    }
    function initMarker($marker, map) {
      var lat = $marker.data("lat");
      var lng = $marker.data("lng");
      var latLng = {
        lat: parseFloat(lat),
        lng: parseFloat(lng)
      };
      var marker = new google.maps.Marker({
        position: latLng,
        map
      });
      map.markers.push(marker);
      if ($marker.html()) {
        var infowindow = new google.maps.InfoWindow({
          content: $marker.html()
        });
        google.maps.event.addListener(marker, "click", function() {
          infowindow.open(map, marker);
        });
      }
    }
    function centerMap(map) {
      var bounds = new google.maps.LatLngBounds();
      map.markers.forEach(function(marker) {
        bounds.extend({
          lat: marker.position.lat(),
          lng: marker.position.lng()
        });
      });
      if (map.markers.length == 1) {
        map.setCenter(bounds.getCenter());
      } else {
        map.fitBounds(bounds);
      }
    }
    $(document).ready(function() {
      $(".acf-map").each(function() {
        var map = initMap($(this));
      });
    });
  })(jQuery);
})();
