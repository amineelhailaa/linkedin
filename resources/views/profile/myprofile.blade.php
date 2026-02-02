<x-structure title='My Profile'>
	<div class="max-w-3xl mx-auto py-12 px-6">
    <h2 class="text-3xl font-semibold mb-8">Edit Your Profile</h2>


    <!-- Profile update form -->
    <form action="{{route('myprofile/save')}}" method="POST" enctype="multipart/form-data" class="space-y-6">
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

        @if($user->type == 'candidat')

{{--            titre profile--}}
	        <div>
	            <label for="titre_profile" class="block font-medium mb-1">Profile Title</label>
	            <input type="text" name="titre_profile" id="titre_profile"
	                   class="w-full border rounded px-4 py-2 focus:outline-none focus:ring"
	                   value="{{ old('ok', $user->candidatProfile->titre_profile) }}">
	        </div>
{{--        specialite --}}
	            <div>
	                <label for="specialite" class="block font-medium mb-1">Specialization</label>
	                <input type="text" name="specialite" id="specialite"
	                       class="w-full border rounded px-4 py-2 focus:outline-none focus:ring"
	                       value="{{ old('specialite', $user->candidatProfile->specialite) }}">
	            </div>


            <!-- Formations -->

            <div class="space-y-3" id="formationsSection">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold">Formations</h3>
                    <button type="button" id="addFormation" class="text-sm font-semibold text-blue-700 hover:underline">Add more</button>

                </div>
        @forelse($user->candidatProfile->formation as $i => $formation )
                <div class="formation-item grid grid-cols-1 gap-3 rounded border p-3">
                    <div>
                        <label class="block font-medium mb-1">Diplome</label>
                        <input type="text" value="{{$formation->diplome}}" name="formations[{{$i}}][diplome]" class="w-full border rounded px-4 py-2 focus:outline-none focus:ring" placeholder="Diplome">
                    </div>
                    <div>
                        <label class="block font-medium mb-1">Ecole</label>
                        <input type="text" value="{{$formation->ecole}}" name="formations[{{$i}}][ecole]" class="w-full border rounded px-4 py-2 focus:outline-none focus:ring" placeholder="Ecole">
                    </div>
                    <div>
                        <label class="block font-medium mb-1">Year</label>
                        <input type="text" value="{{$formation->year}}" name="formations[{{$i}}][year]" class="w-full border rounded px-4 py-2 focus:outline-none focus:ring" placeholder="Year">
                    </div>
                </div>
                    @empty
                        <div class="formation-item grid grid-cols-1 gap-3 rounded border p-3">
                            <div>
                                <label class="block font-medium mb-1">Diplome</label>
                                <input type="text" name="formations[][diplome]" class="w-full border rounded px-4 py-2 focus:outline-none focus:ring" placeholder="Diplome">
                            </div>
                            <div>
                                <label class="block font-medium mb-1">Ecole</label>
                                <input type="text"  name="formations[0][ecole]" class="w-full border rounded px-4 py-2 focus:outline-none focus:ring" placeholder="Ecole">
                            </div>
                            <div>
                                <label class="block font-medium mb-1">Year</label>
                                <input type="text" name="formations[0][year]" class="w-full border rounded px-4 py-2 focus:outline-none focus:ring" placeholder="Year">
                            </div>
                        </div>

                    @endforelse
            </div>

	        <!-- Experiences -->
	        <div class="space-y-3" id="experiencesSection">
	            <div class="flex items-center justify-between">
	                <h3 class="text-lg font-semibold">Experiences</h3>
	                <button type="button" id="addExperience" class="text-sm font-semibold text-blue-700 hover:underline">Add more</button>
	            </div>

                @forelse($user->candidatProfile->experience as $id => $experience)
	            <div class="experience-item grid grid-cols-1 gap-3 rounded border p-3">
	                <div>
	                    <label class="block font-medium mb-1">Entreprise</label>
	                    <input type="text" value="{{$experience->entreprise}}" name="experiences[{{$id}}][entreprise]" class="w-full border rounded px-4 py-2 focus:outline-none focus:ring" placeholder="Entreprise">
	                </div>
	                <div>
	                    <label class="block font-medium mb-1">Duree</label>
	                    <input type="text" value="{{$experience->duree}}" name="experiences[{{$id}}][duree]" class="w-full border rounded px-4 py-2 focus:outline-none focus:ring" placeholder="Duree">
	                </div>
	            </div>
                    @empty
                        <div class="experience-item grid grid-cols-1 gap-3 rounded border p-3">
                            <div>
                                <label class="block font-medium mb-1">Entreprise</label>
                                <input type="text" value="" name="experiences[0][entreprise]" class="w-full border rounded px-4 py-2 focus:outline-none focus:ring" placeholder="Entreprise">
                            </div>
                            <div>
                                <label class="block font-medium mb-1">Duree</label>
                                <input type="text" value="" name="experiences[0][duree]" class="w-full border rounded px-4 py-2 focus:outline-none focus:ring" placeholder="Duree">
                            </div>
                        </div>
                    @endforelse
	        </div>

	        <!-- Competences -->
	        <div class="space-y-3" id="competencesSection">
	            <div class="flex items-center justify-between">
	                <h3 class="text-lg font-semibold">Competences</h3>
	                <button type="button" id="addCompetence" class="text-sm font-semibold text-blue-700 hover:underline">Add more</button>
	            </div>
                @forelse($user->candidatProfile->competence as $i=>$competence)
	            <div class="competence-item grid grid-cols-1 gap-3 rounded border p-3">
	                <div>
	                    <label class="block font-medium mb-1">Titre</label>
	                    <input type="text" value="{{$competence->titre}}" name="competences[{{$i}}][titre]" class="w-full border rounded px-4 py-2 focus:outline-none focus:ring" placeholder="Titre">
	                </div>
	            </div>
                @empty
                    <div class="competence-item grid grid-cols-1 gap-3 rounded border p-3">
                        <div>
                            <label class="block font-medium mb-1">Titre</label>
                            <input type="text" value="" name="competences[0][titre]" class="w-full border rounded px-4 py-2 focus:outline-none focus:ring" placeholder="Titre">
                        </div>
                    </div>
                @endforelse
	        </div>

        @endif



        @if($user->type == 'recruteur')
            <div>
                <label for="entreprise" class="block font-medium mb-1">Company</label>
                <input type="text" name="entreprise" id="entreprise"
                       class="w-full border rounded px-4 py-2 focus:outline-none focus:ring"
                       value="{{ old('specialiste', $user->recruteurProfile->entreprise) }}">
            </div>
        @endif



        <!-- Bio -->
        <div>
            <label for="bio" class="block font-medium mb-1">Bio</label>
            <textarea name="bio" id="bio" rows="4"
                      class="w-full border rounded px-4 py-2 focus:outline-none focus:ring">{{ old('bio', $user->bio) }}</textarea>
        </div>
        <div class="pt-4">
            <button type="submit"
                    class="bg-blue-700 hover:bg-blue-800 text-white font-medium py-2 px-6 rounded">
                Save Changes
            </button>
        </div>
    </form>
        <form class="pt-16" action="{{route('password.update')}}" method="POST">
        <!-- Old Password -->
        @csrf
        @method('PUT')
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
                Save Password
            </button>
        </div>
    </form>
</div>

<script>
    const cloneItem = (containerId, itemClass) => {
        const container = document.getElementById(containerId);
        if (!container) return;
        const items = container.querySelectorAll(`.${itemClass}`);
        if (!items.length) return;
        const newIndex = items.length;
        const newItem = items[0].cloneNode(true);
        newItem.querySelectorAll("input").forEach((input) => {
            input.value = "";
            input.name = input.name.replace(/\[\d+\]/, `[${newIndex}]`);
        });
        container.appendChild(newItem);
    };

    const addFormation = document.getElementById("addFormation");
    if (addFormation) {
        addFormation.addEventListener("click", () => {
            cloneItem("formationsSection", "formation-item");
        });
    }

    const addExperience = document.getElementById("addExperience");
    if (addExperience) {
        addExperience.addEventListener("click", () => {
            cloneItem("experiencesSection", "experience-item");
        });
    }

    const addCompetence = document.getElementById("addCompetence");
    if (addCompetence) {
        addCompetence.addEventListener("click", () => {
            cloneItem("competencesSection", "competence-item");
        });
    }
</script>

</x-structure>
