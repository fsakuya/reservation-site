<x-guest-layout>
  <div class="bg-gray-100">
    <x-custom-logo class="absolute top-12 right-12" />

    <x-auth-card>
      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />

      <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
          <x-label for="name" />

          <div class="flex items-center">
            <i class="text-gray-500 mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M20.822 18.096c-3.439-.794-6.64-1.49-5.09-4.418 4.72-8.912 1.251-13.678-3.732-13.678-5.082 0-8.464 4.949-3.732 13.678 1.597 2.945-1.725 3.641-5.09 4.418-3.073.71-3.188 2.236-3.178 4.904l.004 1h23.99l.004-.969c.012-2.688-.092-4.222-3.176-4.935z" />
              </svg></i>
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
          </div>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
          <x-label for="email" />

          <div class="flex items-center">
            <i class=" text-gray-500 mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M12 12.713l-11.985-9.713h23.97l-11.985 9.713zm0 2.574l-12-9.725v15.438h24v-15.438l-12 9.725z" />
              </svg></i>
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
          </div>
        </div>

        <!-- Password -->
        <div class="mt-4">
          <x-label for="password" />

          <div class="flex items-center">
            <i class=" text-gray-500 mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M10 17c0 .552-.447 1-1 1s-1-.448-1-1 .447-1 1-1 1 .448 1 1zm3 0c0 .552-.447 1-1 1s-1-.448-1-1 .447-1 1-1 1 .448 1 1zm3 0c0 .552-.447 1-1 1s-1-.448-1-1 .447-1 1-1 1 .448 1 1zm2-7v-4c0-3.313-2.687-6-6-6s-6 2.687-6 6v4h-3v14h18v-14h-3zm-10-4c0-2.206 1.795-4 4-4s4 1.794 4 4v4h-8v-4zm11 16h-14v-10h14v10z" />
              </svg></i>
            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
          </div>
        </div>

        <div class="flex items-center justify-end mt-4">
          <x-button class="ml-4">
            {{ __('登録') }}
          </x-button>
        </div>
      </form>
    </x-auth-card>
  </div>
</x-guest-layout>