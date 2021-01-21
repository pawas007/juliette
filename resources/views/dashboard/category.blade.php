@extends('layouts.dashboard')


@section('dashboardContent')






    <div class="container">
        @if($errors && $errors->count())
            @foreach ($errors->all() as $message)
                <div class="alert alert-danger mb-1">
                    {{$message}}
                </div>
            @endforeach
        @endif
        @if(session()->has('message'))
            <div class="alert alert-success  mb-1">
                {{ session()->get('message') }}
            </div>
        @endif


        <div class="row mt-5">
            <div class="col-md-5">
                <h3>Add category</h3>

                <form action="{{ route('category.store')}} " method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-5">

                            <input type="text" name="name" class="form-control">
                            <label for="">Category </label>
                        </div>
                        <div class="form-group col-md-5">

                            <input type="text" name="slug" class="form-control">
                            <label for="">Slug </label>
                        </div>
                        <div class="form-group col-md-2">
                            <button class="btn category-link font-weight-normal" type="submit" id="add"> Add
                            </button>
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-7">
                <h3>My category</h3>
                @if( $categories && $categories->count())
                    <ul class="list-group">
                        @foreach($categories as $item)
                            <li class="list-group-item  justify-content-between d-flex  align-content-center edit_row">
                            {{$item->name}}

                                <div class="btn_wrp d-flex">
                                    <button class="btn category-link font-weight-normal"  class="edit_category"> Edit </button>

                                    <form action="{{ route('category.destroy', $item ->id)}}" method="post" class="ml-1">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" class="btn-danger ml-2 btn" value="Delete" >
                                    </form>

                                </div>



                                <form action="{{ route('category.update', $item->id)}} " method="post" class="edit_form">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input type="text" name="name" class="form-control" value="{{$item->name}} ">
                                        </div>
                                        <div class="form-group col-md-4">

                                            <input type="text" name="slug" class="form-control" value="{{$item->slug}}  ">

                                        </div>

                                        <div class="form-group col-md-2 mr-2">
                                            <button class="btn category-link font-weight-normal" type="submit" > Update
                                            </button>
                                        </div>
                                        <div class="form-group col-md-2 ">
                                            <button class="btn btn-dark category-link font-weight-normal close_update " style="display: block " > Close</button>
                                        </div>
                                    </div>
                                </form>


                            </li>






                        @endforeach

                    </ul>
                @else

                    <h2> Just create your first category)</h2>
                    @endif
            </div>


        </div>
    </div>






@endsection
