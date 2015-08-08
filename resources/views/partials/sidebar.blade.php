<div class="submit">
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
<div class="follow-us">
    <h3>{!! trans('sidebar.follow.headline') !!}</h3>
    <ul>
        <li><a href="https://twitter.com/wpkilledme" target="_blank">Twitter</a></li>
    </ul>
</div>
<div class="sticker">
    <h3>{!! trans('sidebar.sticker.headline') !!}</h3>
    <p>{!! trans('sidebar.sticker.text') !!}</p>
    <a href="https://www.stickermule.com/marketplace/6562-wordpress-sucks" target="_blank">
        <img src="https://d21ii91i3y6o6h.cloudfront.net/gallery_images/from_proof/6562/large/1438012517/wordpress-sucks.png">
    </a>
</div>