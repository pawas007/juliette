@extends('layouts.dashboard')




@section('dashboardContent')
    <ul class="list-group col-6">

        @foreach($users as $user )

            <li class="list-group-item  justify-content-between d-flex">
                {{$user->name}}

                <button class="btn-group">Add root</button>
            </li>
        @endforeach
    </ul>


@endsection
