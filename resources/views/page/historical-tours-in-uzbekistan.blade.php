<section class="vc_row">
    <div class="container">
        <div class="row">

            <div class="lqd-column col-md-8 col-md-offset-2 px-md-5">

                <header class="lqd-fancy-title text-justify mb-5">
                    <h2 class="text-uppercase mt-0 mb-1" align="center">HISTORICAL TOURS</h2>
                    <p class="text-dark" style="line-height:1">The history of Uzbekistan, Central Asia’s cradle of culture, located between two large rivers Amu Darya and Syr Darya, has its roots in the fabled Silk Road and is threaded throughout its modern-day existence. Its unique and fascinating architecture is the legacy of countless conquests and empires over two millennia. </p>

                            <p class="text-dark" style="line-height:1">The charm of its magnificent titled cities and vast deserts is inescapable. Tashkent, Khiva, Bukhara and Samarkand were key stop-offs for traders and have all been painstakingly restored to their former glory.  </p>

                                    <p class="text-dark" style="line-height:1">Discover the Silk Road splendour with Chortoq travels while roaming through the centuries around great walled cities, spellbinding architecture, royal pavilions set in rose gardens, and shimmering turquoise domes, mosques, mausoleums and madrasas. These cities are living museums and home to many extraordinary sites, some of which are protected by UNESCO. </p>

                                          
                </header><!-- /.lqd-fancy-title -->

            </div><!-- /.lqd-column col-md-8 col-md-offset-2 -->
            @foreach ($content as $key)
            <div class="lqd-column col-md-4">
                
                <a href="{{ $key->url }}">
                <div class="fancy-box content-box-heading-sm fancy-box-tour">
                    <figure class="fancy-box-image loaded">
                        <img width="564" height="500" src="{{asset($mainPoint.'assets/img/historic/'.$key->id.'.jpg')}}" alt="Embrace The Wonders Of Japan 2017 Tour">
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

@include('home.awards')
