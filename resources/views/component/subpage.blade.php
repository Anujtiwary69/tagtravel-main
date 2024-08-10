<section class="vc_row pt-85 pb-60">
    <div class="container">
        <div class="row d-md-flex flex-wrap align-items-center mb-60">
            <div class="lqd-column col-md-12">
                <header class="fancy-title mb-md-0">
                    <h2 class="text-uppercase ltr-sp-0 text-center">{{ $data['content']->name }}</h2>
                </header>
            </div>
            
        </div>
       
        <div class="row">
            <div class="lqd-column col-md-12">
                <div class="liquid-blog-posts">
                    <div class="liquid-blog-grid row">
                     @foreach($data['subpage'] as $key)
                        <div class="lqd-column col-md-4">
                            <article class="liquid-lp">
                                <figure class="liquid-lp-media">
                                    <a href="#">
                                        <img src="{{ asset('/assets/img'.$key->img.'.jpg') }}" alt="Lates Post">
                                    </a>
                                </figure>
                                <header class="liquid-lp-header">
                                    <h2 class="liquid-lp-title h4"><a href="#">{{ $key->name }}</a></h2>
                                </header>
                                <div class="liquid-lp-excerpt">
                                   {!! $key->content !!}
                               
                            </article>
                        </div>
                        @endforeach
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>