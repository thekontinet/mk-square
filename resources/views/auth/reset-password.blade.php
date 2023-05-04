<x-guest-layout>
    <x-auth-card title="Change Password">
        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :label="__('Email')" :messages="$errors->get('email')" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-text-input id="password" class="block w-full mt-1" type="password" :label="__('Password')" :messages="$errors->get('password')" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-text-input id="password_confirmation" class="block w-full mt-1"
                type="password"
                :label="__('Confirm Password')"
                name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Reset Password') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
