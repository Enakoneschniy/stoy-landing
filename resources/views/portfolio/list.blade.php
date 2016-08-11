@extends('.layouts/app')

@section('content')
    <section id="portfolio1-2" class="p-y-lg bg-edit bg-dark">

        <!-- Section Header -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-header text-center text-white wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <h2>Портфолио</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach($projects as $project)
                    <div class="col-md-4 col-sm-6 m-b-md clearfix">
                        <div class="h caption-1 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                            <!-- Item Image -->
                            <figure><img src="/uploads/projects/resize/preview/{{$project->image}}" class="img-responsive" alt="{{$project->title}}">
                                <!-- Item Caption -->
                                <figcaption>
                                    <div class="caption-box vertical-center-abs text-center">
                                        <h5>{{$project->title}}</h5>
                                        <p class="small">{!! $project->describe !!}</p>
                                        <!-- View More Button -->
                                        <a href="{{url('projects', $project->id)}}" class="btn btn-blue m-b-0" title="Project 1 - with description">Подробнее</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                @endforeach
            </div><!-- /End Portfolio Row-->
        </div><!-- /End Container -->
    </section>
@endsection