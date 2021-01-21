@extends('layouts.dashboard')




@section('dashboardContent')



    <h2 class="h2"> Edit Post</h2>

    @if($errors && $errors->count())
        @foreach ($errors->all() as $message)
            <div class="alert alert-danger mb-1">
                {{$message}}
            </div>
        @endforeach
    @endif

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <form class="postform" enctype="multipart/form-data" action="{{ route('article.update',$article->id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group ">
            <label for="theme" class="col-sm-2 col-form-label">Theme</label>
            <input class="form-control" type="text" id="theme" name="theme" value="   {{$article->theme}}  ">
        </div>

        <div class="form-group ">
            <label for="post_slug" class="col-sm-2 col-form-label"> Post slug</label>
            <input class="form-control" type="text" id="post_slug" name="slug">
        </div>


        <div class="form-group ">
            <label for="imgpost" class="col-sm-2 col-form-label">Image</label>
            <input class="form-control" type="file" id="imgpost" name="imgpost" value="{{$article->postimg}}">
            <div class="image_prev mt-3" style="max-width: 300px"><img width="100%" style="border-radius: 10px"
                                                                       src="" id="blah" alt=""></div>
        </div>
        <div class="input-group ">
            <div class="input-group-prepend">
                <label class="input-group-text" for="rating">Rating</label>
            </div>
            <div class="category">

            </div>
            <select class="custom-select" id="rating" name="rating">
                <option selected value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select>
        </div>
        <div class="input-group mt-3 ">
            <div class="input-group-prepend">
                <label class="input-group-text" for="category">Category</label>
            </div>
            <select multiple class="custom-select" id="category" name="category[]">

                @foreach($categories as $category )
                    <option   @if(  $article->categories->contains($category->id)) selected @endif  value="{{$category->id}}">{{$category->name}}</option>

                @endforeach
                <option  value="uncategory">Select category</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="exampleFormControlTextarea1">Content</label>
            <textarea class="form-control post_content" id="post_content" rows="12" name="post_content" >
    {{$article->content}}

</textarea>
</div>
<div class="form-group row">
<div class="col-sm-2">
    <button type="submit" class="btn btn-primary">Edit Post</button>
</div>

        <a href=" {{ route('postList') }}"  class="btn btn-primary">To List</a>

</div>
</form>


@endsection
