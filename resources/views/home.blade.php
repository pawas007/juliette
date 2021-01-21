@extends('layouts.app')

@section('content')
    <section class="bg-white pb-5">
            <div class="container-fluid px-0 pnb-4">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="post-thumnail"><img class="img-fluid w-100" src="img/home-bg.jpg" alt=""></div>
                    </div>
                    <div class="col-lg-6 mx-auto text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item mr-3"><a class="category-link font-weight-normal"
                                                                 href="#">Fashion</a></li>
                            <li class="list-inline-item mx-3"><a class="text-uppercase meta-link font-weight-normal"
                                                                 href="#">John Smith</a></li>
                            <li class="list-inline-item mx-3"><a class="text-uppercase meta-link font-weight-normal"
                                                                 href="#">15 Septemper 2020</a></li>
                        </ul>
                        <h1 class="mb-4"><a class="reset-anchor" href="#">Home Office Makeover Plans: Inspiration &amp;
                                Moodboard</a></h1>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><a
                                class="btn btn-link p-0 read-more-btn" href="post.html"><span>Read more</span><i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </section>


    <!-- Top categories-->
    <section class="pb-5">
        <div class="container pb-4">
            <div class="row mb-5 pb-4">
                <div class="col-lg-4 mb-4 mb-lg-0"><a class="category-block bg-center bg-cover"
                                                      style="background: url(img/category-bg-1.jpg)" href="#"><span
                            class="category-block-title">Interior Design</span></a></div>
                <div class="col-lg-4 mb-4 mb-lg-0"><a class="category-block bg-center bg-cover"
                                                      style="background: url(img/category-bg-2.jpg)" href="#"><span
                            class="category-block-title">Fashion</span></a></div>
                <div class="col-lg-4"><a class="category-block bg-center bg-cover"
                                         style="background: url(img/category-bg-3.jpg)" href="#"><span
                            class="category-block-title">Tips &amp; Tricks</span></a></div>
            </div>
            <!-- Newsletter-->
            <div class="p-4 bg-light">
                <div class="row align-items-center p-lg-3">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h2 class="h3 mb-1">Subscribe to my newsletter</h2>
                        <p class="mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="#">
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="Enter your email address"
                                       aria-label="email address" aria-describedby="button-addon2">
                                <div class="input-group-append ml-2">
                                    <button class="btn btn-primary" id="button-addon2" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home listing-->
    <section class="pb-5">
        <div class="container pb-4">
            <div class="row">
                <div class="col-lg-9 mb-5 mb-lg-0">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-6"><a class="d-block post-trending mb-4" href="post.html"><img
                                    class="img-fluid w-100" src="img/post-img-1.jpg" alt=""/></a>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-inline">
                                <li class="list-inline-item mr-2"><a class="category-link font-weight-normal" href="#">Fashion</a>
                                </li>
                                <li class="list-inline-item mx-2"><a class="text-uppercase meta-link font-weight-normal"
                                                                     href="#">John Smith</a></li>
                                <li class="list-inline-item mx-2"><a class="text-uppercase meta-link font-weight-normal"
                                                                     href="#">15 Sep 2020</a></li>
                            </ul>
                            <h2 class="h3 mb-4"><a class="d-block reset-anchor" href="post.html">Summer of Love: The
                                    History of San Francisco</a></h2>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <a class="btn btn-link p-0 read-more-btn" href="post.html"><span>Read more</span><i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-6"><a class="d-block post-trending mb-4" href="post.html"><img
                                    class="img-fluid w-100" src="img/post-img-2.jpg" alt=""/></a>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-inline">
                                <li class="list-inline-item mr-2"><a class="category-link font-weight-normal" href="#">Inspiration</a>
                                </li>
                                <li class="list-inline-item mx-2"><a class="text-uppercase meta-link font-weight-normal"
                                                                     href="#">John Smith</a></li>
                                <li class="list-inline-item mx-2"><a class="text-uppercase meta-link font-weight-normal"
                                                                     href="#">15 Sep 2020</a></li>
                            </ul>
                            <h2 class="h3 mb-4"><a class="d-block reset-anchor" href="post.html">Yoga Recipes You Need
                                    to Make them</a></h2>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <a class="btn btn-link p-0 read-more-btn" href="post.html"><span>Read more</span><i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-6"><a class="d-block post-trending mb-4" href="post.html"><img
                                    class="img-fluid w-100" src="img/post-img-3.jpg" alt=""/></a>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-inline">
                                <li class="list-inline-item mr-2"><a class="category-link font-weight-normal" href="#">Interior
                                        Design</a></li>
                                <li class="list-inline-item mx-2"><a class="text-uppercase meta-link font-weight-normal"
                                                                     href="#">John Smith</a></li>
                                <li class="list-inline-item mx-2"><a class="text-uppercase meta-link font-weight-normal"
                                                                     href="#">15 Sep 2020</a></li>
                            </ul>
                            <h2 class="h3 mb-4"><a class="d-block reset-anchor" href="post.html">Scandinavian Design
                                    Meets Californian Styling</a></h2>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <a class="btn btn-link p-0 read-more-btn" href="post.html"><span>Read more</span><i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-6"><a class="d-block mb-4" href="post.html"><img class="img-fluid w-100"
                                                                                            src="img/post-img-4.jpg"
                                                                                            alt=""/></a>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-inline">
                                <li class="list-inline-item mr-2"><a class="category-link font-weight-normal" href="#">Fashion</a>
                                </li>
                                <li class="list-inline-item mx-2"><a class="text-uppercase meta-link font-weight-normal"
                                                                     href="#">John Smith</a></li>
                                <li class="list-inline-item mx-2"><a class="text-uppercase meta-link font-weight-normal"
                                                                     href="#">15 Sep 2020</a></li>
                            </ul>
                            <h2 class="h3 mb-4"><a class="d-block reset-anchor" href="post.html">Awesome Fashion Trend
                                    in For Winter</a></h2>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <a class="btn btn-link p-0 read-more-btn" href="post.html"><span>Read more</span><i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                    <blockquote class="blockquote bg-dark text-white p-4 p-lg-5 text-center mb-5">
                        <p class="h4 mb-4">Design is the fundamental soul of a human-made creation that ends up
                            expressing itself in successive outer layers of the product or service.</p>
                        <footer class="blockquote-footer">
                            <cite class="text-white" title="Source Title">Steve Jobs</cite>
                        </footer>
                    </blockquote>
                    <!-- Pagination-->
{{--                    <nav aria-label="Page navigation example">--}}
{{--                        <ul class="pagination">--}}
{{--                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>--}}
{{--                            <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
                </div>

                @include('layouts.sidebar')


            </div>
        </div>
    </section>
    <!-- Instagram items-->
    <section>
        <div class="instagram-section-title d-none d-sm-block"><i class="fab fa-instagram mr-2"></i>Follow on Instagram
            @Juliette
        </div>
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-lg-2 col-4 p-0"><a  data-fancybox="gallery" class="d-block instagram-item" href="images/admin/instagram-1.jpg"><img class="img-fluid"
                                                                                                src="images/admin/instagram-1.jpg"
                                                                                                alt="">
                        <div class="instagram-item-overlay"><i class="fab fa-instagram"></i></div>
                    </a></div>
                <div class="col-lg-2 col-4 p-0"><a data-fancybox="gallery" class="d-block instagram-item" href="images/admin/instagram-2.jpg"><img class="img-fluid"
                                                                                                src="images/admin//instagram-2.jpg"
                                                                                                alt="">
                        <div class="instagram-item-overlay"><i class="fab fa-instagram"></i></div>
                    </a></div>
                <div class="col-lg-2 col-4 p-0"><a  data-fancybox="gallery" class="d-block instagram-item" href="images/admin/instagram-3.jpg"><img class="img-fluid"
                                                                                                src="images/admin/instagram-3.jpg"
                                                                                                alt="">
                        <div class="instagram-item-overlay"><i class="fab fa-instagram"></i></div>
                    </a></div>
                <div class="col-lg-2 col-4 p-0"><a  data-fancybox="gallery" class="d-block instagram-item"  href="images/admin/instagram-4.jpg"><img class="img-fluid"
                                                                                                src="images/admin/instagram-4.jpg"
                                                                                                alt="">
                        <div class="instagram-item-overlay"><i class="fab fa-instagram"></i></div>
                    </a></div>
                <div  class="col-lg-2 col-4 p-0"><a data-fancybox="gallery" class="d-block instagram-item" href="images/admin//instagram-5.jpg"><img class="img-fluid"
                                                                                                src="images/admin/instagram-5.jpg"
                                                                                                alt="">
                        <div class="instagram-item-overlay"><i class="fab fa-instagram"></i></div>
                    </a></div>
                <div class="col-lg-2 col-4 p-0"><a data-fancybox="gallery" class="d-block instagram-item" href="images/admin/instagram-6.jpg"><img class="img-fluid"
                                                                                                src="images/admin/instagram-6.jpg"
                                                                                                alt="">
                        <div class="instagram-item-overlay"><i class="fab fa-instagram"></i></div>
                    </a></div>
            </div>
        </div>
    </section>







@endsection
