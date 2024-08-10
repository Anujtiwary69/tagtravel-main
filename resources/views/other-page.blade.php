@extends('layouts.app')

@section('content')
@php
    $mainPoint = config('app.env') === 'production' ? '/public/' : '/';
@endphp
  @include('page.default-slider',['slider'=>$uri,'mainPoint'=>$mainPoint])
  @include('layouts.booking')
  <section class="vc_row">
    <div class="container">
        <div class="row">

            <div class="lqd-column col-md-8 col-md-offset-2 px-md-5">

                <header class="lqd-fancy-title text-justify mb-30">
                @if($uri=="Gur-e-Amir-Mausoleum-in-Samarkand")
                    <h3 class="text-uppercase mt-0 mb-1" align="center">Gur-e-Amir Mausoleum in Samarkand</h3>
                 @elseif($uri=="Shah-i-Zinda-in-Samarkand")
                    <h3 class="text-uppercase mt-0 mb-1" align="center">Shah-i-Zinda in Samarkand </h3>
                @elseif($uri=="Tosh-Hovli-Palace-in-Khiva")
                    <h3 class="text-uppercase mt-0 mb-1" align="center">Tosh-Hovli Palace in Khiva  </h3>
                @elseif($uri=="why-tag-travels")
                <h3 class="text-uppercase mt-0 mb-1" align="center">Why Chortoq Travels</h3>
                @else
                    <h3 class="text-uppercase mt-0 mb-1" align="center">{{ ucwords(str_replace('-',' ',$uri)) }}</h3>
                @endif
                    
                    <div class="text-dark">
               
                    {!! $data['content'] !!}
               
                       
                    </div>

                    
    
                </header><!-- /.lqd-fancy-title -->

            </div>
            
            @if($uri=='contact-us')
<style>
form_main {
    width: 100%;
}
.form_main h4 {
    font-family: roboto;
    font-size: 20px;
    font-weight: 300;
    margin-bottom: 15px;
    margin-top: 20px;
    text-transform: uppercase;
}
.heading {
    border-bottom: 1px solid #fcab0e;
    padding-bottom: 9px;
    position: relative;
}
.heading span {
    background: #9e6600 none repeat scroll 0 0;
    bottom: -2px;
    height: 3px;
    left: 0;
    position: absolute;
    width: 75px;
}   
.form {
    border-radius: 7px;
    padding: 6px;
}
.txt[type="text"] {
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt_3[type="text"] {
    margin: 10px 0 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt2[type="submit"] {
    background: #dd3870 none repeat scroll 0 0;
    border: 1px solid #dd3870;
    border-radius: 25px;
    color: #fff;
    font-size: 16px;
    font-style: normal;
    line-height: 35px;
    margin: 10px 0;
    padding: 0;
    text-transform: uppercase;
    width: 30%;
}
.txt2:hover {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    color: #5793ef;
    transition: all 0.5s ease 0s;
}

</style>
<div class="container mt-0">
	<div class="row">
    <div class="col-md-4 col-md-offset-4">
		<div class="form_main">
                {{-- <h4 class="heading"><strong>Quick </strong> Contact <span></span></h4> --}}
                <div class="form">
                <form action="contact_send_mail.php" method="post" id="contactFrm" name="contactFrm">
                    <input type="text" required="" placeholder="Your Name*" value="" name="name" class="txt">
                    <input type="text" required="" placeholder="Mobile no*" value="" name="mob" class="txt">
                    <input type="text" required="" placeholder="Your Email*" value="" name="email" class="txt">
                    
                	 <textarea placeholder="Your Message *" name="mess" type="text" class="txt_3"></textarea>
                     <input type="submit" value="submit" name="submit" class="txt2" style="border-radius:0px;">
                </form>
            </div>
            </div>
            </div
	</div>
</div>

            @endif
            
            <!-- /.lqd-column col-md-8 col-md-offset-2 -->




        </div><!-- /.row -->
    </div><!-- /.container -->
</section>


  
@endsection
