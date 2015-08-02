<div class="section">
    <div class="row post">
        <div class="col s12 m10 offset-m1 l6 offset-l3">
            <h3><a href="/{{ $post->slug }}">{{ $post->title }}</a></h3>
            <p>{{ $post->text }}</p>
            <img class="materialboxed responsive-img" src="/uploads/{{ $post->image }}">
            <div class="right-align links">
                <a href="/{{ $post->slug }}">permalink &rarr;</a>
            </div>
        </div>
    </div>
</div>