@extends('layouts.app')

@section('content')
    <section id="portfolio1-2" class="p-y-lg bg-edit bg-dark">

        <!-- Section Header -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-header text-center text-white wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <h2>{{$project->title}}</h2>
                        <p class="lead">{!! $project->describe !!}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @if(count($project->portfolios) > 0)
                    @foreach($project->portfolios as $item)
                        <div class="col-md-4 col-sm-6 m-b-md clearfix">
                            <div class="h caption-1 wow zoomIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: zoomIn;">
                                <!-- Item Image -->
                                <a href="/uploads/portfolio/resize/detail/{{$item->image}}" class="m-b-0 mp-gallery" title="Project 5 - with description">
                                    <figure><img src="/uploads/portfolio/resize/preview/{{$item->image}}" class="img-responsive" alt="{{$item->title}}"></figure>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div><!-- /End Portfolio Row-->
        </div><!-- /End Container -->
    </section>
@endsection