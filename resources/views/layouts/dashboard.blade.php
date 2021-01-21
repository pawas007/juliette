@extends('layouts.app')

@section('content')
    <div class="container-fluid dash_wrap">
        <!-- Vertical navbar -->



        <div class="row">
            <div class="col-lg-2 col-sm-12">
                <div class="vertical-nav bg-white" id="sidebar">
                    <ul class="nav flex-column bg-white mb-0">
                        <li class="nav-item {{ Request::routeIs('dashboard') ? 'linactive' : '' }}">
                            <a href="{{ route('dashboard') }}" class="nav-link text-dark font-italic ">
                                <i class="fa fa-th-large mr-3 fa-fw"></i>
                                Main
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('addpost') }}"
                               class="nav-link text-dark font-italic {{ Request::routeIs('addpost') ? 'linactive' : ''}} ">
                                <i class="fas fa-blog mr-3"></i>
                                Add Post
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('postList') }}"
                               class="nav-link text-dark font-italic {{ Request::routeIs('postList') ? 'linactive' : ''}} ">
                               <i class="fas mr-3 fa-list-ul"></i>
                                Post List
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('category') }}" class="nav-link text-dark font-italic">
                               <i class="fas fa-layer-group mr-3"></i>
                                Category
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('todopage') }}"
                               class="nav-link text-dark font-italic {{ Request::routeIs('todopage') ? 'linactive' : ''}}">
                                <i class="fas fa-tasks mr-3"></i>
                                To do
                            </a>
                        </li>
                        @role('superadmin')
                        <li class="nav-item">
                            <a href="{{ route('superAdmin') }}" class="nav-link text-dark font-italic">
                                <i class="fal fa-users-crown mr-3"></i>
                                Super Admin Panel
                            </a>
                        </li>
                        @endrole
                        <li class="nav-item"><a class="nav-link text-dark font-italic" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                    class=" mr-3 fas fa-sign-out-alt"></i>{{ __('Logout') }}
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12 mt-3">
                @yield('dashboardContent')
            </div>
        </div>


        <!-- End vertical navbar -->
    </div>
@endsection
