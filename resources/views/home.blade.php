<x-structure title='HOME'>
    <!-- Top nav -->
    <header class="border-b border-slate-100">
      <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">
        <!-- Logo -->
        <a href="#" class="flex items-center gap-2">
          <div class="text-3xl font-extrabold tracking-tight text-[#0A66C2]">
            Linked<span class="inline-flex h-9 w-9 items-center justify-center rounded bg-[#0A66C2] text-white">in</span>
          </div>
        </a>

        <!-- Nav icons (desktop) -->
        <nav class="hidden items-center gap-10 text-base text-slate-600 lg:flex">
          <a href="#" class="group flex items-center gap-3 hover:text-slate-900">
            <span class="grid h-10 w-10 place-items-center rounded-full bg-slate-50 ring-1 ring-slate-100 group-hover:bg-slate-100">
              <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 19c4-1 7-4 8-8 4-1 6-5 6-9-4 0-8 2-9 6-4 1-7 4-8 8Z" />
                <path d="M9 15l-2 2" />
              </svg>
            </span>
            <span>Top Content</span>
          </a>

          <a href="#" class="group flex items-center gap-3 hover:text-slate-900">
            <span class="grid h-10 w-10 place-items-center rounded-full bg-slate-50 ring-1 ring-slate-100 group-hover:bg-slate-100">
              <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M16 11a4 4 0 1 0-8 0" />
                <path d="M4 20a8 8 0 0 1 16 0" />
              </svg>
            </span>
            <span>People</span>
          </a>

          <a href="#" class="group flex items-center gap-3 hover:text-slate-900">
            <span class="grid h-10 w-10 place-items-center rounded-full bg-slate-50 ring-1 ring-slate-100 group-hover:bg-slate-100">
              <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 19V5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v14" />
                <path d="M8 7h8M8 11h8M8 15h6" />
              </svg>
            </span>
            <span>Learning</span>
          </a>

          <a href="#" class="group flex items-center gap-3 hover:text-slate-900">
            <span class="grid h-10 w-10 place-items-center rounded-full bg-slate-50 ring-1 ring-slate-100 group-hover:bg-slate-100">
              <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 7h18v13H3z" />
                <path d="M7 7V5a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2" />
              </svg>
            </span>
            <span>Jobs</span>
          </a>

          <a href="#" class="group flex items-center gap-3 hover:text-slate-900">
            <span class="grid h-10 w-10 place-items-center rounded-full bg-slate-50 ring-1 ring-slate-100 group-hover:bg-slate-100">
              <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 2v20" />
                <path d="M2 12h20" />
                <path d="M7 7l10 10" />
                <path d="M17 7 7 17" />
              </svg>
            </span>
            <span>Games</span>
          </a>
        </nav>

        <!-- Actions -->
        <div class="flex items-center gap-4">
          <a
            href="{{  route('login') }}"
            class="hidden rounded-full border-2 border-[#0A66C2] px-6 py-3 text-base font-semibold text-[#0A66C2] hover:bg-[#0A66C2]/5 md:inline-flex"
          >
            Access account
          </a>
          <a
            href="{{  route('register') }}"
            class="inline-flex rounded-full bg-[#0A66C2] px-7 py-3 text-base font-semibold text-white hover:bg-[#004182]"
          >
            Join now
          </a>

          <button
            type="button"
            class="inline-flex items-center justify-center rounded-full p-3 text-slate-600 ring-1 ring-slate-200 hover:bg-slate-50 lg:hidden"
            aria-label="Open menu"
          >
            <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </header>

    <!-- Hero (fills most of laptop height) -->
    <main>
      <section class="mx-auto max-w-7xl px-6 py-12 lg:py-16">
        <div class="grid items-center gap-12 lg:grid-cols-2">
          <!-- Left -->
          <div>
            <h1 class="text-5xl font-light leading-[1.05] tracking-tight sm:text-6xl lg:text-7xl">
              Welcome to your<br />
              professional community
            </h1>

            <div class="mt-10 space-y-4">
              <a
                href="#"
                class="flex w-full items-center justify-center gap-4 rounded-full bg-[#0A66C2] px-7 py-4 text-base font-semibold text-white hover:bg-[#004182] sm:w-[34rem]"
              >
                <span class="grid h-7 w-7 place-items-center rounded-full bg-white">
                  <svg viewBox="0 0 48 48" class="h-5 w-5">
                    <path fill="#FFC107" d="M43.6 20.5H42V20H24v8h11.3C33.7 32.7 29.3 36 24 36c-6.6 0-12-5.4-12-12s5.4-12 12-12c3.1 0 6 .1 8.1 2.9l5.7-5.7C34.4 6.1 29.5 4 24 4 12.9 4 4 12.9 4 24s8.9 20 20 20 20-8.9 20-20c0-1.1-.1-2.2-.4-3.5Z"/>
                    <path fill="#FF3D00" d="M6.3 14.7 12.9 19.5C14.7 15.1 19 12 24 12c3.1 0 6 .1 8.1 2.9l5.7-5.7C34.4 6.1 29.5 4 24 4 16.3 4 9.7 8.3 6.3 14.7Z"/>
                    <path fill="#4CAF50" d="M24 44c5.4 0 10.4-2.1 14.1-5.5l-6.5-5.5C29.6 34.6 26.9 36 24 36c-5.3 0-9.7-3.3-11.3-8l-6.6 5.1C9.4 39.7 16.2 44 24 44Z"/>
                    <path fill="#1976D2" d="M43.6 20.5H42V20H24v8h11.3c-1.1 2.9-3.3 5.1-6.1 6.5l.1.1 6.5 5.5C38.3 37.9 44 33 44 24c0-1.1-.1-2.2-.4-3.5Z"/>
                  </svg>
                </span>
                Continue with Google
              </a>

              <a
                href="#"
                class="flex w-full items-center justify-center rounded-full border-2 border-slate-300 px-7 py-4 text-base font-semibold text-slate-800 hover:bg-slate-50 sm:w-[34rem]"
              >
                Sign in with email
              </a>

              <p class="max-w-[34rem] text-sm leading-relaxed text-slate-500">
                By clicking Continue to join or sign in, you agree to this site’s
                <a href="#" class="text-[#0A66C2] hover:underline">User Agreement</a>,
                <a href="#" class="text-[#0A66C2] hover:underline">Privacy Policy</a>,
                and <a href="#" class="text-[#0A66C2] hover:underline">Cookie Policy</a>.
              </p>

              <p class="text-base text-slate-600">
                New to the community?
                <a href="#" class="font-semibold text-[#0A66C2] hover:underline">Join now</a>
              </p>
            </div>
          </div>

          <!-- Right illustration (bigger card) -->
          <div class="relative">
            <div class="absolute -inset-6 -z-10 rounded-[3rem] bg-gradient-to-br from-slate-50 to-white"></div>

            <div class="overflow-hidden rounded-[3rem] border border-slate-100 bg-white shadow-sm">
              <div class="grid grid-cols-5">
                <!-- left “sky” -->
                <div class="col-span-2 bg-gradient-to-b from-slate-50 to-slate-100 p-8">
                  <div class="h-10 w-28 rounded-full bg-white/70 ring-1 ring-slate-200"></div>
                  <div class="mt-5 h-5 w-36 rounded bg-white/70"></div>
                  <div class="mt-3 h-5 w-32 rounded bg-white/60"></div>

                  <div class="mt-12 space-y-4">
                    <div class="h-4 w-44 rounded bg-white/70"></div>
                    <div class="h-4 w-40 rounded bg-white/60"></div>
                    <div class="h-4 w-32 rounded bg-white/50"></div>
                  </div>

                  <div class="mt-12 h-36 rounded-3xl bg-white/70 ring-1 ring-slate-200"></div>
                </div>

                <!-- right “room” -->
                <div class="col-span-3 p-8">
                  <div class="flex items-start justify-between">
                    <div class="space-y-3">
                      <div class="h-12 w-12 rounded-2xl bg-slate-100 ring-1 ring-slate-200"></div>
                      <div class="h-4 w-40 rounded bg-slate-100"></div>
                      <div class="h-4 w-32 rounded bg-slate-100"></div>
                    </div>
                    <div class="grid h-14 w-14 place-items-center rounded-2xl bg-slate-50 ring-1 ring-slate-200">
                      <svg viewBox="0 0 24 24" class="h-7 w-7 text-slate-400" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 20h16" />
                        <path d="M6 20V9l6-5 6 5v11" />
                        <path d="M10 20v-6h4v6" />
                      </svg>
                    </div>
                  </div>

                  <div class="mt-10 flex items-end gap-7">
                    <div class="relative">
                      <div class="h-20 w-20 rounded-full bg-slate-200"></div>
                      <div class="mt-4 h-32 w-36 rounded-[2rem] bg-slate-200"></div>
                    </div>
                    <div class="flex-1">
                      <div class="h-28 rounded-3xl bg-slate-50 ring-1 ring-slate-200"></div>
                      <div class="mt-5 h-12 w-52 rounded-2xl bg-slate-100"></div>
                      <div class="mt-3 h-12 w-48 rounded-2xl bg-slate-100"></div>
                    </div>
                  </div>

                  <div class="mt-10 grid grid-cols-3 gap-4">
                    <div class="h-20 rounded-3xl bg-slate-50 ring-1 ring-slate-200"></div>
                    <div class="h-20 rounded-3xl bg-slate-50 ring-1 ring-slate-200"></div>
                    <div class="h-20 rounded-3xl bg-slate-50 ring-1 ring-slate-200"></div>
                  </div>
                </div>
              </div>
            </div>

            <p class="mt-4 text-sm text-slate-500">
              Placeholder illustration (bigger proportions).
            </p>
          </div>
        </div>
      </section>

      <!-- Lower section -->
      <section class="bg-slate-50">
        <div class="mx-auto max-w-7xl px-6 py-10">
          <div class="flex flex-col items-start justify-between gap-6 md:flex-row md:items-center">
            <h2 class="text-3xl font-light tracking-tight sm:text-4xl">
              Explore top community content
            </h2>

            <div class="flex flex-wrap gap-3">
              <a href="#" class="rounded-full border-2 border-slate-300 bg-white px-5 py-3 text-base text-slate-700 hover:bg-slate-50">Career</a>
              <a href="#" class="rounded-full border-2 border-slate-300 bg-white px-5 py-3 text-base text-slate-700 hover:bg-slate-50">Productivity</a>
              <a href="#" class="rounded-full border-2 border-slate-300 bg-white px-5 py-3 text-base text-slate-700 hover:bg-slate-50">Finance</a>
              <a href="#" class="rounded-full border-2 border-slate-300 bg-white px-5 py-3 text-base text-slate-700 hover:bg-slate-50">Leadership</a>
              <a href="#" class="rounded-full border-2 border-slate-300 bg-white px-5 py-3 text-base text-slate-700 hover:bg-slate-50">Marketing</a>
            </div>
          </div>

          <div class="mt-8 grid gap-5 lg:grid-cols-3">
            <a href="#" class="rounded-3xl border border-slate-200 bg-white p-7 shadow-sm hover:shadow">
              <div class="text-lg font-semibold">Trending roles</div>
              <p class="mt-2 text-base text-slate-600">Discover what people are hiring for right now.</p>
            </a>
            <a href="#" class="rounded-3xl border border-slate-200 bg-white p-7 shadow-sm hover:shadow">
              <div class="text-lg font-semibold">Courses</div>
              <p class="mt-2 text-base text-slate-600">Short lessons that fit into your calendar.</p>
            </a>
            <a href="#" class="rounded-3xl border border-slate-200 bg-white p-7 shadow-sm hover:shadow">
              <div class="text-lg font-semibold">Creator highlights</div>
              <p class="mt-2 text-base text-slate-600">Smart posts from people who build things.</p>
            </a>
          </div>
        </div>
      </section>
    </main>

    <footer class="border-t border-slate-100">
      <div class="mx-auto max-w-7xl px-6 py-8 text-sm text-slate-500">
        © <span id="y"></span> Demo layout • Tailwind CDN • No forms included
      </div>
      <script>
        document.getElementById("y").textContent = new Date().getFullYear();
      </script>
    </footer>

</x-structure>
