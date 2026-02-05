<x-structure title="Friends">
    <div class="max-w-5xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Friends</h1>

        @if ($friends->isEmpty())
            <p class="text-gray-500">No accepted friendships yet.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($friends as $friendship)
                    <div class="border rounded-xl p-4 shadow">
                        <div class="flex items-start gap-4">
                            @if ($friendship->sender && $friendship->sender->pic_path)
                                <img
                                    src="{{ asset('storage/' . $friendship->sender->pic_path) }}"
                                    alt="Sender image"
                                    class="w-12 h-12 rounded-full object-cover"
                                >
                            @else
                                <div class="w-12 h-12 rounded-full bg-slate-200"></div>
                            @endif

                            <div>
                                <p class="text-sm text-gray-500">Sender</p>
                                <p class="font-semibold">
                                    {{ $friendship->sender?->name ?? 'Unknown user' }}
                                </p>
                                <p class="text-sm text-gray-600">
                                    {{ $friendship->sender?->email ?? 'No email' }}
                                </p>
                            </div>
                        </div>

                        <div class="mt-4 flex items-start gap-4">
                            @if ($friendship->receiver && $friendship->receiver->pic_path)
                                <img
                                    src="{{ asset('storage/' . $friendship->receiver->pic_path) }}"
                                    alt="Receiver image"
                                    class="w-12 h-12 rounded-full object-cover"
                                >
                            @else
                                <div class="w-12 h-12 rounded-full bg-slate-200"></div>
                            @endif

                            <div>
                                <p class="text-sm text-gray-500">Receiver</p>
                                <p class="font-semibold">
                                    {{ $friendship->receiver?->name ?? 'Unknown user' }}
                                </p>
                                <p class="text-sm text-gray-600">
                                    {{ $friendship->receiver?->email ?? 'No email' }}
                                </p>
                            </div>
                        </div>

                        <div class="mt-4 text-sm text-green-700 bg-green-100 inline-block px-3 py-1 rounded-full">
                            {{ ucfirst($friendship->status) }}
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-structure>
