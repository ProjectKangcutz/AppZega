@extends('layouts.main')

@section('content')

<div class="page-content dark:bg-zinc-700 min-h-screen">

	<div class="container-fluid px-[0.625rem]">

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

	</div>

	<div class="grid grid-cols-1">
		<div class="card dark:bg-zinc-800 dark:border-zinc-600">
			<div class="card-body pb-0">
				<h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Tambah File</h6>
			</div>
			<div class="card-body">
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
				<div>
					<form action="{{route('daftar_unduhan.store')}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="grid grid-cols-12 mb-4">
							<label for="horizontal-firstname-input" class="col-span-12 lg:col-span-3 font-medium text-gray-700 dark:text-zinc-100">Nama File</label>
							<div class="col-span-12 lg:col-span-9">
								<input type="text" name="nama_file" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" id="horizontal-firstname-input" placeholder="Enter File Name">
							</div>
						</div>
						<div class="grid grid-cols-12 mb-4">
							<label for="horizontal-firstname-input" class="col-span-12 lg:col-span-3 font-medium text-gray-700 dark:text-zinc-100">Keterangan</label>
							<div class="col-span-12 lg:col-span-9">
								<textarea id="message" name="keterangan" rows="4" class="block p-2.5 w-full text-gray-700 dark:text-zinc-100 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Keterangan ..."></textarea>
							</div>
						</div>
						<div class="grid grid-cols-12 mb-4">
							<label for="horizontal-firstname-input" class="col-span-12 lg:col-span-3 font-medium text-gray-700 dark:text-zinc-100">File Upload</label>
							<div class="col-span-12 lg:col-span-9">
								<input type="file" name="file" type="file">
							</div>
						</div>
						<div class="text-center mt-4">
							<button type="submit" class="btn bg-violet-500 border-violet-500 hover:bg-violet-700 text-white focus:bg-violet-700 focus:ring focus:ring-violet-50">Upload</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



	<script src="{{asset('minia/libs/@popperjs/core/umd/popper.min.js')}}"></script>
	<script src="{{asset('minia/libs/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('minia/libs/metismenujs/metismenujs.min.js')}}"></script>
	<script src="{{asset('minia/libs/simplebar/simplebar.min.js')}}"></script>
	<script src="{{asset('minia/libs/feather-icons/feather.min.js')}}"></script>

	<!-- dropzone js -->
	<script src="{{asset('minia/libs/dropzone/min/dropzone.min.js')}}"></script>

	<!-- ckeditor -->
	<script src="{{asset('minia/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}"></script>
	<!-- init js -->
	<script src="{{asset('minia/js/pages/form-editor.init.js')}}"></script>

	<script src="{{asset('minia/js/app.js')}}"></script>

	@endsection