@extends('layout.app')

@section('content')
    <div class="text-center">
        <h1>POSTS</h1>
    </div>
    <div class='container'>
        @if(count($posts) > 0)
            @foreach ($posts as $post)
                <div class="well">
                    <h3><a href='/post/{{$post->id}}'>{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}}</small>
                </div>    
            @endforeach
            {{$posts->links()}}
        @else
            <p> No Posts found.</p>
        @endif
    </div>
@endsection