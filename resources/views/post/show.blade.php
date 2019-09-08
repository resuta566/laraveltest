@extends('layout.app')

@section('content')
<a href="/post" class="btn btn-primary">Back</a>
    <div class="text-center">
        <h1>{{$post->title}}</h1>
        <img style="width:75%" src="/storage/cover_images/{{$post->cover_image}}"/>
        <br>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    </div>
        <div class='container' style="height:200px;">
            <p>
                    {!!$post->body!!}
            </p>
        </div>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a href="/post/{{$post->id}}/edit" class="btn btn-success">Edit</a>

                {!!Form::open([
                    'action' => [
                        'PostController@destroy', $post->id
                            ],
                    'method' => 'POST',
                    'class' => 'pull-right'
                    ])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                @endif
            @endif
@endsection