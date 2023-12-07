<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>PEKANOS - Pencatatan Perkawinan Online Sistem</title>
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
    content="Tailwind Admin & Dashboard Template"
    name="description"
    />
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('minia/images/favicon.ico')}}" />


    <link rel="stylesheet" href="{{asset('minia/libs/swiper/swiper-bundle.min.css')}}">

    <link rel="stylesheet" href="{{asset('minia/css/icons.css')}}" />
    <link rel="stylesheet" href="{{asset('minia/css/tailwind.css')}}" />

</head>

<body data-mode="light" data-sidebar-size="lg">



    <div class="container-fluid">
        <div class="h-screen md:overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-12 ">
                <div class="col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3 relative z-50">
                    <div class="w-full bg-white xl:p-12 p-10 dark:bg-zinc-800">
                        <div class="flex h-[90vh] flex-col">
                            <div class="mx-auto">
                                <a href="index.html" class="">
                                    <img src="{{asset('minia/images/logo-sm.svg')}}" alt="" class="h-8 inline"> <span class="text-xl align-middle font-medium ltr:ml-2 rtl:mr-2 dark:text-white">Pekanos</span>
                                </a>
                            </div>

                            <div class="my-auto">

                              <div class="text-center">
                                <h5 class="text-gray-600 dark:text-gray-100">Register Account</h5>
                                <p class="text-gray-500 mt-1 dark:text-zinc-100/60">Get your free Minia account now.</p>
                            </div>

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

                          <form class="mt-4 pt-2" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label class="text-gray-600 font-medium mb-2 block dark:text-gray-100">Nama Lengkap</label>
                                <input type="text" class="w-full border-gray-100 rounded placeholder:text-sm py-2 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100 dark:placeholder:text-zinc-100/60" name="name" id="name" placeholder="Enter nama lengkap">
                            </div>
                            <div class="mb-4">
                                <label class="text-gray-600 font-medium mb-2 block dark:text-gray-100">Nomor Induk Kependudukan (NIK)</label>
                                <input type="text" class="w-full border-gray-100 rounded placeholder:text-sm py-2 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100 dark:placeholder:text-zinc-100/60" name="nik" id="nik" placeholder="NIK">
                            </div>
                            <div class="mb-4">
                                <label class="text-gray-600 font-medium mb-2 block dark:text-gray-100">Nomor HP</label>
                                <input type="tel" class="w-full border-gray-100 rounded placeholder:text-sm py-2 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100 dark:placeholder:text-zinc-100/60" name="no_hp" id="hp" placeholder="+62">
                            </div>
                            <div class="mb-4">
                                <label class="text-gray-600 font-medium mb-2 block dark:text-gray-100">Email</label>
                                <input type="email" name="email" class="w-full border-gray-100 rounded placeholder:text-sm py-2 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100 dark:placeholder:text-zinc-100/60" name="email" id="email" placeholder="Enter Email">
                            </div>

                            <div class="mb-3">
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
                            <div class="mb-3">
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
                            <div class="row mb-6">
                                <div class="col">
                                    <div >
                                        <p class="text-gray-600 dark:text-zinc-100/60">By registering you agree to the Minia <a href="#" class="text-violet-500">Terms of Use</a></p>
                                    </div>  
                                </div>

                            </div>
                            <!-- Add reCAPTCHA field -->
                            <div class="row mb-6">
                                <div class="col justify-content-center">
                                    {!! NoCaptcha::display() !!}
                                </div>
                            </div>

                            @if ($errors->has('g-recaptcha-response'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                            @endif

                            <div class="mb-3">
                                <button class="btn border-transparent bg-violet-500 w-full py-2.5 text-white w-100 waves-effect waves-light shadow-md shadow-violet-200 dark:shadow-zinc-600" type="submit">Register</button>
                            </div>
                        </form>

                        <div class="mt-12 text-center">
                            <p class="text-gray-500 dark:text-zinc-100/60">You have an account ? <a href="/login" class="text-violet-500 font-semibold"> Login  </a> </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-7 lg:col-span-8 xl:col-span-9">
            <div class="h-screen bg-cover relative p-5 bg-[url('../images/auth-bg.jpg')]">
                <div class="absolute inset-0 bg-violet-500/90"></div>

                <ul class="bg-bubbles absolute top-0 left-0 w-full h-full overflow-hidden animate-square">
                    <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[10%] "></li>
                    <li class="h-28 w-28 rounded-3xl bg-white/10 absolute left-[20%]"></li>
                    <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                    <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[40%]"></li>
                    <li class="h-24 w-24 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                    <li class="h-32 w-32 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                    <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[32%]"></li>
                    <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[55%]"></li>
                    <li class="h-12 w-12 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                    <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[90%]"></li>
                </ul>

                <div class="grid grid-cols-12 content-center h-screen">
                    <div class="col-span-8 col-start-3">
                        <div class="swiper login-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <i class="bx bxs-quote-alt-left text-green-600 text-5xl"></i>
                                    <h3 class="mt-4 text-white text-22">“I feel confident imposing change on myself. It's a lot more progressing fun than looking back. That's why I ultricies enim at malesuada nibh diam on tortor neaded to throw curve balls.”</h3>
                                    <div class="flex mt-6 mb-10 pt-4">
                                        <img src="{{asset('minia/images/users/avatar-1.jpg')}}" class="h-12 w-12 rounded-full" alt="...">
                                        <div class="flex-1 ltr:ml-3 rtl:mr-3 mb-4">
                                            <h5 class="font-size-18 text-white">Ilse R. Eaton</h5>
                                            <p class="mb-0 text-white/50">Manager
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <i class="bx bxs-quote-alt-left text-green-600 text-5xl"></i>
                                    <h3 class="mt-4 text-white text-22">“I feel confident imposing change on myself. It's a lot more progressing fun than looking back. That's why I ultricies enim at malesuada nibh diam on tortor neaded to throw curve balls.”</h3>
                                    <div class="flex mt-6 mb-10 pt-4">
                                        <img src="{{asset('minia/images/users/avatar-2.jpg')}}" class="h-12 w-12 rounded-full" alt="...">
                                        <div class="flex-1 ltr:ml-3 rtl:mr-3 mb-4">
                                            <h5 class="font-size-18 text-white">Mariya Willam</h5>
                                            <p class="mb-0 text-white/50">Designer
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <i class="bx bxs-quote-alt-left text-green-600 text-5xl"></i>
                                    <h3 class="mt-4 text-white text-22">“I feel confident imposing change on myself. It's a lot more progressing fun than looking back. That's why I ultricies enim at malesuada nibh diam on tortor neaded to throw curve balls.”</h3>
                                    <div class="flex mt-6 mb-10 pt-4">
                                        <img src="{{asset('minia/images/users/avatar-3.jpg')}}" class="h-12 w-12 rounded-full" alt="...">
                                        <div class="flex-1 ltr:ml-3 rtl:mr-3 mb-4">
                                            <h5 class="font-size-18 text-white">Jiya Jons</h5>
                                            <p class="mb-0 text-white/50">Developer
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
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

<script src="{{asset('minia/libs/swiper/swiper-bundle.min.js')}}"></script>

<script src="{{asset('minia/js/pages/login.init.js')}}"></script>

<script src="{{asset('minia/js/app.js')}}"></script>
{!! NoCaptcha::renderJs() !!}
</body>

</html>