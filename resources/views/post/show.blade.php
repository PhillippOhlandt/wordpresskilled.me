@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m8 l8 post single">

                <h1>{{ $post->title }}</h1>
                <p>{!! $post->text !!}</p>
                <img class="materialboxed responsive-img" src="/uploads/{{ $post->image }}">

                <div class="share">
                    <h4>{{ trans('post.share') }}</h4>
                    <div class="widgets">
                        <ul class="social-buttons cf">
                            <li>
                                <a href="http://twitter.com/share" class="socialite twitter-share" data-text="{{ $post->title }}" data-url="{{ \Request::url() }}" data-via="wpkilledme" data-hashtags="wordpress" data-count="vertical" rel="nofollow" target="_blank"><span class="vhidden">Share on Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/share?url={{ \Request::url() }}" class="socialite googleplus-one" data-size="tall" data-href="{{ \Request::url() }}" rel="nofollow" target="_blank"><span class="vhidden">Share on Google+</span></a>
                            </li>
                            <li>
                                <a href="http://www.facebook.com/sharer.php?u={{ \Request::url() }}&t={{ $post->title }}" class="socialite facebook-like" data-href="{{ \Request::url() }}" data-send="false" data-layout="box_count" data-width="60" data-show-faces="false" rel="nofollow" target="_blank"><span class="vhidden">Share on Facebook</span></a>
                            </li>
                        </ul>
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

@section('scripts')
    <script>
        Socialite.load();
    </script>
@endsection
