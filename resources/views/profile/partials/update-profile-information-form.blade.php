<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.min.css" rel="stylesheet">
<header>
    <h2>
        {{ __('Profile Information') }}
    </h2>

    <p>
        {{ __("Update your account's profile information and email address.") }}
    </p>
    <img src="images/Divisória Degradê (9).png" alt="">
</header>

<form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
</form>

<form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
    @csrf
    @method('patch')

    <div>
        <x-input-label for="name" :value="__('Name')" class="form-label" />
        <div class="col-md-6">
            <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)" required
                autofocus autocomplete="name" />
        </div>
        <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>

    <div>
        <x-input-label for="email" :value="__('Email')" class="form-label" />
        <div class="col-md-6">
            <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required
                autocomplete="username" />
        </div>
        <x-input-error class="mt-2" :messages="$errors->get('email')" />

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification" class="entrar">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            </div>
        @endif
    </div>

    <div class="flex items-center gap-4">
        <button class="entrar" id="btnsalvar" onclick="sucesso()"><b>{{ __('Save') }}</b></button>

        @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600">{{ __('Saved.') }}</p>
        @endif
    </div>
</form>
