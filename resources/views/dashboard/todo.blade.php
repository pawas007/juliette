@extends('layouts.dashboard')


@section('dashboardContent')
    <section class="to_do">
        <div><h1>My Todolist</h1></div>
        @if($errors && $errors->count())
            @foreach ($errors->all() as $message)
                <div class="alert alert-danger mb-1">
                    {{$message}}
                </div>
            @endforeach
        @endif


        <form action="{{ route('todo.store')}} " method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-4">
                    <input type="text" name="title" class="form-control" id="todoval">
                </div>
                <div class="form-group col-md-2">
                    <button class="btn category-link font-weight-normal" type="submit" id="additem"> Add to list
                    </button>
                </div>
            </div>
        </form>

        @if( $todos && $todos->count())
            <ul class="list-group col-6">
                @foreach($todos as $indexKey => $todo)
                    <li class="list-group-item  justify-content-between d-flex   @if($todo->conpleted) complatedq @endif" style="align-items: center;">
                        <div class="left_side"><span class="badge badge-primary badge-pill mr-2">{{$indexKey + 1}} </span>{{ $todo->title}}</div>
                        <div class="button_wrap d-flex">
                            @if($todo->conpleted)
                                <form action="{{ route('todo.update', $todo ->id)}}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <input type="text" name="conpleted" value="0" hidden>
                                    <input type="submit" class="btn-as btn" value="To do" >
                                </form>
                            @else
                                <form action="{{ route('todo.update', $todo ->id)}}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <input type="text" name="conpleted" value="1" hidden>
                                    <input type="submit" class="btn-success btn" value="Done" >
                                </form>
                            @endif

                                <form action="{{ route('todo.destroy', $todo ->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input type="text" name="conpleted" value="0" hidden>
                                    <input type="submit" class="btn-danger ml-2 btn" value="Remove" >
                                </form>




                        </div>
                    </li>



                @endforeach
            </ul>
        @else
            <div class="alert alert-info col-6" role="alert">
                No todo list items!
            </div>
        @endif


    </section>

@endsection
