<x-structure title="Offer Details">
    <div class="max-w-5xl mx-auto p-6 space-y-8">
        <div class="border rounded-xl p-4">
            <h1 class="text-2xl font-bold">{{ $offer->titre }}</h1>
            <p class="text-slate-600">{{ $offer->entreprise }}</p>

            <div class="mt-3 flex items-center gap-3 text-sm">
                <span class="px-3 py-1 rounded-full
                    {{ $offer->status === 'open' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                    {{ ucfirst($offer->status) }}
                </span>
                <span class="text-slate-500">{{ $offer->contrat }}</span>
            </div>

            <div class="mt-4">
                <h2 class="text-lg font-semibold">Description</h2>
                <p class="text-slate-700">{{ $offer->description }}</p>
            </div>
        </div>

        <div class="space-y-4">
            <h2 class="text-xl font-semibold">Applications</h2>

            @if ($applies->isEmpty())
                <p class="text-slate-500">No applications yet.</p>
            @else
                <div class="space-y-4">
                    @foreach ($applies as $application)
                        <div class="border rounded-xl p-4">
                            <div class="flex items-start gap-4 mb-3">
                                @if (!empty($application->candidatProfile?->user?->pic_path))
                                    <img
                                        src="{{ asset('storage/' . $application->candidatProfile->user->pic_path) }}"
                                        alt="Candidate photo"
                                        class="w-14 h-14 rounded-full object-cover"
                                    >
                                @else
                                    <div class="w-14 h-14 rounded-full bg-slate-200"></div>
                                @endif

                                <div>
                                    @if (!empty($application->candidatProfile?->user?->id))
                                        <a
                                            href="{{ route('discover', $application->candidatProfile->user->id) }}"
                                            class="font-semibold hover:text-slate-900"
                                        >
                                            {{ $application->candidatProfile->user->name ?? 'Candidate' }}
                                        </a>
                                    @else
                                        <span class="font-semibold">Candidate</span>
                                    @endif
                                    <p class="text-sm text-slate-600">
                                        {{ $application->candidatProfile->profile_title ?? '' }}
                                        @if (!empty($application->candidatProfile->specialite))
                                            - {{ $application->candidatProfile->specialite }}
                                        @endif
                                    </p>
                                    <p class="text-sm text-slate-500">
                                        {{ $application->candidatProfile->user->email ?? '' }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-3">
                                <form method="GET" action="{{ url('/offers/' . $application->id . '/accept') }}">
                                    @csrf
                                    <button type="submit" class="px-4 py-2 rounded-lg bg-green-600 text-white">
                                        Accept
                                    </button>
                                </form>

                                <form method="GET" action="{{ url('/offers/' . $application->id . '/decline') }}">
                                    @csrf
                                    <button type="submit" class="px-4 py-2 rounded-lg bg-red-600 text-white">
                                        Decline
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-structure>
