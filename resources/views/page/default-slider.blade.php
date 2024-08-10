{{-- <section class=" fullheight" data-row-bg="{{asset($mainPoint.'assets/img/slider/'.$slider.'.jpg')}}?rand={{ rand() }}">

				<span class="row-bg-loader"></span>

				<div class="container">
					<div class="row d-flex flex-wrap align-items-center">

						<div
							class="lqd-column col-md-6"
							data-custom-animations="true"
							data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"150", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":60, "translateZ":-160, "rotateX":-84, "opacity":0}, "animations":{"translateY":0, "translateZ":0, "rotateX":0, "opacity":1} }'
						>





						</div><!-- /.col-md-6 -->



			</section> --}}
			@php
    $mainPoint = config('app.env') === 'production' ? '/public/' : '/';
@endphp

			<section>
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active @if($slider=='gift-vouchers') mt-5 @endif">
      <img class="d-block w-100" src="{{asset($mainPoint.'assets/img/slider/'.$slider.'.jpg')}}?rand={{ rand() }}" alt="{{ $slider }}">
    </div>
  </div>
</div>

			</section>
