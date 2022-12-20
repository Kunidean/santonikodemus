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
   @extends('layout.app')
   @section('content')

    <div>
        <img
        src="{{url('/asset/nikodemus.png')}}" class="h-[10em] mt-7 mx-auto w-[10em]" alt=""/>
    </div>

    <div class="text-center max-w-3xl mx-auto">
        <div class="rounded-lg bg-[#01B7C8]">
            <h3 class="text-3xl mt-7 font-bold mb-6 pt-3 text-white">Tentang Santo Nikodemus</h3>
                <p class="mb-6 pb-2 md:mb-12 px-3 pb-4 text-slate-100">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio assumenda amet adipisci fugiat beatae quasi dolorum, suscipit magnam dignissimos vitae, consectetur alias consequuntur cum, minus id nostrum impedit perferendis? Consectetur ullam aliquid quis dolorum corrupti quos aperiam quam ducimus, esse quas quasi fugit exercitationem dolores quidem doloribus nobis voluptatem vel!
                </p>
        </div>




  </div>
@stop
</body>
</html>