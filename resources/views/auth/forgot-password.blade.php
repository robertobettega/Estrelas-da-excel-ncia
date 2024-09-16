@extends('layouts.layout')

@section('title', 'Home - Estrelas da excelência')

@section('content')

    <div class="card justify-content-center" style="width: 80rem; margin: 30px; padding: 30px">
        <div class="mb-4 text-sm text-gray-600 justify-content-center">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" :value="__('Email')" />
                <input id="email" class="form-control" placeholder="nome@exemplo.com" type="email" name="email" :value="old('email')" required
                    autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end">
                <button class="entrar">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>

@endsection
