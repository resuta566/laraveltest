@extends('layout.app')

@section('content')
    <div class="text-center">
        <h1>CREATE POST</h1>
    </div>
    <div class='container'>
            {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('title','Title')}}
                    {{Form::text('title','',
                        [
                            'class' => 'form-control',
                            'placeholder' => 'Title'
                        ])
                    }}
                </div>
                <div class="form-group">
                        {{Form::label('body','Body')}}
                        {{Form::textArea('body','',
                            [
                                'id' => 'article-ckeditor',
                                'class' => 'form-control',
                                'placeholder' => 'Body'
                            ])
                        }}
                    </div>
                {{Form::submit('Submit', [
                    'class' => 'btn btn-primary'
                ])}}
            {!! Form::close() !!}
    </div>
@endsection