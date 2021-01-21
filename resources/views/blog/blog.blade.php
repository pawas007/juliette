@extends('layouts.app')

@section('content')



    <section class="py-5">
        <div class="container py-4">
            <ul class="list-inline">

                @if($categories->count())
                    <li class="list-inline-item my-1 mr-2">

                        <a class="sidebar-tag-link" href="{{ route('blog') }}">All post</a>
                    </li>

                    @foreach($categories as $category)
                        <li class="list-inline-item my-1 mr-2"><a class="sidebar-tag-link"
                                                                  href="{{route('single_category',  ['category' => $category->id])}}">{{$category->name}}</a>
                        </li>

                    @endforeach
                @endif
            </ul>
            <div class="row">

                <!-- Blog listing-->
                <div class="col-lg-9 mb-5 mb-lg-0">
                    @if(  $articles  && $articles ->count() )
                        @foreach($articles as $el)
                            <div class="row align-items-center mb-5">
                                <div class="col-lg-6"><a class="d-block post-trending mb-4"
                                                         href="{{ route('blog') }}/{{$el->id}}"><img
                                            class="img-fluid w-100"
                                            src="{{ asset('images/postimage')}}/{{$el->postimg}}" alt=""/></a>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-inline">
                                        <ul class="list-inline mb-3">
                                            @foreach($el->categories as $category)
                                                <li class="list-inline-item mr-2">
                                                    <a href="/category/{{$category->id}}"
                                                       class="category-link font-weight-normal">{{$category->name}}</a>
                                                </li>
                                            @endforeach


                                        </ul>
                                        <li class="list-inline-item mx-2"><a
                                                class="text-uppercase meta-link font-weight-normal disabled"
                                                href="#">{{$el->author}}</a></li>
                                        <li class="list-inline-item mx-2"><p
                                                class="text-uppercase meta-link font-weight-normal">
                                                @for ($i = 0; $i < $el->rating; $i++)
                                                    <img src="{{ asset('images') }}/star.svg" alt=""
                                                         style="width: 15px">
                                                @endfor


                                            </p></li>
                                    </ul>
                                    <h2 class="h3 "><a class="d-block reset-anchor"
                                                       href="{{ route('blog') }}/{{$el->id}}">{{$el->theme}}</a></h2>
                                    <div class="text-muted short_descript">{!! $el->content !!}</div>
                                    <a class="btn btn-link p-0 read-more-btn"
                                       href="{{ route('blog') }}/{{$el->id}}"><span>Read more</span><i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        @endforeach

                    @else

                        <h1 class="h1 mt-5"> Be first who add post in this category) </h1>

                    @endif

                <!-- Pagination-->
                    {{--                        {{ $data->links() }} --}}
                </div>


                @include('layouts.sidebar')


            </div>
        </div>
    </section>





@endsection
