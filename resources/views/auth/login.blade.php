@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/apps.css') }}">
<style>
        .gradient {
          background: linear-gradient(90deg,#6198A9 0%, #d4dade 100%);
        }
    </style>
@section('content')
<div class="lg:flex">
    <div class="lg:w-1/2 xl:max-w-screen-sm">

        {{-- Form --}}
        <div class="mt-15 px-12 w-30 sm:px-15 md:px-48 lg:px-12 xl:px-15 xl:max-w-2xl">
            <div class="px-12 py-7 rounded-3xl shadow-xl bg-white" style="border-radius: 1.5rem;">
                <h2 class="text-center text-4xl text-blue-400 font-display font-semibold lg:text-left xl:text-5xl
                    xl:text-bold">Log in</h2>
                <form class="mt-8" method="POST" action="{{ route('trylogin') }}">
                    @csrf

                    <div>
                        <div class="text-sm font-bold text-gray-700 tracking-wide">Email Address</div>

                        <input class="w-full text-sm py-2 px-3 border-b border-gray-300 focus:outline-none focus:border-blue-400 form-control @error('username') is-invalid @enderror"
                             id="username" type="username" name="username" value="{{ old('username') }}" required autocomplete="username">

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mt-8">
                        <div class="flex justify-between items-center">
                            <div class="text-sm font-bold text-gray-700 tracking-wide">Password</div>
                            <div>
                                @if (Route::has('password.request'))
                                    <a class="text-xs font-display font-semibold text-blue-400 hover:text-blue-400
                                        cursor-pointer" href="{{ route('password.request') }}">
                                        Forgot Password?
                                    </a>
                                @endif
                            </div>
                        </div>
                        <input class="w-full text-sm py-2 px-3 border-b border-gray-300 focus:outline-none focus:border-blue-400 form-control @error('password') is-invalid @enderror"
                             id="password" type="password" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mt-10">
                        <button class="bg-blue-400 text-white-100 p-4 w-full rounded-full tracking-wide
                            font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-blue-400
                            shadow-lg" type="submit">
                            Log In
                        </button>
                    </div>
                </form>
                <div class="mt-12 text-sm font-display font-semibold text-gray-700 text-center">
                    Don't have an account ?
                    @if (Route::has('register'))
                        <a class="cursor-pointer text-blue-400 hover:text-blue-400" href="{{ route('register') }}">Sign up</a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- SVG --}}
    <div class="hidden lg:flex items-center justify-center flex-1 h-screen">
    <div class="w-full max-w-screen-sm transform duration-200 hover:scale-110 cursor-pointer">
            {!! file_get_contents('images/undraw_unlock.svg')!!}
        </div>
    </div>
</div>
@endsection

