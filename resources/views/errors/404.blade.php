@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="center-align" style="font-size: 50px">
                404
            </div>
            <p class="center-align">{{ trans('errors.404') }}</p>
        </div>
    </div>
</div>
@endsection