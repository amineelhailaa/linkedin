<x-structure title='Log In'>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Sign in — Mock</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <!-- Keep your preferred body classes -->
  <body class="min-h-screen bg-white text-slate-900 [font-size:18px] lg:[font-size:19px]">
    <!-- PAGE WRAPPER sets the LinkedIn-like background -->
    <div class="min-h-screen bg-[#f3f2ef]">
      <!-- Top bar -->
      <header class="w-full">
        <div class="mx-auto flex max-w-6xl items-center px-6 py-6">
          <a href="#" class="text-[34px] font-extrabold leading-none tracking-tight text-[#0A66C2]">
            Linked<span class="inline-flex h-9 w-9 items-center justify-center rounded bg-[#0A66C2] text-white">in</span>
          </a>
        </div>
      </header>

      <!-- Main -->
      <main class="mx-auto flex w-full max-w-6xl flex-1 flex-col items-center px-6 pb-10">
        <h1 class="mt-2 text-center text-4xl font-light tracking-tight text-slate-800 sm:text-5xl">
          Make the most of your professional life
        </h1>

        <!-- Card -->
<!-- Card -->
<section class="mt-8 w-full max-w-[520px] rounded-xl bg-white px-10 py-10 shadow-[0_8px_28px_rgba(0,0,0,0.12)]">
  <form action="{{ route('login')}}" method="POST" class="space-y-5">
    @csrf
    <div>
      <label class="block text-sm font-medium text-slate-700" for="email">Email</label>
      <input
      value="{{ old('email')}}" 
        id="email"
        name="email"
        type="email"
        autocomplete="email"
        class="mt-2 w-full rounded-md border border-slate-400 px-4 py-3 text-base outline-none focus:border-[#0A66C2] focus:ring-2 focus:ring-[#0A66C2]/20"
      />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div>
      <label class="block text-sm font-medium text-slate-700" for="password">Password</label>
      <div class="relative mt-2">
        <input
        value='{{"password"}}'
          id="password"
          name="password"
          type="password"
          autocomplete="current-password"
          class="w-full rounded-md border border-slate-400 px-4 py-3 pr-16 text-base outline-none focus:border-[#0A66C2] focus:ring-2 focus:ring-[#0A66C2]/20"
        />
        <button
          type="button"
          class="absolute right-3 top-1/2 -translate-y-1/2 text-base font-semibold text-[#0A66C2] hover:underline"
        >
          Show
        </button>
      </div>
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />

    </div>

    <label class="flex items-center gap-3 pt-1">
      <input type="checkbox" name="remember" class="h-5 w-5 accent-[#0a7a3b]" checked />
      <span class="text-base text-slate-800">Remember me</span>
    </label>

    <p class="text-center text-sm leading-relaxed text-slate-500">
      By clicking Next, you agree to the LinkedIn
      <a href="#" class="font-semibold text-[#0A66C2] hover:underline">User Agreement</a>,
      <a href="#" class="font-semibold text-[#0A66C2] hover:underline">Privacy Policy</a>, and
      <a href="#" class="font-semibold text-[#0A66C2] hover:underline">Cookie Policy</a>.
    </p>

    <button
      type="submit"
      class="block w-full rounded-full bg-[#0A66C2] py-4 text-center text-lg font-semibold text-white hover:bg-[#004182]"
    >
      Next
    </button>

    <div class="flex items-center gap-4 py-1">
      <div class="h-px flex-1 bg-slate-200"></div>
      <div class="text-sm text-slate-500">or</div>
      <div class="h-px flex-1 bg-slate-200"></div>
    </div>

    <button
      type="button"
      class="flex w-full items-center justify-center gap-3 rounded-full border border-slate-300 bg-white py-3.5 text-base font-semibold text-slate-700 hover:bg-slate-50"
    >
      <!-- google icon here -->
      Continue with Google
    </button>

    <p class="pt-2 text-center text-base text-slate-700">
      Already on LinkedIn?
      <a href="#" class="font-semibold text-[#0A66C2] hover:underline">Sign in</a>
    </p>
  </form>
</section>


        <!-- Helper line under card -->
        <p class="mt-6 text-center text-base text-slate-600">
          Looking to create a page for a business?
          <a href="#" class="font-semibold text-[#0A66C2] hover:underline">Get help</a>
        </p>
      </main>

      <!-- Footer -->
      <footer class="mt-auto w-full border-t border-slate-200 bg-[#f3f2ef]">
        <div
          class="mx-auto flex max-w-6xl flex-col gap-3 px-6 py-6 text-sm text-slate-600 md:flex-row md:items-center md:justify-between"
        >
          <div class="flex flex-wrap items-center gap-x-3 gap-y-2">
            <span class="font-semibold text-slate-900">LinkedIn</span>
            <span>© 2026</span>
          </div>

          <nav class="flex flex-wrap items-center justify-center gap-x-5 gap-y-2">
            <a href="#" class="hover:underline">About</a>
            <a href="#" class="hover:underline">Accessibility</a>
            <a href="#" class="hover:underline">User Agreement</a>
            <a href="#" class="hover:underline">Privacy Policy</a>
            <a href="#" class="hover:underline">Cookie Policy</a>
            <a href="#" class="hover:underline">Copyright Policy</a>
            <a href="#" class="hover:underline">Brand Policy</a>
            <a href="#" class="hover:underline">Guest Controls</a>
            <a href="#" class="hover:underline">Community Guidelines</a>
            <a href="#" class="inline-flex items-center gap-2 hover:underline">
              Language
              <svg viewBox="0 0 20 20" class="h-4 w-4" fill="currentColor" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </nav>
        </div>
      </footer>

      <!-- reCAPTCHA badge placeholder (visual only) -->
      <div class="fixed bottom-4 right-4">
        <div class="rounded-md border border-slate-300 bg-white px-3 py-2 text-[11px] text-slate-600 shadow-sm">
          <div class="font-semibold text-slate-700">reCAPTCHA</div>
          <div class="text-slate-500">Privacy · Terms</div>
        </div>
      </div>
    </div>
 


















   <!--
 <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> -->

</x-structure>
