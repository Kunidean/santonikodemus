@extends('layout.app')

@section('content')

<h1 class="header-font pl-6 pt-4">Renungan Harian</h1>


@foreach($devotions as $devotion)
    <div class="renungan-sm rounded-md">
        <h2 class="act-title text-white">{{$devotion->title}}</h2>
        <div class="date-author text-slate-100">
            <h6>Tanggal: {{$devotion->date}}</h6>
        </div>
        <p class="date-author text-slate-100">{{$devotion->content}}</p><br />
        <p class="date-author text-slate-100"><b>Doa: </b>{{$devotion->prayer}}</p>
    </div>
@endforeach

@if(Auth::check())
<div class="bg-[#009CAD] w-[16em] ml-4 py-2 px-2 text-center rounded-md flex justify-center">
<a class="other-text text-slate-100" href="/devotions/create">Tambah Renungan Baru</a>
</div>

@endif

@stop