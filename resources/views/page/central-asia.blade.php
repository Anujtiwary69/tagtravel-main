<section class="vc_row bg-gray bg-gray pt-1" >
    <div class="container">
        <div class="row">

            <div class="lqd-column col-md-8 col-md-offset-2 px-md-5">

                <header class="lqd-fancy-title text-center mb-30">
                    <h2 class="text-uppercase mt-0 mb-1">{{ str_replace('-',' ',Request::path()) }}</h2>
                    <p class="text-dark" style="line-height:1">With spectacular deserts and mountains, medieval blue-domed architecture, bustling bazaars, ancient cities and little-known tribes, the republics of Central Asia offer romance of the Silk Road, drama, intrigue and natural wonders galore. Embark on an epic journey of Central Asia with Chortoq travels.</p>
                </header><!-- /.lqd-fancy-title -->

            </div><!-- /.lqd-column col-md-8 col-md-offset-2 -->
            @foreach ($central_asia as $key)

            <a href="{{ route('centralasia',[strtolower($key[1])])}}">

                <div class="lqd-column col-md-4 ">

                    <div
                    class="fancy-box fancy-box-small fancy-box-travel"
                    data-slideelement-onhover="true"
                    data-slideelement-options='{ "visibleElement": ".fancy-box-header", "hiddenElement": ".fancy-box-info" }'>

                        <figure class="fancy-box-image" data-responsive-bg="true">
                            <img width="1550" height="1000" @php $mainPoint @endphp '.assets/img/des/{{ Request::path() }}/{{ $key[0] }}.jpg" alt="Italy & Sicily" />
                        </figure>

                        <div class="fancy-box-contents">
                            <div class="fancy-box-header">
                                {{--  <span class="fancy-box-time bg-secondary"> 12 tours </span>  --}}
                                <h3>{{ $key[1] }}</h3>
                            </div>
                            <div class="fancy-box-info">
                                {{--  <p>Explore South America holidays and discover the best time and places to visit.</p>  --}}
                                <div class="fancy-box-footer">
                                    <a href="{{ route('centralasia',[$key[1]])}}" class="btn btn-naked text-uppercase ld_button_5d4d4c6052ca2">
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
