<x-guest-layout>
    <x-auth-card title="Create New Account">
        <form class="space-y-4 md:space-y-6" action="{{route('register')}}" method="POST">
            @csrf
            <div>
                <x-text-input
                    id="first_name"
                    class="block w-full mt-1"
                    type="text"
                    name="first_name"
                    :value="old('first_name')"
                    autofocus
                    autocomplete="first_name"
                    :messages="$errors->get('first_name')"
                    label="First Name"
                />
            </div>

            <div>
                <x-text-input
                    id="last_name"
                    class="block w-full mt-1"
                    type="text"
                    name="last_name"
                    :value="old('last_name')"
                    autocomplete="last_name"
                    :messages="$errors->get('last_name')"
                    label="Last Name"
                />
            </div>

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
                    id="phone"
                    class="block w-full mt-1"
                    type="tel"
                    name="phone"
                    :value="old('phone')"
                    autocomplete="phone"
                    :messages="$errors->get('phone')"
                    label="Phone Number"
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

            <div>
                <x-text-input
                    id="password_confirmation"
                    class="block w-full mt-1"
                    type="password"
                    name="password_confirmation"
                    autocomplete="password_confirmation"
                    label="Confirm Your Password"
                />
            </div>

            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <x-checkbox name='agree' id="terms" :messages="$errors->get('agree')" aria-describedby="terms">
                        <x-slot name='label'>
                            I accept the <x-link href="#">Terms and Conditions</x-link>
                        </x-slot>
                    </x-checkbox>
                </div>
            </div>
            <x-primary-button type="submit">Create an account</x-primary-button>
        </form>
    </x-auth-card>
    <p class="mt-6 mb-8 text-sm font-light text-center">
        Already have an account? <x-link href="{{route('login')}}">Login here</x-link>
    </p>
</x-guest-layout>
