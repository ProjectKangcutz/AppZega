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
				<h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Formulir Permohonan</h6>
			</div>
			<form action="{{route('permohonan.store')}}" method="post" enctype="multipart/form-data">
				<div class="card-body">

					@csrf
					<div class="grid grid-cols-12 gap-5">
						<div class="col-span-12 lg:col-span-6">
							<div class="mb-4">
								<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">No Kartu Keluarga</label>
								<input type="number" name="no_kk" class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" id="example-text-input">
							</div>
							<div class="mb-4">
								<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">NIK Suami</label>
								<input type="number" name="nik_suami" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-search-input">
							</div>
							<div class="mb-4">
								<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Nama Lengkap Suami</label>
								<input type="text" name="nama_suami" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-email-input">
							</div>
							<div class="mb-4">
								<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">NIK Istri</label>
								<input type="number" name="nik_istri" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-email-input">
							</div>
							<div class="mb-4">
								<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Nama Lengkap Istri</label>
								<input type="text" name="nama_istri" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-email-input">
							</div>
							<div class="mb-4">
								<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">No Akta Nikah</label>
								<input type="text" name="no_akta_nikah" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-email-input">
							</div>
						</div>
						<div class="col-span-12 lg:col-span-6">
							<div class="mb-4">
								<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Upload Kartu Keluarga</label>
								<input type="file" name="upload_kk" class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-date-input">
							</div>
							<div class="mb-4">
								<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Upload KTP Suami</label>
								<input type="file" name="upload_ktpsuami" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-month-input">
							</div>
							<div class="mb-4">
								<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Upload KTP Istri</label>
								<input type="file" name="upload_ktpistri" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-week-input">
							</div>
							<div class="mb-4">
								<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Upload Akta/Buku Nikah</label>
								<input type="file" name="upload_aktanikah" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-week-input">
							</div>
							<div class="mb-4">
								<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Upload Formulir Perubahan Data (F1-06)</label>
								<input type="file" name="upload_f106" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-time-input">
							</div>
							<div class="mb-4">
								<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Keterangan</label>
								<textarea id="message" name="keterangan" rows="4" class="block p-2.5 w-full text-gray-700 dark:text-zinc-100 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Keterangan ..."></textarea>
							</div>

						</div>
					</div>

				</div>
				<div class="card-footer p-5 text-right">
					<button type="submit" class="btn bg-violet-500 border-transparent text-white hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50">Simpan</button>
					<button type="reset" class="btn border-red-500 text-red-500 hover:bg-red-500 hover:text-white focus:bg-red-500 focus:text-white focus:ring focus:ring-red-100">Batal</button>
				</div>
			</form>

		</div>

		<div class="grid grid-cols-1 lg:grid-cols-12 gap-5 mt-5">
			<div class="col-span-12 xl:col-span-12">
				<div class="card p-5 rounded bg-yellow-500 border-yellow-500 text-center">
					<h5 class="mb-3 text-white text-17"><i class="mdi mdi-alert-outline mr-3"></i> Perhatian </h5>
					<p class="text-white/60">Pastikan Data yang anda masukkan sudah sesuai..</p>
				</div>
			</div>

		</div>

		<script src="{{asset('minia/libs/@popperjs/core/umd/popper.min.js')}}"></script>
		<script src="{{asset('minia/libs/feather-icons/feather.min.js')}}"></script>
		<script src="{{asset('minia/libs/metismenujs/metismenujs.min.js')}}"></script>
		<script src="{{asset('minia/libs/simplebar/simplebar.min.js')}}"></script>
		<script src="{{asset('minia/libs/feather-icons/feather.min.js')}}"></script>

		<script src="{{asset('minia/js/pages/nav&tabs.js')}}"></script>

		<script src="{{asset('minia/js/app.js')}}"></script>
		@endsection