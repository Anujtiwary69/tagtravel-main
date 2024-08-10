<section class="vc_row bg-gray mt-3 ">
    <div class="container pt-3 pb-3">
        <div class="row">

            <div class="lqd-column col-md-8 col-md-offset-2 px-md-5">

                <header class="lqd-fancy-title text-center mb-30">
                    <h2 class="text-uppercase mt-0 mb-1">LIVE FEEDS</h2>

                </header><!-- /.lqd-fancy-title -->

            </div><!-- /.lqd-column col-md-8 col-md-offset-2 -->

            <div class="row text-center" style="margin-left: 10%; margin-right: 10%; padding-top: 50px; justify-content: center;">
                <div class="row">
                <div class="col-sm-4 live-feed-image" style="margin-top: 100px;">
                   <a href="{{ $data['instagram'][0]->permalink}}">
                       <div class="instagram-container">
                          <img src="{{ $data['instagram'][0]->media_url  }}" class="img-fluid instagram-logo lazy loading" data-was-processed="true">
                       </div>
                 </a>
                 <a href="{{ $data['instagram'][1]->permalink}}">
                       <div class="instagram-container">
                          <img src="{{ $data['instagram'][1]->media_url  }}" class="img-fluid instagram-logo lazy loading" data-was-processed="true">
                       </div>
                 </a>


              </div>
                   <div class="col-sm-4 live-feed-image">
                       <a href="{{ $data['instagram'][2]->permalink}}">
                             <div class="instagram-container">
                                <img src="{{ $data['instagram'][2]->media_url  }}" class="img-fluid instagram-logo lazy loading" data-was-processed="true">
                             </div>
                       </a>

                       <a href="{{ $data['instagram'][3]->permalink}}">
                        <div class="instagram-container">
                           <img src="{{ $data['instagram'][3]->media_url  }}" class="img-fluid instagram-logo lazy loading" data-was-processed="true">
                        </div>
                  </a>
                      <a href="{{ $data['instagram'][4]->permalink}}">
                          <div class="instagram-container">
                             <img src="{{ $data['instagram'][4]->media_url  }}" class="img-fluid instagram-logo lazy loading" data-was-processed="true">
                          </div>
                    </a>


                   </div>
                   <div class="col-sm-4 live-feed-image" style="margin-top: 100px;">
                       <a href="{{ $data['instagram'][5]->permalink}}">
                             <div class="instagram-container">
                                <img src="{{ $data['instagram'][5]->media_url  }}" class="img-fluid instagram-logo lazy loading" data-was-processed="true">
                             </div>
                       </a>
                       <a href="{{ $data['instagram'][6]->permalink}}">
                             <div class="instagram-container">
                                <img src="{{ $data['instagram'][6]->media_url  }}" class="img-fluid instagram-logo lazy loading" data-was-processed="true">
                             </div>
                       </a>

                 </div>
                </div>
             </div>



        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
