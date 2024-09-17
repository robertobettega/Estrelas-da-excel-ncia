<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
        <img src="images/Divisória Degradê (9).png" alt="">
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label class="form-label" for="update_password_current_password" :value="__('Current Password')" />
            <div class="col-md-6">
                <x-text-input class="form-control col-3" id="update_password_current_password" name="current_password"
                    type="password" autocomplete="current-password" />
            </div>
            <div class="col-md-6">
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>
        </div>

        <div>
            <x-input-label class="form-label" for="update_password_password" :value="__('New Password')" />
            <div class="col-md-6">
                <x-text-input class="form-control" id="update_password_password" name="password" type="password"
                    autocomplete="new-password" />
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label class="form-label" for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <div class="col-md-6">
                <x-text-input class="form-control" id="update_password_password_confirmation"
                    name="password_confirmation" type="password" autocomplete="new-password" />
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <button class="entrar"><b>{{ __('Save') }}</b></button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
