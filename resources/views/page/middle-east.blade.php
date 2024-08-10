<section class="vc_row bg-gray bg-gray pt-1" >
    <div class="container">
        <div class="row">

            <div class="lqd-column col-md-8 col-md-offset-2 px-md-5">

                <header class="lqd-fancy-title text-center mb-30">
                    <h2 class="text-uppercase mt-0 mb-1">{{ str_replace('-',' ',Request::path()) }}</h2>
                    <p class="text-dark" style="line-height:1">The Middle East is a cradle of civilisations. History is the heart and soul of the land from the Pyramids of ancient Egypt, to the tombs and temples of Petra and Persepolis. Explore the tastes and traditions of the region along with magnificent cities or wander into wilderness  with Chortoq travels</p>
                </header><!-- /.lqd-fancy-title -->

            </div><!-- /.lqd-column col-md-8 col-md-offset-2 -->
            @foreach ($middle_east as $key)

            <a href="/{{str_replace(' ','-',strtolower($key))}}">

                <div class="lqd-column col-md-4 ">

                    <div
                    class="fancy-box fancy-box-small fancy-box-travel"
                    data-slideelement-onhover="true"
                    data-slideelement-options='{ "visibleElement": ".fancy-box-header", "hiddenElement": ".fancy-box-info" }'>

                        <figure class="fancy-box-image" data-responsive-bg="true">
                            <img width="1550" height="1000" @php $mainPoint @endphp '.assets/img/des/{{ Request::path() }}/{{ $key }}.jpg" alt="Italy & Sicily" />
                        </figure>

                        <div class="fancy-box-contents">
                            <div class="fancy-box-header">
                                {{--  <span class="fancy-box-time bg-secondary"> 12 tours </span>  --}}
                                <h3>{{ $key }}</h3>
                            </div>
                            <div class="fancy-box-info">
                                {{--  <p>Explore South America holidays and discover the best time and places to visit.</p>  --}}
                                <div class="fancy-box-footer">
                                    <a href="#" class="btn btn-naked text-uppercase ld_button_5d4d4c6052ca2">
                                        <span>
                                            <span class="btn-txt">Learn More</span>
                                            <span class="btn-icon">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </span>
                                        </span>
                                    </a>
                                </div><!-- /.fancy-box-footer -->
                            </div><!-- /.fancy-box-info -->
                        </div><!-- /.fancy-box-contents -->

                    </div><!-- /.fancy-box -->
                </div><!-- /.lqd-column col-md-4 -->
            </a>


            @endforeach



        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
