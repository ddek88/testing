<!doctype html>
<html amp lang="en">
<head>
  <meta charset="utf-8">
  <script
  async
  custom-element="amp-carousel"
  src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
<script
  async
  custom-element="amp-ad"
  src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
<style amp-boilerplate>
  body {
    -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
    -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
    -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
    animation: -amp-start 8s steps(1, end) 0s 1 normal both;
  }
  @-webkit-keyframes -amp-start {
    from {
      visibility: hidden;
    }
    to {
      visibility: visible;
    }
  }
  @-moz-keyframes -amp-start {
    from {
      visibility: hidden;
    }
    to {
      visibility: visible;
    }
  }
  @-ms-keyframes -amp-start {
    from {
      visibility: hidden;
    }
    to {
      visibility: visible;
    }
  }
  @-o-keyframes -amp-start {
    from {
      visibility: hidden;
    }
    to {
      visibility: visible;
    }
  }
  @keyframes -amp-start {
    from {
      visibility: hidden;
    }
    to {
      visibility: visible;
    }
  }
</style>
<noscript>
    <style amp-boilerplate>
    body {
      -webkit-animation: none;
      -moz-animation: none;
      -ms-animation: none;
      animation: none;
    }
  </style></noscript>
<script async src="https://cdn.ampproject.org/v0.js"></script>

  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>

  <title>
  @isset($identity)
    {{$identity->nama_web}}
  @endisset
</title>
  <link rel="canonical" href="{{url('/')}}">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <meta name="description" content="@isset($identity){{$identity->deskripsi}}@endisset">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">


   
@include('parts.style')
</head>
<body style="@isset($color) background: {{$color->color}} @endisset">
    <header>
        <div class="containerr">
            <div class="logo-col">
                <a href="" class="logo">
                    <amp-img alt="agen slot gacor terbaik" src="{{url('/')}}/@isset($imagenav){{$imagenav->image}}@endisset" width="260" height="90" layout="responsive"></amp-img>
                </a>
            </div>
            <div class="right-col">
                <ul class="nav">
                    @isset($navbar)
                     @foreach ($navbar as $nav)
                       <li class="scroll-to-section"><a href="{{$nav->url}}">{{$nav->label}}</a></li>
                     @endforeach
                    @endisset
                    <li class="">
                      <div class="button-69"><a href="@isset($link) {{$link->navbar_login}} @endisset">LOGIN</a></div>
                    </li>
                  </ul>
            </div>
        </div>
    </header>
    <amp-sidebar id="left-side-menu"   layout="nodisplay" side="left" role="menu" tabindex="-1">
        <span on="tap:left-side-menu.close" tabindex="0" role="button"><amp-img alt="menang slot gacor terbaru dan slot gacor terbaik" src="{{url('/')}}/cancel.png" width="40" height="40" style="width: 40px; height: 40px; --loader-delay-offset:2ms "></span>
        <ul class="mt-2">
            @isset($navbar)
            @foreach ($navbar as $nav)
                <li class="side-menu-item"><a href="{{$nav->url}}">{{$nav->label}}</a></li>
              <li class="bord"></li>
            @endforeach
           @endisset
          
           @isset($sidebar)
           @foreach ($sidebar as $nav)
               <li class="side-menu-item"><a href="{{$nav->url}}">{{$nav->label}} 🎁</a></li>
             <li class="bord"></li>
           @endforeach
          @endisset
          
          <li>
            <a href="@isset($link) {{$link->refferal}} @endisset">
                <amp-img alt="agen slot gacor terbaik" src="{{url('/')}}/@isset($imageside){{$imageside->image}}@endisset" width="200" height="58" layout="responsive" ></amp-img>
            </a>
         </li>
        </ul>
    </amp-sidebar>
    <div class="headers">
      <div class="nav-mobile">
          <div class="nav-v">
            <div>
                <a on="tap:left-side-menu.open" class="menu" tabindex="0" role="button">
                    <amp-img alt="agen slot gacor terbaik" src="menu_back.gif" width="100" height="100" layout="responsive"></amp-img>
                </a>
            </div>
            <div class="mobile-logo">
                <a href="@isset($link) {{$link->refferal}} @endisset" class="logs"> 
                    <amp-img alt="agen slot gacor terbaik" src="{{url('/')}}/@isset($imagenav){{$imagenav->image}}@endisset" width="260" height="90" layout="responsive"></amp-img>
                </a>
            </div>
          </div>
      </div>
      <div class="nav-bottom-mobile">
        <div class="nav-bottom-c">
            <a href="@isset($link) {{$link->refferal}} @endisset" class="house">
                <amp-img alt="agen slot gacor terbaik" src="{{url('/')}}/house.png" width="100" height="100" layout="responsive"></amp-img>
                <span style="color:{{$stylemobile->font}};">Home</span>
            </a>
        </div>
        <div class="nav-bottom-c">
            <a href="@isset($link) {{$link->refferal}} @endisset" class="daftar">
                <amp-img alt="agen slot gacor terbaik" src="{{url('/')}}/edit.png" width="100" height="100" layout="responsive"></amp-img>
                <span>Daftar</span>
            </a>
        </div>
        <div class="nav-bottom-c">
            <a href="@isset($link) {{$link->refferal}} @endisset" class="login">
                <amp-img alt="agen slot gacor terbaik" src="{{url('/')}}/login.png" width="100" height="100" layout="responsive"></amp-img>
                <span>Login</span>
            </a>
        </div>
        <div class="nav-bottom-c">
            <a href="@isset($link) {{$link->refferal}} @endisset" class="promo">
                <amp-img alt="agen slot gacor terbaik" src="{{url('/')}}/megaphone.png" width="100" height="100" layout="responsive"></amp-img>
                <span>Promo</span>
            </a>
        </div>
      </div>
      <a href="@isset($link) {{$link->livechat}} @endisset">
        <div class="lc-button">
            <amp-img alt="agen slot gacor terbaik" src="{{url('/')}}/livechat.gif" width="260" height="90" layout="responsive"></amp-img> 
        </div>
      </a>
    <div class="container">
        <div class="row">
            <div class="left">
                <h6> @isset($identity)
                    {{$identity->nama_web}}
                  @endisset</h6>
                <h2>RTP Live Terbaru!<br>Bonus Slot 700%</h2>
                <p>Promo Slot Online Terbaik !! 700% Dari Deposit Awalmu !!</p>
                <div class="button-wraper">
                    <a href="@isset($link) {{$link->refferal}} @endisset">
                        <button class="button-72">Ambil Bonus Disini</button>
                    </a>
                </div>
            </div>
            <div class="right">
                <amp-img alt="di tanganjudi kakek zeus selalu baik hati kasih petir merah" src="{{url('/')}}/{{$stylebackground->thumn}}" width="550" height="508" layout="responsive">
                   
               </amp-img>
            </div>
        </div>
    </div>
  </div>
  {{-- content --}}
  <div class="main-text">
    <div class="container">
        <div class="rows">
            <div class="section-heading">
                <h1> @isset($identity)
                    {{$identity->nama_web}}
                  @endisset<em> | </em>Slot Gacor Dengan RTP Harian Terbaru</h1>
            </div>
            <div class="line-dec"></div>
            

        </div>
        <div class="row">
            <div class="section-content">
                <article>
                  {!!$artikel->body!!}
                </article>
            </div>
        </div>
    </div>
  </div>
  {{-- end content --}}
  <footer>
    <div class="border-top section"></div>
    <div class="footer-top">
        <div class="containers">
          <div class="row">
            <div class="col-sm-12 col-lg-3">
              <div class="footer-item">
                <h5>Tentang Kami</h5>
                @isset($tentangkami)
                <p>{{$tentangkami->body}}</p>
                @endisset
              </div>
            </div>
            <div class="col-sm-12 col-lg-3">
              <div class="footer-item">
                <h5>Tags Slot</h5>
                <ul class="footer-tag">
                    @isset($tagslot)
                        @foreach ($tagslot as $tag)
                          <li><a href="{{$tag->url}}">{{$tag->label}}</a></li>
                        @endforeach
                    @endisset
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="footer-item">
                <h5>Pintasan</h5>
                <ul class="footer-links">
                    @isset($pintasan)
                         @foreach ($pintasan as $pin)
                            <li><a href="{{$pin->url}}">{{$pin->label}}</a></li>
                         @endforeach
                    @endisset
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="footer-item">
                <h5>Tanggung Jawab Bermain</h5>
                <div class="footer-gaming-logo">
                  <a href="@isset($link) {{$link->refferal}} @endisset">
                    <amp-img alt="tangan judi situs judi oline berlisensi resmi" src="{{url('/')}}/18plus.png" width="200" height="58" layout="responsive"></amp-img>
                  </a>
                </div>
              </div>
              <div class="footer-item">
                <h5>Dukungan Browser</h5>
                <div class="footer-gaming-logo">
                  <a href="@isset($link) {{$link->refferal}} @endisset">
                    <amp-img alt="situs judi online tangan judi dapat diakses melalui semua perangkat kapanpun dan dimanapun." src="{{url('/')}}/browser.png" width="200" height="58" layout="responsive">
                    </amp-img>
                    
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </footer>
</body>
</html>
