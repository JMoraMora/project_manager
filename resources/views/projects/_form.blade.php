<div class="mb-6">
    <label for="name" class="block mb-2 text-sm font-medium">Nombre</label>
    <input type="text" id="name" name="name" value="@isset($project) {{ $project->name }} @endisset" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 ">
</div>
<div class="mb-6">
    <label for="budget" class="block mb-2 text-sm font-medium">Presupuesto</label>
    <input type="text" id="budget" name="budget" value="@isset($project) {{ $project->budget }} @endisset" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 ">
</div>

<div class="mb-6">
    <label for="user" class="block mb-2 text-sm font-medium">Usuario</label>
    <select id="user" name="user" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 ">
        <option @empty($project) selected @endempty>Choose a user</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}" @if(isset($project) && $project->user->id === $user->id) selected @endif>{{ $user->name }}</option>    
        @endforeach
      </select>
</div>

<div class="mb-6">
    <label for="city" class="block mb-2 text-sm font-medium">Ciudad</label>
    <select id="city" name="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 ">
        <option @empty($project) selected @endempty>Choose a country</option>
        @foreach ($cities as $city)
            <option value="{{ $city->id }}" @if(isset($project) && $project->city->id === $city->id) selected @endif>{{ $city->name }}</option>    
        @endforeach
      </select>
</div>

<div class="mb-6">
    <label for="company" class="block mb-2 text-sm font-medium">Compañia</label>
    <select id="company" name="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 ">
        <option @empty($project) selected @endempty>Choose a company</option>
        @foreach ($companies as $company)
            <option value="{{ $company->id }}" @if(isset($project) && $project->company->id === $company->id) selected @endif>{{ $company->name }}</option>    
        @endforeach
      </select>
</div>

<button type="submit" class="uppercase text-white bg-yellow-500 hover:bg-yellow-600 font-bold rounded-lg text-xs px-5 py-2.5">Submit</submit>