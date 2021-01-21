@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                    <h1 class="mt-4">
                        {{$article->theme}}</h1>
                    <!-- Author -->
                    <p class="lead">
                        Author ::
                        {{$article->author}}
                    </p>

                    <hr>

                    <p class="lead">
                        Rating ::

                        @for ($i = 0; $i < $article->rating; $i++)
                            <img src="{{ asset('images') }}/star.svg" alt="" style="width: 15px">
                        @endfor

                    </p>
                    <hr>
                    <p class="lead">
                        Category ::
                        @foreach($article->categories as $category)
                        {{$category->name . ', '}}
                        @endforeach
                    </p>
{{--                    <hr>--}}
                    <!-- Date/Time -->
{{--                    <p>Posted :: {{$article->created_at}}</p> --}}

{{--                    <hr>--}}

                    <!-- Preview Image -->
                    <img class="img-fluid rounded post_img" src="{{ asset('images/postimage')}}/{{$article->postimg}} "
                         alt="">

                    <hr>

                    <!-- Post Content -->
                    <div class="lead">
                        {!! $article->content !!}

                    </div>

                    <hr>

                    <div class="coment_wrap" style="display: none">

                        <div class="card my-4">
                            <h5 class="card-header">Leave a Comment:</h5>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>

                        <!-- Single Comment -->
                        <div class="media mb-4">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Commenter Name</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin.
                                Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
                                nunc
                                ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>

                        <!-- Comment with nested comments -->
                        <div class="media mb-4">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Commenter Name</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin.
                                Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
                                nunc
                                ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                                <div class="media mt-4">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                    <div class="media-body">
                                        <h5 class="mt-0">Commenter Name</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                        turpis.
                                        Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                        in
                                        faucibus.
                                    </div>
                                </div>

                                <div class="media mt-4">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                    <div class="media-body">
                                        <h5 class="mt-0">Commenter Name</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                        turpis.
                                        Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                        in
                                        faucibus.
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
            </div>
            <!-- Comments Form -->





        </div>
    </div>
    <!-- /.row -->




@endsection


