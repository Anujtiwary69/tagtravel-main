<section class="vc_row">
    <div class="container">
        <div class="row">

            <div class="lqd-column col-md-8 col-md-offset-2 px-md-5">

                <header class="lqd-fancy-title text-justify mb-30">
                    <h3 class="text-uppercase mt-0 mb-1" align="center">{{ ucwords(str_replace('-',' ',$uri)) }}</h3>
                    <p class="text-dark" style="line-height:1" >Home to the legendary cities of Tashkent, Samarkand, Bukhara and Khiva, Uzbekistan is the heart of Silk Road in Central Asia and promises to take travellers on an experiential and transformational travel. Its proud legacy is reflected in its magnificent monuments and iconic architecture. </p>

                    <p class="text-dark" style="line-height:1" >As you wander around its fabled cities and villages walking in the footsteps of emperors and warriors, it invites you to discover its ancient ruins and relics, fascinating culture, dramatic landscapes and spectacular mountains, deserts, lakes, and other natural splendours.</p>

                    <p class="text-dark" style="line-height:1" >Uzbekistan also has many unique geological sites and wonders of nature that inspire an inner journey of transformation leading to self-reflection and development while connecting with history, nature and culture. It beckons visitors to step into this unknown realm and ultimately benefit from its age-old traditions and wisdom for a higher consciousness – changing their lives as well as of those around them.</p>

                    <p class="text-dark" style="line-height:1" >Soak up the atmosphere in exotic markets, bazaars and caravanserais steeped in antiquity or live like a local in an eco-friendly Yurt camp that allows you to experience the centuries-old life, culture and traditions of nomadic people. Some of the most famous Yurt camps in Uzbekistan are Aidar camp located in the secluded Aidarkul lake, Safari camp near the city of Nurata, Muyank Yurt camp on the shore of the Aral Sea and Ayaz-Kala camp, among others. </p>

                     <p class="text-dark" style="line-height:1" >A tailor-made tour can be created for you or a group by our Chortoq travels experts based on your schedule, style and interests.</p>

    
                </header><!-- /.lqd-fancy-title -->

            </div><!-- /.lqd-column col-md-8 col-md-offset-2 -->

@foreach ($content as $key)
            <div class="lqd-column col-md-4">
                
                <a href="/tour-detail/{{ $key->id }}">
                <div class="fancy-box content-box-heading-sm fancy-box-tour">
                    <figure class="fancy-box-image loaded">
                        <img width="564" height="500" src="{{asset('/assets/img/transform/'.$key->img.'.jpg')}}" alt="Embrace The Wonders Of Japan 2017 Tour">
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

