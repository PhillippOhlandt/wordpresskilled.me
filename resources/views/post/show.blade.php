@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m8 l8 post single">

                <h1>{{ $post->title }}</h1>
                <p>{{ $post->text }}</p>
                <img class="materialboxed responsive-img" src="/uploads/{{ $post->image }}">

                <div class="share">
                    <h4>{{ trans('post.share') }}</h4>
                    <div class="widgets">

                    </div>
                </div>

            </div>
            <div class="col s12 m4 l4 sidebar">
                @include('partials.sidebar')
            </div>
        </div>

        <div class="row">
            <div class="col s12 m12 l8 comments">
                <div id="disqus_thread"></div>
                <script type="text/javascript">
                    /* * * CONFIGURATION VARIABLES * * */
                    var disqus_shortname = 'wordpresskilledme';

                    var disqus_title = '{{ $post->title }}';

                    var disqus_identifier = '{{ $post->id }}';

                    /* * * DON'T EDIT BELOW THIS LINE * * */
                    (function() {
                        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
            </div>
        </div>
    </div>
@endsection