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

<div class="aktivitas-show bg-[#009CAD] rounded-md">
    <h2 class="header-font text-white">{{$newact->act_name}}</h2>
        <div class="date-author text-white">
            <h6>Written on {{$newact->act_date}} on {{$newact->category}}</h6>
        </div>
        @foreach($actphotos as $actphoto)
        <img class="rounded-md"width="200px" src="{{url('/photos/' . $actphoto->name)}}">
        @endforeach
        <p class="text-white">{{$newact->description}}</p>
        <br />
        @if(Auth::check())
        <a class="edit-button" href="/newacts/{{$newact->id}}/edit">Edit</a> <br>
        @endif
        <a class="edit-button" href="/aktivitas">Aktivitas</a>
    </div>
</body>