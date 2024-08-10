<!DOCTYPE html>
<html lang="en">

	<head>
        @include('layouts.head')
		<style>
			/* Initially, hide the header */
.main-header {
  transition: all 0.5s ease; /* Smooth transition */
}

/* Sticky header style */
.sticky-headerr {
  background-color: #333; /* Example sticky header style */
}

/* New class to be added with animation */
.slide-down {
  transform: translateY(0); /* Slide down */
  opacity: 1; /* Fade in */
}
</style>
	</head>

	<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-align="left" data-mobile-nav-style="modern"
		data-mobile-nav-shceme="gray" data-mobile-header-scheme="gray" data-mobile-nav-breakpoint="1199">

		<div id="wrap">

			@include('layouts.header',['menu'=>$menu])

			<main id="content" class="content">

			@yield('content')


			</main><!-- /#content.content -->
            @include('layouts.footer')


		</div><!-- /#wrap -->

		<script src="{{asset('/assets/vendors/jquery.min.js')}}"></script>
		<script src="{{asset('/assets/js/theme-vendors.js')}}"></script>
		<script src="{{asset('/assets/js/theme.min.js')}}"></script>
        <script src="{{asset('/assets/js/liquidAjaxMailchimp.min.js')}}"></script>
        <script src="{{asset('/assets/lazysizes.min.js')}}" async></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $(window).scroll(function() {
	
    if ($(document).scrollTop() > 1000) {
      $(".main-header").addClass("sticky-header");
	  $('.PageBooking').show()
    } else {
		setTimeout(function() {
        $(".main-header").removeClass("sticky-headerr").addClass("slide-down");
		$('.PageBooking').hide()
	}, 5000); // Delay of 1000 milliseconds (1 second)
    }

	  if ($(document).scrollTop() > 620) {
      $(".bookingform").removeClass('hide');
    } else {
      $(".bookingform").addClass('hide');
    }
  });
});
</script>



	</body>

</html>
