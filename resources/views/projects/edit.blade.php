@extends('layouts.app')

@section('content')

    <h1 class="text-2xl mb-5">Registro de proyecto</h1>

    <div class="w-96">
        <form action="{{ route('project.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
            @include('projects._form')
        </form>
    </div>

@endsection()