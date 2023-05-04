<x-guest-layout>
    <x-auth-card title="Email Verification">
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="flex items-center justify-between mt-4">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-primary-button>
                        {{ __('Resend Verification Email') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </x-auth-card>
    <form class="py-4 text-center text-slate-100" method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit" class="text-sm underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2">
            {{ __('Log Out') }}
        </button>
    </form>
</x-guest-layout>
