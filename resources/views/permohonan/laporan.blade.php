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


		<div class="col-span-12">
			<div class="card dark:bg-zinc-800 dark:border-zinc-600">
				<div class="card-body pb-0">

					<!-- start grid -->
					<div class="grid grid-cols-1 lg:grid-cols-12 gap-5 mt-5">
						<div class="col-span-12 lg:col-span-4">
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
						</div>
					</div>
					<!-- end grid -->


				</div>
				<!-- start grid -->
				<div class="grid grid-cols-1 lg:grid-cols-12 gap-2 mt-5">
					<div class="col-span-12 lg:col-span-6">
						<div class="card dark:bg-zinc-800 dark:border-zinc-600">
							<div class="card-body">
								<h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Laporan Bulanan</h6>
								<form action="{{route('permohonan.lapbulanan')}}" method="get" >
									@csrf
									<div class="mb-4">
										<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Pilih Bulan</label>
										<input class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" type="month" value="{{\Carbon\Carbon::now()->format('Y-m')}}" name="bulan" id="example-month-input" required>
									</div>
									<div class="mt-4">
										<button type="submit" class="btn border-transparent bg-violet-500 block text-center text-white shadow shadow-violet-300 dark:shadow-zinc-600">Buat Laporan</button>
									</div> 
								</form>   
							</div>
						</div>
					</div>
					<div class="col-span-12 lg:col-span-6">
						<div class="card dark:bg-zinc-800 dark:border-zinc-600">
							<div class="card-body">
								<h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Laporan per Operator</h6>
								<form action="{{route('permohonan.lapoperator')}}" method="get" >
									@csrf
									<div class="mb-4">
										<label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Pilih Operator</label>
										<select name="opr" class="dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:text-zinc-100" required>
											<option>-- Pilih Opr --</option>
											@foreach($opr as $opr)
											<option value="{{$opr->id}}">{{$opr->name}}</option>
											@endforeach
										</select>
									</div>
									<div class="mt-4">
										<button type="submit" class="btn border-transparent bg-violet-500 block text-center text-white shadow shadow-violet-300 dark:shadow-zinc-600">Buat Laporan</button>
									</div> 
								</form>    
							</div>
						</div>
					</div>
				</div>
				<!-- end grid -->
				<table id="datatable-buttons" class="table w-full pt-4 text-gray-700 dark:text-zinc-100">
					<thead>
						<tr>
							<th class="p-4 pr-8 border rtl:border-l-0 border-y-2 border-gray-50 dark:border-zinc-600">No</th>
							<th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Tanggal Pengajuan</th>
							<th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Tanggal Proses</th>
							<th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">No Kartu Keluarga</th>
							<th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Keterangan</th>
							<th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Status Pengajuan</th>
							<th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Operator</th>
						</tr>
					</thead>
					<tbody>
						@php $i=1; @endphp
						@foreach($data as $item)
						<tr>
							<td class="p-4 pr-8 border rtl:border-l-0 border-t-0 border-gray-50 dark:border-zinc-600">{{$i}}</td>
							<td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">{{$item->tgl_pengajuan}}</td>
							<td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">{{$item->tgl_proses}}</td>
							<td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">{{$item->no_kk}}</td>
							<td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">{{$item->keterangan}}</td>
							<td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">{{$item->status->nama_status}}</td>
							<td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">{{$item->user->name}}</td>
						</tr>
						@php $i=$i+1; @endphp
						@endforeach
					</tbody>
				</table>
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