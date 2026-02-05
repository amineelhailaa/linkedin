<x-structure title="Invitations">
    <div class="max-w-5xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Invitations</h1>

        @if ($invitations->isEmpty())
            <p class="text-gray-500">No invitations yet.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($invitations as $invitation)
                    <div class="border rounded-xl p-4 shadow">
                        <div class="flex items-start gap-4">
                            @if ($invitation->sender && $invitation->sender->pic_path)
                                <img
                                    src="{{ asset('storage/' . $invitation->sender->pic_path) }}"
                                    alt="Profile image"
                                    class="w-16 h-16 rounded-full object-cover"
                                >
                            @else
                                <div class="w-16 h-16 rounded-full bg-slate-200"></div>
                            @endif

                            <div class="flex-1">
                                <h2 class="text-lg font-semibold">
                                    {{ $invitation->sender?->name ?? 'Unknown user' }}
                                </h2>
                                <p class="text-sm text-gray-600">
                                    {{ $invitation->sender?->email ?? 'No email' }}
                                </p>
                                @if ($invitation->sender?->bio)
                                    <p class="mt-2 text-sm text-gray-700">
                                        {{ $invitation->sender->bio }}
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="mt-4 flex gap-3">
                            <form method="POST" action="/invitations/{{ $invitation->id }}/accept">
                                @csrf
                                @method('PATCH')
                                <button
                                    type="submit"
                                    class="inline-flex items-center rounded-xl bg-green-600 px-4 py-2 text-sm font-semibold text-white hover:bg-green-700"
                                >
                                    Accept
                                </button>
                            </form>
                            <form method="POST" action="/invitations/{{ $invitation->id }}/decline">
                                @csrf
                                @method('PATCH')
                                <button
                                    type="submit"
                                    class="inline-flex items-center rounded-xl bg-red-600 px-4 py-2 text-sm font-semibold text-white hover:bg-red-700"
                                >
                                    Decline
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-structure>
