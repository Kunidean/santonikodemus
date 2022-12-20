@extends('layout.app')

@section('content')

<div class="w-[8em] my-4 ml-2 rounded-md text-white">
<h1 class="bg-[#009CAD] rounded-md mx-3 text-center header-font">Berita</h1>
@if(Auth::check())
</div>
<div class="bg-[#009CAD] rounded-md w-[13em] rounded-md ml-4 text-white">
<a class="other-text" href="/activities/create">Tambah berita baru</a>
</div>

@endif

@foreach($activities as $activity)
    <div class="aktivitas-sm rounded-md">
        <h2 class="act-title text-white">{{$activity->title}}</h2>
        <div class="date-author text-white">
            <h6>Written on {{$activity->post_date}} by {{$activity->author}}</h6>
        </div>
        <img width="200px" src="{{url('/photos/' . $activity->photo)}}">
        <p class="text-white">{{\Illuminate\Support\Str::limit($activity->description, 150)}}
            <a href="/activities/{{$activity->id}}" class="more">More</a></p>
        @if(Auth::check())
            <form action="/activities/{{$activity->id}}" method="post"> 
            @method('DELETE')
            @csrf
            <button class="del-button" type="submit">DELETE</button>
            </form>
        @endif
    </div>
@endforeach

@stop