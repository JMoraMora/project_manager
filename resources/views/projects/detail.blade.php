@extends('layouts.app')

@section('content')

    <h1 class="text-2xl mb-5">Detalle del proyecto</h1>

    <dl class="max-w-md text-gray-900 divide-y divide-gray-200">
        <div class="flex flex-col pb-3">
            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nombre del proyecto</dt>
            <dd class="text-lg font-semibold">{{ $project->name }}</dd>
        </div>
        <div class="flex flex-col py-3">
            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Presupuesto</dt>
            <dd class="text-lg font-semibold">{{ $project->budget }}</dd>
        </div>
        <div class="flex flex-col pt-3">
            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Fecha de execucion</dt>
            <dd class="text-lg font-semibold">{{ $project->execution_date }}</dd>
        </div>
    </dl>

@endsection()