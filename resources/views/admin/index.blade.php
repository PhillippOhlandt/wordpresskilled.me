@extends('layout')

@section('content')
    <div class="container post-list">
        @foreach($posts as $post)
            <div class="section">
                <div class="row">
                    <div class="col s12">
                        <h5>
                            {{ $post->title }}
                            <span style="font-size: 16px;">
                                @if($post->active)
                                    <a href="/backend/{{ $post->slug }}/deactivate?key={{ \Input::get('key') }}" style="color: grey;">{{ trans('admin.deactivate') }}</a>
                                @else
                                    <a href="/backend/{{ $post->slug }}/activate?key={{ \Input::get('key') }}">{{ trans('admin.activate') }}</a>
                                @endif
                            </span>
                        </h5>
                    </div>
                    <div class="col s12 m8 l9">
                        {{ $post->text }}
                    </div>
                    <div class="col s12 m4 l3">
                        <img class="materialboxed responsive-img" src="/uploads/{{ $post->image }}">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12">
                {!! with((new Ohlandt\Presenters\Pagination\Materialize($posts->appends(['key' => \Input::get('key')])))->setColor('deep-orange darken-2'))->render() !!}
            </div>
        </div>
    </div>
@endsection