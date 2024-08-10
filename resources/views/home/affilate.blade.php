<section class="vc_row bg-gray mt-5 ">
    <div class="container pt-3 pb-3">
        <div class="row">
            <center>

            <div class="lqd-column col-md-12  px-md-5">

                <header class="lqd-fancy-title text-center mb-30">
                    <h2 class="text-uppercase mt-0 mb-1">Our Affiliates</h2>
                    
                </header><!-- /.lqd-fancy-title -->

            </div><!-- /.lqd-column col-md-8 col-md-offset-2 -->
            </div>
            <div class="row" style="display: inline-flex;
    vertical-align: middle;
    justify-content: center;
    align-items: center;">
                   @php $array = array('logo-a2','logo-a1','logo-a3-1') @endphp
                    @foreach($array as $key)
                            <div class="lqd-column col-md-2 mb-1">
                            <center>
                                @if($key == "logo-a2")
                                <img src="{{ asset($mainPoint . 'assets/img/logos/' . $key . '.png') }}" style="width: 65%; margin-left: 25px;" />
                            @else
                                <img src="{{ asset($mainPoint . 'assets/img/logos/' . $key . '.png') }}" style="width: 65%; margin-left: 25px;" />
                            @endif
                            </center>
                          
                            </div><!-- /.lqd-column col-md-4 -->
                        
                    @endforeach
            </div>
     
        </center>

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
