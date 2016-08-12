@extends('.layouts/app')

@section('content')
    <section id="hero9" class="bg-img hero-leadbox content-align-md" style="background-image:url('/uploads/images/resize/{{$data->header_image}}');">
        <div class="overlay"></div>

        <div class="container">
            <div class="row y-middle">
                <!-- Intro Text -->
                <div class="col-sm-12 col-md-5 center-md text-white">
                    <h1>{{$data->title_header}}</h1>
                    <p class="m-t-md">{{$data->description_header}}</p>
                </div>
                <div class="col-sm-12 col-md-5 col-md-offset-1">
                    <!-- Mailchimp Form -->
                    <form class="form-horizontal form-white bg-grey text-white" id="mailchimpForm">
                        <h4 class="text-center">Оставить заявку</h4>
                        <p class="text-center m-b-md">
                            Заполните форму и мы свами свяжимся в ближайшее время!
                        </p>
                        <div class="form-group">
                            <input type="text" class="form-control" id="m3Name" placeholder="Имя" name="NAME" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="m3Phone" placeholder="Номер телефона" name="PHONE" required="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-shadow btn-green">ОТПРАВИТЬ ЗАЯВКУ</button>
                        </div>
                    </form>
                </div><!-- /End  Form -->
            </div><!-- /End Row -->
        </div><!-- /End Container -->

    </section><!-- =========================
           FEATURES SECTION
        ============================== -->
    <section id="services" class="p-y-lg bg-edit" >
        <div class="container" >
            <!-- Section Header -->
            <div class="row" >
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-header text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <h2 class="wow animated animated animated animated animated" style="visibility: visible;">Виды работ</h2>
                    </div>
                </div>
            </div>
            <!-- Features Row -->
            <div class="row features-block wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="col-md-10 col-md-offset-1 c2">
                    @foreach($services as $key => $service)
                        @if($key%2 == 0)
                                </div>
                            </div>
                            <div class="row features-block wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                                <div class="col-md-10 col-md-offset-1 c2">
                        @endif
                        <div class="col-sm-6 img-left clearfix">
                            <img src="/uploads/service/resize/preview/{{$service->image}}" alt="">
                            <h5 class="m-t f-w-900">{{$service->title}}</h5>
                            {!! $service->describe !!}
                        </div>

                    @endforeach
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 text-center p-t-md wow fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
                <a href="{{url('services')}}" class="btn btn-shadow btn-blue text-uppercase">ПОСМОТРЕТЬ ЕЩЕ ВИДЫ</a>
            </div>

        </div><!-- /End Container -->
    </section><!-- =========================
           PORTFOLIO
        ============================== -->
    <section id="portfolio" class="p-y-lg bg-edit bg-dark">

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
               {{-- <div class="col-md-4 col-sm-6 m-b-md clearfix">
                    <div class="h caption-1 wow zoomIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                        <!-- Item Image -->
                        <figure><img src="images/portfolio2-sm.jpg" class="img-responsive" alt="">
                            <!-- Item Caption -->
                            <figcaption>
                                <div class="caption-box vertical-center-abs text-center">
                                    <h5>Image Filter</h5>
                                    <p class="small">Quodsi volutpat persequeris cu vel, sea te dolorum dissentiet. Per an dicunt causae, id ipsum.</p>
                                    <!-- View More Button -->
                                    <a href="#" class="btn btn-blue m-b-0 mp-gallery" title="Project 2 - with description">View More</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- Portfolio Item -->
                <div class="col-md-4 col-sm-6 m-b-md clearfix">
                    <div class="h caption-1 wow zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                        <!-- Item Image -->
                        <figure><img src="images/portfolio3-sm.jpg" class="img-responsive" alt="">
                            <!-- Item Caption -->
                            <figcaption>
                                <div class="caption-box vertical-center-abs text-center">
                                    <h5>Clean Sheet</h5>
                                    <p class="small">Rebum insolens vim ne, no per zril mnesarchum inciderint. Quo dicat audire interesset cu.</p>
                                    <!-- View More Button -->
                                    <a href="images/portfolio3-xl.jpg" class="btn btn-blue m-b-0 mp-gallery" title="Project 3 - with description">View More</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- Portfolio Item -->
                <div class="col-md-4 col-sm-6 m-b-md clearfix">
                    <div class="h caption-1 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                        <!-- Item Image -->
                        <figure><img src="images/portfolio4-sm.jpg" class="img-responsive" alt="">
                            <!-- Item Caption -->
                            <figcaption>
                                <div class="caption-box vertical-center-abs text-center">
                                    <h5>Desktop Sound</h5>
                                    <p class="small">Congue platonem ei usu, cu erroribus principes ius. Ea per case epicurei, iisque utroque corpora vis an.</p>
                                    <!-- View More Button -->
                                    <a href="images/portfolio4-xl.jpg" class="btn btn-blue m-b-0 mp-gallery" title="Project 4 - with description">View More</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- Portfolio Item -->
                <div class="col-md-4 col-sm-6 m-b-md clearfix">
                    <div class="h caption-1 wow zoomIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: zoomIn;">
                        <!-- Item Image -->
                        <figure><img src="images/portfolio5-sm.jpg" class="img-responsive" alt="">
                            <!-- Item Caption -->
                            <figcaption>
                                <div class="caption-box vertical-center-abs text-center">
                                    <h5>Morning Code</h5>
                                    <p class="small">Volumus antiopam id his, nec et fabulas voluptua. Quot platonem maluisset vim et, cu accusam quaestio intellegat vel.</p>
                                    <!-- View More Button -->
                                    <a href="images/portfolio5-xl.jpg" class="btn btn-blue m-b-0 mp-gallery" title="Project 5 - with description">View More</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- Portfolio Item -->
                <div class="col-md-4 col-sm-6 m-b-md clearfix">
                    <div class="h caption-1 wow zoomIn" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: zoomIn;">
                        <!-- Item Image -->
                        <figure><img src="images/portfolio6-sm.jpg" class="img-responsive" alt="">
                            <!-- Item Caption -->
                            <figcaption>
                                <div class="caption-box vertical-center-abs text-center">
                                    <h5>Black &amp; White</h5>
                                    <p class="small">Curabitur ultrices nec est nec vestibulum. Maecenas tincidunt pretium lacinia.</p>
                                    <!-- View More Button -->
                                    <a href="images/portfolio6-xl.jpg" class="btn btn-blue m-b-0 mp-gallery" title="Project 6 - with description">View More</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>--}}
            </div><!-- /End Portfolio Row-->

            <!-- Portfolio Footer Cta -->
            <div class="col-md-8 col-md-offset-2 text-center text-white p-t-md wow fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
                <a href="{{url('projects')}}" class="btn btn-shadow btn-blue text-uppercase">ПОСМОТРЕТЬ БОЛЬШЕ...</a>
            </div>

        </div><!-- /End Container -->
    </section><!-- =========================
             BLOG SECTION
        ============================== -->
    <section id="blog" class="p-y-lg blog bg-edit">
        <div class="container">
            <!-- Section Header -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="section-header text-center">
                        <h2>Последние статьи</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 content-block c3">
                    @foreach($posts as $post)
                        <!-- Blog Post -->
                            <div class="col-sm-4">
                                @if($post->image)
                                    <a href="/news/{{ $post->id }}"><img src="/uploads/posts/resize/{{ $post->image }}" alt="" class="img-responsive img-rounded"></a>
                                @else
                                    <a href="/news/{{ $post->id }}"><img src="images/img-1.jpg" alt="" class="img-responsive img-rounded"></a>
                                @endif
                                <div class="post-info bg-edit">
                                    <div class="date">
                                        <span class="day"><?=date('d', strtotime($post->created_at))?></span>
                                        <?=date('M', strtotime($post->created_at))?>
                                    </div>
                                    <a href="/news/{{ $post->id }}"><h5>{{ $post->title }}</h5></a>
                                    {{--<h6 class="p-opacity">Posted by Harold Butler in <strong>Web Design</strong></h6>--}}
                                </div>
                                <p class="p-opacity">{!! $post->preview_text !!}</p>
                                <a href="/news/{{ $post->id }}" class="more-link edit">Читать далее...</a>
                            </div>
                    @endforeach
                </div>
            </div><!-- /End Row -->
            <div class="col-md-8 col-md-offset-2 text-center text-white p-t-md wow fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
                <a href="/news/" class="btn btn-shadow btn-blue text-uppercase">ЧИТАТЬ БОЛЬШЕ СТАТТЕЙ</a>
            </div>
        </div><!-- /End Container -->

    </section>
@endsection