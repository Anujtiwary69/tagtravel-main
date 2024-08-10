<section class="vc_row">
    <div class="container">
        <div class="row">

            <div class="lqd-column col-md-8 col-md-offset-2 px-md-5">

                <header class="lqd-fancy-title text-justify mb-30">
                    <h3 class="text-uppercase mt-0 mb-1" align="center">{{ ucwords(str_replace('-',' ',$uri)) }}</h3>
                </header>
                <!-- /.lqd-fancy-title -->

            </div>
            <!-- /.lqd-column col-md-8 col-md-offset-2 -->


            <div class="row">
                <div class="lqd-column col-md-12">
                    <div class="liquid-blog-posts">
                        <div class="liquid-blog-grid row">
                            @foreach($data['press'] as $key)
                            <a href="/press/view/{{ str_replace(' ','-',$key->name) }}">
                                <div class="lqd-column col-md-3">
                                    <article class="liquid-lp">
                                        <figure class="liquid-lp-media">
                                            <a href="/press/view/{{ str_replace(' ','-',$key->name) }}">
                                            <img src="{{ asset('/assets/img/press') }}/{{ $key->img }}?rand=234234" alt="Lates Post">
                                        </a>
                                        </figure>
                                        <header class="liquid-lp-header">
                                            <h2 class="liquid-lp-title h4"><a href="#">{{ $key->name }}</a></h2>
                                        </header>
                                        <div class="liquid-lp-excerpt">
                                            <p>{{ $key->des }}</p>
                                        </div>
                                        <footer class="liquid-lp-footer">
                                            <a href="/press/view/{{ str_replace(' ','-',$key->name) }}" class="btn btn-naked text-uppercase font-weight-bold liquid-lp-read-more">
                                                <span>
                                                <span class="btn-txt">Read more</span>
                                                </span>
                                            </a>
                                        </footer>
                                    </article>
                                </div>
                            </a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>