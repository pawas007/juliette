@extends('layouts.dashboard')




@section('dashboardContent')

    <h3 class="h3 mb-4"> {{auth()->user()->name}}  </h3>
    <h4 class="h4 mb-5"> Role -  {{auth()->user()->getRoleNames()->first() ? auth()->user()->getRoleNames()->first() : 'USER' }}</h4>


@endsection
