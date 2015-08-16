@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m8 l8 submit">

                @if (session('message'))
                    <div class="success">
                        {!! session('message') !!}
                    </div>
                @endif

                <h1>Submit a post</h1>
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores ipsa laudantium molestias placeat, quidem veniam. Alias, doloribus explicabo fugit id ipsam nobis nostrum officia possimus quas quos ratione voluptatem?</p>
-->
                @if (count($errors) > 0)
                    <div class="alert">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {!! Form::open(array('url' => 'submit', 'files' => 'true', 'method' => 'POST')) !!}
                    <div class="row">
                        <div class="input-field col s12">
                            {!! Form::text('title', null, ['class' => 'validate']) !!}
                            <label for="title">Title</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            {!! Form::textarea('text', null, ['class' => 'materialize-textarea']) !!}
                            <label for="text">Text</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            <div class="file-field input-field">
                                <div class="btn grey">
                                    <span>Image</span>
                                    {!! Form::file('image') !!}
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" style="margin-left: 120px; width: calc(100% - 120px);">
                                    <label for="text">Max. size : 2Mb</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light deep-orange darken-2" type="submit" name="action">Submit <i class="material-icons right">send</i></button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
            <div class="col s12 m4 l4 sidebar">
                @include('partials.sidebar')
            </div>
        </div>
    </div>
@endsection
