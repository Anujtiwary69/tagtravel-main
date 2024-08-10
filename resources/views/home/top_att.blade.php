<section class="vc_row">
    <div class="container">
        <div class="row">

            <div class="lqd-column col-md-8 col-md-offset-2 px-md-5">

                <header class="lqd-fancy-title text-center mb-30">
                    <h2 class="text-uppercase mt-0 mb-1">TOP ATTRACTIONS</h2>
                    <p class="text-dark" style="line-height:1">Let us take you on a fascinating journey of the Silk Road to experience the region’s
                        history, traditions, culture, architecture, natural beauty and gastronomic delights.</p>
                </header><!-- /.lqd-fancy-title -->

            </div><!-- /.lqd-column col-md-8 col-md-offset-2 -->
            @foreach ($top_att as $key)
            <a href="/{{ str_replace(' ','-',$key[2]) }}">
            <div class="lqd-column col-md-4">
                @if($key[0]!="")
                <div class="fancy-box content-box-heading-sm fancy-box-tour">
                    <figure class="fancy-box-image loaded">
                        <img width="564" height="500" src="{{asset($mainPoint.'assets/img/att/'.$key[0].'.jpg')}}" alt="Embrace The Wonders Of Japan 2017 Tour">
                    </figure>
                    <div class="fancy-box-contents mt-0 pt-1 pb-1">
                        <div class="fancy-box-header">
                            <h3 class="font-weight-semibold mt-1 text-dark" style="line-height:1 !important;">{!! $key[1] !!}</h3>

                        </div><!-- /.fancy-box-header -->
                        <div class="fancy-box-info">
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit</p> --}}
                        </div><!-- /.fancy-box-info -->
                    </div><!-- /.fancy-box-contents -->
                     <div class="fancy-box-footer">
                        <h6> Know More </h6>
                        <span class="fancy-box-icon"><i class="icon-liquid_arrow_right"></i></span>
                    </div><!-- /.fancy-box-footer -->
                </div>
                @endif

            </div><!-- /.lqd-column col-md-4 -->
            </a>
            @endforeach



        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
