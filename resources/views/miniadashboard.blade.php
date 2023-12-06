@extends('layouts.main')

@section('content')

    <div class="page-content dark:bg-zinc-700 min-h-screen">

        <div class="container-fluid px-[0.625rem]">

            <div class="grid grid-cols-1 mb-5">
                <div class="flex items-center justify-between">
                    <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">{{$header}}</h4>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                            <li class="inline-flex items-center">
                                <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                    {{$title}}
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">{{$page}}</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('minia/libs/@popperjs/core/umd/popper.min.js')}}"></script>
    <script src="{{asset('minia/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('minia/libs/metismenujs/metismenujs.min.js')}}"></script>
    <script src="{{asset('minia/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('minia/libs/feather-icons/feather.min.js')}}"></script>
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- apexcharts -->
    <script src="{{asset('minia/libs/apexcharts/apexcharts.min.js')}}"></script>
    <!-- Plugins js-->
    <script src="{{asset('minia/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('minia/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- dashboard init -->
    <script src="{{asset('minia/js/pages/dashboard.init.js')}}"></script>
    
    <script src="{{asset('minia/js/pages/nav&tabs.js')}}"></script>

    <script src="{{asset('minia/libs/swiper/swiper-bundle.min.js')}}"></script>
    
    <script src="{{asset('minia/js/pages/login.init.js')}}"></script>

    <script src="{{asset('minia/js/app.js')}}"></script>
@endsection