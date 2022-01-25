@extends('layouts.app')
@section('content')
    {{-- edit é o create com alterações --}}
    <form action="/posts/update/{{$post->id}}" method="POST">
        @csrf
        <input type="text" name="title" value="{{$post->title}}">
        <br>
        <textarea name="content" rows="3">{{$post->content}}</textarea>
        <br>
        <button type="submit">Editar</button>
    </form>
@endsection