@extends('layout.app')

@section('content')
    @if(app()->getLocale()=='ar')
        @include('layout.navigation_ar',['data'=>$data])
    @else
        @include('layout.navigation',['data'=>$data])
    @endif
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
          height: 100%;
          position: unset;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
          height: 100%;
          margin: 0;
          padding: 0;
        }
      </style>

      <main class="body-margin bg-color" >
            {{-- /main container starts here --}}
          @include('layout.slider',['slide'=>$slide])
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-sm-12 col-mg-12 col-lg-12">
                    <h2 class="text-center">@lang('home.Connect With Us') </h2>
                </div>
            </div>

        </div>
      </main>
      <main class="zIndex-minus" @if(app()->getLocale()=='ar') style="direction:rtl;" @endif>
       <div class="container">
            {{-- //forcast and info --}}
            <div class="row pt-5 pb-5">
                    <div class="col-sm-12 col-lg-12 col-mg-12">
                            <div id="map" style="height:472px;"></div>
                    </div>
                </div>
            <div class="row pt-5 pb-5">
                            <div class="col-sm-4 col-lg-4 col-md-4">
                                    <h4 class="upcoming-weather text-dark">@lang('home.Upcoming Weather') </h4>
                                  <div class="row">

                                        <div class="col text-center">
                                                <div  class="forcast-controller-view"style="">
                                                        <p style="margin-bottom:10px;">
                                                                <i class="icon-cloud-sun" ></i>
                                                        </p>

                                                            <p>
                                                                    <span class="temperature-value-day">TOD</span>
                                                            </p>
                                                            <p class=""><span class="temperature-value" data-init-value="59" style="font-weight: 600;color:#000;">{{round($forecast[0][1])}}/</span><span class="temperature-value" data-init-value="82" style="font-weight: 600;color:#000;">{{round($forecast[0][0])}}°F</span><span class="temperature-value"></span></p>
                                                    </div>
                                            </div>
                                    <div class="col text-center">
                                        <div  class="forcast-controller-view"style="">
                                            <p style="margin-bottom:10px;">
                                                    <i class="icon-cloud-sun" ></i>
                                            </p>

                                                <p>
                                                        <span class="temperature-value-day text-uppercase">{{date('D', strtotime(date('Y-m-d') . ' +1 day'))}}</span>
                                                </p>
                                                <p class=""><span class="temperature-value" data-init-value="59" style="font-weight: 600;color:#000;">{{round($forecast[2][1])}}/</span><span class="temperature-value" data-init-value="82" style="font-weight: 600;color:#000;">{{round($forecast[2][0])}}°F</span><span class=temperature-value"></span></p>
                                        </div>
                                    </div>
                                    <div class="col text-center">
                                            <div  class="forcast-controller-view"style="">
                                                    <p style="margin-bottom:10px;">
                                                            <i class="icon-cloud-sun" ></i>
                                                    </p>

                                                        <p>
                                                                <span class="temperature-value-day text-uppercase">{{date('D', strtotime(date('Y-m-d') . ' +2 day'))}}</span>
                                                        </p>
                                                        <p class=""><span class="temperature-value" data-init-value="59" style="font-weight: 600;color:#000;">{{round($forecast[1][1])}}/</span><span class="temperature-value" data-init-value="82" style="font-weight: 600;color:#000;">{{round($forecast[1][0])}}°F</span><span class="temperature-value"></span></p>
                                                </div>
                                    </div>
                                  </div>

                              </div>
                              <div class="col-sm-8 col-md-8 col-lg-8">
                                  <div class="row">
                                      <div class="col text-right">
                                            <h4 class="upcoming-weather text-dark">@lang('home.Driving Directions') </h4>
                                            <h6 class="text-dark"><b></b>@lang('home.LEVA Hotels & Resorts')</h6>
                                            <p class="text-dark">@lang('home.address')
                                                    .</p>
                                      </div>
                                      <div class="col">
                                          <label class="text-dark">@lang('home.location')</label>

                                            <input type="email" name="search_location" id="email_newsletter" class="form-control custom-input mb-3" placeholder="@lang('home.location')">
                                            <ul class="list-group col" style="margin-top:-1%;color: #000 !important;" id="search_result">
                                                </ul>
                                            <input type="submit" class="btn btn-success" value="@lang('home.Get Directions')"  id="get_location"   style="float:left;border-radius:0px;background-color:#000;border-width:0px;">

                                      </div>
                                  </div>


                              </div>


                </div>
        </div>
        {{-- //map and Foreast info ends here --}}



        {{-- <div class="row" style="background-color: #fff;height: 10px;">

        </div>
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 mt-5 mb-5 ">
                    <h2 class="text-center text-dark">@lang('home.For Business Development or Third Party Management')</h2> --}}
                    {{--  <p class="text-center text-dark">@lang('home.contact_de')</p>  --}}
                {{-- </div>
            </div> --}}

            {{-- <div class="row">
                    
                        <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="left-airpot-info">
                                    <h3 class="text-dark pb-0 mb-0">Dan Dennis</h3>
                                    <p>Executive Advisor – Development</p>
                                    <p><a href="mailto:dan@stayleva.com">dan@stayleva.com</a></p>
                                    
                                </div>
                        </div>
                     
                </div>
                
            </div>
    </div> --}}
    <div class="row" style="background-color: #fff;height: 10px;">

        </div>
        <div class="container mb-5">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 mt-5 mb-5 ">
                        <h2 class="text-center text-dark">@lang('home.Corporate Support')</h2>
                        {{--  <p class="text-center text-dark">@lang('home.contact_de')</p>  --}}
                    </div>
                </div>
    
                <div class="row">
                        
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="left-airpot-info">
                                       <h3 class="text-dark pb-0 mb-0">Daryll B. Diagro</h3>
                                        {{-- <a>Mobile no.: <a href="tel:+971 52 718 2938">+971 52 718 2938</a></a> --}}
                                         <p>Corporate Development Support</p>
                                            <p><a href="tel:+971 4 526 6005">+971 4 526 6005</a></p>
                                        <p><a href="mailto:daryll@stayleva.com">daryll@stayleva.com</a></p>
                                        
                                    </div>
                            </div>
                            
                    </div>
                    
                </div>
                <div class="row" style="background-color: #fff;height: 10px;">

                    </div>
        <div class="container mb-5">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 mt-5 mb-5 ">
                        <h2 class="text-center text-dark">@lang('home.Need help?') </h2>
                        <p class="text-center text-dark">@lang('home.contact_de')</p>
                    </div>
                </div>
                <div class="row">
                        
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="left-airpot-info">
                                    <p class="l-s-col-4 l-s-col-last l-m-col-4 l-l-col-4" style="justify-content: center;
                                    display: flex;
                                    align-items: center;"><ion-icon name="mail-unread" size="large"></ion-icon>&nbsp; reservations.sz@stayleva.com</p>
                                    </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="left-airpot-info">
                                    <p class="l-s-col-4 l-s-col-last l-m-col-4 l-m-col-last l-l-col-4" style="justify-content: center;
                                    display: flex;
                                    align-items: center;"><ion-icon name="call" size="large"></ion-icon>&nbsp; +97145266000</p>
                            </div>
                    </div>
                </div>
        </div>
        {{-- <div class="row" style="background-color: #f4f4f4;height: 25px;">

        </div>                 --}}

        @include('layout.booking_form_default_bottom');

        </main>



@endsection

@section('script')
            <script>
                // var map;
                // function initMap() {
                // map = new google.maps.Map(document.getElementById('map'), {
                //     center: {lat: 25.1991361, lng: 55.2569294},
                //     zoom: 8
                // });
                // }
                function initMap() {
                    // The location of Uluru
                    var uluru = {lat: 25.198680, lng: 55.265013};
                    // The map, centered at Uluru
                    var map = new google.maps.Map(
                        document.getElementById('map'), {zoom: 15, center: uluru});
                    // The marker, positioned at Uluru
                    var marker = new google.maps.Marker({position: uluru, map: map});
                }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiU9rJAW80g48SRYFa8Yd4btxwrnq_oQ4&callback=initMap"
        async defer></script>
        <script type="text/javascript" 
        src="http://maps.google.com/maps/api/js?key=AIzaSyAiU9rJAW80g48SRYFa8Yd4btxwrnq_oQ4"></script>
        @section('script')
		<script>
			$(document).ready(function(){

				//location search
				$('input[name=search_location]').keyup(function(){
					// alert(1);
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					var query = $(this).val();
					$.ajax({
						type: 'GET',
						url: '/get/location?query=' + query,
						success: function(data) {
							$("#search_result").html(data);
						},
						error: function(data) {
							console.log(data);
						}
					});
					//on selection of list
					$('body').on('click', '.list-group-item', function (){
						var value_search =  $(this).text();
						$('input[name=search_location]').val(value_search);
						$('.list-group-item').remove();

					})

                });
                
                //click on get location

                $('#get_location').click(function(){
                    var orgin_value = $('input[name=search_location]').val();
                    var directionsService = new google.maps.DirectionsService();
                    var directionsDisplay = new google.maps.DirectionsRenderer();
               
                    var map = new google.maps.Map(document.getElementById('map'), {
                      zoom:7,
                      mapTypeId: google.maps.MapTypeId.ROADMAP
                    });
                   
                    directionsDisplay.setMap(map);
                    directionsDisplay.setPanel(document.getElementById('panel'));
               
                    var request = {
                      origin: orgin_value, 
                      destination: 'LEVA Hotel , Mazaya Centre, Mazaya Centre - Sheikh Zayed Collector Rd - Dubai',
                      travelMode: google.maps.DirectionsTravelMode.DRIVING
                    };
               
                    directionsService.route(request, function(response, status) {
                      if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                      }
                    });
                });
                    
                 
			});
		</script>

@endsection
