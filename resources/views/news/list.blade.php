@extends('.layouts/app')

@section('content')
    <section class="p-y-md">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @foreach($posts as $post)
                        <div class="blog-list">
                            <div class="blog-post">
                                @if($post->video)
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $post->video }}" allowfullscreen=""></iframe>
                                @elseif($post->image)
                                    <img src="/uploads/posts/resize/{{ $post->image }}" alt="">
                                @endif
                                <div class="date bg-edit text-edit">
                                    <?=date('d', strtotime($post->created_at))?>
                                    <span><?=date('M Y', strtotime($post->created_at))?></span>
                                </div>
                                <h4><a href="/news/{{ $post->id }}">{{ $post->title }}</a></h4>
                                <p>{!! $post->preview_text !!}</p>
                                <a href="/news/{{ $post->id }}" class="btn btn-blue m-t">Читать далее</a>
                            </div>
                        </div>
                    @endforeach


                    {{--<div class="blog-list">--}}
                        {{--<div class="blog-post">--}}
                            {{--<div id="carousel-blog-list" class="carousel slide " data-ride="carousel">--}}
                                {{--<!-- Indicators -->--}}
                                {{--<ol class="carousel-indicators">--}}
                                    {{--<li data-target="#carousel-blog-list" data-slide-to="0" class=""></li>--}}
                                    {{--<li data-target="#carousel-blog-list" data-slide-to="1" class="active"></li>--}}
                                {{--</ol>--}}

                                {{--<!-- Wrapper for slides -->--}}
                                {{--<div class="carousel-inner" role="listbox">--}}
                                    {{--<div class="item">--}}
                                        {{--<img src="images/bg-1.jpg" alt="">--}}
                                    {{--</div>--}}
                                    {{--<div class="item active">--}}
                                        {{--<img src="images/bg-2.jpg" alt="">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="date bg-edit text-edit">--}}
                                {{--25--}}
                                {{--<span>OCT 2015</span>--}}
                            {{--</div>--}}
                            {{--<h4><a href="#">Gallery Image Post</a></h4>--}}
                            {{--<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  </p>--}}
                            {{--<a href="" class="btn btn-blue m-t"> Continue Reading</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="blog-list">--}}
                        {{--<div class="blog-post">--}}
                            {{--<div class="date m-t-0 text-edit bg-edit">--}}
                                {{--18--}}
                                {{--<span>OCT 2015</span>--}}
                            {{--</div>--}}
                            {{--<h4 class="p-t-0"><a href="#">Standard text post</a></h4>--}}
                            {{--<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  </p>--}}
                            {{--<a href="" class="btn btn-blue m-t"> Continue Reading</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="blog-list">--}}
                        {{--<div class="blog-post">--}}
                            {{--<div class="videoWrapper">--}}
                                {{--<iframe width="560" height="315" src="https://www.youtube.com/embed/sU3FkzUKHXU" allowfullscreen=""></iframe>--}}

                            {{--</div>--}}
                            {{--<div class="date bg-edit text-edit">--}}
                                {{--15--}}
                                {{--<span>OCT 2015</span>--}}
                            {{--</div>--}}
                            {{--<h4><a href="#">Video Post</a></h4>--}}
                            {{--<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  </p>--}}
                            {{--<a href="" class="btn btn-blue m-t"> Continue Reading</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="text-center">
                        {!! $posts->links() !!}
                        {{--<ul class="pagination">--}}
                            {{--<li class="text-edit"><a href="#">Prev</a></li>--}}
                            {{--<li class="active text-edit"><a href="#">1</a></li>--}}
                            {{--<li class="text-edit"><a href="#">2</a></li>--}}
                            {{--<li class="text-edit"><a href="#">3</a></li>--}}
                            {{--<li class="text-edit"><a href="#">4</a></li>--}}
                            {{--<li class="text-edit"><a href="#">5</a></li>--}}
                            {{--<li class="text-edit"><a href="#">Next</a></li>--}}
                        {{--</ul>--}}
                    </div>
                </div>

                <div class="col-md-4">
                    {{--<!--search widget-->--}}
                    {{--<div class="widget hidden-sm">--}}
                        {{--<form role="form">--}}
                            {{--<div class="input-group">--}}
                                {{--<span class="input-group-addon"><i class="icon-search"></i></span>--}}
                                {{--<input type="text" class="form-control addon-left" placeholder="Search for...">--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                    {{--<!--search widget-->--}}

                    <!--latest post widget-->
                    <div class="widget">
                        <div class="w-title">
                            <h5>Последние новости</h5>
                        </div>
                        <ul class="latest-post">
                            @foreach($latest_posts as $lpost)
                                <li>
                                    <a href="/news/{{ $lpost->id }}"><img src="/uploads/posts/resize/{{ $lpost->image }}" alt="" class="img-latest"></a>
                                    <div class="title-latest text-edit">
                                        <a href="/news/{{ $lpost->id }}">{{ $lpost->title }}</a>
                                        <?=date('M d', strtotime($post->created_at))?>, <?=date('Y', strtotime($post->created_at))?>
                                    </div>
                                </li>
                            @endforeach
                            {{--<li>--}}
                                {{--<a href="#"><img src="images/bg-1.jpg" alt="" class="img-latest"></a>--}}
                                {{--<div class="title-latest text-edit">--}}
                                    {{--<a href="#">How to Find Beta Tester</a>--}}
                                    {{--July 28, 2014--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#"><img src="images/bg-3.jpg" alt="" class="img-latest"></a>--}}
                                {{--<div class="title-latest text-edit">--}}
                                    {{--<a href="#">Guide to Link Building</a>--}}
                                    {{--June 05, 2014--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                    <!--latest post widget-->

                </div>
            </div>
        </div>
    </section>
    <!-- /End Blog Section -->
@endsection