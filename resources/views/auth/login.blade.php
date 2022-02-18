<x-guest-layout>
    <div class="flex-auto w-full md:w-2/4">
        <div class="flex flex-wrap justify-center">
            <div class="flex-auto px-4 md:px-10">
                <div
                    class="relative flex flex-col justify-center mb-0 overflow-hidden bg-white rounded-lg shadow-none card-transparent xl:px-24">
                    <div class="flex-auto p-10">
                        <!--Logo start-->
                        <a href="/" class="flex items-center py-1 mb-4 mr-4 text-xl whitespace-nowrap">
                            <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
                        </a>
                        <h2 class="mb-2 text-3xl font-medium text-center">Sign In</h2>
                        <p class="mb-4 text-center text-gray-600">Login to stay connected.</p>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            {{-- <div class="flex flex-wrap">
                                <!-- Email Address -->
                                <div class="flex-auto w-full">
                                    <div class="mb-4">
                                        <x-label for="email" :value="__('Email')" />

                                        <x-input id="email" class="block w-full mt-1" type="email" name="email"
                                            :value="old('email')" required autofocus />
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="flex-auto w-full">
                                    <div class="mb-4">
                                        <x-label for="password" :value="__('Password')" />

                                        <x-input id="password" class="block w-full mt-1" type="password" name="password"
                                            required autocomplete="current-password" />
                                    </div>
                                </div>

                                <!-- Remember Me & Forgot Password -->
                                <div class="flex justify-between flex-auto w-full">
                                    <div class="block pl-6 mb-4">
                                        <input id="remember_me" type="checkbox" name="remember"
                                            class="float-left w-4 h-4 mt-1 -ml-6 bg-center bg-no-repeat border border-blue-500 rounded">
                                        <label class="text-gray-600 form-check-label"
                                            for="remember_me">{{ __('Remember me') }}</label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="text-blue-500 hover:text-blue-600"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div> --}}

                            {{-- <div class="flex justify-center">
                                <x-submit-button>
                                    {{ __('Log in') }}
                                </x-submit-button>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-auto hidden w-2/4 h-screen p-0 -mt-1 overflow-hidden bg-blue-500 md:block">
        <img src="{{ asset('images/auth/01.png') }}" class="object-cover w-full h-full" alt="images">
    </div>
</x-guest-layout>
