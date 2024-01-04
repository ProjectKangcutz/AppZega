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
					<div class="card-body ">
						<div class="grid grid-cols-12 ">
							<div class="col-span-9">
								<div class="flex flex-wrap items-center">

									<div>
										<h5 class="text-16 mb-1 text-gray-700 dark:text-gray-100">No KK : {{$data->no_kk}}</h5>
										<p class="text-gray-500 dark:text-zinc-100 text-13">Pemohon : {{$data->user->name}}</p>
										@if(is_null($data->upload_draftkk))
										
										@else
										<p class="text-gray-500 dark:text-zinc-100 text-13"><a href="{{asset($data->upload_draftkk)}}" class="btn text-white bg-sky-500 border-sky-500 hover:bg-sky-600 hover:border-sky-600 focus:bg-sky-600 focus:border-sky-600 focus:ring focus:ring-sky-500/30 active:bg-sky-600 active:border-sky-600" download="Draft KK {{$data->no_kk}}">Download Draft KK</a> </p>
										@endif
										<div class="flex flex-wrap items-start gap-2 text-13 mt-3">
											<div class="text-gray-500 dark:text-zinc-100"><i class="mdi mdi-circle-medium me-1 text-green-500 align-middle ltr:mr-1 rtl:ml-1"></i>HP Pemohon : {{$data->user->no_hp}}</div>
											<div class="text-gray-500 dark:text-zinc-100"><i class="mdi mdi-circle-medium me-1 text-green-500 align-middle ltr:mr-1 rtl:ml-1"></i>Email Pemohon : {{$data->user->email}}</div>
										</div>

									</div>
								</div>
							</div>
							<div class="col-span-3">
								<div class="flex flex-wrap justify-end">
									@if(Auth::user()->level_id==1 or Auth::user()->level_id==2)
									<button type="button" class="btn bg-violet-500 border-violet-500 text-white hover:bg-violet-600 focus:ring ring-violet-50focus:bg-violet-600" data-tw-toggle="modal" data-tw-target="#modal-idCenter">Proses Permohonan</button>
									@endif
									<div class="modal relative z-50 hidden" id="modal-idCenter" aria-labelledby="modal-title" role="dialog" aria-modal="true">
										<div class="fixed inset-0 z-50 overflow-hidden">
											<div class="absolute inset-0 bg-black bg-opacity-50 transition-opacity modal-overlay"></div>
											<div class="animate-translate p-4 text-center  sm:max-w-lg mx-auto">
												<div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all dark:bg-zinc-700 dark:border-zinc-600">
													<form method="post" action="{{route('permohonan.updatestatus', $data->id)}}" enctype="multipart/form-data">
														@csrf
														<div class="bg-white p-5 text-center dark:bg-zinc-700">
															<div class="h-14 w-14 rounded-full bg-green-100 mx-auto">
																<i class="mdi mdi-check-all text-2xl text-green-600 leading-[2.4]"></i>
															</div>
															<h2 class="text-xl mt-5 text-gray-700 dark:text-gray-100">Proses Permohonan</h2>

															<div class="mb-4">
																<div class="mb-3">
																	<select class="dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:text-zinc-100" name="status_pengajuan">
																		<option selected>Select</option>
																		@foreach($status as $item)
																		<option value="{{$item->id}}">{{$item->nama_status}}</option>
																		@endforeach
																	</select>
																</div>
															</div>
															<div class="mb-4">
																<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Keterangan</label>
																<textarea id="message" rows="4" class="block p-2.5 w-full text-sm dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:text-zinc-100" placeholder="Keterangan Status" name="keterangan"></textarea>
															</div>
															<div class="mb-4">
																<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Upload Draft Kartu Keluarga</label>
																<input type="file" name="upload_draftkk" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-week-input">
															</div>
															<div class="mt-6">
																<button type="submit" class="btn bg-violet-500 border-violet-500 text-white">Simpan Status</button>     
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
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
									<h5 class="text-15 text-gray-700 dark:text-gray-100">Edit Permohonan :</h5>
								</div>
							</div>
							<div class="col-span-10">
								<form action="{{route('permohonan.updatedata',$data->id)}}" method="post" enctype="multipart/form-data">
									<div class="card-body">

										@csrf
										<div class="grid grid-cols-12 gap-5">
											<div class="col-span-12 lg:col-span-12">
												<div class="mb-4">
													<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">No Kartu Keluarga</label>
													<input type="number" name="no_kk" class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" id="example-text-input" value="{{$data->no_kk}}">
												</div>
												<div class="mb-4">
													<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">NIK Suami</label>
													<input type="number" name="nik_suami" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-search-input" value="{{$data->nik_suami}}">
												</div>
												<div class="mb-4">
													<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Nama Lengkap Suami</label>
													<input type="text" name="nama_suami" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-email-input" value="{{$data->nama_suami}}">
												</div>
												<div class="mb-4">
													<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">NIK Istri</label>
													<input type="number" name="nik_istri" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-email-input" value="{{$data->nik_istri}}">
												</div>
												<div class="mb-4">
													<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Nama Lengkap Istri</label>
													<input type="text" name="nama_istri" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-email-input" value="{{$data->nama_istri}}">
												</div>
												<div class="mb-4">
													<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">No Akta Nikah</label>
													<input type="text" name="no_akta_nikah" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-email-input" value="{{$data->no_akta_nikah}}">
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