<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/css/font.css')
  @vite('resources/css/gambar.css')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
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
   @extends('layout.app')

@section('content')
<div class="p-10 mt-3">
<div class="pb-3">
    <img src="{{url('/asset/santonikdemus.jpg')}}" class="w-[25em] h-full rounded-md mx-auto" alt=""/>
</div>

<div class="text-center max-w-3xl mx-auto">
    <div class="rounded-lg bg-[#01B7C8]">
      <h3 class="text-3xl mt-7 font-bold mb-6 pt-3 text-white">Sejarah Paroki</h3>
        <p class="mb-6 md:mb-12 px-3 pb-4 text-slate-100">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio assumenda amet adipisci fugiat beatae quasi dolorum, suscipit magnam dignissimos vitae, consectetur alias consequuntur cum, minus id nostrum impedit perferendis? Consectetur ullam aliquid quis dolorum corrupti quos aperiam quam ducimus, esse quas quasi fugit exercitationem dolores quidem doloribus nobis voluptatem vel!
        </p>
    </div>
  </div>
  
  <div class="p-1  rounded-lg w-[25em] h-[20em] mx-auto bg-[#009CAD]">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.765238662309!2d106.74998931434128!3d-6.294552463358693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fec5eb2519a3%3A0xefa60f7846c37a2c!2sGereja%20Katolik%20Santo%20Nikodemus%2C%20Ciputat!5e0!3m2!1sid!2sid!4v1670357650769!5m2!1sid!2sid"class="left-0 top-0 h-full w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" frameborder="0" allowfullscreen></iframe>
  </div>      
  
  <div class="text-center pt-4 max-w-3xl mx-auto">
    <div class="rounded-lg bg-[#01B7C8]">
      <h3 class="text-3xl mt-7 font-bold mb-6 pt-3 text-white">Lokasi Paroki</h3>
        <p class="mb-6 pb-2 md:mb-12 px-3 pb-4 text-slate-100">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio assumenda amet adipisci fugiat beatae quasi dolorum, suscipit magnam dignissimos vitae, consectetur alias consequuntur cum, minus id nostrum impedit perferendis? Consectetur ullam aliquid quis dolorum corrupti quos aperiam quam ducimus, esse quas quasi fugit exercitationem dolores quidem doloribus nobis voluptatem vel!
        </p>
    </div>
  </div>
</div>

@stop
</body>
</html>