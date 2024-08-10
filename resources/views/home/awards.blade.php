<section class="vc_row bg-gray mt-3 ">
    <div class="container pt-3 pb-3">
        <div class="row">
            <center>

            <div class="lqd-column col-md-12  px-md-5">

                <header class="lqd-fancy-title text-center mb-30">
                    <h2 class="text-uppercase mt-0 mb-1">AWARDS</h2>
                    <p class="text-dark" style="line-height:1">Chortoq travels has been recognised at every step of our journey with the most prestigious awards and honours making us the most trusted and loved brand in Central Asia. </p>
                </header><!-- /.lqd-fancy-title -->

            </div><!-- /.lqd-column col-md-8 col-md-offset-2 -->
            </div>
             <div class="row" style="display: inline-flex;
    vertical-align: middle;
    justify-content: center;
    align-items: center;">
    @foreach(range(4,9) as $key)
            <div class="lqd-column col-md-2 mb-1">
                <img src="{{ asset($mainPoint ..assets/img/awards/{{ $key }}.png"/>
            </div><!-- /.lqd-column col-md-4 -->
          
@endforeach
</div>
        </center>

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
