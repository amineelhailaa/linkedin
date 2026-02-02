<x-structure title="Candidat Profile">
    <div class="max-w-5xl mx-auto py-12 px-6 space-y-6">
        <div class="bg-white border rounded-xl shadow-sm overflow-hidden">
            <div class="h-36 bg-gradient-to-r from-blue-700 to-blue-500"></div>
            <div class="px-6 pb-6">
                <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6 -mt-12">
                    <div class="flex items-end gap-4">
                        <img
                            src="{{ $user->pic_path ? asset('storage/'.$user->pic_path) : 'https://ui-avatars.com/api/?name='.urlencode($user->name) }}"
                            alt="Profile Picture"
                            class="w-28 h-28 rounded-full object-cover border-4 border-white shadow"
                        />

                        <div class="pb-1">
                            <h1 class="text-2xl font-semibold text-slate-900">{{ $user->name }}</h1>
                            <p class="text-slate-600 mt-1">
                                {{ $user->candidatProfile->profile_title ?? 'Profile title not set' }}
                            </p>
                            <p class="text-slate-500 text-sm mt-2">{{ $user->email }}</p>
                        </div>
                    </div>

                    <div class="flex gap-2 sm:pb-2">
                        <button
                            type="button"
                            class="px-4 py-2 rounded-full bg-blue-700 hover:bg-blue-800 text-white text-sm font-medium"
                        >
                            Connect
                        </button>
                        <button
                            type="button"
                            class="px-4 py-2 rounded-full border border-slate-300 hover:bg-slate-50 text-slate-700 text-sm font-medium"
                        >
                            Message
                        </button>
                    </div>
                </div>

                <div class="mt-6 border-t pt-4 flex gap-6 text-sm font-medium text-slate-600">
                    <span class="text-blue-700 border-b-2 border-blue-700 pb-2">Overview</span>
                    <span class="text-slate-500 pb-2">Experience</span>
                    <span class="text-slate-500 pb-2">Education</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white border rounded-xl shadow-sm p-6">
                    <h2 class="text-lg font-semibold text-slate-900">About</h2>
                    <div class="mt-3 text-slate-700 leading-relaxed whitespace-pre-line">
                        @if(!empty($user->bio))
                            {{ $user->bio }}
                        @else
                            <p class="text-slate-500 italic">No bio provided.</p>
                        @endif
                    </div>
                </div>

                <div class="bg-white border rounded-xl shadow-sm p-6">
                    <h2 class="text-lg font-semibold text-slate-900">Experiences</h2>
                    <div class="mt-4 space-y-4">
                        @forelse($user->candidatProfile->experience as $experience)
                            <div class="rounded-lg border p-4">
                                <div class="flex items-center justify-between">
                                    <div class="font-semibold text-slate-900">{{ $experience->entreprise }}</div>
                                    <div class="text-xs text-slate-500">{{ $experience->duree }}</div>
                                </div>
                            </div>
                        @empty
                            <p class="text-slate-500 italic">No experience added.</p>
                        @endforelse
                    </div>
                </div>

                <div class="bg-white border rounded-xl shadow-sm p-6">
                    <h2 class="text-lg font-semibold text-slate-900">Formations</h2>
                    <div class="mt-4 space-y-4">
                        @forelse($user->candidatProfile->formation as $formation)
                            <div class="rounded-lg border p-4">
                                <div class="font-semibold text-slate-900">{{ $formation->diplome }}</div>
                                <div class="text-sm text-slate-600">{{ $formation->ecole }}</div>
                                <div class="text-xs text-slate-500 mt-1">{{ $formation->year }}</div>
                            </div>
                        @empty
                            <p class="text-slate-500 italic">No formation added.</p>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-white border rounded-xl shadow-sm p-6">
                    <h2 class="text-lg font-semibold text-slate-900">Profile details</h2>
                    <div class="mt-4 space-y-3 text-sm">
                        <div class="flex items-center justify-between border-b pb-3">
                            <span class="text-slate-500">Specialite</span>
                            <span class="text-slate-800 font-medium">
                                {{ $user->candidatProfile->specialite ?? '—' }}
                            </span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-slate-500">Email</span>
                            <span class="text-slate-800 font-medium">{{ $user->email }}</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white border rounded-xl shadow-sm p-6">
                    <h2 class="text-lg font-semibold text-slate-900">Competences</h2>
                    <div class="mt-4 flex flex-wrap gap-2">
                        @forelse($user->candidatProfile->competence as $competence)
                            <span class="rounded-full border px-3 py-1 text-xs font-semibold text-slate-700">
                                {{ $competence->titre }}
                            </span>
                        @empty
                            <p class="text-slate-500 italic">No competences listed.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <a href="{{ url()->previous() }}" class="text-blue-700 hover:underline text-sm font-medium">
                ← Back
            </a>
        </div>
    </div>
</x-structure>
