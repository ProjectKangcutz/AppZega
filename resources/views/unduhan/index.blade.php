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
	

	<div class="col-span-12">
		<div class="card dark:bg-zinc-800 dark:border-zinc-600">
			<div class="card-body pb-0">
				<h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Silahkan klik Unduh untuk Mengunduh Dokumen</h6>
			</div>
			<div class="card-body relative overflow-x-auto">
				<table id="datatable-buttons" class="table w-full pt-4 text-gray-700 dark:text-zinc-100">
					<thead>
						<tr>
							<th class="p-4 pr-8 border rtl:border-l-0 border-y-2 border-gray-50 dark:border-zinc-600">Name</th>
							<th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Position</th>
							<th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Office</th>
							<th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Age</th>
							<th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Start date</th>
							<th class="p-4 pr-8 border rtl:border-l border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Salary</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="p-4 pr-8 border rtl:border-l-0 border-t-0 border-gray-50 dark:border-zinc-600">Tiger Nixon</td>
							<td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">System Architect</td>
							<td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">Edinburgh</td>
							<td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">61</td>
							<td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">2011/04/25</td>
							<td class="p-4 pr-8 border rtl:border-l border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">$320,800</td>
						</tr>
						<tr>
							<td class="p-4 pr-8 border rtl:border-l-0 border-t-0 border-gray-50 dark:border-zinc-600">Garrett Winters</td>
							<td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">Accountant</td>
							<td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">Tokyo</td>
							<td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">63</td>
							<td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">2011/07/25</td>
							<td class="p-4 pr-8 border rtl:border-l border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">$170,750</td>
						</tr>
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