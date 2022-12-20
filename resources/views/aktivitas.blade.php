@extends('layout.app')

@section('content')
<div class="bg-[#009CAD] w-[22em] my-4 ml-4 rounded-md text-white">
<h1 class="header-font">Daftar Semua Aktivitas</h1>
</div>
<div>
    @if(Auth::check())
        <div class="bg-[#009CAD] w-[14em] my-4 ml-4 rounded-md text-white">
            <a class="other-text" href="/newacts/create">Tambah aktivitas baru</a><br />
        </div>
        <div class="bg-[#009CAD] w-[15.5em] my-4 ml-4 rounded-md text-white">
            <a class="other-text" href="/photoacts/create">Tambah foto ke aktivitas</a>
        </div>
@endif
</div>


@foreach($newacts as $newact)
    <div class="aktivitas-sm rounded-md">
        <h2 class="act-title  text-white">{{$newact->act_name}}</h2>
        <div class="date-author text-white">
            <h6>Written on {{$newact->act_date}} on {{$newact->category}}</h6>
        </div>
        <p class="text-slate-100">{{\Illuminate\Support\Str::limit($newact->description, 150)}}
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