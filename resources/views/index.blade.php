@extends('layout')

@section('content')
<div class="container">

    <div class="row">
        <div class="col s12 m7 l5 offset-m1 offset-l2 post-list">

            @foreach($posts as $post)
                @include('partials.post.preview', ['post' => $post])
            @endforeach

            {!! with((new Ohlandt\Presenters\Pagination\Materialize($posts))->setColor('deep-orange darken-2'))->render() !!}

        </div>
        <div class="col s12 m3 l3 sidebar">
            @include('partials.sidebar')
        </div>
    </div>
</div>
<div class="container">

</div>
@endsection