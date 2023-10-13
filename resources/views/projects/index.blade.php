@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center">
        <h1 class="text-2xl my-4">Proyectos</h1>
        <div>
            <a href="{{ route('project.create') }}" class="uppercase text-white bg-yellow-500 hover:bg-yellow-600 font-semibold rounded-lg text-xs px-5 py-2.5">New Project</a>
        </div>
    </div>

    <div class="overflow-x-auto">

        <table class="w-full text-sm text-left border-collapse border border-slate-500">
            <thead class="text-xs uppercase bg-orange-400 text-gray-800">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        presupuesto
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ciudad
                    </th>
                    <th scope="col" class="px-6 py-3">
                        empresa
                    </th>
                    <th scope="col" class="px-6 py-3">
                        actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr class="bg-white border-b dark:border-gray-700">
                        <td scope="row" class="px-6 py-4">
                            <div class="text-base font-semibold">{{ $project->name }}</div>
                            <div class="font-normal text-gray-500">{{ $project->user->name }}</div>
                        </td>
                        <td class="px-6 py-4">{{ $project->budget }}</td>
                        <td class="px-6 py-4">{{ $project->city->name }}</td>
                        <td class="px-6 py-4">{{ $project->company->name }}</td>
                        <td class="px-6 py-4">
                            <div class="flex flex-row items-center">
                                <a href="{{ route('project.edit', $project) }}" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-xs px-5 py-2.5 mr-2">Editar</a>
                                <form action="{{ route('project.destroy', $project) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-xs px-5 py-2.5">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="my-5">
        {{ $projects->links() }}
    </div>
@endsection()
