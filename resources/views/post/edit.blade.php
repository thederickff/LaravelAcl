@extends('layouts.app')

@section('content')
    <div class="container">


        <h1>{{$post->title}}</h1>
        <p>{{$post->description}}</p>


        <b>Author: </b> {{$post->user->name}}
    </div>
@endsection
