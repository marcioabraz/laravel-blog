@extends('layouts.app')

@section('content')
    <a href="posts/create">Criar Post</a>
    @foreach ($posts as $post)
        <div class="card" style="width: 300px">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->content}}</p>
            <a href="/posts/edit/{{$post->id}}">editar</a>
            <a href="/posts/show/{{$post->id}}">Verificar</a>
        </div> 
    @endforeach
@endsection
