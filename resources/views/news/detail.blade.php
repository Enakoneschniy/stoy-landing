@extends('.layouts/app')

@section('content')
<section class="p-y-md">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-list p-b m-b-md">
                    <div class="blog-post">
                        <img src="images/bg-1.jpg" alt="">
                        <div class="date bg-edit text-edit">
                            29
                            <span>OCT 2015</span>
                        </div>
                        <h4><a href="#">Standard blog post with photo</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, deleniti, ducimus. Cupiditate quod maxime ratione assumenda aliquid sint eligendi hic perspiciatis aperiam optio, nesciunt magnam omnis totam eaque, debitis deleniti aliquam fugiat natus unde dolore consequatur expedita, nulla ex! Porro aut, magnam minus reprehenderit ducimus nulla numquam ipsum saepe quos rem, delectus molestias esse exercitationem repellat neque. Quidem consectetur sint eius veritatis expedita animi, vero perferendis maiores ratione odio qui cumque provident unde adipisci atque saepe. Nemo minus aspernatur at velit sunt repudiandae labore molestiae sequi itaque, eum nam harum totam consectetur corrupti ea delectus voluptas saepe animi. Distinctio rerum sunt cumque provident ullam nulla aut harum nostrum laboriosam, soluta, rem dicta impedit optio esse neque dolor, totam sed. Laboriosam!</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam sunt, et amet possimus inventore nesciunt nihil qui! Suscipit vero, hic? Voluptate minus, id repudiandae saepe consequatur ullam corporis aliquid necessitatibus impedit, quos nisi culpa aliquam earum rerum, dolore perferendis quia. Similique totam, hic, dignissimos veniam repellendus eius explicabo quisquam dolorum perspiciatis nihil soluta voluptates</p>

                        <blockquote class="quote-post">
                            <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error</p>
                        </blockquote>

                        <p class="m-b-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at debitis deleniti dignissimos ea enim iste laboriosam nihil omnis possimus quia, tempora,
                            totam voluptatibus! Animi consectetur dolor in laboriosam unde.</p>

                        <pre class="text-edit">.blog-post {<br>  margin-bottom: 70px;<br>  padding-bottom: 70px;<br>  border-bottom: 1px solid #efefef;<br> }</pre>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ex eos, veritatis enim sit quia maiores quam soluta, inventore cumque dolores voluptas quas. Quas iste veritatis commodi reiciendis maiores dolores tenetur nisi. Possimus dolores neque ipsam assumenda labore culpa, saepe itaque asperiores repudiandae dolorum, dicta alias rerum praesentium, earum optio quisquam, expedita! Odit dicta consequatur exercitationem quaerat obcaecati alias a sint repudiandae sapiente, quod. Soluta sit dolorem delectus, quibusdam tempora ullam suscipit ex nihil.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <!--search widget-->
                <div class="widget hidden-sm hidden-xs">
                    <form role="form">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon-search"></i></span>
                            <input type="text" class="form-control addon-left" placeholder="Search for...">
                        </div>
                    </form>
                </div>
                <!--search widget-->


                <!--latest post widget-->
                <div class="widget">
                    <div class="w-title">
                        <h5>Latest Post</h5>
                    </div>
                    <ul class="latest-post">
                        <li>
                            <a href="#"><img src="images/bg-2.jpg" alt="" class="img-latest"></a>
                            <div class="title-latest text-edit">
                                <a href="">Using Modern SEO</a>
                                August 25, 2014
                            </div>
                        </li>
                        <li>
                            <a href="#"><img src="images/bg-1.jpg" alt="" class="img-latest"></a>
                            <div class="title-latest text-edit">
                                <a href="#">How to Find Beta Tester</a>
                                March 28, 2014
                            </div>
                        </li>
                        <li>
                            <a href="#"><img src="images/bg-3.jpg" alt="" class="img-latest"></a>
                            <div class="title-latest text-edit">
                                <a href="#">Guide to Link Building</a>
                                May 05, 2014
                            </div>
                        </li>
                    </ul>
                </div>
                <!--latest post widget-->

            </div>
        </div>
    </div>
</section>
<!-- /End Blog Section -->
@endsection