<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{asset('img/'.env('APP_FAVICON_URL'))}}">
        <title>{{env('APP_NAME')}}</title>
        <!-- For Social Media & SEO -->
            <meta property="og:title" content="{{env('APP_NAME')}}">
            <meta name="description" content="">
            <meta property="og:description" content="">
            <meta property="og:image" content="{{asset('img/'.env('APP_LOGO_URL'))}}">
            <meta name="keywords" content="">
            <meta property="og:url" content="{{url()->full()}}">
            <link rel="canonical" href="{{url()->full()}}">
            <meta name="twitter:card" content="summary_large_image">
        <link href="{{asset('css/custom.css')}}" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

        <script src="https://unpkg.com/@phosphor-icons/web"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/default-skin/default-skin.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
        <script type="application/ld+json" async>
            {
              "@context": "https://schema.org/",
              "@type": "WebSite",
              "name": "{{env('APP_NAME')}}",
              "url": "{{route('home')}}"
            }
        </script>
        <script type="application/ld+json" async>
            {
                "@context": "https://schema.org",
                "@type": "Organization",
                "name": "{{env('APP_NAME')}}",
                "url": "{{route('home')}}",
                "logo": "{{asset('img/'.env('APP_LOGO_URL'))}}",
                "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": "",
                    "contactType": "customer service",
                    "availableLanguage": ["en","es"]
                },
                "sameAs": []
            }
        </script>
    </head>
    <body>
        <div class="section text-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="maintenance-box">
                        <img src="{{asset('maintenance.webp')}}" alt="Site is under maintenance" style="width: 35%;height: 35%;">
                        <div class="content">
                            <h4>Site is down for maintenance</h4>
                            <p>We are working hard to improve our site for a better user experience. Please check back later!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe-ui-default.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.4.1/slick.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="{{asset('js/notify.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js"></script>
        @yield('js')
        <script src="{{asset('js/custom.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/angular.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/angular-storage.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/ics.min.js?v=0.0.0')}}"></script>
        @php
            $text = '';
            if ($errors->any()){
                foreach ($errors->all() as $error){
                $text .= $error.' <br/> ';
                }
            }
        @endphp
        @if ($errors->any())
            <script type="text/javascript">
                $.notify("{!!$text!!}", "error");
            </script>
        @endif
        @if(Session::has('global'))
            <script type="text/javascript">
                $.notify("{{Session::get('global')}}", @if(Session::get('type') == 'info') "info" @elseif(Session::get('type') == 'warning') "warn" @elseif (Session::get('type') == 'danger') "error" @elseif (Session::get('type') == 'success') "success" @else "error" @endif);
            </script>
        @endif
        @if(Session::has('status'))
            <script type="text/javascript">
                $.notify("{{session('status')}}", "success");
            </script>
        @endif
    </body>
</html>
