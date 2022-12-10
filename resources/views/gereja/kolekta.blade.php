<!doctype html>
<html>
@extends('layout.app')

@section('content')

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<div class="w-full h-[100vh] py-[1.5em]">
<div class="w-full py-[1.5em]">
  <div class="w-full h-auto flex pl-[3em] justify-end text-black font-bold">
  @if(Auth::check())
    <form action="/gerejas" method="post" class="text-blackfont-bold"> 
    @csrf
    Tanggal: <br /> <input type="date" name="tanggal" class="text-black"/> <br />
    Kolekte1: <input type="number" name="kolekte1" class="text-black"/> <br />
    Kolekte2: <input type="number" name="kolekte2" class="text-black"/> <br />
    <button type="submit">Submit</button>
    </form>
    @endif
    <br />
    <div class="w-full h-auto flex pl-[3em] justify-center text-black font-bold content-center">
      <table border="1" width="30%">
        <tr>
            <th>Tanggal</th>
            <th>Kolekte1</th>
            <th>Kolekte2</th>
        </tr>
        @foreach($gerejas as $value)
        <tr>
            <td>{{$value->tanggal}}</td>
            <td>{{$value->kolekte1}}</td>
            <td>{{$value->kolekte2}}</td>
            <td>
            @if(Auth::check())
                <a href="/gerejas/{{$value->id}}/edit">EDIT</a>|
                <form action="/gerejas/{{$value->id}}" method ="post">
                @method('DELETE')
                @csrf
                <button type="submit">DELETE</button>
                @endif
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
    </div>
    </div>
</div>
</body>
@stop