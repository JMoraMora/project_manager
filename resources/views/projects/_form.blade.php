<div class="mb-6">
    <label for="name" class="block mb-2 text-sm font-medium">Nombre</label>
    <input type="text" id="name" name="name" value="@isset($project) {{ $project->name }} @endisset" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 ">
</div>
<div class="mb-6">
    <label for="budget" class="block mb-2 text-sm font-medium">Presupuesto</label>
    <input type="text" id="budget" name="budget" value="@isset($project) {{ $project->budget }} @endisset" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 ">
</div>

<button type="submit" class="uppercase text-white bg-yellow-500 hover:bg-yellow-600 font-bold rounded-lg text-xs px-5 py-2.5">Submit</submit>