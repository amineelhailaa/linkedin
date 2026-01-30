<x-structure title="Profile">
    <div class="max-w-4xl mx-auto py-12 px-6">
        <!-- Header Card -->
        <div class="bg-white border rounded-xl shadow-sm overflow-hidden">
            <!-- Cover -->
            <div class="h-32 bg-gradient-to-r from-blue-700 to-blue-500"></div>

            <div class="px-6 pb-6">
                <!-- Avatar + Main Info -->
                <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6 -mt-12">
                    <div class="flex items-end gap-4">
                        <img
                            src="{{ $user->pic_path ? asset('storage/'.$user->pic_path) : 'https://ui-avatars.com/api/?name='.urlencode($user->name) }}"
                            alt="Profile Picture"
                            class="w-28 h-28 rounded-full object-cover border-4 border-white shadow"
                        />

                        <div class="pb-1">
                            <h1 class="text-2xl font-semibold text-slate-900">
                                {{ $user->name }}
                            </h1>

                            @if(!empty($user->specialiste))
                                <p class="text-slate-600 mt-1">
                                    {{ $user->specialiste }}
                                </p>
                            @else
                                <p class="text-slate-500 mt-1 italic">
                                    No specialization provided
                                </p>
                            @endif

                            <p class="text-slate-500 text-sm mt-2">
                                {{ $user->email }}
                            </p>
                        </div>
                    </div>

                    <!-- Optional "Connect" buttons (UI only) -->
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

                <!-- Tabs-like row -->
                <div class="mt-6 border-t pt-4 flex gap-6 text-sm font-medium text-slate-600">
                    <span class="text-blue-700 border-b-2 border-blue-700 pb-2">About</span>
                    <span class="text-slate-500 pb-2">Contact</span>
                    <span class="text-slate-500 pb-2">Activity</span>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="mt-6 grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Left: About -->
            <div class="lg:col-span-2 space-y-6">
                <!-- About Card -->
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

                <!-- Info Card -->
                <div class="bg-white border rounded-xl shadow-sm p-6">
                    <h2 class="text-lg font-semibold text-slate-900">Profile details</h2>

                    <div class="mt-4 space-y-3 text-sm">
                        <div class="flex items-center justify-between border-b pb-3">
                            <span class="text-slate-500">Name</span>
                            <span class="text-slate-800 font-medium">{{ $user->name }}</span>
                        </div>

                        <div class="flex items-center justify-between border-b pb-3">
                            <span class="text-slate-500">Email</span>
                            <span class="text-slate-800 font-medium">{{ $user->email }}</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-slate-500">Specialization</span>
                            <span class="text-slate-800 font-medium">
                                {{ $user->specialiste ?? '—' }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Sidebar -->
            <div class="space-y-6">
                <!-- Contact Card -->
                <div class="bg-white border rounded-xl shadow-sm p-6">
                    <h2 class="text-lg font-semibold text-slate-900">Contact info</h2>

                    <div class="mt-4 text-sm space-y-3">
                        <div>
                            <p class="text-slate-500">Email</p>
                            <p class="text-slate-800 font-medium break-words">{{ $user->email }}</p>
                        </div>
                    </div>
                </div>

                <!-- Small “LinkedIn-ish” tips card (optional UI) -->
                <div class="bg-white border rounded-xl shadow-sm p-6">
                    <h2 class="text-lg font-semibold text-slate-900">Highlights</h2>
                    <div class="mt-3 text-sm text-slate-600 space-y-2">
                        <p>• Specialization: <span class="font-medium text-slate-800">{{ $user->specialiste ?? '—' }}</span></p>
                        <p>• Bio available: <span class="font-medium text-slate-800">{{ !empty($user->bio) ? 'Yes' : 'No' }}</span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back link -->
        <div class="mt-8">
            <a href="{{ url()->previous() }}" class="text-blue-700 hover:underline text-sm font-medium">
                ← Back
            </a>
        </div>
    </div>
</x-structure>
