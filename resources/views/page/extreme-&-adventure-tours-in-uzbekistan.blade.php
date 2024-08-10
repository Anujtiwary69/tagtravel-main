<section class="vc_row">
    <div class="container">
        <div class="row">

            <div class="lqd-column col-md-12  px-md-5">

                <header class="lqd-fancy-title text-justify mb-30">
                    <h3 class="text-uppercase mt-0 mb-1" align="center">{{ ucwords(str_replace('-',' ',$uri)) }}</h3>
                    <p class="text-dark" style="line-height:1" >Uzbekistan is a destination beyond the ordinary – alive with natural wonders, wilderness adventures and experts who can get you close to the edge. It is both unexpectedly exciting and incredibly unique with endless scorching deserts, magnificent green valleys, gorgeous waterfalls and glaciers, picturesque snowy mountains, colossal peaks, wide open steppes, scenic beaches and untouched spots for a true sense of freedom and uplifting remoteness.</p><p class="text-dark" style="line-height:1">
                        For those in search of exhilarating adventure, this beautiful country offers plenty of thrilling outdoor activities ranging from rock climbing to trekking along the Aral Sea, car and motorcycle rallies, hiking, wild camping, kayaking, surfing, zipping across the sand, adrenaline packed cable rides, coasteering, fishing, biking, horse riding, paragliding and awe-inspiring nature and wildlife tours. 
                        </p>
                        <p class="text-dark" style="line-height:1">
                        We will take you as far as you would like to go to experience places, people and things that are extraordinary such as the Cave of Amir Temur or the beautiful villages of Kul and Gilan or the ‘Stone Forest’ in the Djarkuduk Tract. Authentic accommodation and local transportation will allow you to step off the beaten path.
                        </p>
                        <p class="text-dark" style="line-height:1" >A tailor-made tour can be created for you or a group by our Chortoq travels experts based on your schedule, style and interests.</p>
                </header><!-- /.lqd-fancy-title -->

            </div><!-- /.lqd-column col-md-8 col-md-offset-2 -->

 @foreach ($content as $key)
            <div class="lqd-column col-md-4">
                
                <a href="{{ $key->url }}">
                <div class="fancy-box content-box-heading-sm fancy-box-tour">
                    <figure class="fancy-box-image loaded">
                        <img width="564" height="500" src="{{asset($mainPoint.'assets/img/extreme/'.$key->img.'.jpg')}}" alt="Embrace The Wonders Of Japan 2017 Tour">
                    </figure>
                    <div class="fancy-box-contents mt-0 pt-1">
                        <div class="fancy-box-header">
                            <h3 class="font-weight-semibold mt-1 text-dark" style="line-height:1 !important;">{!! $key->name !!}</h3>

                        </div><!-- /.fancy-box-header -->
                        <div class="fancy-box-info">
                            <div class="fancy-box-cell" data-text="Duration">
                                <h5 class="mb-0 mt-0">
                                     {{ $key->day }} days
                                 <small>{{ $key->night }} nights</small>
                                 </h5>
                            </div>
                            {!! $key->content !!}
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit</p> --}}
                        </div><!-- /.fancy-box-info -->
                    </div><!-- /.fancy-box-contents -->
                     <div class="fancy-box-footer">
                       <h6> Starting <strong>${{ $key->price }}</strong> </h6>
                    </div><!-- /.fancy-box-footer -->
                </div>
            </a>
               

            </div><!-- /.lqd-column col-md-4 -->
            @endforeach




        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

