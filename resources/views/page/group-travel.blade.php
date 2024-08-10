<section class="vc_row">
    <div class="container">
        <div class="row">

            <div class="lqd-column col-md-8 col-md-offset-2 px-md-5">

                <header class="lqd-fancy-title text-justify mb-30">
                    <h3 class="text-uppercase mt-0 mb-1" align="center">{{ ucwords(str_replace('-',' ',$uri)) }}</h3>
                </header><!-- /.lqd-fancy-title -->

            </div><!-- /.lqd-column col-md-8 col-md-offset-2 -->

 @foreach ($content as $key)
            <div class="lqd-column col-md-4">
                
                <a href="/{{ $key->url }}">
                <div class="fancy-box content-box-heading-sm fancy-box-tour">
                    <figure class="fancy-box-image loaded">
                        <img width="564" height="500" src="{{asset($mainPoint.'assets/img/'.$key->img.'.jpg')}}" alt="{{ $key->name }}">
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

