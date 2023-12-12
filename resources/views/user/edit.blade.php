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
			<div class="col-span-12 lg:col-span-12">
				<div class="card dark:bg-zinc-800 dark:border-zinc-600">
					<div class="card-body ">
						<div class="grid grid-cols-12 ">
							<div class="col-span-9">
								<div class="flex flex-wrap items-center">

									<div>
										<h5 class="text-16 mb-1 text-gray-700 dark:text-gray-100">NIK : {{$data->nik}}</h5>
										<p class="text-gray-500 dark:text-zinc-100 text-13">Nama Lengkap : {{$data->name}}</p>

										<div class="flex flex-wrap items-start gap-2 text-13 mt-3">
											<div class="text-gray-500 dark:text-zinc-100"><i class="mdi mdi-circle-medium me-1 text-green-500 align-middle ltr:mr-1 rtl:ml-1"></i>No. HP : {{$data->no_hp}}</div>
											<div class="text-gray-500 dark:text-zinc-100"><i class="mdi mdi-circle-medium me-1 text-green-500 align-middle ltr:mr-1 rtl:ml-1"></i>Email : {{$data->email}}</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-span-3">
								<div class="flex flex-wrap justify-end">
									<a href="{{route('user.show',$data->id)}}" class="btn bg-gray-50/50 border-transparent dark:bg-zinc-700 dark:text-gray-100"><i class="me-1"></i> Detail User</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card dark:bg-zinc-800 dark:border-zinc-600">
					<div class="card-body border-b border-gray-50 dark:border-zinc-600">
						<h5 class="text-15 text-gray-700 dark:text-gray-100">Edit User</h5>
					</div>
					<div class="card-body">
						<div>
							<div class="pb-3">
								<div class="grid grid-cols-12">
									<div class="col-span-2">
										<div>
											<h5 class="text-15 text-gray-700 dark:text-gray-100">Detail User :</h5>
										</div>
									</div>
									<div class="col-span-10">
										<form action="{{route('user.updatedetail',$data->id)}}" method="get">
											@csrf
											<div class="card-body">
												<div class="grid grid-cols-12 gap-5">
													<div class="col-span-12 lg:col-span-12">
														<div class="mb-4">
															<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Nama Lengkap</label>
															<input type="text" name="name" class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" id="example-text-input" value="{{$data->name}}">
														</div>
														<div class="mb-4">
															<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">NIK</label>
															<input type="number" name="nik" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-search-input" value="{{$data->nik}}">
														</div>
														<div class="mb-4">
															<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">No HP</label>
															<input type="number" name="no_hp" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-email-input" value="{{$data->no_hp}}">
														</div>
														<div class="mb-4">
															<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Email</label>
															<input type="email" name="email" class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" id="example-email-input" value="{{$data->email}}" readonly>
														</div>
														<div class="mb-4">
															<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Level Akses</label>
															<select class="dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:text-zinc-100" name="level_id">
																<option selected value="{{$data->level_id}}">Select</option>
																<option value="1">Admin</option>
																<option value="2">Operator</option>
																<option value="3">Pengguna</option>
															</select>
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
								</div>
							</div>

							<div class="py-3">
								<div class="grid grid-cols-12">
									<div class="col-span-2">
										<div>
											<h5 class="text-15 text-gray-700 dark:text-gray-100">Ganti Password :</h5>
										</div>
									</div>
									<div class="col-span-10">
										<form  action="{{route('user.updatepass',$data->id)}}" method="get">
											@csrf
											<div class="card-body">
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
											<div class="card-footer p-5 text-center">
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