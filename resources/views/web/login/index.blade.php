@extends('web.layouts.app')

@section('container')
@include('web.components.presentational.header')
<div class="flex items-center px-4 bg-white lg:justify-center">
    <h1 class=" font-bely text-footer text-[30px]">Login</h1>
</div>
<div class="flex items-center h-[550px] px-4 py-2 bg-white lg:justify-center">
    <div class="flex flex-col overflow-hidden bg-white rounded-md shadow-lg max md:flex-row md:flex-1 lg:max-w-screen-md">
        <!-- <div class="p-4 py-6 text-white bg-blue-500 md:w-80 md:flex-shrink-0 md:flex md:flex-col md:items-center md:justify-evenly">
            <div class="my-3 text-4xl font-bold tracking-wider text-center">
                <a href="#">K-WD</a>
            </div>
            <p class="mt-6 font-normal text-center text-gray-300 md:mt-0">
                With the power of K-WD, you can now focus only on functionaries for your digital products, while leaving the
                UI design on us!
            </p>
            <p class="flex flex-col items-center justify-center mt-10 text-center">
                <span>Don't have an account?</span>
                <a href="#" class="underline">Get Started!</a>
            </p>
            <p class="mt-6 text-sm text-center text-gray-300">
                Read our <a href="#" class="underline">terms</a> and <a href="#" class="underline">conditions</a>
            </p>
        </div> -->
        <div class="p-5  bg-white md:flex-1">
            <form action="{{route('login')}}" method="post" class="flex flex-col space-y-5">
                @csrf
                <!-- <div class="flex flex-col space-y-1">
                    <label for="email" class="text-sm font-semibold text-gray-500">Email address</label>
                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user tw-stroke-2">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </span>
                        </div>
                        <input placeholder="Name" class="form-control" id="js-input-signup-name" autocomplete="name" type="text" name="user[name]" fdprocessedid="v3as9">
                    </div>
                    <input type="email" id="email" autofocus class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" name="email" />
                </div> -->
                <div class="relative mb-6">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user tw-stroke-2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <input type="email" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" name="email">
                </div>
                <div class="relative mb-6">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                    </div>
                    <input type="password" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="password" name="password">
                </div>
                <!-- <div class="flex flex-col space-y-1">
                    <div class="flex items-center justify-between">
                        <label for="password" class="text-sm font-semibold text-gray-500">Password</label>
                        <a href="#" class="text-sm text-blue-600 hover:underline focus:text-blue-800">Forgot Password?</a>
                    </div>
                    <input type="password" id="password" class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" name="password" />
                </div> -->
                <div class="flex justify-between">
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="remember" class="w-4 h-4 transition duration-300 focus:ring-2 focus:ring-offset-0 focus:outline-none focus:ring-blue-200" />
                        <label for="remember" class="text-sm font-semibold text-gray-500">Remember me</label>
                    </div>
                    <a href="#" class="text-sm text-blue-600 hover:underline focus:text-blue-800">Forgot Password?</a>
                </div>
                <div>
                    <button type="submit" class="w-full px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 bg-[#2ec4dd] rounded-md shadow hover:bg-[#2ec4dd] focus:outline-none focus:ring-blue-200 focus:ring-4">
                        Log in
                    </button>
                </div>
                <div class="flex flex-col space-y-5">
                    <span class="flex items-center justify-center space-x-2">
                        <span class="h-px bg-gray-400 w-14"></span>
                        <span class="font-normal text-gray-500">or login with</span>
                        <span class="h-px bg-gray-400 w-14"></span>
                    </span>
                    <div class="flex flex-col space-y-4">
                        <a href="{{route('sign.google')}}" class="flex items-center justify-center px-4 py-2 space-x-2 transition-colors duration-300 border border-gray-800 rounded-md group hover:bg-gray-800 focus:outline-none">
                            <span>
                                <svg class="fill-current w-4 h-4 mr-2" viewBox="0 0 533.5 544.3" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M533.5 278.4c0-18.5-1.5-37.1-4.7-55.3H272.1v104.8h147c-6.1 33.8-25.7 63.7-54.4 82.7v68h87.7c51.5-47.4 81.1-117.4 81.1-200.2z" fill="#4285f4" />
                                    <path d="M272.1 544.3c73.4 0 135.3-24.1 180.4-65.7l-87.7-68c-24.4 16.6-55.9 26-92.6 26-71 0-131.2-47.9-152.8-112.3H28.9v70.1c46.2 91.9 140.3 149.9 243.2 149.9z" fill="#34a853" />
                                    <path d="M119.3 324.3c-11.4-33.8-11.4-70.4 0-104.2V150H28.9c-38.6 76.9-38.6 167.5 0 244.4l90.4-70.1z" fill="#fbbc04" />
                                    <path d="M272.1 107.7c38.8-.6 76.3 14 104.4 40.8l77.7-77.7C405 24.6 339.7-.8 272.1 0 169.2 0 75.1 58 28.9 150l90.4 70.1c21.5-64.5 81.8-112.4 152.8-112.4z" fill="#ea4335" />
                                </svg>
                            </span>
                            <span class="text-sm font-medium text-gray-800 group-hover:text-white">Google</span>
                        </a>
                    </div>
                    <div class="flex flex-col space-y-4">
                        <div class="pt-3 tw-border-t tw-border-grey-lighter tw-border-solid text-center">
                            Don't have an account?
                            <a href="{{route('signup.index')}}">Sign up</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@include('web.components.presentational.login')
@include('web.components.presentational.register')
@include('web.components.presentational.whatsapp')
@include('web.components.presentational.footer')


@endsection