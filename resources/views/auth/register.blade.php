<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div
            class="relative flex min-h-screen text-black-800 antialiased flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
            <div class="relative py-6 sm:w-96 mx-auto mb-24 text-center">
                <div class="flex justify-center ">
                    <x-logo-group class="w-50 h-50 m-auto" />
                </div>
                <div class=" bg-white shadow-md rounded-lg text-left">
                    <div class="h-2 bg-verde_logo rounded-t-md"></div>
                    <div class="px-8 py-6 ">
                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" placeholder="Name"
                                class="border w-full h-5 px-3 py-5 mt-2 focus:outline-none focus:ring-0 focus:border-verde_logo rounded-md"
                                type="text" name="name" :value="old('name')" required autofocus
                                autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" placeholder="Email"
                                class="border w-full h-5 px-3 py-5 mt-2 focus:outline-none focus:ring-0 focus:border-verde_logo rounded-md"
                                type="email" name="email" :value="old('email')" required autofocus
                                autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" placeholder="Password"
                                class="border w-full h-5 px-3 py-5 mt-2 focus:outline-none focus:ring-0 focus:border-verde_logo rounded-md"
                                type="password" name="password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-text-input id="password_confirmation" placeholder="Confirm Password"
                                class="border w-full h-5 px-3 py-5 mt-2 focus:outline-none focus:ring-0 focus:border-verde_logo rounded-md"
                                type="password" name="password_confirmation" required autofocus
                                autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex justify-between items-baseline">

                            <a href="{{ route('password.request') }}" class="text-sm  hover:underline">Already
                                registered?</a>
                            <button type="submit"
                                class="mt-4 bg-verde_logo text-white py-2 px-6 rounded-md hover:verde_logo ">Register</button>
                        </div>
                    </div>

                </div>
            </div>
    </form>
</x-guest-layout>
