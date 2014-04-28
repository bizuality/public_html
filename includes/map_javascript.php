<script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(33.8046811,-81.4970036),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
        map.set('styles', [
			{
				featureType: 'landscape.natural',
				elementType: 'all',
				stylers: [
					{ hue: '#00efa0' },
					{ saturation: 100 },
					{ lightness: -51 },
					{ visibility: 'on' }
				]
			},
			{
				featureType: 'road',
				elementType: 'geometry',
				stylers: [
					{ hue: '#ffffff' },
					{ saturation: -100 },
					{ lightness: 100 },
					{ visibility: 'on' }
				]
			},
			{
				featureType: 'water',
				elementType: 'all',
				stylers: [
					{ hue: '#0a5175' },
					{ saturation: 71 },
					{ lightness: -67 },
					{ visibility: 'on' }
				]
			}
		]);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
</script>