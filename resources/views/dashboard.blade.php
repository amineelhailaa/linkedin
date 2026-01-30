<x-structure title='Accueil'>
  <div class="min-h-screen bg-[#f3f2ef] origin-top [transform:scale(1.5)]">

    {{-- Top navbar --}}
    <header class="sticky top-0 z-50 border-b border-black/10 bg-white">
      <div class="mx-auto flex h-14 max-w-6xl items-center gap-4 px-4">
        {{-- Left: logo + search --}}
        <div class="flex items-center gap-3">
          <a href="#" class="grid h-9 w-9 place-items-center rounded bg-[#0A66C2] text-white font-black">in</a>

          <form method="GET" action="{{ route('dashboard')}}" class="hidden sm:block">
            <div class="flex items-center gap-2 rounded-md bg-[#eef3f8] px-3 py-2">
              <svg class="h-4 w-4 text-slate-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 21l-4.3-4.3" />
                <circle cx="11" cy="11" r="7" />
              </svg>

              <select
                name="type"
                class="bg-transparent text-sm text-slate-700 outline-none"
              >
                <option value="name" {{ request('type','name') === 'name' ? 'selected' : '' }}>Name</option>
                <option value="specialiste" {{ request('type') === 'specialiste' ? 'selected' : '' }}>Specialiste</option>
              </select>

              <span class="h-5 w-px bg-slate-300/70"></span>

              <input
                name="q"
                value=""
                class="w-56 bg-transparent text-sm text-slate-800 placeholder:text-slate-500 outline-none"
                placeholder="Recherche..."
              />

              <button
                type="submit"
                class="rounded-md bg-white/60 px-2 py-1 text-xs font-semibold text-slate-700 hover:bg-white"
              >
                OK
              </button>
            </div>
          </form>
        </div>

        {{-- Center: nav icons --}}
        <nav class="ml-auto flex items-center gap-2 sm:gap-4">
          <a href="#" class="group flex w-16 flex-col items-center justify-center gap-1 text-[11px] text-slate-600 hover:text-slate-900">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 3l9 7v11a1 1 0 0 1-1 1h-5v-7H9v7H4a1 1 0 0 1-1-1V10l9-7z"/></svg>
            <span>Accueil</span>
          </a>

          <a href="#" class="group relative flex w-16 flex-col items-center justify-center gap-1 text-[11px] text-slate-900">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M16 11a4 4 0 1 0-8 0v2H6a2 2 0 0 0-2 2v3h16v-3a2 2 0 0 0-2-2h-2v-2z"/></svg>
            <span>Mon réseau</span>
            <span class="absolute -bottom-[1px] left-1/2 h-[2px] w-10 -translate-x-1/2 bg-slate-900"></span>
          </a>

          <a href="#" class="group flex w-16 flex-col items-center justify-center gap-1 text-[11px] text-slate-600 hover:text-slate-900">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M3 7h18v13H3z"/><path d="M7 7V5a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2" fill="currentColor"/></svg>
            <span>Emplois</span>
          </a>

          <a href="#" class="group flex w-16 flex-col items-center justify-center gap-1 text-[11px] text-slate-600 hover:text-slate-900">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/></svg>
            <span>Messagerie</span>
          </a>

          <a href="#" class="group relative flex w-16 flex-col items-center justify-center gap-1 text-[11px] text-slate-600 hover:text-slate-900">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22a2 2 0 0 0 2-2H10a2 2 0 0 0 2 2z"/><path d="M18 16v-5a6 6 0 1 0-12 0v5l-2 2h16l-2-2z"/></svg>
            <span>Notifications</span>
            <span class="absolute right-5 top-1.5 grid h-4 min-w-[16px] place-items-center rounded-full bg-red-600 px-1 text-[10px] font-bold text-white">5</span>
          </a>

          <a href="{{ route('myprofile') }}" class="group hidden md:flex w-16 flex-col items-center justify-center gap-1 text-[11px] text-slate-600 hover:text-slate-900">
            <span class="h-5 w-5 rounded-full bg-slate-300"></span>
            <span>Vous</span>
          </a>

          <div class="hidden lg:block h-9 w-px bg-slate-200"></div>

          <a href="#" class="hidden lg:flex w-20 flex-col items-center justify-center gap-1 text-[11px] text-slate-600 hover:text-slate-900">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h7v7H4zM13 4h7v7h-7zM4 13h7v7H4zM13 13h7v7h-7z"/></svg>
            <span>Pour les entreprises</span>
          </a>

          <a href="#" class="hidden lg:flex w-24 flex-col items-center justify-center gap-1 text-[11px] text-slate-600 hover:text-slate-900">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 3l9 5-9 5-9-5 9-5zm0 9l9-5v10l-9 5-9-5V7l9 5z"/></svg>
            <span>LinkedIn Learning</span>
          </a>
        </nav>
      </div>
    </header>

    {{-- Content --}}
    <main class="mx-auto max-w-6xl px-4 py-6">
      <div class="grid grid-cols-12 gap-6">
        {{-- Left sidebar --}}
        <aside class="col-span-12 md:col-span-4 lg:col-span-3">
          {{-- ... (UNCHANGED sidebar) ... --}}
          {{-- keep your sidebar exactly as is --}}
          <div class="rounded-lg border border-black/10 bg-white">
            <div class="border-b border-black/10 px-4 py-3">
              <h2 class="text-base font-semibold text-slate-800">Gérer mon réseau</h2>
            </div>

            <ul class="divide-y divide-black/5">
              {{-- ... unchanged items ... --}}
              <li class="flex items-center justify-between px-4 py-3 text-sm text-slate-700">
                <span class="flex items-center gap-3">
                  <span class="grid h-8 w-8 place-items-center rounded-md bg-slate-50">
                    <svg class="h-4 w-4 text-slate-600" viewBox="0 0 24 24" fill="currentColor"><path d="M16 11a4 4 0 1 0-8 0v2H6a2 2 0 0 0-2 2v3h16v-3a2 2 0 0 0-2-2h-2v-2z"/></svg>
                  </span>
                  Relations
                </span>
                <span class="text-slate-500">68</span>
              </li>
              {{-- ... rest unchanged ... --}}
            </ul>
          </div>

          <div class="mt-4 text-xs text-slate-500">
            <div class="flex flex-wrap gap-x-3 gap-y-2">
              <a href="#" class="hover:underline">À propos</a>
              <a href="#" class="hover:underline">Accessibilité</a>
              <a href="#" class="hover:underline">Assistance clientèle</a>
              <a href="#" class="hover:underline">Conditions générales</a>
              <a href="#" class="hover:underline">Confidentialité</a>
              <a href="#" class="hover:underline">Publicité</a>
              <a href="#" class="hover:underline">Plus</a>
            </div>
            <div class="mt-3 text-slate-400">LinkedIn Corporation © 2026</div>
          </div>
        </aside>

        {{-- Main --}}
        <section class="col-span-12 md:col-span-8 lg:col-span-9">

          {{-- ✅ Mobile search (since navbar search is hidden on small screens) --}}
          <form method="GET" action="{{ route('dashboard')}}" class="mb-4 sm:hidden">
            <div class="rounded-lg border border-black/10 bg-white p-3">
              <div class="flex gap-2">
                <select name="type" class="w-40 rounded-md border border-black/10 bg-white px-3 py-2 text-sm outline-none">
                  <option value="name" {{ request('type','name') === 'name' ? 'selected' : '' }}>Name</option>
                  <option value="specialiste" {{ request('type') === 'specialiste' ? 'selected' : '' }}>Specialiste</option>
                </select>

                <input
                  name="query"
                  value=""
                  class="flex-1 rounded-md border border-black/10 bg-[#eef3f8] px-3 py-2 text-sm outline-none"
                  placeholder="Recherche..."
                />
              </div>

              <button type="submit" class="mt-2 w-full rounded-md bg-[#0A66C2] px-3 py-2 text-sm font-semibold text-white">
                Search
              </button>
            </div>
          </form>

          <div class="rounded-lg border border-black/10 bg-white">
            <div class="px-4 py-3">
              <div class="flex items-center justify-between gap-4">
                <h2 class="text-sm font-semibold text-slate-800">
                  Personnes que vous connaissez peut-être dans la Rabat et périphérie
                </h2>
                <a href="{{ url()->current() }}" class="text-sm font-semibold text-slate-700 hover:underline">Tout afficher</a>
              </div>

              {{-- ✅ show search type + keyword (no JS, no ajax) --}}
              @php
                $mode = request('type','name');
                $keyword = request('q');
                $resultCount = method_exists($users, 'total') ? $users->total() : $users->count();
              @endphp

              <div class="mt-2 flex flex-wrap items-center gap-2 text-xs text-slate-500">
                <span class="rounded-full bg-slate-100 px-2 py-1">
                  Mode: <span class="font-semibold text-slate-700">{{ $mode }}</span>
                </span>
                <span class="rounded-full bg-slate-100 px-2 py-1">
                  Mot-clé: <span class="font-semibold text-slate-700">{{ $keyword ? $keyword : '(empty)' }}</span>
                </span>
                <span class="ml-auto">
                  Résultats: <span class="font-semibold text-slate-700">{{ $resultCount }}</span>
                </span>
              </div>
            </div>

            <div class="p-4">
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">

                @forelse ($users as $user)
                  <article class="relative overflow-hidden rounded-lg border border-black/10 bg-white">
                    <button type="button" class="absolute right-2 top-2 grid h-8 w-8 place-items-center rounded-full bg-black/70 text-white hover:bg-black">
                      <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 6 6 18M6 6l12 12" />
                      </svg>
                    </button>

                    <div class="h-16 bg-gradient-to-r from-slate-800 via-slate-600 to-slate-400"></div>

                    <div class="-mt-10 flex justify-center">
                      <div class="h-20 w-20 overflow-hidden rounded-full border-4 border-white bg-slate-200">
                        <img src="{{ asset('storage/'.$user->pic_path) }}" alt="{{ $user->name }}" class="h-full w-full object-cover">
                      </div>
                    </div>

                    <div class="px-4 pb-4 pt-2 text-center"><a href="{{route('discover',$user->id)}}">
                      <h3 class="mt-1 text-sm font-semibold text-slate-900">{{ $user->name }}</h3></a>
                      <p class="mt-0.5 text-xs text-slate-600">{{ $user->bio }}</p>

                      <div class="mt-3 flex items-center justify-center gap-2 text-xs text-slate-500">
                        <div class="flex -space-x-2">
                          <span class="h-6 w-6 rounded-full border-2 border-white bg-slate-300"></span>
                          <span class="h-6 w-6 rounded-full border-2 border-white bg-slate-300"></span>
                        </div>
                        <span>Youness et 4 autres relations en commun</span>
                      </div>

                      <button
                        type="button"
                        class="mt-4 inline-flex w-full items-center justify-center gap-2 rounded-full border border-[#0A66C2] px-3 py-2 text-sm font-semibold text-[#0A66C2] hover:bg-[#0A66C2]/5"
                      >
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                          <path d="M15 12a4 4 0 1 0-8 0v2H5a2 2 0 0 0-2 2v3h16v-3a2 2 0 0 0-2-2h-2v-2z"/>
                        </svg>
                        Se connecter
                      </button>
                    </div>
                  </article>
                @empty
                  <div class="col-span-full rounded-lg border border-dashed border-black/20 bg-white p-8 text-center">
                    <div class="text-sm font-semibold text-slate-800">Aucun résultat</div>
                    <div class="mt-1 text-xs text-slate-500">
                      Essayez un autre mot-clé (Mode: {{ $mode }}, Mot-clé: {{ $keyword ? $keyword : '(empty)' }}).
                    </div>
                  </div>
                @endforelse

              </div>
            </div>
          </div>
        </section>
      </div>
    </main>

    {{-- Floating message pill --}}
    <div class="fixed bottom-4 right-4 z-40 hidden sm:block">
      <button type="button" class="flex items-center gap-3 rounded-lg border border-black/10 bg-white px-4 py-3 shadow-lg">
        <span class="h-8 w-8 rounded-full bg-slate-300"></span>
        <span class="text-sm font-semibold text-slate-800">Messagerie</span>
      </button>
    </div>
  </div>
</x-structure>
