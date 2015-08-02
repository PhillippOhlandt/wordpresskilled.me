@extends('layout')

@section('content')
<div class="container post-list">
    @foreach($posts as $post)
        @include('partials.post.preview', ['post' => $post])
    @endforeach
</div>
<div class="container">
    <div class="row">
        <div class="col s12 m10 offset-m1 l6 offset-l3">
            {!! with((new Ohlandt\Presenters\Pagination\Materialize($posts))->setColor('deep-orange darken-2'))->render() !!}
        </div>
    </div>
</div>
@endsection