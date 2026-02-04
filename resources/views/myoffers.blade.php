<x-structure title="My Job Offers">
    <div class="max-w-6xl mx-auto p-6">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold">My Job Offers</h1>
            <a
                href="{{ url('/create_offer') }}"
                class="inline-flex items-center rounded-xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white hover:bg-slate-800"
            >
                Create Offer
            </a>
        </div>

        @if ($offers->isEmpty())
            <div class="rounded-xl border border-dashed p-8 text-center text-gray-500">
                You haven't created any offers yet.
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($offers as $offer)
                    <div class="border rounded-xl p-4 shadow hover:shadow-lg transition">
                        @if ($offer->image && $offer->image !== 'no image')
                            <img
                                src="{{ asset('storage/' . $offer->image) }}"
                                alt="Job image"
                                class="w-full h-40 object-cover rounded-lg mb-4"
                            >
                        @endif

                        <h2 class="text-xl font-semibold">
                            <a
                                href="{{ route('offer_detail', $offer->id) }}"
                                class="hover:text-slate-900"
                            >
                                {{ $offer->titre }}
                            </a>
                        </h2>

                        <p class="text-sm text-gray-600 mt-1">
                            {{ $offer->entreprise }}
                        </p>

                        <p class="mt-2 text-gray-700">
                            {{ $offer->description }}
                        </p>

                        <div class="mt-4">
                            <a
                                href="{{ route('offer_detail', $offer->id) }}"
                                class="text-sm font-semibold text-slate-700 hover:text-slate-900"
                            >
                                View details &rarr;
                            </a>
                        </div>

                        <div class="mt-3 flex justify-between items-center text-sm">
                            <span class="px-3 py-1 rounded-full
                                {{ $offer->status === 'open' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                {{ ucfirst($offer->status) }}
                            </span>

                            <span class="text-gray-500">
                                {{ $offer->contrat }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-structure>
