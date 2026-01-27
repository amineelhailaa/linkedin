<x-structure title='Sign Up'>
    <!-- Top bar -->
    <header class="w-full">
      <div class="mx-auto flex max-w-6xl items-center px-6 py-6">
        <a href="#" class="text-[34px] font-extrabold leading-none tracking-tight text-[#0A66C2]">
          Linked<span class="inline-flex h-9 w-9 items-center justify-center rounded bg-[#0A66C2] text-white">in</span>
        </a>
      </div>
    </header>

    <!-- Main -->   
    <main class="mx-auto flex w-full max-w-6xl flex-1 flex-col items-center px-6">
      <h1 class="mt-2 text-center text-4xl font-light tracking-tight text-slate-800 sm:text-5xl">
        Make the most of your professional life
      </h1>

      <!-- Card -->
      <section
        class="mt-8 w-full max-w-[560px] rounded-xl bg-white px-10 py-10 shadow-[0_8px_28px_rgba(0,0,0,0.12)]"
        aria-label="Join card"
      >
        <!-- ✅ Real form -->
        <form class="space-y-5" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <!-- Profile picture upload -->
          <div class="flex flex-col items-center gap-3">
            <div class="relative">
              <!-- Preview image -->
              <img
                id="avatarPreview"
                alt="Profile preview"
                class="hidden h-24 w-24 rounded-full object-cover ring-2 ring-slate-200"
              />
              <!-- Fallback circle -->
              <div
                id="avatarFallback"
                class="grid h-24 w-24 place-items-center rounded-full bg-slate-100 text-lg font-semibold text-slate-500 ring-2 ring-slate-200"
              >
                PFP
              </div>

              <!-- Small edit badge -->
              <div class="absolute -bottom-1 -right-1 grid h-9 w-9 place-items-center rounded-full bg-white ring-1 ring-slate-200 shadow-sm">
                <svg viewBox="0 0 24 24" class="h-5 w-5 text-slate-600" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 5h7a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7" />
                  <path d="M16 3l5 5" />
                  <path d="M8 13l9-9 5 5-9 9H8v-5Z" />
                </svg>
              </div>
            </div>

            <input id="avatarInput" name="avatar" type="file" accept="image/*" class="sr-only" />
            <label
              for="avatarInput"
              class="cursor-pointer rounded-full border border-slate-300 bg-white px-5 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50"
            >
              Upload profile picture
            </label>
            <p class="text-xs text-slate-500">PNG / JPG recommended. Preview updates instantly.</p>
          </div>

          <!-- Full name -->
          <div>
            <label for="fullName" class="block text-sm font-medium text-slate-700">Full name</label>
            <input
              id="fullName"
              name="name"
              type="text"
              required
              class="mt-2 w-full rounded-md border border-slate-400 px-4 py-3 text-base outline-none focus:border-[#0A66C2] focus:ring-2 focus:ring-[#0A66C2]/20"
              placeholder="e.g. Amine B."
            />
          </div>

          <!-- Email -->
          <div>
            <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
            <input
              id="email"
              name="email"
              type="email"
              required
              class="mt-2 w-full rounded-md border border-slate-400 px-4 py-3 text-base outline-none focus:border-[#0A66C2] focus:ring-2 focus:ring-[#0A66C2]/20"
              placeholder="name@email.com"
            />
          </div>

          <!-- Password -->
          <div>
            <label for="passwordInput" class="block text-sm font-medium text-slate-700">Password</label>
            <div class="relative mt-2">
              <input
                id="passwordInput"
                name="password"
                type="password"
                required
                minlength="6"
                class="w-full rounded-md border border-slate-400 px-4 py-3 pr-16 text-base outline-none focus:border-[#0A66C2] focus:ring-2 focus:ring-[#0A66C2]/20"
                placeholder="••••••••"
              />
              <button
                id="togglePassword"
                type="button"
                class="absolute right-3 top-1/2 -translate-y-1/2 text-base font-semibold text-[#0A66C2] hover:underline"
              >
                Show
              </button>
            </div>
          </div>
          <div>
            <label for="password_confirmation" class="block text-sm font-medium text-slate-700">Password</label>
            <div class="relative mt-2">
              <input
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                required
                minlength="6"
                class="w-full rounded-md border border-slate-400 px-4 py-3 pr-16 text-base outline-none focus:border-[#0A66C2] focus:ring-2 focus:ring-[#0A66C2]/20"
                placeholder="••••••••"
              />
              <button
                id="togglePassword"
                type="button"
                class="absolute right-3 top-1/2 -translate-y-1/2 text-base font-semibold text-[#0A66C2] hover:underline"
              >
                Show
              </button>
            </div>
          </div>

          <!-- Role dropdown -->
          <div>
            <label for="role" class="block text-sm font-medium text-slate-700">Role</label>
            <select
              id="role"
              name="type"
              required
              class="mt-2 w-full rounded-md border border-slate-400 bg-white px-4 py-3 text-base outline-none focus:border-[#0A66C2] focus:ring-2 focus:ring-[#0A66C2]/20"
            >
              <option value="" selected disabled>Select a role</option>
              <option value="recruteur">Recruteur</option>
              <option value="candidat">Candidat</option>
            </select>
          </div>

          <!-- Bio -->
          <div>
            <label for="bio" class="block text-sm font-medium text-slate-700">Bio</label>
            <textarea
              id="bio"
              name="bio"
              rows="4"
              class="mt-2 w-full resize-none rounded-md border border-slate-400 px-4 py-3 text-base outline-none focus:border-[#0A66C2] focus:ring-2 focus:ring-[#0A66C2]/20"
              placeholder="A short bio about you..."
            ></textarea>
          </div>

          <!-- Legal -->
          <p class="text-center text-sm leading-relaxed text-slate-500">
            By clicking <span class="font-medium">Start</span>, you agree to the LinkedIn
            <a href="#" class="font-semibold text-[#0A66C2] hover:underline">User Agreement</a>,
            <a href="#" class="font-semibold text-[#0A66C2] hover:underline">Privacy Policy</a>, and
            <a href="#" class="font-semibold text-[#0A66C2] hover:underline">Cookie Policy</a>.
          </p>

          <!-- Start button -->
          <button
            type="submit"
            class="w-full rounded-full bg-[#0A66C2] py-4 text-center text-lg font-semibold text-white hover:bg-[#004182]"
          >
            Start
          </button>

          <!-- OR divider -->
          <div class="flex items-center gap-4 py-1">
            <div class="h-px flex-1 bg-slate-200"></div>
            <div class="text-sm text-slate-500">or</div>
            <div class="h-px flex-1 bg-slate-200"></div>
          </div>

          <!-- Continue with Google -->
          <button
            type="button"
            class="flex w-full items-center justify-center gap-3 rounded-full border border-slate-300 bg-white py-3.5 text-base font-semibold text-slate-700 hover:bg-slate-50"
          >
            <span class="grid h-7 w-7 place-items-center rounded-full bg-white" aria-hidden="true">
              <svg viewBox="0 0 48 48" class="h-5 w-5">
                <path
                  fill="#FFC107"
                  d="M43.6 20.5H42V20H24v8h11.3C33.7 32.7 29.3 36 24 36c-6.6 0-12-5.4-12-12s5.4-12 12-12c3.1 0 6 .1 8.1 2.9l5.7-5.7C34.4 6.1 29.5 4 24 4 12.9 4 4 12.9 4 24s8.9 20 20 20 20-8.9 20-20c0-1.1-.1-2.2-.4-3.5Z"
                />
                <path
                  fill="#FF3D00"
                  d="M6.3 14.7 12.9 19.5C14.7 15.1 19 12 24 12c3.1 0 6 .1 8.1 2.9l5.7-5.7C34.4 6.1 29.5 4 24 4 16.3 4 9.7 8.3 6.3 14.7Z"
                />
                <path
                  fill="#4CAF50"
                  d="M24 44c5.4 0 10.4-2.1 14.1-5.5l-6.5-5.5C29.6 34.6 26.9 36 24 36c-5.3 0-9.7-3.3-11.3-8l-6.6 5.1C9.4 39.7 16.2 44 24 44Z"
                />
                <path
                  fill="#1976D2"
                  d="M43.6 20.5H42V20H24v8h11.3c-1.1 2.9-3.3 5.1-6.1 6.5l.1.1 6.5 5.5C38.3 37.9 44 33 44 24c0-1.1-.1-2.2-.4-3.5Z"
                />
              </svg>
            </span>
            Continue with Google
          </button>

          <!-- Bottom link -->
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
    <footer class="mt-10 w-full border-t border-slate-200 bg-[#f3f2ef]">
      <div class="mx-auto flex max-w-6xl flex-col gap-3 px-6 py-6 text-sm text-slate-600 md:flex-row md:items-center md:justify-between">
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

    <script>
      // Live profile picture preview
      const avatarInput = document.getElementById("avatarInput");
      const avatarPreview = document.getElementById("avatarPreview");
      const avatarFallback = document.getElementById("avatarFallback");

      let lastObjectUrl = null;

      avatarInput.addEventListener("change", () => {
        const file = avatarInput.files && avatarInput.files[0];
        if (!file) return;
        if (!file.type.startsWith("image/")) return;

        if (lastObjectUrl) URL.revokeObjectURL(lastObjectUrl);
        lastObjectUrl = URL.createObjectURL(file);

        avatarPreview.src = lastObjectUrl;
        avatarPreview.classList.remove("hidden");
        avatarFallback.classList.add("hidden");
      });

      // Password show/hide
      const passwordInput = document.getElementById("passwordInput");
      const togglePassword = document.getElementById("togglePassword");

      togglePassword.addEventListener("click", () => {
        const isHidden = passwordInput.type === "password";
        passwordInput.type = isHidden ? "text" : "password";
        togglePassword.textContent = isHidden ? "Hide" : "Show";
      });
    </script>
















    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
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
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-structure>
