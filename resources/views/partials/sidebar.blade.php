<div class="latest-posts">
    <h3>{!! trans('sidebar.submit.headline') !!}</h3>
    <p>{!! trans('sidebar.submit.text') !!}</p>
</div>
<div class="latest-posts">
    <h3>{!! trans('sidebar.latest.headline') !!}</h3>
    <ul>
        @foreach($latestActivePosts as $post)
            <li><a href="/{{ $post->slug }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
</div>