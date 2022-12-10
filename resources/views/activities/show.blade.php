@extends('layout.app')

@section('content')

<div class="aktivitas-show">
    <h2 class="header-font">{{$activity->title}}</h2>
        <div class="date-author">
            <h6>Written on {{$activity->post_date}} by {{$activity->author}}</h6>
        </div>
        <img width="200px" src="{{url('/photos/' . $activity->photo)}}">
        <p>{{$activity->description}}</p>
        <br />
        @if(Auth::check())
        <a class="edit-button" href="/activities/{{$activity->id}}/edit">Edit</a>
        @endif
    </div>

@stop