<x-guest-layout>
    {{-- <form method="POST" action="{{ route('register') }}" class="grid lg:grid-cols-2">
        @csrf

        <!-- Firstname -->
        <div>
            <x-input-label for="first_name" :value="__('First Name')" />
            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <!-- Lastname Address -->
        <div class="mt-4">
            <x-input-label for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone Address -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form> --}}

    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                Flowbite    
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Create and account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{route('register')}}" method="POST">
                        @csrf
                        <div>
                            <x-text-input 
                                id="first_name" 
                                class="block mt-1 w-full" 
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
                                class="block mt-1 w-full" 
                                type="text" 
                                name="last_name" 
                                :value="old('last_name')" 
                                autofocus 
                                autocomplete="last_name"
                                :messages="$errors->get('last_name')" 
                                label="Last Name"
                            />
                        </div>

                        <div>
                            <x-text-input 
                                id="email" 
                                class="block mt-1 w-full" 
                                type="email" 
                                name="email" 
                                :value="old('email')" 
                                autofocus 
                                autocomplete="email"
                                :messages="$errors->get('email')" 
                                label="Email"
                            />
                        </div>

                        <div>
                            <x-text-input 
                                id="phone" 
                                class="block mt-1 w-full" 
                                type="tel" 
                                name="phone" 
                                :value="old('phone')" 
                                autofocus 
                                autocomplete="phone"
                                :messages="$errors->get('phone')" 
                                label="Phone Number"
                            />
                        </div>

                        <div>
                            <x-text-input 
                                id="password" 
                                class="block mt-1 w-full" 
                                type="password" 
                                name="password" 
                                autofocus 
                                autocomplete="password"
                                :messages="$errors->get('password')" 
                                label="Password"
                            />
                        </div>

                        <div>
                            <x-text-input 
                                id="password_confirmation" 
                                class="block mt-1 w-full" 
                                type="password" 
                                name="password_confirmation" 
                                autofocus 
                                autocomplete="password_confirmation"
                                label="Confirm Your Password"
                            />
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                              <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                            </div>
                            <div class="ml-3 text-sm">
                              <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                            </div>
                        </div>
                        <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create an account</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
      </section>
</x-guest-layout>
