@extends('.layouts/app')
@section('content')
    <section id="features4-1" class="p-y-lg bg-edit">
        <div class="container">
            <!-- Section Header -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-header text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <h2 class="wow animated" style="visibility: visible;">Наши услуги</h2>
                        {{--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At rerum odio eum. Tempore eum provident consectetur unde, iure. Unde nemo culpa nulla.</p>--}}
                    </div>
                </div>
            </div>
            <div class="row features-block wow fadeIn new-row-sm" style="visibility: visible; animation-name: fadeIn;">
                <div class="col-md-10 col-md-offset-1 c2">
                    @foreach($services as $key => $service)
                        @if($key%2 == 0)
                                </div>
                            </div>
                            <div class="row features-block wow fadeIn new-row-sm" style="visibility: visible; animation-name: fadeIn;">
                                <div class="col-md-10 col-md-offset-1 c2">
                        @endif
                        <div class="col-sm-6 img-left clearfix">
                            <img src="/uploads/service/resize/{{ $service->image }}" alt="">
                            <h5 class="m-t f-w-900">{{ $service->title }}</h5>
                            {!! $service->describe !!}
                            <p>{{ $service->price }} грн.</p>
                        </div>
                    @endforeach
                </div>
            </div>
            {{--<!-- Features Row -->--}}
            {{--<div class="row features-block wow fadeIn new-row-sm" style="visibility: visible; animation-name: fadeIn;">--}}
                {{--<div class="col-md-10 col-md-offset-1 c2">--}}
                    {{--<div class="col-sm-6 img-left clearfix">--}}
                        {{--<img src="images/flat1.png" alt="">--}}
                        {{--<p>Odit non officiis vitae eaque quo temporibus blanditiis excepturi facilis, dolore provident et eligendi ut asperiores perferendis, maxime optio tempora.</p>--}}
                        {{--<h5 class="m-t f-w-900">Content Marketing</h5>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-6 img-left clearfix">--}}
                        {{--<img src="images/flat3.png" alt="">--}}
                        {{--<h5 class="m-t f-w-900">SEO</h5>--}}
                        {{--<p>Omnis nam quibusdam fugiat consectetur quasi iste, aspernatur eaque doloremque, magni dolores deserunt impedit fugit error consequuntur esse.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- Features Row -->--}}
            {{--<div class="row features-block wow fadeIn new-row-sm" style="visibility: visible; animation-name: fadeIn;">--}}
                {{--<div class="col-md-10 col-md-offset-1 c2">--}}
                    {{--<div class="col-sm-6 img-left clearfix">--}}
                        {{--<img src="images/flat2.png" alt="">--}}
                        {{--<h5 class="m-t f-w-900">Pay-per-Click</h5>--}}
                        {{--<p>Neque iure, illum consequatur quidem laudantium veritatis labore fuga inventore totam, at quos deserunt quae expedita aliquam, perspiciatis saepe.</p>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-6 img-left clearfix">--}}
                        {{--<img src="images/flat4.png" alt="">--}}
                        {{--<h5 class="m-t f-w-900">Growth Hacking</h5>--}}
                        {{--<p>Deserunt impedit fugit error consequuntur esse, deleniti libero aspernatur ad assumenda, laudantium saepe similique facere eaque.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div><!-- /End Features Row -->--}}

        </div><!-- /End Container -->
    </section>
@endsection