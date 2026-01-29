<x-structure title='My Profile'>
	<div class="max-w-3xl mx-auto py-12 px-6">
    <h2 class="text-3xl font-semibold mb-8">Edit Your Profile</h2>


    <!-- Profile update form -->
    <form action="{{route('myprofile')}}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PATCH')



    <!-- Profile picture section -->
    <div class="flex items-center space-x-4 mb-10">
        <img src="{{ asset('storage/'.$user->pic_path) }}" alt="Profile Picture"
             class="w-24 h-24 rounded-full object-cover border shadow">
        <div>
            <label class="block mb-1 font-medium text-gray-700">Update Profile Picture</label>
            <input type="file" name="pic_path"
                   class="block w-full text-sm text-gray-500
                          file:mr-4 file:py-2 file:px-4
                          file:rounded file:border-0
                          file:text-sm file:font-semibold
                          file:bg-blue-50 file:text-blue-700
                          hover:file:bg-blue-100" />
        </div>
    </div>




        <!-- Name -->
        <div>
            <label for="name" class="block font-medium mb-1">Name</label>
            <input type="text" name="name" id="name"
                   class="w-full border rounded px-4 py-2 focus:outline-none focus:ring"
                   value="{{ old('name', $user->name) }}" required>
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block font-medium mb-1">Email</label>
            <input type="email" name="email" id="email"
                   class="w-full border rounded px-4 py-2 focus:outline-none focus:ring"
                   value="{{ old('email', $user->email) }}" required>
        </div>

        <!-- Specialiste -->
        <div>
            <label for="specialiste" class="block font-medium mb-1">Specialization</label>
            <input type="text" name="specialiste" id="specialiste"
                   class="w-full border rounded px-4 py-2 focus:outline-none focus:ring"
                   value="{{ old('specialiste', $user->specialiste) }}">
        </div>

        <!-- Bio -->
        <div>
            <label for="bio" class="block font-medium mb-1">Bio</label>
            <textarea name="bio" id="bio" rows="4"
                      class="w-full border rounded px-4 py-2 focus:outline-none focus:ring">
                      {{ old('bio', $user->bio) }}</textarea>
        </div>

        <!-- Old Password -->
        <div>
            <label for="old_password" class="block font-medium mb-1">Current Password</label>
            <input type="password" name="old_password" id="old_password"
                   class="w-full border rounded px-4 py-2 focus:outline-none focus:ring" autocomplete="current-password">
        </div>

        <!-- New Password -->
        <div>
            <label for="password" class="block font-medium mb-1">New Password</label>
            <input type="password" name="password" id="password"
                   class="w-full border rounded px-4 py-2 focus:outline-none focus:ring" autocomplete="new-password">
        </div>
        <!-- confirmed password -->
        <div>
            <label for="password_confirmation" class="block font-medium mb-1">New Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                   class="w-full border rounded px-4 py-2 focus:outline-none focus:ring" autocomplete="password_confirmation">
        </div>

        <!-- Submit -->
        <div class="pt-4">
            <button type="submit"
                    class="bg-blue-700 hover:bg-blue-800 text-white font-medium py-2 px-6 rounded">
                Save Changes
            </button>
        </div>
    </form>
</div>

</x-structure>