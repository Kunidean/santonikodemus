<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="resources/css/app.css">
  <link rel="preconnect" href="resources/css/font.css">
  <link rel="preconnect" href="resources/css/gambar.css">
  <link rel="preconnect" href="resources/js/app.js">
  <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=allerta:400|plus-jakarta-sans:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet" />
<style>
  body {
    font-family: 'Plus Jakarta Sans', sans-serif;
  }
</style>
</head>

<body>
    <!-- TELEPON
   -->
    <div class="flex bg-[#01B7C8] py-1 px-2">
      <div id="telepon" class="w-[17px] h-[23px] bg-cover bg-[url(/public/asset/telpon.png)]" alt="telepon"></div>
      <div><a id="notelp">+6221-7429616</a></div>
      <div id="pesan" class="w-[36px] h-[23px] bg-cover bg-[url(/public/asset/pesan.png)]" alt="telepon"></div>
      <div><a id="notelp" href="mailto:santonikodemus.ciputat@gmail.com">santonikodemus.ciputat@gmail.com</a></div>
    </div>

  <div class="w-full h-full px-[3em] py-2 flex align-center bg-[#009CAD]">
    <div>
      <div id="nikodemus" class="w-[75px] h-[75px] bg-cover bg-[url(/public/asset/nikodemus.png)]" alt="nikodemus"></div>
    </div>
    <div class="w-full flex justify-center mt-[15px]">
      <div class="dropdown">
        <button class="dropbtn" id="about"><a href="home">Home</a></button>
      </div>

      <div class="dropdown">
        <button class="dropbtn" id="about">Tentang Kami</button>
        <div class="dropdown-content">
          <a href="sejarah">Sejarah Paroki</a>
          <a href="batas">Batas Wilayah</a>
          <a href="pastur">Pastur Paroki</a>
        </div>
      </div>

    <div class="dropdown">
      <button class="dropbtn" id="karya">Karya</button>
        <div class="dropdown-content">
          <a href="renungan">Renungan</a>
          <a href="berita">Berita</a>
          <a href="aktivitas">Aktifitas</a>
        </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn" id="informasi">Informasi</button>
        <div class="dropdown-content">
         <a href="sakramen">Sakramen</a>
          <a href="kolekta">Keuangan</a>
          <a href="sekretariat">Sekretariat</a>
        </div>
    </div>

  </div>

  @if(Auth::check())
  <form method="POST" action="{{ route('logout') }}" class="dropdown mt-[15px]">
    @csrf

    <button class="dropbtn justify-end" :href="route('logout')"
      onclick="event.preventDefault();
            this.closest('form').submit();">
              {{ __('Logout') }}
</button>
  </form>
  @else
  <div class="dropdown mt-[15px]">
    <button class="dropbtn justify-end" id="login"><a href="login">Login</a></button>

  </div>
  @endif
 </div>
 @yield('content')
 <div class="relative flex items-top justify-center bg-white dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 bg-gray-100 dark:bg-gray-800">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.765238662309!2d106.74998931434128!3d-6.294552463358693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fec5eb2519a3%3A0xefa60f7846c37a2c!2sGereja%20Katolik%20Santo%20Nikodemus%2C%20Ciputat!5e0!3m2!1sid!2sid!4v1670357650769!5m2!1sid!2sid"class="left-0 top-0 h-full w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" frameborder="0" allowfullscreen></iframe>
          </div>      
          <div class="p-6 bg-gray-100 dark:bg-gray-800 ">
                    <img
            src="{{url('/asset/gambar2.jpeg')}}"
            class="w-full rounded-lg shadow-lg"
            alt=""
          />
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
<section class="mb-20 text-gray-700 px-4">
  <div class="text-center max-w-3xl mx-auto">
    <h3 class="text-3xl font-bold mb-6 text-gray-800">Batas Wilayah</h3>
    <p class="mb-6 pb-2 md:mb-12">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio assumenda amet adipisci fugiat beatae quasi dolorum, suscipit magnam dignissimos vitae, consectetur alias consequuntur cum, minus id nostrum impedit perferendis? Consectetur ullam aliquid quis dolorum corrupti quos aperiam quam ducimus, esse quas quasi fugit exercitationem dolores quidem doloribus nobis voluptatem vel!
    </p>
  </div>
</section>
</body>
</html>