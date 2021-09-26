<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'Laravel') }}</title>

   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   <!-- Styles -->
   <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
   <div id="app">
       <nav class="navbar navbar-expand-md navbar-light  shadow-sm" style="background-color:#fefefe; color:#fefefe;">
           <div class="container">
               <a class="navbar-brand" style="color:#555; font-size:1.4em; font-weight: bold;" href="{{ url('/') }}" >
                   {{ config('app.name', 'Laravel') }}
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                   <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <!-- Left Side Of Navbar -->
                   <ul class="navbar-nav mr-auto">

                   </ul>

                   <!-- Right Side Of Navbar -->
                   <ul class="navbar-nav ml-auto" >
                       <!-- Authentication Links -->
                       @guest
                           <li class="nav-item">
                               <a class="nav-link" style="color:#000;"  href="{{ route('login') }}">{{ __('ログイン') }}</a>
                           </li>
                           @if (Route::has('register'))
                               <li class="nav-item">
                                   <a class="nav-link" style="color:#000;"  href="{{ route('register') }}">{{ __('会員登録') }}</a>
                               </li>
                           @endif
                       @else
                           <li class="nav-item dropdown">
                               <a id="navbarDropdown" style="color:#000;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->name }} <span class="caret"></span>
                               </a>

                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                
                                <a class="dropdown-item" href="{{ url('/mycart') }}">
                                カートを見る
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('ログアウト') }}
                            </a>
                               </div>
                           </li>
                           
                           <a href="{{ url('/mycart') }}" >
                               <img src="{{ asset('image/mycart.png') }}" class="cart" >
                           </a>
                       @endguest


                   </ul>
               </div>
           </div>
       </nav>

       <main class="py-4">
           @yield('content')
       </main>

       <!-- 
        <footer class style="background-color:#fefefe; color:#fefefe; text-align: center; padding: 60px;"> 

            @guest
                <p class="nav-item" style="display:inline;">
                    <a class="nav-link" href="{{ route('login') }}" style="color:#000; display:inline;">{{ __('ログイン') }}</a>

                @if (Route::has('register'))

                        <a class="nav-link" href="{{ route('register') }}" style="color:#000; display:inline;">{{ __('会員登録') }}</a>
                    </p>
                @endif
            
            @endguest
            <br>
            <div style="color:#000; margin-top:24px; ">
            なんでも売ります<br>
            <p style="color:#000; font-size:2.4em;">Larashop</p><br>
            </div>

            <p style="color:#000; font-size:0.7em;">@copyright @laravel </p>

</footer>
-->

   </div>
</body>
</html>