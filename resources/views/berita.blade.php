@extends('layout.app')

@section('content')

<h1 class="header-font">Berita</h1>
@if(Auth::check())
<a class="other-text" href="/activities/create">Tambah berita baru</a>
@endif

@foreach($activities as $activity)
    <div class="aktivitas-sm">
        <h2 class="act-title">{{$activity->title}}</h2>
        <div class="date-author">
            <h6>Written on {{$activity->post_date}} by {{$activity->author}}</h6>
        </div>
        <img width="200px" src="{{url('/photos/' . $activity->photo)}}">
        <p>{{\Illuminate\Support\Str::limit($activity->description, 150)}}
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