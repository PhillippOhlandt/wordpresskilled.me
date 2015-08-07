@extends('layout')

@section('content')
<div class="container">

    <div class="row">
        <div class="col s12 m8 l8 post-list">

            @foreach($posts as $post)
                @include('partials.post.preview', ['post' => $post])
            @endforeach

            {!! with((new Ohlandt\Presenters\Pagination\Materialize($posts))->setColor('deep-orange darken-2'))->render() !!}

        </div>
        <div class="col s12 m4 l4 sidebar">
            @include('partials.sidebar')
        </div>
    </div>
</div>
<div class="container">

</div>
@endsection