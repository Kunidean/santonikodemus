@extends('layout.app')

@section('content')

<div class="aktivitas-show text-white bg-[#009CAD] rounded-md">
    <h2 class="header-font">{{$activity->title}}</h2>
        <div class="date-author text-white">
            <h6>Written on {{$activity->post_date}} by {{$activity->author}}</h6>
        </div>
        <img class="rounded-md" width="200px" src="{{url('/photos/' . $activity->photo)}}">
        <p class="text-slate-100">{{$activity->description}}</p>
        <br />
        @if(Auth::check())
        <a class="edit-button" href="/activities/{{$activity->id}}/edit">Edit</a>
        @endif
    </div>

@stop