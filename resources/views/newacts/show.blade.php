<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <!-- @vite('resources/css/font.css') -->
  @vite('resources/css/gambar.css')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
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

<div class="aktivitas-show">
    <h2 class="header-font">{{$newact->act_name}}</h2>
        <div class="date-author">
            <h6>Written on {{$newact->act_date}} on {{$newact->category}}</h6>
        </div>
        @foreach($actphotos as $actphoto)
        <img width="200px" src="{{url('/photos/' . $actphoto->name)}}">
        @endforeach
        <p>{{$newact->description}}</p>
        <br />
        @if(Auth::check())
        <a class="edit-button" href="/newacts/{{$newact->id}}/edit">Edit</a> <br>
        @endif
        <a class="edit-button" href="/aktivitas">Aktivitas</a>
    </div>
</body>