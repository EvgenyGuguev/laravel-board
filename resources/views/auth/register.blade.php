@extends('layouts.app')

@section('content')

<div class="w-1/2 mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

    <div class="text-2xl text-center mb-10">{{ __('Register') }}</div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-6">
                <label for="name" class="block text-gray-700 text-lg mb-2">{{ __('Name') }}</label>

                <div class="mb-6">
                    <input id="name" type="text" class="border rounded w-full py-2 px-3 text-gray-700 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-6">
                <label for="email" class="block text-gray-700 text-lg mb-2">{{ __('E-Mail Address') }}</label>

                <div class="mb-6">
                    <input id="email" type="email" class="border rounded w-full py-2 px-3 text-gray-700 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                    <input id="password" type="password" class="border rounded w-full py-2 px-3 text-gray-700 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-6">
                <label for="password-confirm" class="block text-gray-700 text-lg mb-2">{{ __('Confirm Password') }}</label>

                <div class="mb-6">
                    <input id="password-confirm" type="password" class="border rounded w-full py-2 px-3 text-gray-700" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="button">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>

        </form>
</div>

@endsection
