    <nav class="border-b border-slate-100 dark:bg-zinc-800 print:hidden flex items-center fixed top-0 right-0 left-0 bg-white z-10 dark:border-zinc-700">

        <div class="flex items-center justify-between w-full">
            <div class="topbar-brand flex items-center">
                <div class="navbar-brand flex items-center justify-between shrink px-5 h-[70px] border-r bg-slate-50 border-r-gray-50 dark:border-zinc-700 dark:bg-zinc-800">
                    <a href="/dashboard" class="flex items-center font-bold text-lg  dark:text-white">
                        <img src="{{asset('A.svg')}}" alt="" class="ltr:mr-2 rtl:ml-2 inline-block mt-1 h-20" />
                        <span class="hidden xl:block align-middle">PEKANOS</span>
                    </a>
                </div>
                <button type="button" class="text-gray-600 dark:text-white h-[70px] ltr:-ml-10 ltr:mr-6 rtl:-mr-10 rtl:ml-10 vertical-menu-btn" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <h5 class="font-semibold text-gray-700 dark:text-gray-100 text-lg" style="padding-left: 1rem;">PEKANOS <span class="text-gray-400 dark:text-zinc-100/60">Pencatatan Perkawinan Online Sistem</span></h5>
            </div>
            <div class="flex items-center">

                <div>
                    <div class="dropdown relative sm:hidden block">
                        <button type="button" class="text-xl px-4 h-[70px] text-gray-600 dark:text-gray-100 dropdown-toggle" data-dropdown-toggle="navNotifications">
                            <i data-feather="search" class="h-5 w-5"></i>
                        </button>

                        <div class="dropdown-menu absolute px-4 -left-36 top-0 mx-4 w-72 z-50 hidden list-none border border-gray-50 rounded bg-white shadow dark:bg-zinc-800 dark:border-zinc-600 dark:text-gray-300" id="navNotifications">
                            <form class="py-3 dropdown-item" aria-labelledby="navNotifications">
                                <div class="form-group m-0">
                                    <div class="flex w-full">
                                        <input type="text" class="border-gray-100 dark:border-zinc-600 dark:text-zinc-100 w-fit" placeholder="Search ..." aria-label="Search Result">
                                        <button class="btn btn-primary border-l-0 rounded-l-none bg-violet-500 border-transparent text-white" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div>
                    <button type="button" class="light-dark-mode text-xl px-4 h-[70px] text-gray-600 dark:text-gray-100 hidden sm:block ">
                        <i data-feather="moon" class="h-5 w-5 block dark:hidden"></i>
                        <i data-feather="sun" class="h-5 w-5 hidden dark:block"></i>
                    </div>


                    <div>
                        <div class="dropdown relative ltr:mr-4 rtl:ml-4">
                            <button type="button" class="flex items-center px-4 py-5 border-x border-gray-50 bg-gray-50/30 dropdown-toggle dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <img class="h-8 w-8 rounded-full ltr:xl:mr-2 rtl:xl:ml-2" src="{{asset('minia/images/users/avatar-1.jpg')}}" alt="Header Avatar">
                                <span class="fw-medium hidden xl:block">{{Auth::user()->name}}</span>
                                <i class="mdi mdi-chevron-down align-bottom hidden xl:block"></i>
                            </button>
                            <div class="dropdown-menu absolute top-0 ltr:-left-3 rtl:-right-3 z-50 hidden w-40 list-none rounded bg-white shadow dark:bg-zinc-800" id="profile/log">
                                <div class="border border-gray-50 dark:border-zinc-600" aria-labelledby="navNotifications">
                                    <div class="dropdown-item dark:text-gray-100">
                                        <a class="px-3 py-2 hover:bg-gray-50/50 block dark:hover:bg-zinc-700/50" href="{{route('user.show',Auth::user()->id)}}">
                                            <i class="mdi mdi-face-man text-16 align-middle mr-1"></i> Profile
                                        </a>
                                    </div>
                                    <div class="dropdown-item dark:text-gray-100">
                                        <a class="px-3 py-2 hover:bg-gray-50/50 block dark:hover:bg-zinc-700/50" href="/dashboard">
                                            <i class="mdi mdi-home text-16 align-middle mr-1"></i> Dashboard
                                        </a>
                                    </div>
                                    <hr class="border-gray-50 dark:border-gray-700">
                                    <div class="dropdown-item dark:text-gray-100">
                                        <form method="POST" action="{{ route('logout') }}" class="p-3 hover:bg-gray-50/50 block dark:hover:bg-zinc-700/50">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                            <i class="mdi mdi-logout text-16 align-middle mr-1"></i>{{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>