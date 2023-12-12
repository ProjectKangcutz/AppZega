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
									<a href="{{route('user.edit',$data->id)}}" class="btn bg-gray-50/50 border-transparent dark:bg-zinc-700 dark:text-gray-100"><i class="me-1"></i> Edit User</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card dark:bg-zinc-800 dark:border-zinc-600">
					<div class="card-body border-b border-gray-50 dark:border-zinc-600">
						<h5 class="text-15 text-gray-700 dark:text-gray-100">History Aktifitas</h5>
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
											@foreach($data->permohonan as $item)
											<p class="mb-2">No. Kartu Keluarga : {{$item->no_kk}}</p>
											<p class="mb-2">No. Akta/Buku Nikah : {{$item->no_akta_nikah}}</p>
											<p class="mb-2">Keterangan : {{$item->keterangan}}</p>
											<p class="mb-2">Tanggal Pengajuan : {{$item->tgl_pengajuan}}</p>
											<p class="mb-2">Tanggal Proses : {{$item->tgl_proses}}</p>
											<p class="mb-2">Status : {{$item->status_pengajuan}}</p>
											@endforeach
										</div>
									</div>
								</div>
							</div>

							<div class="py-3">
								<div class="grid grid-cols-12">
									<div class="col-span-2">
										<div>
											<h5 class="text-15 text-gray-700 dark:text-gray-100">Log Aktifitas :</h5>
										</div>
									</div>
									<div class="col-span-10">
										<div class="text-gray-500 dark:text-zinc-100">
											<table id="datatable" class="table w-full pt-4 text-gray-700 dark:text-zinc-100">
												<thead>
													<tr>
														<th>No</th>
														<th>Subject</th>
														<th>URL</th>
														<th>Method</th>
														<th>Ip</th>
														<th width="300px">User Agent</th>
														<th>Created At</th>
													</tr>
												</thead>
												@if($logs->count())
												<tbody>
													@foreach($logs as $key => $log)
													<tr>
														<td>{{ ++$key }}</td>
														<td>{{ $log->subject }}</td>
														<td class="text-success">{{ $log->url }}</td>
														<td><label class="label label-info">{{ $log->method }}</label></td>
														<td class="text-warning">{{ $log->ip }}</td>
														<td class="text-danger">{{ $log->agent }}</td>
														<td>{{$log->created_at}}</td>
													</tr>
													@endforeach
												</tbody>
												@endif
											</table>
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

				<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

				<!-- Required datatable js -->
				<script src="{{asset('minia/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
				<script src="{{asset('minia/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
				<!-- Buttons examples -->
				<script src="{{asset('minia/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
				<script src="{{asset('minia/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
				<script src="{{asset('minia/libs/jszip/jszip.min.js')}}"></script>
				<script src="{{asset('minia/libs/pdfmake/build/pdfmake.min.js')}}"></script>
				<script src="{{asset('minia/libs/pdfmake/build/vfs_fonts.js')}}"></script>
				<script src="{{asset('minia/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
				<script src="{{asset('minia/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
				<script src="{{asset('minia/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

				<!-- Responsive examples -->
				<script src="{{asset('minia/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
				<script src="{{asset('minia/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

				<!-- Datatable init js -->
				<script src="{{asset('minia/js/pages/datatables.init.js')}}"></script> 

				<script src="{{asset('minia/js/app.js')}}"></script>





				@endsection