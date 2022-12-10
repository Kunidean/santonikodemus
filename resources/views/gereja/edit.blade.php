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
<div class="w-full h-[100vh]  py-[1.5em]">
<div class="w-full py-[1.5em]">
    <div class="w-full h-auto flex pl-[3em] justify-left">
      <div class="w-[100px] h-[100px] bg-cover bg-[url(/public/asset/nikodemus.png)]" alt="nikodemus"></div>
  </div>
  <br>
    <div class="text-black font-bold">
    <h1> Edit Kolekta </h1>
    </div>
    <br>
    <form action="/gerejas/{{$gerejas->id}}" method="post" class="text-black font-bold"> 
    @method('PUT')
    @csrf
    Tanggal: <input type="date" name="tanggal" value="{{$gerejas->tanggal}}" class="text-black" /> <br />
    Kolekte1: <input type="number" name="kolekte1" value="{{$gerejas->kolekte1}}" class="text-black"/> <br />
    Kolekte2: <input type="number" name="kolekte2" value="{{$gerejas->kolekte2}}" class="text-black"/> <br />
    <button type="submit">Submit</button>
    </form>
    <br />
    </div>
    </div>
    </div>
</body>