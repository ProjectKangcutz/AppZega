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
		<div class="card dark:bg-zinc-800 dark:border-zinc-600">
			<div class="card-body pb-0">
				<h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Tambah Operator</h6>
			</div>
			<form action="{{route('user.store')}}" method="post">
				<div class="card-body">

					@csrf
					<div class="grid grid-cols-12 gap-5">
						<div class="col-span-12 lg:col-span-6">
							<div class="mb-4">
								<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Nama Lengkap</label>
								<input type="text" name="name" class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" id="example-text-input">
							</div>
							<div class="mb-4">
								<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">NIK</label>
								<input type="number" name="nik" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-search-input">
							</div>
							<div class="mb-4">
								<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">No HP</label>
								<input type="number" name="no_hp" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-email-input">
							</div>
							<div class="mb-4">
								<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Email</label>
								<input type="email" name="email" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-email-input">
							</div>
							<div class="mb-4">
								<div>
									<div class="flex-grow-1">
										<label class="text-gray-600 font-medium mb-2 block dark:text-gray-100">Password</label>
									</div>
								</div>

								<div class="flex">
									<input type="password" name="password" class="w-full border-gray-100 rounded ltr:rounded-r-none rtl:rounded-l-none placeholder:text-sm py-2 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100 dark:placeholder:text-zinc-100/60" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
									<button class="bg-gray-50 px-4 rounded ltr:rounded-l-none rtl:rounded-r-none border border-gray-100 ltr:border-l-0 rtl:border-r-0 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
								</div>
							</div>
							<div class="mb-4">
								<div>
									<div class="flex-grow-1">
										<label class="text-gray-600 font-medium mb-2 block dark:text-gray-100">Confirm Password</label>
									</div>
								</div>

								<div class="flex">
									<input type="password" name="password_confirmation" class="w-full border-gray-100 rounded ltr:rounded-r-none rtl:rounded-l-none placeholder:text-sm py-2 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100 dark:placeholder:text-zinc-100/60" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
									<button class="bg-gray-50 px-4 rounded ltr:rounded-l-none rtl:rounded-r-none border border-gray-100 ltr:border-l-0 rtl:border-r-0 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="card-footer p-5 text-center">
					<button type="submit" class="btn bg-violet-500 border-transparent text-white hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50">Simpan</button>
					<button type="reset" class="btn border-red-500 text-red-500 hover:bg-red-500 hover:text-white focus:bg-red-500 focus:text-white focus:ring focus:ring-red-100">Batal</button>
				</div>
			</form>

		</div>


		<script src="{{asset('minia/libs/@popperjs/core/umd/popper.min.js')}}"></script>
		<script src="{{asset('minia/libs/feather-icons/feather.min.js')}}"></script>
		<script src="{{asset('minia/libs/metismenujs/metismenujs.min.js')}}"></script>
		<script src="{{asset('minia/libs/simplebar/simplebar.min.js')}}"></script>
		<script src="{{asset('minia/libs/feather-icons/feather.min.js')}}"></script>

		<script src="{{asset('minia/js/pages/nav&tabs.js')}}"></script>

		<script src="{{asset('minia/js/app.js')}}"></script>


		@endsection