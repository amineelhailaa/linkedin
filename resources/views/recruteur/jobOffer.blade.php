<x-structure title='Job Offere '>

<div class="flex justify-center">
<form method="POST"  action=" {{route('jobCreate')}} "   enctype="multipart/form-data">
	@csrf
<h1>Create Job Offer</h1>

<div class="flex flex-col ">	
<label for="entreprise">Entreprise</label>
<input id="entreprise" type="text" name="entreprise">
</div>

<div class="flex flex-col  ">	
<label for="contrat">Contrat</label>
<input id="contrat" type="text" name="contrat">
</div>

<div class="flex flex-col  ">	
<label for="titre">titre</label>
<input id="titre" type="text" name="titre">
</div>

<div class="flex flex-col  ">	
<label for="description">description</label>
<input id="description" type="text" name="description">
</div>

<div class="flex flex-col ">	
<label for="image">image</label>
<input id="image" type="file" name="image">
</div>

<div class="py-4">
	<label for="status">Status</label>
	<select id="status" name="status">
		<option>Select an Option </option>
		<option value="open">Open</option>
		<option value="closed">Closed</option>
	</select>
</div>

<button type="submit" class="mt-4 bg-red-600 p-2 rounded-2xl text-white hover:bg-red-900">Create</button>

</form></div>




</x-structure>