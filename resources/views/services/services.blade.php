@extends('.layouts/app')
@section('content')
    <section id="pricing6-1" class="p-y-lg subscription tickets bg-edit content-align-md">
        <div class="container">
            <!-- Section Header -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-header text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <h2>Виды работ</h2>
                        {{--<p class="lead">Below you can find the Event Pricelist. Get your Conference Tickets.</p>--}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 y-middle c2">
                    <!-- Subscription Form -->
                    <div class="col-md-5">
                        {!! Form::open(['class' => 'form-horizontal form-white form-bg bg-grey m-t-0', 'id' => 'ticketForm', 'role' => 'form']) !!}
                            <p class="m-b-md f-w-700 text-center">Заполните форму для отправки заявки на выполнение работ</p>
                            {{--<p class="success tf text-center"><i class="fa fa-check"></i> <strong>You have successfully subscribed.</strong></p>--}}
                            <p class="failed tf text-center"><i class="fa fa-exclamation-circle"></i><strong> Something went wrong!</strong></p>
                            <div class="form-group">
                                {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'tfName', 'placeholder' => 'Имя']) !!}
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<input type="email" class="form-control" id="tfEmail" placeholder="Email" required="">--}}
                            {{--</div>--}}
                            <div class="form-group">
                                {!! Form::text('phone', null, ['class' => 'form-control', 'id' => 'tfPhone', 'placeholder' => 'Телефон']) !!}
                            </div>
                            <div class="form-group m-b">
                                {!! Form::text('ticket', null, ['class' => 'form-control', 'id' => 'tfTicket', 'placeholder' => 'Выберите вид работ']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('ОТПРАВИТЬ ЗАЯВКУ', ['class' => 'btn btn-shadow btn-green']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div>
                    <!-- Pricing Plans -->
                    <div class="col-md-7 ticket-prices ticket-selection c2">

                        @foreach($services as $service)
                            <!-- Pricing Item -->
                            <div class="item-price m-t-md">
                                <p class="amount bg-green">${{ $service->price }}</p>
                                <h4>{{ $service->title }}</h4>
                                <p class="ticket-info">{!! $service->describe !!}</p>
                            </div>
                        @endforeach
                        <!-- Pricing Item -->
                        {{--<div class="item-price m-t-md">--}}
                            {{--<p class="amount bg-green">$299</p>--}}
                            {{--<h4>Premium</h4>--}}
                            {{--<p class="ticket-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac mollis risus. Nulla ornare ipsum idlacus vehicula sitamet.</p>--}}
                        {{--</div>--}}
                        {{--<!-- Pricing Item -->--}}
                        {{--<div class="item-price m-t-md">--}}
                            {{--<p class="amount bg-green">$499</p>--}}
                            {{--<h4>Gold</h4>--}}
                            {{--<p class="ticket-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac mollis risus. Nulla ornare ipsum idlacus vehicula sitamet.</p>--}}
                        {{--</div>--}}
                    </div><!-- /End Pricing Plans -->
                </div><!-- /End Col -->
            </div><!-- /End Row -->
        </div><!-- /End Container -->
    </section>
@endsection