<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Scripts -->
  <script src="{{asset('js/app.js')}}" defer></script>
  <!-- Styles -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet">


  <script src="{{asset('js/chat.js')}}" defer></script>



  <link href="{{asset('css/chatbot.css')}}" rel="stylesheet">



  <link href="{{asset('css/mainstyles.css')}}" rel="stylesheet">

</head>

<body>
  {{-- @section('nav-bar')
    This is the master sidebar.
    @show --}}

  {{-- @yield('nav-bar') --}}



</div>
  <!--BANNER-->
  <header class="fixed">

    
    <div class="header-hero">
      <img src="{{('img/header-banner.png')}}" alt="this is a banner">
    </div>
    <div class="d-flex justify-content-center">
      <!--<a href="/"><img id="logo" class="img-responsive"  src="img/favicon.png" data-bs-hover-animate="pulse" alt="logo" style="height: 48px;"></a>-->
      <hr>
      <div class="heading">
        Artifical Intelligence Digital News
      </div>
      <hr>
    </div>

    <!--NAVBAR-->
    <nav class="nav justify-content-center" id="navbar">
      <div class="nav">
        <ul class="nav justify-content-center">
          <li>
            <a href="/articles" class="nav-link">HOME</a>
          </li>
          <li>
            <a href="/" class="nav-link ">ABOUT US</a>
          </li>
          <li>
            <a href="{{ route('register') }}" class="nav-link ">REGISTER</a>
          </li>
          <li>
            <a href="/login" class="nav-link ">LOG IN</a>
          </li>
          <li>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>


          </li>
        </ul>
      </div>
    </nav>

  
  </header>

 <!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt, welches dieses layout "extended" -->
@yield('content')

 <div class="bodycontainer">
    <div id="container" class="container">
        <img src="https://cdn-icons-png.flaticon.com/512/2885/2885504.png" height="200vh" alt="Chatbot clipart">
         <div id="chat" class="chat">
          <div id="messages" class="messages"></div>
          <input id="input" type="text" placeholder="Write something..." autocomplete="off" autofocus="true" />
        </div>
      </div>
    </div>

<!--FOOTER-->
<footer>
  <video src="{{('img/footerVid.mp4')}}" class="footer" type="video/mp4" class="d-block w-100" autoplay loop muted>
  </video>
  <b>AINEWS {{date('Y')}} 
    <svg  stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
      <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372zm5.6-532.7c53 0 89 33.8 93 83.4.3 4.2 3.8 7.4 8 7.4h56.7c2.6 0 4.7-2.1 4.7-4.7 0-86.7-68.4-147.4-162.7-147.4C407.4 290 344 364.2 344 486.8v52.3C344 660.8 407.4 734 517.3 734c94 0 162.7-58.8 162.7-141.4 0-2.6-2.1-4.7-4.7-4.7h-56.8c-4.2 0-7.6 3.2-8 7.3-4.2 46.1-40.1 77.8-93 77.8-65.3 0-102.1-47.9-102.1-133.6v-52.6c.1-87 37-135.5 102.2-135.5z"></path>
    </svg></b>
  </div>
</footer>
   
    
  

</body>

</html>