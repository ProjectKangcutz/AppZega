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

<div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-12">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100"></h6>
                            </div>
                            <div class="card-body">
                                <div data-tw-accordion="collapse">
                                    <div class="accordion-item text-gray-700">
                                        <h2>
                                            <button type="button" class="accordion-header group active flex items-center justify-between w-full p-3 font-medium text-left border border-b-0 border-gray-100 rounded-t-lg hover:bg-gray-50/50 dark:hover:bg-zinc-700/50 dark:border-zinc-600">
                                                <span class="text-15">What is Flowbite?</span>
                                                <i class="mdi mdi-plus text-xl group-[.active]:hidden block"></i>
                                                <i class="mdi mdi-minus text-xl group-[.active]:block hidden"></i>
                                            </button>
                                        </h2>
                            
                                        <div class="accordion-body block">
                                            <div class="p-5 font-light border border-b-0 border-gray-100 dark:border-zinc-600">
                                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                                                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="accordion-item text-gray-700">
                                        <h2>
                                            <button type="button" class="accordion-header group flex items-center justify-between w-full p-3 font-medium text-left hover:bg-gray-50/50 border border-b-0 border-gray-100 dark:hover:bg-zinc-700/50 dark:border-zinc-600">
                                                <span class="text-15">Is there a Figma file available?</span>
                                                <i class="mdi mdi-plus text-xl group-[.active]:hidden block"></i>
                                                <i class="mdi mdi-minus text-xl group-[.active]:block hidden"></i>
                                            </button>
                                        </h2>
                                        <div class="accordion-body hidden">
                                            <div class="p-5 font-light border border-b-0 border-gray-100 dark:border-zinc-600">
                                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                                                <p class="text-gray-500 dark:text-gray-400">Check out the <a href="" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                                            </div>
                                        </div>
                                    </div>
                            
                            
                                    <div class="accordion-item text-gray-700">
                                        <h2>
                                            <button type="button" class="accordion-header group flex items-center justify-between w-full p-3 font-medium text-left border border-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50 dark:border-zinc-600">
                                                <span class="text-15">What are the differences between Flowbite and Tailwind UI?</span>
                                                <i class="mdi mdi-plus text-xl group-[.active]:hidden block"></i>
                                                <i class="mdi mdi-minus text-xl group-[.active]:block hidden"></i>
                                            </button>
                                        </h2>
                                        <div class="accordion-body hidden">
                                            <div class="p-5 font-light border border-t-0 border-gray-100 dark:border-gray-700">
                                                <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                                                <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                                                <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                                                <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                                    <li><a href="" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                                                    <li><a href="" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                                                </ul>
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

    <script src="{{asset('minia/js/pages/nav&tabs.js')}}"></script>

    <script src="{{asset('minia/js/app.js')}}"></script>
@endsection