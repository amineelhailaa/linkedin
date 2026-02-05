<x-structure title="My Applications">
    <div class="max-w-6xl mx-auto p-6">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold">My Applications</h1>
        </div>

        @if ($myApp->isEmpty())
            <div class="rounded-xl border border-dashed p-8 text-center text-gray-500">
                You haven't applied to any offers yet.
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($myApp as $application)
                    <div class="border rounded-xl p-4 shadow hover:shadow-lg transition">
                        @if ($application->jobOffer?->image && $application->jobOffer->image !== 'no image')
                            <img
                                src="{{ asset('storage/' . $application->jobOffer->image) }}"
                                alt="Job image"
                                class="w-full h-40 object-cover rounded-lg mb-4"
                            >
                        @endif

                        <h2 class="text-xl font-semibold">
                            {{ $application->jobOffer?->titre ?? 'Offer not available' }}
                        </h2>

                        <p class="text-sm text-gray-600 mt-1">
                            {{ $application->jobOffer?->entreprise ?? 'Unknown company' }}
                        </p>

                        <div class="mt-3 flex justify-between items-center text-sm">
                            <span class="px-3 py-1 rounded-full
                                {{ $application->status === 'accepted' ? 'bg-green-100 text-green-700' : '' }}
                                {{ $application->status === 'declined' ? 'bg-red-100 text-red-700' : '' }}
                                {{ $application->status !== 'accepted' && $application->status !== 'declined' ? 'bg-slate-100 text-slate-700' : '' }}">
                                {{ ucfirst($application->status ?? 'pending') }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-structure>
