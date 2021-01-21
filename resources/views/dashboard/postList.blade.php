@extends('layouts.dashboard')




@section('dashboardContent')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    @if($articles->count())
        <ul class="list-group col-6">
            @foreach($articles as $post)
                <li class="list-group-item  justify-content-between d-flex"
                    style="align-items: center;">
                    <p class="name">{{$post->theme}} </p>
                    <div class="btn-goup d-flex">
                        <a href="{{ route('article.show', $post ->id)}}"> <i class="fas fa-eye"></i></a>
                        <a href="{{ route('article.edit', $post ->id)}}"> <i class="fal fa-edit ml-4 mr-4"> </i> </a>
                        <br>

                        <form action="{{ route('article.destroy', $post ->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn" type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @else

        <h2>You have no posts</h2>

    @endif

@endsection
