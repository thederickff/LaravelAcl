@extends('layouts.app')

@section('content')
    <div class="container">
        @forelse($posts as $post)
            <h1>{{$post->title}}</h1>
            <p>{{$post->description}}</p>


            <b>Author: </b> {{$post->user->name}}

            <a href="{{route('post.edit', ['id' => $post->id])}}">Edit</a>
            <hr>
        @empty
            Nenhum Post cadastrado
        @endforelse


        {!! $posts->render() !!}
    </div>
@endsection
