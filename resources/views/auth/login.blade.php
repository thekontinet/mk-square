<x-guest-layout>
    <x-auth-card title="Login">
        <form class="space-y-4 md:space-y-6" action="{{route('login')}}" method="POST">
            @csrf
            <div>
                <x-text-input
                    id="email"
                    class="block w-full mt-1"
                    type="email"
                    name="email"
                    :value="old('email')"
                    autocomplete="email"
                    :messages="$errors->get('email')"
                    label="Email"
                />
            </div>

            <div>
                <x-text-input
                    id="password"
                    class="block w-full mt-1"
                    type="password"
                    name="password"
                    autocomplete="password"
                    :messages="$errors->get('password')"
                    label="Password"
                />
            </div>

            <div class="flex items-center justify-between">
                <x-checkbox name='remember' id="terms" aria-describedby="terms" label="Remember Me"/>
                <x-link class="text-sm" :href="route('password.request')">Forgot Password ?</x-link>
            </div>
            <x-primary-button type="submit">Login</x-primary-button>
        </form>
    </x-auth-card>
    <p class="mt-6 mb-8 text-sm font-light text-center">
        Dont have an account? <x-link href="{{route('register')}}">Create a new account</x-link>
    </p>
</x-guest-layout>
