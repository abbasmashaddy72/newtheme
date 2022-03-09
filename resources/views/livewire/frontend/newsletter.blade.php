<div class="px-8 py-8 text-center text-gray-100 bg-gray-800 dark">
    <div class="mb-6 text-xl font-medium">Sign up to our newsletter for more articles like this.
    </div>
    <form wire:submit.prevent="submit">
        <div class="relative flex flex-col justify-center max-w-xs mx-auto sm:flex-row sm:max-w-sm sm:px-4">
            <input type="email" class="w-full px-4 py-2 mb-2 form-input sm:mb-0 sm:mr-2" placeholder="Your email"
                wire:model="email" aria-label="Your email" />
            <button class="text-white bg-teal-500 btn-sm hover:bg-teal-400 shrink-0" type="submit">Subscribe</button>
            <svg class="absolute hidden -mt-3 sm:block left-full" width="42" height="44" viewBox="0 0 42 44"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path class="text-gray-600 fill-current"
                    d="M6.226 39.073l9.71 2.172-.436 1.951-13.436-3.004-1.735-.388 1.232-1.281 9.545-9.923 1.441 1.387-6.898 7.171 7.737-2.329C25.946 29.254 34.831 17.909 40.043.71l1.914.58c-5.378 17.746-14.651 29.572-27.818 35.393l-.117.043-7.796 2.347z" />
            </svg>
        </div>
        @error('email')
            <p class="mt-1 text-xs italic text-red-500">{{ $message }}</p>
        @enderror
        <!-- Success message -->
        @if ($success)
            <p class="mt-2 text-sm opacity-80">{{ $success }}</p>
        @endif
        <p class="mt-3 text-sm italic text-gray-400">No spam. No ads. Only great content.</p>
    </form>
</div>
