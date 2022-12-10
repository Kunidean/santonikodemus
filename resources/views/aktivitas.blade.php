@extends('layout.app')

@section('content')

<h1 class="header-font">Daftar Semua Aktivitas</h1>
@if(Auth::check())
<a class="other-text" href="/newacts/create">Tambah aktivitas baru</a><br />
<a class="other-text" href="/photoacts/create">Tambah foto ke aktivitas</a>
@endif

@foreach($newacts as $newact)
    <div class="aktivitas-sm">
        <h2 class="act-title">{{$newact->act_name}}</h2>
        <div class="date-author">
            <h6>Written on {{$newact->act_date}} on {{$newact->category}}</h6>
        </div>
        <p>{{\Illuminate\Support\Str::limit($newact->description, 150)}}
            <a href="/newacts/{{$newact->id}}" class="more">More</a></p>
            @if(Auth::check())
            <form action="/newacts/{{$newact->id}}" method="post"> 
            @method('DELETE')
            @csrf
            <button class="del-button" type="submit">DELETE</button>
            </form>
            @endif
    </div>
@endforeach

@stop