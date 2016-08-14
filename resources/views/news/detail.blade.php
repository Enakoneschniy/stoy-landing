@extends('.layouts/app')
@section('content')
<section class="p-y-md">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-list p-b m-b-md">
                    <div class="blog-post">
                        @if($post->video)
                            {!! $post->video !!}
                        @elseif($post->image)
                            <img src="/uploads/posts/resize/{{ $post->image }}" alt="">
                        @endif
                        <div class="date bg-edit text-edit">
                            <?=date('d', strtotime($post->created_at))?>
                            <span><?=date('M Y', strtotime($post->created_at))?></span>
                        </div>
                        <h4><a href="/news/{{ $post->id }}">{{ $post->title }}</a></h4>
                        {!! $post->detail_text !!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <!--search widget-->
                {{--<div class="widget hidden-sm hidden-xs">--}}
                    {{--<form role="form">--}}
                        {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"><i class="icon-search"></i></span>--}}
                            {{--<input type="text" class="form-control addon-left" placeholder="Search for...">--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
                <!--search widget-->


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