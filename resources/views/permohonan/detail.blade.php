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


		<div class=" grid grid-cols-12 gap-4">
			<div class="col-span-12 lg:col-span-12">
				<div class="card dark:bg-zinc-800 dark:border-zinc-600">
					<div class="card-body ">
						<div class="grid grid-cols-12 ">
							<div class="col-span-9">
								<div class="flex flex-wrap items-center">

									<div>
										<h5 class="text-16 mb-1 text-gray-700 dark:text-gray-100">No KK : {{$data->no_kk}}</h5>
										<p class="text-gray-500 dark:text-zinc-100 text-13">Pemohon : {{$data->user->name}}</p>

										<div class="flex flex-wrap items-start gap-2 text-13 mt-3">
											<div class="text-gray-500 dark:text-zinc-100"><i class="mdi mdi-circle-medium me-1 text-green-500 align-middle ltr:mr-1 rtl:ml-1"></i>HP Pemohon : {{$data->user->no_hp}}</div>
											<div class="text-gray-500 dark:text-zinc-100"><i class="mdi mdi-circle-medium me-1 text-green-500 align-middle ltr:mr-1 rtl:ml-1"></i>Email Pemohon : {{$data->user->email}}</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-span-3">
								<div class="flex flex-wrap justify-end">
									<button type="button" class="btn bg-gray-50/50 border-transparent dark:bg-zinc-700 dark:text-gray-100"><i class="me-1"></i> Edit Permohonan</button>
									<div class="dropstart text-end relative">
										<a class="btn border-transparent px-6 py-1 text-16 text-gray-500 dark:text-zinc-100 shadow-none dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
											<i class="bx bx-dots-horizontal-rounded"></i>
										</a>
										<ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -right-10 top-6 w-40
										rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700" aria-labelledby="dropdownMenu1">
										<li><a
											class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/50"
											href="#">Action</a>
										</li>
										<li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
											bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/50" href="#">Another action</a >
										</li>
										<li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
											text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/50" href="#">Something else here</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card dark:bg-zinc-800 dark:border-zinc-600">
				<div class="card-body border-b border-gray-50 dark:border-zinc-600">
					<h5 class="text-15 text-gray-700 dark:text-gray-100">Detail Permohonan</h5>
				</div>
				<div class="card-body">
					<div>
						<div class="pb-3">
							<div class="grid grid-cols-12">
								<div class="col-span-2">
									<div>
										<h5 class="text-15 text-gray-700 dark:text-gray-100">Permohonan :</h5>
									</div>
								</div>
								<div class="col-span-10">
									<div class="text-gray-500 dark:text-zinc-100">
										<p class="mb-2">No. Kartu Keluarga : {{$data->no_kk}}</p>
										<p class="mb-2">No. Akta/Buku Nikah : {{$data->no_akta_nikah}}</p>
										<p class="mb-2">Keterangan : {{$data->keterangan}}</p>
										<p class="mb-2">Tanggal Pengajuan : {{$data->tgl_pengajuan}}</p>
										<p class="mb-2">Tanggal Proses : {{$data->tgl_proses}}</p>
										<p class="mb-2">Status : {{$data->status_pengajuan}}</p>
									</div>
								</div>
							</div>
						</div>

						<div class="py-3">
							<div class="grid grid-cols-12">
								<div class="col-span-2">
									<div>
										<h5 class="text-15 text-gray-700 dark:text-gray-100">Suami / Istri :</h5>
									</div>
								</div>
								<div class="col-span-10">
									<div class="text-gray-500 dark:text-zinc-100">
										<div class="flex flex-row text-center gap-3">
											<div class="basis-1/4 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 p-3 rounded-md">
												<table class="text-sm text-left text-gray-500">
													<tr>
														<td>Nama Suami</td>
														<td>:</td>
														<td>{{$data->nama_suami}}</td>
													</tr>
													<tr>
														<td>NIK Suami</td>
														<td>:</td>
														<td>{{$data->nik_suami}}</td>
													</tr>
													<tr>
														<td>KTP Suami</td>
														<td>:</td>
														<td><a href="/{{$data->upload_ktpsuami}}"><img class="inline-block h-20 w-50 rounded ring-2 ring-white dark:ring-zinc-500" src="{{asset($data->upload_ktpsuami)}}" alt=""></a> </td>
													</tr>
												</table>
											</div>
											<div class="basis-1/4 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 p-3 rounded-md">
												<table class="text-sm text-left text-gray-500">
													<tr>
														<td>Nama Istri</td>
														<td>:</td>
														<td>{{$data->nama_istri}}</td>
													</tr>
													<tr>
														<td>NIK Istri</td>
														<td>:</td>
														<td>{{$data->nik_istri}}</td>
													</tr>
													<tr>
														<td>KTP Istri</td>
														<td>:</td>
														<td><a href="/{{$data->upload_ktpistri}}"><img class="inline-block h-20 w-50 rounded ring-2 ring-white dark:ring-zinc-500" src="{{asset($data->upload_ktpistri)}}" alt=""></a> </td>
													</tr>
												</table>
											</div>
											<div class="basis-1/4 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 p-3 rounded-md">
												<a href="/{{$data->upload_kk}}"><img class="inline-block h-100 w-100 rounded ring-2 ring-white dark:ring-zinc-500" src="{{asset($data->upload_kk)}}" alt=""></a>
											</div>
											<div class="basis-1/4 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 p-3 rounded-md">
												<a href="/{{$data->upload_aktanikah}}"><img class="inline-block h-100 w-100 rounded ring-2 ring-white dark:ring-zinc-500" src="{{asset($data->upload_aktanikah)}}" alt=""></a>
											</div>
										</div>
									</div>
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

			<script src="{{asset('minia/libs/flatpickr/flatpickr.min.js')}}"></script>

			<script src="{{asset('minia/js/app.js')}}"></script>





			@endsection