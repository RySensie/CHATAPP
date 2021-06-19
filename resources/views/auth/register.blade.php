@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/apps.css') }}">
<style>
    .gradient {
      background: linear-gradient(90deg,#6198A9 0%, #d4dade 100%);
    }
</style>
@section('content')
<div class="lg:flex mb-8">

    {{-- SVG --}}
    <div class="hidden lg:flex content-center justify-center flex-1 h-screen">
        <div class="w-full max-w-screen-sm transform duration-200 hover:scale-110 cursor-pointer">
            {!! file_get_contents('images/undraw_sign_up.svg') !!}
        </div>
    </div>

    {{-- FORM --}}
    <div class="lg:w-1/2 xl:max-w-screen-sm">
        <div class="mt-8 px-12 w-30 sm:px-15 md:px-48 lg:px-12 xl:px-15 xl:max-w-2xl">
            <div class="px-12 py-7 rounded-3xl shadow-xl bg-white" style="border-radius: 1.5rem;">
                <h2 class="text-center text-4xl text-blue-400 font-display font-semibold lg:text-left xl:text-5xl
                        xl:text-bold">Sign in</h2>
                <form class="mt-8" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <label for="name"
                            class="text-sm font-bold text-gray-700 tracking-wide">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="w-full text-sm py-2 px-3 border-b border-gray-300 focus:outline-none focus:border-indigo-400 form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-8">
                        <label for="email"
                            class="text-sm font-bold text-gray-700 tracking-wide">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="username" type="username" class="w-full text-sm py-2 px-3 border-b border-gray-300 focus:outline-none focus:border-blue-400 form-control @error('username') is-invalid @enderror"
                                name="username" value="{{ old('username') }}" required>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-8">
                        <label for="password"
                            class="text-sm font-bold text-gray-700 tracking-wide">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="w-full text-sm py-2 px-3 border-b border-gray-300 focus:outline-none focus:border-blue-400 form-control @error('password') is-invalid @enderror"
                                    name="password" required>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-8">
                        <label for="password-confirm"
                            class="text-sm font-bold text-gray-700 tracking-wide">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="w-full text-sm py-2 px-3 border-b border-gray-300 focus:outline-none focus:border-blue-400 form-control"
                                name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="mt-10">
                        <button class="bg-blue-400 text-gray-100 p-4 w-full rounded-full tracking-wide font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-blue-400 shadow-lg" type="submit">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
