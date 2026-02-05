<x-structure title="Job Offers">

    <div class="max-w-6xl mx-auto p-6">

        <div class="flex flex-col gap-4 mb-6 md:flex-row md:items-center md:justify-between">
            <h1 class="text-2xl font-bold">Job Offers</h1>
            <form method="GET" action="">
                <input
                    type="search"
                    name="keyword"
                    value="{{ request('query') }}"
                    placeholder="Search offers..."
                    class="w-full md:w-64 rounded-xl border border-slate-200 px-4 py-2 text-sm focus:border-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-200"
                >
            </form>
        </div>

        @if ($jobs->isEmpty())
            <p class="text-gray-500">No job offers available.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach ($jobs as $job)
                    <div class="border rounded-xl p-4 shadow hover:shadow-lg transition">

                        @if ($job->image)
                            <img
                                src="{{ asset('storage/' . $job->image) }}"
                                alt="Job image"
                                class="w-full h-40 object-cover rounded-lg mb-4"
                            >
                        @endif

                        <h2 class="text-xl font-semibold">
                            {{ $job->titre }}
                        </h2>

                        <p class="text-sm text-gray-600 mt-1">
                            {{ $job->entreprise }}
                        </p>

                        <p class="mt-2 text-gray-700">
                            {{ $job->description }}
                        </p>

                        <div class="mt-3 flex justify-between items-center text-sm">
                            <span class="px-3 py-1 rounded-full
                                {{ $job->status === 'open' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                {{ ucfirst($job->status) }}
                            </span>

                            <span class="text-gray-500">
                                {{ $job->contrat }}
                            </span>
                        </div>
                        <div class="mt-4">
                            <a
                                href="{{ route('offer_detail', $job->id) }}"
                                class="text-sm font-semibold text-slate-700 hover:text-slate-900"
                            >
                                View details &rarr;
                            </a>
                        </div>

                    </div>
                @endforeach

            </div>
        @endif

    </div>

</x-structure>
