@extends('.layouts/app')

@section('content')
    <section id="hero9" class="bg-img hero-leadbox content-align-md" style="background-image:url('images/uploads/top_img.jpg');">
        <div class="overlay"></div>

        <div class="container">
            <div class="row y-middle">
                <!-- Intro Text -->
                <div class="col-sm-12 col-md-5 center-md text-white">
                    <h1>Turn every project into a success story</h1>
                    <p class="lead f-w-700">Get started with a 30-day free trial – No credit card required.</p>
                    <p class="m-t-md">Nesciunt quasi id vero porro, facere ducimus quis officiis nobis pariatur corrupti alias, deleniti earum perspiciatis neque sunt fugiat saepe impedit reiciendis iusto. Voluptas minima nobis ipsa rerum fugiat explicabo corporis.</p>
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
                    <div class="col-sm-6 img-left clearfix">
                        <img src="images/uploads/fasad.jpg" alt="">
                        <h5 class="m-t f-w-900">Утепление фасадов</h5>
                        <p>Odit non officiis vitae eaque quo temporibus blanditiis excepturi facilis, dolore provident et eligendi ut asperiores perferendis, maxime optio tempora.</p>
                    </div>
                    <div class="col-sm-6 img-left clearfix">
                        <img src="images/uploads/remont.png" alt="">
                        <h5 class="m-t f-w-900">Ремонтно-отделочные</h5>
                        <p>Omnis nam quibusdam fugiat consectetur quasi iste, aspernatur eaque doloremque, magni dolores deserunt impedit fugit error consequuntur esse.</p>
                    </div>
                </div>
            </div>
            <!-- Features Row -->
            <div class="row features-block wow fadeIn new-row-sm" style="visibility: visible; animation-name: fadeIn;">
                <div class="col-md-10 col-md-offset-1 c2">
                    <div class="col-sm-6 img-left clearfix">
                        <img src="images/uploads/sant.jpg" alt="">
                        <h5 class="m-t f-w-900">Сантехника</h5>
                        <p>Neque iure, illum consequatur quidem laudantium veritatis labore fuga inventore totam, at quos deserunt quae expedita aliquam, perspiciatis saepe.</p>
                    </div>
                    <div class="col-sm-6 img-left clearfix">
                        <img src="images/uploads/otopl.jpg" alt="">
                        <h5 class="m-t f-w-900">Отопление</h5>
                        <p>Deserunt impedit fugit error consequuntur esse, deleniti libero aspernatur ad assumenda, laudantium saepe similique facere eaque.</p>
                    </div>
                </div>
            </div><!-- /End Features Row -->
            <div class="col-md-8 col-md-offset-2 text-center p-t-md wow fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
                <a href="#" class="btn btn-shadow btn-blue text-uppercase">ПОСМОТРЕТЬ ЕЩЕ ВИДЫ</a>
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
                <!-- Portfolio Item -->
                <div class="col-md-4 col-sm-6 m-b-md clearfix">
                    <div class="h caption-1 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <!-- Item Image -->
                        <figure><img src="images/portfolio1-sm.jpg" class="img-responsive" alt="">
                            <!-- Item Caption -->
                            <figcaption>
                                <div class="caption-box vertical-center-abs text-center">
                                    <h5>Tech Coffee</h5>
                                    <p class="small">Liber theophrastus ea est, vel unum ubique feugait in. Has ne albucius tincidunt.</p>
                                    <!-- View More Button -->
                                    <a href="images/portfolio1-xl.jpg" class="btn btn-blue m-b-0 mp-gallery" title="Project 1 - with description">View More</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- Portfolio Item -->
                <div class="col-md-4 col-sm-6 m-b-md clearfix">
                    <div class="h caption-1 wow zoomIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                        <!-- Item Image -->
                        <figure><img src="images/portfolio2-sm.jpg" class="img-responsive" alt="">
                            <!-- Item Caption -->
                            <figcaption>
                                <div class="caption-box vertical-center-abs text-center">
                                    <h5>Image Filter</h5>
                                    <p class="small">Quodsi volutpat persequeris cu vel, sea te dolorum dissentiet. Per an dicunt causae, id ipsum.</p>
                                    <!-- View More Button -->
                                    <a href="images/portfolio2-xl.jpg" class="btn btn-blue m-b-0 mp-gallery" title="Project 2 - with description">View More</a>
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
                </div>
            </div><!-- /End Portfolio Row-->

            <!-- Portfolio Footer Cta -->
            <div class="col-md-8 col-md-offset-2 text-center text-white p-t-md wow fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
                <a href="#" class="btn btn-shadow btn-blue text-uppercase">ПОСМОТРЕТЬ БОЛЬШЕЕ...</a>
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
                    <!-- Blog Post -->
                    <div class="col-sm-4">
                        <a href=""><img src="images/img-1.jpg" alt="" class="img-responsive img-rounded"></a>
                        <div class="post-info bg-edit">
                            <div class="date">
                                <span class="day">25</span>
                                Nov
                            </div>
                            <a href=""><h5>10 tools every web designer should have</h5></a>
                            <h6 class="p-opacity">Posted by Harold Butler in <strong>Web Design</strong></h6>
                        </div>
                        <p class="p-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, odio eum magni optio laborum non et accusamus, itaque.</p>
                        <a href="" class="more-link edit">Continue Reading ...</a>
                    </div>
                    <!-- Blog Post -->
                    <div class="col-sm-4">
                        <a href=""><img src="images/img-1.jpg" alt="" class="img-responsive img-rounded"></a>
                        <div class="post-info bg-edit">
                            <div class="date">
                                <span class="day">12</span>
                                Oct
                            </div>
                            <a href=""><h5>Your Start-to-Finish Guide to Link Building&nbsp;</h5></a>
                            <h6 class="p-opacity">Posted by Anthony Kim in <strong>SEO</strong></h6>
                        </div>
                        <p class="p-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, odio eum magni optio laborum non et accusamus, itaque.</p>
                        <a href="" class="more-link edit">Continue Reading ...</a>
                    </div>
                    <!-- Blog Post -->
                    <div class="col-sm-4">
                        <a href=""><img src="images/img-1.jpg" alt="" class="img-responsive img-rounded"></a>
                        <div class="post-info">
                            <div class="date text-edit">
                                <span class="day">26</span>
                                Sep
                            </div>
                            <a href=""><h5>The Journey to Product Market Fit</h5></a>
                            <h6 class="p-opacity">Posted by Carl Bradley in <strong>Startup</strong></h6>
                        </div>
                        <p class="p-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, odio eum magni optio laborum non et accusamus, itaque.</p>
                        <a href="" class="more-link edit">Continue Reading ...</a>
                    </div>
                </div>
            </div><!-- /End Row -->
            <div class="col-md-8 col-md-offset-2 text-center text-white p-t-md wow fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
                <a href="#" class="btn btn-shadow btn-blue text-uppercase">ЧИТАТЬ БОЛЬШЕ СТАТТЕЙ</a>
            </div>
        </div><!-- /End Container -->

    </section>
@endsection