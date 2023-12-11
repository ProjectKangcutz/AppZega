    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu rtl:right-0 fixed ltr:left-0 bottom-0 top-16 h-screen border-r bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700 z-10">

        <div data-simplebar class="h-full">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-heading px-4 py-3.5 text-xs font-medium text-gray-500 cursor-default" data-key="t-menu">Menu</li>

                    <li>
                        <a href="/dashboard" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="home"></i>
                            <span data-key="t-dashboard"> Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="file-plus"></i>
                            <span data-key="t-permohonan"> Permohonan</span>
                        </a>
                        <ul>
                            <li>
                                <a href="/permohonan" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Permohonan</a>
                            </li>
                            <li>
                                <a href="/permohonan/create" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Buat Permohonan</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="/daftar_unduhan" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="download"></i>
                            <span data-key="t-unduhan"> Daftar Unduhan</span>
                        </a>
                    </li>

                    <li>
                        <a href="/petunjuk" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="paperclip"></i>
                            <span data-key="t-petunjuk"> Petunjuk Penggunaan</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="users"></i>
                            <span data-key="t-konfigurasi"> Konfigurasi</span>
                        </a>
                        <ul>
                            <li>
                                <a href="/user" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Kelola Operator</a>
                            </li>
                            <li>
                                <a href="{{route('pengguna.index')}}" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Kelola Pengguna</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="index.html" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="layers"></i> 
                            <span data-key="t-laporan"> Laporan </span>
                        </a>
                        <ul>
                            <li>
                                <a href="login.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Login</a>
                            </li>
                            <li>
                                <a href="register.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Register</a>
                            </li>
                            <li>
                                <a href="recoverpw.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Recover Password</a>
                            </li>
                            <li>
                                <a href="lock-screen.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Lock Screen</a>
                            </li>
                            <li>
                                <a href="logout.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Log Out</a>
                            </li>
                            <li>
                                <a href="confirm-mail.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Confirm Mail</a>
                            </li>
                            <li>
                                <a href="email-verification.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Email Verification</a>
                            </li>
                            <li>
                                <a href="two-step-verification.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Two Step Verification</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <form method="POST" action="{{ route('logout') }}" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">

                            <a :href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();" hidden>
                            <i data-feather="log-out"></i><span data-key="t-logout">{{ __('Log Out') }}</span>
                        </a>
                    </form>
                </li>

                
            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
    <!-- Left Sidebar End -->