<x-structure title="Offer Details">
    <div class="max-w-5xl mx-auto p-6">
        <a href="{{ route('myoffers') }}" class="text-sm text-slate-600 hover:text-slate-900">back
        </a>

        <div class="mt-4 grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
                @if ($offer->image && $offer->image !== 'no image')
                    <img
                        src="{{ asset('storage/' . $offer->image) }}"
                        alt="Job image"
                        class="w-full h-64 object-cover rounded-2xl"
                    >
                @else
                    <div class="w-full h-64 rounded-2xl bg-slate-100 flex items-center justify-center text-slate-500">
                        No image
                    </div>
                @endif
            </div>

            <div class="space-y-4">
                <div>
                    <h1 class="text-3xl font-bold">{{ $offer->titre }}</h1>
                    <p class="text-slate-600 mt-1">{{ $offer->entreprise }}</p>
                </div>

                <div class="flex items-center gap-3 text-sm">
                    <span class="px-3 py-1 rounded-full
                        {{ $offer->status === 'open' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                        {{ ucfirst($offer->status) }}
                    </span>
                    <span class="text-slate-500">{{ $offer->contrat }}</span>
                </div>

                <div class="border-t pt-4">
                    <h2 class="text-lg font-semibold mb-2">Description</h2>
                    <p class="text-slate-700 leading-relaxed">{{ $offer->description }}</p>
                </div>
                <button>Apply</button>
            </div>
        </div>
    </div>
</x-structure>
