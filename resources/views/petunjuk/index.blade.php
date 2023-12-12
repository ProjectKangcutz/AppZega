@extends('layouts.main')

@section('content')

<div class="page-content dark:bg-zinc-700 min-h-screen">

	<div class="container-fluid px-[0.625rem]">
        @if ($message = Session::get('success'))
        <div class="card p-5 rounded bg-green-600 border-green-600">
            <p class="text-white/60">{{ $message }}</p>
        </div>
        @endif

        @if ($errors->any())
        <div class="card p-5 rounded bg-red-400 border-red-400">
            <p class="text-white/60"><span class="font-medium">Whoops!</span> Mohon maaf ada kesalahan dalam input anda :<br><br></p>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="grid grid-cols-1 mb-5">
           <div class="flex items-center justify-between">
            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">{{$header??'header'}}</h4>
            <nav class="flex" aria-label="Breadcrumb">
             <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
              <li class="inline-flex items-center">
               <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                {{$title ?? 'title'}}
            </a>
        </li>
        <li>
           <div class="flex items-center">
            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
             <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
         </svg>
         <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">{{$page ?? 'page'}}</a>
     </div>
 </li>
</ol>
</nav>
</div>
</div>

@if(Auth::user()->level_id==1)

    @include('petunjuk.create')

@endif



<div class="grid grid-cols-12 gap-5">
    <div class="col-span-12 xl:col-span-12">
        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
            <div class="card-body pb-0">
                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100"></h6>
            </div>
            <div class="card-body">
                <div data-tw-accordion="collapse">
                    @foreach($data as $item)
                    <div class="accordion-item text-gray-700">
                        <h2>
                            <button type="button" class="accordion-header group active flex items-center justify-between w-full p-3 font-medium text-left border border-b-0 border-gray-100 rounded-t-lg hover:bg-gray-50/50 dark:hover:bg-zinc-700/50 dark:border-zinc-600">
                                <span class="text-15">{{$item->judul}}</span>
                                <i class="mdi mdi-plus text-xl group-[.active]:hidden block"></i>
                                <i class="mdi mdi-minus text-xl group-[.active]:block hidden"></i>
                            </button>
                        </h2>

                        <div class="accordion-body block">
                            <div class="p-5 font-light border border-b-0 border-gray-100 dark:border-zinc-600">
                                {!! html_entity_decode($item->artikel) !!}
                            </div>
                            @if(Auth::user()->level_id==1)
                            <div class="mb-3 text-right">
                                <form action="{{ route('petunjuk.destroy',$item->id) }}" method="POST">
                                    <a href="{{ route('petunjuk.edit',$item->id) }}" class="btn text-white bg-green-500 border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600"><i class="bx bx-edit-alt text-16 align-middle "></i></a>
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn text-white bg-red-500 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600"><i class="bx bx-trash-alt text-16 align-middle"></i></button>
                                </form>
                            </div>
                            @endif
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>  
</div>
</div>
<script src="{{asset('minia/libs/@popperjs/core/umd/popper.min.js')}}"></script>
<script src="{{asset('minia/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('minia/libs/metismenujs/metismenujs.min.js')}}"></script>
<script src="{{asset('minia/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('minia/libs/feather-icons/feather.min.js')}}"></script>

<script src="{{asset('minia/js/pages/nav&tabs.js')}}"></script>

<!-- ckeditor -->
<script src="{{asset('minia/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}"></script>

<!-- init js -->
<script src="{{asset('minia/js/pages/form-editor.init.js')}}"></script>

<script src="{{asset('minia/js/app.js')}}"></script>
@endsection