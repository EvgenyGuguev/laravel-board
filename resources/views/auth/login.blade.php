@extends('layouts.app')

@section('content')

<div class="w-1/2 mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

    <div class="text-2xl text-center mb-10">{{ __('Login') }}</div>

            <form  method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block text-gray-700 text-lg mb-2">{{ __('E-Mail Address') }}</label>
                    <div class="mb-6">
                        <input id="email" type="email" class="border rounded w-full py-2 px-3 text-gray-700 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-lg mb-2">{{ __('Password') }}</label>

                    <div class="mb-6">
                        <input id="password" type="password" class="border rounded w-full py-2 px-3 text-gray-700 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="mb-3">
                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>


                <div class="flex items-center justify-between">
                    <button type="submit" class="button">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>

            </form>
</div>

@endsection
