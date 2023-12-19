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
                                    <img src="{{asset('/A.svg')}}" alt="" class="object-scale-down inline">
                                </a>
                            </div>

                            <div class="my-auto">
                                <div class="text-center">
                                    <h5 class="text-gray-600 dark:text-gray-100">Welcome Back !</h5>
                                    <p class="text-gray-500 dark:text-gray-100/60 mt-1">Sign in to continue to Pekanos.</p>
                                </div>

                                <form method="POST" action="{{ route('login') }}" class="mt-4 pt-2">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="text-gray-600 dark:text-gray-100 font-medium mb-2 block">Email</label>
                                        <input type="email" name="email" class="w-full rounded placeholder:text-sm py-2 border-gray-100 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100 dark:placeholder:text-zinc-100/60" id="username" placeholder="Enter username">
                                    </div>
                                    <div class="mb-3">
                                        <div class="flex">
                                            <div class="flex-grow-1">
                                                <label class="text-gray-600 dark:text-gray-100 font-medium mb-2 block">Password</label>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                                <a href="/reset-password" class="text-gray-500 dark:text-gray-100">Forgot password?</a>
                                            </div>
                                        </div>
                                        
                                        <div class="flex">
                                            <input type="password" name="password" class="w-full rounded ltr:rounded-r-none rtl:rounded-l-none placeholder:text-sm py-2 border-gray-100 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100 dark:placeholder:text-zinc-100/60" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                            <button class="bg-gray-50 px-4 rounded ltr:rounded-l-none rtl:rounded-r-none border border-gray-100 ltr:border-l-0 rtl:border-r-0 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>
                                    <!-- Add reCAPTCHA field -->
                                    <div class="row mb-6">
                                        <div class="col justify-content-center text-center">
                                            {!! NoCaptcha::display() !!}
                                        </div>
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

                                    @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                    @endif
                                    <div class="row mb-6">
                                        <div class="col">
                                            <div >
                                                <input type="checkbox" class="h-4 w-4 border border-gray-300 rounded bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain ltr:float-left rtl:float-right ltr:mr-2 rtl:ml-2 cursor-pointer focus:ring-offset-0" checked id="exampleCheck1">
                                                <label class="align-middle text-gray-600 dark:text-gray-100 font-medium">
                                                    Remember me
                                                </label>
                                            </div>  
                                        </div>
                                        
                                    </div>

                                    <div class="mb-3">
                                        <button class="btn border-transparent bg-violet-500 w-full py-2.5 text-white w-100 waves-effect waves-light shadow-md shadow-violet-200 dark:shadow-zinc-600" type="submit">Log In</button>
                                    </div>
                                </form>

                                <div class="mt-12 text-center">
                                    <p class="text-gray-500 dark:text-gray-100">Don't have an account ? <a href="/register" class="text-violet-500 font-semibold"> Signup now </a> </p>
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
                                        <div class="swiper-slide text-center">
                                           <h3 class="mt-4 text-white">“SELAMAT DATANG DI APLIKASI PEKANOS”</h3>
                                           <h5 class="mt-2 text-white">PENCATATAN PERKAWINAN ONLINE SISTEM</h5>
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