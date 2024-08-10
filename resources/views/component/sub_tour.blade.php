     @foreach ($content as $key)
            <div class="lqd-column col-md-4 mb-5">
                @if($key->custom_url)
                <a href="{{ $key->url }}">
                @else
                 <a href="/tour-detail/{{ $key->id }}">
                @endif
                <div class="fancy-box content-box-heading-sm fancy-box-tour">
                    <figure class="fancy-box-image loaded">
                     @if($key->custom_url)
                       <img width="564" height="500" src="{{asset('/assets/img/'.$key->img.'.jpg')}}" alt="{{ $key->name }}">
                     @else
                       <img width="564" height="500" src="{{asset('/assets/img/'.$path.'/'.$key->img.'.jpg')}}" alt="{{ $key->name }}">
                     @endif
                      
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
                          
                        </div><!-- /.fancy-box-info -->
                    </div><!-- /.fancy-box-contents -->
                     <div class="fancy-box-footer">
                     @if($key->price !="0")
                       <h6> Starting <strong>${{ $key->price }}</strong> </h6>
                    @else
                       <h6> Price: <strong>On Request</strong> </h6> 
                    @endif
                    </div><!-- /.fancy-box-footer -->
                </div>
            </a>
               

            </div><!-- /.lqd-column col-md-4 -->
            @endforeach