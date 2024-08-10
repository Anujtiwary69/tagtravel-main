<!-- External JavaScripts
	============================================= -->
	<script src="{{asset($mainPoint.'assets/js/jquery.js')}}"></script>
	<script src="{{asset($mainPoint.'assets/js/plugins.js')}}"></script>

	<!-- Travel Demo Specific Script -->
	<script src="{{asset($mainPoint.'assets/js/components/datepicker.js')}}"></script>
	<!-- / -->

	<script src="https://maps.google.com/maps/api/js?key=YOUR_API_KEY"></script>
	<script src="{{asset($mainPoint.'assets/js/jquery.gmap.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset($mainPoint.'assets/js/functions.js')}}"></script>

	<script>

		$(function() {
			$('.travel-date-group').datepicker({
				autoclose: true,
				startDate: "today"
			});
		});

		jQuery(window).on( 'load', function(){

			jQuery('#popular-dest-map').gMap({
				address: 'Spain',
				maptype: 'ROADMAP',
				zoom: 2,
				markers: [
					{
						address: "Melbourne, Australia",
						icon: {
							image: "{{asset($mainPoint.'assets/images/icons/map-icon-red.png')}}",
							iconsize: [32, 39],
							iconanchor: [16,36]
						}
					},
					{
						address: "Ibiza, Spain",
						icon: {
							image: "{{asset($mainPoint.'assets/images/icons/map-icon-red.png')}}",
							iconsize: [32, 39],
							iconanchor: [16,36]
						}
					},
					{
						address: "New York",
						icon: {
							image: "{{asset($mainPoint.'assets/images/icons/map-icon-red.png')}}",
							iconsize: [32, 39],
							iconanchor: [16,36]
						}
					},
					{
						address: "Rio de Janeiro, Brazil",
						icon: {
							image: "{{asset($mainPoint.'assets/images/icons/map-icon-red.png')}}",
							iconsize: [32, 39],
							iconanchor: [16,36]
						}
					},
					{
						address: "Moscow, Russia",
						icon: {
							image: "{{asset($mainPoint.'assets/images/icons/map-icon-red.png')}}",
							iconsize: [32, 39],
							iconanchor: [16,36]
						}
					},
					{
						address: "Rome, Italy",
						icon: {
							image: "{{asset($mainPoint.'assets/images/icons/map-icon-red.png')}}",
							iconsize: [32, 39],
							iconanchor: [16,36]
						}
					},
					{
						address: "New Delhi, India",
						icon: {
							image: "{{asset($mainPoint.'assets/images/icons/map-icon-red.png')}}",
							iconsize: [32, 39],
							iconanchor: [16,36]
						}
					},
					{
						address: "Bangkok, Thailand",
						icon: {
							image: "{{asset($mainPoint.'assets/images/icons/map-icon-red.png')}}",
							iconsize: [32, 39],
							iconanchor: [16,36]
						}
					},
					{
						address: "Dubai",
						icon: {
							image: "{{asset($mainPoint.'assets/images/icons/map-icon-red.png')}}",
							iconsize: [32, 39],
							iconanchor: [16,36]
						}
					},
					{
						address: "Cape Town, South Africa",
						icon: {
							image: "{{asset($mainPoint.'assets/images/icons/map-icon-red.png')}}",
							iconsize: [32, 39],
							iconanchor: [16,36]
						}
					}
				],
				doubleclickzoom: false,
				controls: {
					panControl: false,
					zoomControl: true,
					mapTypeControl: false,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: false
				},
				styles: [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}]
			});
		});

	</script>
