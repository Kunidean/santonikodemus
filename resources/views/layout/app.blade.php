<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('/css/app.css')  }}" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
              <!-- CDN -->
              <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=allerta:400|plus-jakarta-sans:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet" />
    <style>
     body {
      font-family: 'Plus Jakarta Sans', sans-serif;
    }
    
  </style>
  </head>
<body>
<div class="w-full flex align-center py-[0.5em] px-[3em] lg:px-[4em] xl:px-[8em] text-white bg-[#01B7C8]">
    <div class="flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
        </svg>
        <div class="ml-2 hidden md:flex"><a>+6221-7429616</a></div>
    </div>
    <div class="flex ml-[2.5em]">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
      <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
      <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
    </svg>
        <div class="ml-2 hidden md:flex"><a href="mailto:santonikodemus.ciputat@gmail.com">santonikodemus.ciputat@gmail.com</a></div>
    </div>
</div>
<nav class="
  px-[1em]
  lg:px-[2em]
  xl:px-[6em]
  relative
  w-full
  flex
  items-center
  justify-center
  py-3
  bg-[#009CAD]
  text-white
  hover:text-gray-700
  focus:text-gray-700
  ">
  <div class="container-fluid w-full flex items-center justify-between px-6">
    <a class="
          flex
          xl:hidden
          items-center
          text-white
          hover:text-gray-900
          focus:text-gray-900
          mt-2
          lg:mt-0
          mr-1
        " href="home">
      <div href="home" class="w-[75px] h-[75px] bg-cover bg-[url({{ asset('/asset/nikodemus.png') }})]" alt=""
        loading="lazy"> </div>
    </a>
  <div class="flex justify-between items-center" id="navbarSupportedContent">
  <a class="
        hidden
        xl:flex
        items-center
        text-white
        hover:text-gray-900
        focus:text-gray-900
        mt-2
        lg:mt-0
        mr-1
      " href="home">
    <div href="home" class="w-[75px] h-[75px] bg-cover bg-[url({{ asset('/asset/nikodemus.png') }})]" alt=""> </div>
  </a>
  <!-- Left links -->
  <ul class="hidden lg:flex navbar-nav justify-center pl-0 list-style-none mr-auto xl:ml-[6.5em]">
    <li class="nav-item p-2 pr-[3em]">
      <a class="nav-link text-white hover:text-slate-100 duration-200 ease-in-out focus:text-gray-700 p-0" href="/">Home</a>
    </li>
    <li class="nav-item p-2 pr-[3em] cursor-pointer">
      <div class="nav-link text-white hover:text-slate-100 duration-200 ease-in-out focus:text-gray-700 p-0" href="#">
        <div class="dropdown">  
          Tentang Kami
          <div class="dropdown-content">
            <a href="profil">Profil Santo Nikodemus  </a>
            <a href="sejarah">Sejarah Paroki</a>
            <a href="pastur">Pastor Paroki</a>
            <a href="dewan">Dewan Paroki</a>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item p-2 pr-[3em] cursor-pointer">
      <div class="nav-link text-white hover:text-slate-100 duration-200 ease-in-out focus:text-gray-700 p-0" href="#">
      <div class="dropdown">
        Karya
        <div class="dropdown-content">
          <a href="renungan" class="hover:bg-slate-50 duration-100 ease-in-out">Renungan</a>
          <a href="berita" class="hover:bg-slate-50 duration-100 ease-in-out">Berita</a>
          <a href="aktivitas" class="hover:bg-slate-50 duration-100 ease-in-out">Aktivitas</a>
          </div>
        </div>
      </div>
  </li>

    <li class="nav-item p-2 pr-[3em] cursor-pointer">
      <div class="nav-link text-white hover:text-slate-100 duration-200 ease-in-out  focus:text-gray-700 p-0" href="#">
        <div class="dropdown">
          Informasi
            <div class="dropdown-content">
              <a href="https://belarasa.id/" class="hover:bg-slate-50 duration-100 ease-in-out">BELARASA</a>
              <a href="https://www.kaj.or.id/" class="hover:bg-slate-50 duration-100 ease-in-out">Keuskupan Agung Jakarta</a>
              <a href="kolekta" class="hover:bg-slate-50 duration-100 ease-in-out">Keuangan</a>
              <a href="sekretariat" class="hover:bg-slate-50 duration-100 ease-in-out">Sekretariat</a>
              <a href="sakramen" class="hover:bg-slate-50 duration-100 ease-in-out">Sakramen</a>
            </div>
        </div>
      </div>
    </li>
  </ul>
  </div>
  <div class="hidden lg:flex items-center relative">
    <div class="relative text-white">
      <a class="flex items-center" href="login">
        <div class="">
          @if(Auth::check())
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button :href="route('logout')"
            onclick="event.preventDefault();
                  this.closest('form').submit();">
                    {{ __('Logout') }}
                  </button>
                </form>
                @else
          <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
            </svg>
            <button class="ml-2"><a href="login">Login</a></button>
          </div>
        @endif
        </div>
      </a>
    </div>
  </div>
  <button class="lg:hidden flex items-center relative" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasRight">
    <div class="relative text-white">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
      <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
    </svg>
    </div>
  </button>
  <div class="offcanvas offcanvas-end fixed bottom-0 flex flex-col max-w-full bg-white invisible bg-clip-padding shadow-sm outline-none transition duration-300 ease-in-out text-gray-700 top-0 right-0 border-none w-96" tabindex="-1" id="sidebar" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header flex items-center justify-between p-4">
    <h5 class="offcanvas-title mb-0 leading-normal font-semibold" id="offcanvasRightLabel">Nikodemus</h5>
    <button type="button" class="btn-close box-content w-4 h-4 p-2 -my-5 -mr-2 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body flex-grow p-4 overflow-y-auto">
    <div>
      <h5 class="text-base relative
        flex
        items-center
        w-full
        py-4
        px-5
        text-base text-gray-800 text-left
        bg-white
        rounded-none
        transition
        focus:outline-none">Home</h5>
    </div>
    <div class="accordion" id="accordionExample">
  <div class="accordion-item bg-white">
    <h2 class="accordion-header mb-0" id="headingOne">
      <button class="
        accordion-button
        relative
        flex
        items-center
        w-full
        py-4
        px-5
        text-base text-gray-800 text-left
        bg-white
        rounded-none
        transition
        focus:outline-none
      " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
        aria-controls="collapseOne">
        Tentang Kami
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
      data-bs-parent="#accordionExample">
      <div class="accordion-body py-4 px-5">
        <ul class="list-unstyled">
        <li class="mb-2">
            <a href="profil" class="text-gray-800 hover:text-gray-700">Profil Paroki</a>
          </li>
          <li class="mb-2">
            <a href="sejarah" class="text-gray-800 hover:text-gray-700">Sejarah Paroki</a>
          </li>
          <li class="mb-2">
            <a href="pastor" class="text-gray-800 hover:text-gray-700">Pastor Paroki</a>
          </li>
          <li class="mb-2">
            <a href="dewan" class="text-gray-800 hover:text-gray-700">Dewan Paroki</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item bg-white">
    <h2 class="accordion-header mb-0" id="headingTwo">
      <button class="
        accordion-button
        collapsed
        relative
        flex
        items-center
        w-full
        py-4
        px-5
        text-base text-gray-800 text-left
        bg-white
        rounded-none
        transition
        focus:outline-none
      " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
        aria-controls="collapseTwo">
        Karya
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
      data-bs-parent="#accordionExample">
      <div class="accordion-body py-4 px-5">
        <ul class="list-unstyled">
          <li class="mb-2">
            <a href="#" class="text-gray-800 hover:text-gray-700">Renungan</a>
          </li>
          <li class="mb-2">
            <a href="#" class="text-gray-800 hover:text-gray-700">Berita</a>
          </li>
          <li class="mb-2">
            <a href="#" class="text-gray-800 hover:text-gray-700">Aktivitas</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item bg-white">
    <h2 class="accordion-header mb-0" id="headingThree">
      <button class="
        accordion-button
        collapsed
        relative
        flex
        items-center
        w-full
        py-4
        px-5
        text-base text-gray-800 text-left
        bg-white
        rounded-none
        transition
        focus:outline-none
      " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
        aria-controls="collapseThree">
        Sakramen
      </button>
    </h2>
  </div>
  <div class="accordion-item bg-white">
    <h2 class="accordion-header mb-0" id="headingThree">
      <button class="
        accordion-button
        collapsed
        relative
        flex
        items-center
        w-full
        py-4
        px-5
        text-base text-gray-800 text-left
        bg-white
        rounded-none
        transition
        focus:outline-none
      " type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
        aria-controls="collapseThree">
        Informasi
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree"
      data-bs-parent="#accordionExample">
      <div class="accordion-body py-4 px-5">
      <ul class="list-unstyled">
          <li class="mb-2">
            <a href="https://belarasa.id/" class="text-gray-800 hover:text-gray-700">BELARASA</a>
          </li>
          <li class="mb-2">
            <a href="keuangan" class="text-gray-800 hover:text-gray-700">Keuangan</a>
          </li>
          <li class="mb-2">
            <a href="sekretariat" class="text-gray-800 hover:text-gray-700">Sekretariat</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div>
  <a href="login">
    <h5 class="text-base relative
      flex
      items-center
      w-full
      py-4
      px-5
      text-base text-gray-800 text-left
      bg-white
      rounded-none
      transition
      focus:outline-none">
      @if(Auth::check())
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button :href="route('logout')"
            onclick="event.preventDefault();
                  this.closest('form').submit();">
                    {{ __('Logout') }}
                  </button>
                </form>
                @else
          <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
            </svg>
            <button class="ml-2"><a href="login">Login</a></button>
          </div>
        @endif
      </h5>
  </a>
    </div>
  </div>
</div>
</nav>
<div class="bg-slate-150 ">
  @yield('content')
</div>
<!-- <footer class="p-4 absolute w-full h-[3em] bottom-0 bg-white rounded-sm shadow md:flex md:items-center text-center md:justify-between md:p-6 bg-[#009CAD]">
    <span class="text-slate-100 hover:underline">© 2022 Copyright © All right reserved.</span>
</footer> -->
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>